<?php

namespace App\View\Components;

use App\Models\users;
use Illuminate\View\Component;

class mainheader extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $title;
    public $user_details;
    public function __construct($title)
    {
        //
        $this->user_details=users::find(session()->get('user_id'));
        $this->title=$title;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.mainheader');
    }
}
