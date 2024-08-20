<?php

namespace App\Livewire\Page;

use Livewire\Component;
use Livewire\Attributes\Title;
use Livewire\WithPagination;

class Page extends Component
{
    use WithPagination;

    #[title('页面管理')]
    public function render()
    {
        return view('livewire.page.page',[
            'pageList'=> \App\Models\Page::paginate(20),
        ]);
    }

    public function delete($id)
    {
        \App\Models\Page::find($id)->delete();
        session()->flash('status', '删除成功！');
    }
}
