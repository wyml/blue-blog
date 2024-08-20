<div class="box-border">
    <x-blog-nav />

    <div class="container mx-auto">
        <div class="flex flex-col lg:flex-row mt-3">
            <div class="w-full lg:w-1/2 mx-auto">
                <div class="p-10 bg-white shadow-xl shadow-indigo-300/10">
                    <div class="font-black text-5xl leading-11 text-indigo-600">
                        {{ $page->title }}
                    </div>
                    <div class="my-2 text-sm text-gray-400">
                        <span>发布时间:{{ $page->created_at }}</span>
                    </div>
                    <div class="prose md:prose-lg lg:prose-xl prose-headings:text-indigo-600 prose-code:text-pink-500 prose-code:bg-gray-100 prose-code:p-1 prose-code:rounded-md prose-code:border prose-code:border-gray-200 prose-pre:p-0 prose-pre:bg-gray-100 prose-pre:overflow-x-auto prose-pre:rounded-md prose-pre:border prose-pre:border-gray-200 prose-pre:shadow-none prose-pre:text-sm mt-12">
                        {!! $page->content !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
