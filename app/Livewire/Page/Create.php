<?php

namespace App\Livewire\Page;

use Livewire\Component;

class Create extends Component
{
    public $title;
    public $slug;
    public $content;

    public function save()
    {
        $page = new \App\Models\Page;
        $page->title = $this->title;
        $page->slug = $this->slug;
        $page->content = $this->content;
        $page->save();

        session()->flash('status', '创建成功！');

        return $this->redirect(route('pages'));
    }

    public function render()
    {
        return view('livewire.page.create');
    }
}
