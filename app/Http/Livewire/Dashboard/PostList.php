<?php

namespace App\Http\Livewire\Dashboard;

use Livewire\Component;

use App\Models\Post;

class PostList extends Component
{
    public $posts;
    protected $listeners = [
        'new_post' => 'render'
    ];

    public function mount()
    {
        $this->posts = Post::all()->sortByDesc('created_at');
    }

    public function render()
    {
        $this->posts = Post::all()->sortByDesc('created_at');
        return view('livewire.dashboard.post-list');
    }
}
