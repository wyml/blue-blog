<?php

namespace App\Livewire\Page;

use Livewire\Component;
use Livewire\Attributes\Layout;

class Info extends Component
{
    public $page;

    public function mount($slug)
    {
        $this->page = \App\Models\Page::where('slug', $slug)->first();
        $this->page->content = (new \Parsedown())->text($this->page->content);
    }

    #[layout('layouts.guest')]
    public function render()
    {
        return view('livewire.page.info')
            ->title($this->page->title . ' - ' . env('APP_NAME'));
    }
}
