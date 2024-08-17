<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Chat extends Component
{
    public $id;
    public $chats;

    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    public function mount($id = null)
    {
        if ($id) {
            $this->id = $id;
            $this->chats = \App\Models\Chat::where('article_id', $id)->get();
        }
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.chat');
    }
}
