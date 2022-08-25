<?php

namespace App\View\Components;

use App\Models\Post;
use Illuminate\View\Component;

class Allpost extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $posts;
    public function __construct(){
        $this->posts = Post::latest()->paginate(10);
    }
    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    

    public function render()
    {
        return view('components.post.index');
    }
}
