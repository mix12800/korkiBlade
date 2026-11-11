<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class CoursesPage extends Component
{
    /**
     * Create a new component instance.
     */
    public $course;
    public $key;
    public function __construct($course, $key)
    {
        $this->course = $course;
        $this->key = $key;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.courses-page');
    }
}
