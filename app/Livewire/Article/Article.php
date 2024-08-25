<?php

namespace App\Livewire\Article;

use App\Models\Article as ModelsArticle;
use Livewire\Component;
use Livewire\WithPagination;
use Livewire\Attributes\Title;

class Article extends Component
{
    use WithPagination;

    public $articleList = [];

    public $header = '文章';

    #[title('文章管理')]
    public function render()
    {
        return view('livewire.article.article', [
            'posts' => ModelsArticle::latest()->paginate(10)
        ]);
    }

    public function delete($id)
    {
        ModelsArticle::find($id)->delete();
        session()->flash('status', '删除成功！');
    }
}
