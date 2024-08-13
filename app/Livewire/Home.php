<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

class Home extends Component
{
    use WithPagination;

    #[layout('layouts.guest')]
    #[title('首页')]
    public function render()
    {
        return view('livewire.home', [
            'articleList' => \App\Models\Article::latest()->paginate(20)
        ]);
    }
}
