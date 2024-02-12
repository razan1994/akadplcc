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
        $course = Course::find($this->id);
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
        $section = CourseSection::findOrFail($id);
        $section->update(['is_watched' => !$section->is_watched]);
    }

    public function render()
    {
        return view('livewire.courses.course-sections', [
            'sections' => $this->course->sections,
        ]);
    }
}
