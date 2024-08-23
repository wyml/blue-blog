<div class="box-border">
    <x-blog-nav />

    @php
    function markdown2html(String $value)
    {
    $html = (new \Parsedown())->text($value);
    return $html;
    }
    @endphp

    <div class="container mx-auto lg:w-1/2 space-y-2" style="margin-top: 12px;">


        @foreach ($articleList as $article)

        @if ($article->type == 0)
        <div class="p-10 bg-white hover:shadow">
            <div class="font-black text-2xl leading-11 text-indigo-600">
                <a href="{{route('article.info',['id'=>$article->id])}}">{{ $article->title }}</a>
            </div>
            <div class="text-gray-400 text-sm flex justify-start items-center mt-1 my-4">
                <div>发表时间：{{ $article->created_at }}</div>
            </div>
            <div class="line-clamp-3 text-[#93a2ce]">
                {{ $article->content }}
            </div>
        </div>
        @elseif ($article->type == 1)
        <div class="p-10 bg-indigo-200/50 hover:shadow text-lg space-y-4">
            <div class="text-sm text-gray-500">随心贴</div>
            <div>{!! markdown2html($article->content) !!}</div>
            <div class="text-sm text-gray-500">
                发表时间：{{ $article->created_at }}
            </div>
        </div>
        @endif
        @endforeach

        {{ $articleList->links()}}
    </div>

</div>
