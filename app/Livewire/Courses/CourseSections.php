<?php

namespace App\Livewire\Courses;

use App\Mail\MyEmail;
use App\Models\Course;
use App\Models\CourseSection;
use App\Models\Student;
use App\Models\StudentCourse;
use App\Models\StudentEducation;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class CourseSections extends Component
{

    public $id;
    public $course;
    public $selectedSection;
    public $percentage;
    public $student;
    public $studentCourse;
    public $isEmailSent = false;


    public function mount()
    {
        $course = Course::with(['sections', 'studentSections'])->find($this->id);
        $this->course = $course;
        $this->selectedSection = $course->sections->first();
        $this->student = auth('student')->user();
        $this->studentCourse = StudentCourse::where('student_id', $this->student->id)
            ->where('course_id', $this->course->id)
            ->first();
    }

    public function changeSection($id)
    {
        $this->selectedSection = CourseSection::find($id);
    }

    public function toggleWatched($id)
    {
        $id = decrypt($id);
        $section = $this->course->studentSections->where('section_id', $id)
            ->where('student_id', auth('student')->id())
            ->first();
        if (!$section) {
            // create new record
            $this->course->studentSections()->create([
                'student_id' => auth('student')->id(),
                'section_id' => $id,
                'is_watched' => true,
            ]);
        } else {
            // update the record
            $section->update(['is_watched' => !$section->is_watched]);
        }
    }

    public function render()
    {
        $this->percentage = round(($this->course->studentSections->sum('is_watched') / $this->course->sections->count()) * 100, 2);
        // update the progress in the pivot table
        $this->course->students()->updateExistingPivot($this->student->id, ['progress' => $this->percentage]);


        // check if the course is finished for the student, add the course to the cv automatically and send an email to the student
        if ($this->percentage == 100) {
            // add the course to the student's education
            StudentEducation::updateOrCreate([
                'student_id' => $this->student->id,
                'section' => $this->course->title_en,
            ], [
                'institution_name' => 'Kanaf',
                'section' => $this->course->title_en,
                'degree' => 'Certificate',
                'from_date' => $this->studentCourse->created_at->format('Y-m-d'),
                'to_date' => now()->format('Y-m-d'),
            ]);

            if (!$this->isEmailSent) {
                Mail::to($this->student->email)->send(new MyEmail(
                    'Course Completed',
                    "You have completed the course '" . $this->course->title_en . "' successfully"
                ));
                $this->isEmailSent = true;
            }
            // send an email to the student just once
        } else {
            StudentEducation::where('student_id', $this->student->id)
                ->where('section', $this->course->title_en)
                ->delete();

            $this->isEmailSent = false;
        }

        return view('livewire.courses.course-sections', [
            'sections' => $this->course->sections,
        ]);
    }
}
