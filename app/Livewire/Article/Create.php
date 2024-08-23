<?php

namespace App\Livewire\Article;

use App\Models\Article;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\Attributes\Title;

class Create extends Component
{
    public $title = "";
    public $content = "";
    public $type = 0;

    public function save()
    {
        if ($this->type == 1) {
            $this->title = '随心贴-' . $this->content;
        }
        Article::create(
            ["title" => $this->title, "content" => $this->content, "type" => $this->type, 'user_id' => Auth::id()]
        );

        session()->flash('status', '创建成功！');

        return $this->redirect('/admin/article');
    }

    #[title('创建文章')]
    public function render()
    {
        return view('livewire.article.create');
    }
}
