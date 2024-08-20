<?php

namespace App\Livewire\Page;

use Livewire\Component;
use Livewire\Attributes\Title;

class Edit extends Component
{
    public $page;
    public $title;
    public $slug;
    public $content;

    public function mount($id)
    {
        $this->page = \App\Models\Page::find($id);
        $this->title = $this->page->title;
        $this->slug = $this->page->slug;
        $this->content = $this->page->content;
    }

    public function save()
    {
        $this->page->update([
            'title' => $this->title,
            'slug' => $this->slug,
            'content' => $this->content,
        ]);

        session()->flash('status', '保存成功！');
        return $this->redirect(route('pages'));
    }

    #[title('编辑页面')]
    public function render()
    {
        return view('livewire.page.edit');
    }
}
