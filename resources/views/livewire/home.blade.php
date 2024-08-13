<div class="box-border">
    <x-blog-nav />


    <div class="container mx-auto lg:w-1/2 space-y-2" style="margin-top: 12px;">
        @foreach ($articleList as $article)
        <div class="p-10 bg-white rounded-lg hover:shadow">
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
        @endforeach

        {{ $articleList->links()}}
    </div>

</div>
