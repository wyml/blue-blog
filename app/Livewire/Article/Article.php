<?php

namespace App\Livewire\Article;

use App\Models\Article as ModelsArticle;
use Livewire\Component;
use Livewire\WithPagination;

class Article extends Component
{
    use WithPagination;

    public $articleList = [];

    public $header = '文章';

    public function render()
    {
        return view('livewire.article.article', [
            'posts' => ModelsArticle::paginate(10)
        ]);
    }

    public function delete($id)
    {
        ModelsArticle::find($id)->delete();
        session()->flash('status', '删除成功！');
    }
}
