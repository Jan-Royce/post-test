<?php

namespace App\Http\Livewire\Dashboard;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

use App\Events\NewPostEvent;
use App\Models\Post;

class NewPost extends Component
{
    //NOTE: post types: text, image, video, link, ...
    public $content = "";
    public $type = "text";

    public function mount()
    {

    }

    public function submit()
    {
        Post::create([
            'content' => $this->content,
            'type' => $this->type,
            'user_id' => Auth::id()
        ]);

        // $this->emit('new_post');
        event(new NewPostEvent);
        $this->reset();
    }

    public function render()
    {
        return view('livewire.dashboard.new-post');
    }
}
