<div class="box-border">
    <x-blog-nav />

    <div class="font-black text-4xl leading-11 mt-24 container mx-auto mb-12 text-indigo-600">
        <a href="{{route('article')}}">{{ $article->title }}</a>
    </div>
    <div class="text-gray-400 text-sm container mx-auto flex justify-start items-center mt-1 my-4 space-x-4">
        <div>发表时间：{{ $article->created_at }}</div>
        <div>&dot;</div>
        <div>最后更新时间：{{ $article->updated_at }}</div>
    </div>

    <div class="container mx-auto" style="margin-top: 12px;">
        <div class="p-10 bg-white shadow-xl shadow-indigo-300/10 w-auto">
            <div class="text-[#93a2ce] prose md:prose-lg lg:prose-xl prose-headings:text-indigo-600 prose-code:text-pink-500 prose-code:bg-gray-100 prose-code:p-1 prose-code:rounded-md prose-code:border prose-code:border-gray-200 prose-pre:p-0 prose-pre:bg-gray-100 prose-pre:overflow-x-auto prose-pre:rounded-md prose-pre:border prose-pre:border-gray-200 prose-pre:shadow-none prose-pre:text-sm">
                {!! $article->content !!}
            </div>
        </div>

        <!-- <x-chat :id="$article->id"></x-chat> -->
    </div>

</div>
