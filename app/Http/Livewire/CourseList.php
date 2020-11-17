<?php

namespace App\Http\Livewire;

use App\Models\Course;
use Livewire\Component;

class CourseList extends Component
{
    public function render()
    {
        return view('livewire.course-list', [
            'courses' => Course::latest()->with('user')->take(9)->get()
        ]);
    }
}
