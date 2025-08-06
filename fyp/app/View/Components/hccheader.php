<?php

namespace App\View\Components;
use App\Models\healthcare_center;

use Illuminate\View\Component;

class hccheader extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $title;
    public $hcc_details;
    public function __construct($title)
    {
        //
        $this->hcc_details=healthcare_center::find(session()->get('hcc_id'));
        $this->title=$title;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.hccheader');
    }
}
