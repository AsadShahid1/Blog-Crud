<?php

namespace App\View\Components;

use App\Models\Category;
use Illuminate\View\Component;

class Categories extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $categories;
    public $selectedId;
    public function __construct($selectedId = null)
    {
        $this->categories = Category::all();
        $this->selectedId = $selectedId;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.categories.dropdown');
    }
}
