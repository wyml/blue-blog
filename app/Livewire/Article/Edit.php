<?php

namespace App\Livewire\Article;

use App\Models\Article;
use Livewire\Component;
use Livewire\Attributes\Title;

class Edit extends Component
{
    public $id;
    public $title = '';
    public $content = '';
    public $type = 0;
    public $article;

    public function mount($id)
    {
        $this->id = $id;
        $this->article = Article::find($id);
        $this->title = $this->article->title;
        $this->content = $this->article->content;
        $this->type = $this->article->type;
    }

    public function save()
    {
        $this->article
            ->title = $this->title;
        $this->article
            ->content = $this->content;
        $this->article->save();

        session()->flash('status', '更新成功！');
        return $this->redirect('/admin/article');
    }

    #[title('编辑文章')]
    public function render()
    {
        return view('livewire.article.edit');
    }
}
