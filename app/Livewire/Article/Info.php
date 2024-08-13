<?php

namespace App\Livewire\Article;

use Livewire\Component;
use Livewire\Attributes\Layout;
use Parsedown;

class Info extends Component
{

    public $article;

    public function mount($id)
    {
        $this->article = \App\Models\Article::find($id);
        $this->article->content = (new Parsedown())->text($this->article->content);
    }

    #[layout('layouts.guest')]
    public function render()
    {
        return view('livewire.article.info')->title($this->article->title . ' - LandonBlue');
    }
}
