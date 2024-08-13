<?php

namespace App\Livewire\Article;

use App\Models\Article;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Create extends Component
{
    public $title = "";
    public $content = "";

    public function save()
    {
        Article::create(
            ["title" => $this->title, "content" => $this->content, 'user_id' => Auth::id()]
        );

        session()->flash('status', '创建成功！');

        return $this->redirect('/article');
    }

    public function render()
    {
        return view('livewire.article.create');
    }
}
