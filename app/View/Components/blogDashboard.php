<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class blogDashboard extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $article_count = \App\Models\Article::count();
        $page_count = \App\Models\Page::count();
        return view('components.blog-dashboard',[
            'article_count' => $article_count,
            'page_count' => $page_count,
        ]);
    }
}
