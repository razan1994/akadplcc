<?php

namespace App\Livewire\Courses;

use App\Models\Course;
use App\Models\CourseSection;
use Livewire\Component;

class CourseSections extends Component
{

    public $id;
    public $course;
    public $selectedSection;


    public function mount()
    {
        $course = Course::with(['sections', 'studentSections'])->find($this->id);
        $this->course = $course;
        $this->selectedSection = $course->sections->first();
    }

    public function changeSection($id)
    {
        $this->selectedSection = CourseSection::find($id);
    }

    public function toggleWatched($id)
    {
        $id = decrypt($id);
        // $section = CourseSection::findOrFail($id);
        // $section->update(['is_watched' => !$section->is_watched]);

        // i will use the student section table to update the watched status
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
        return view('livewire.courses.course-sections', [
            'sections' => $this->course->sections,
        ]);
    }
}
