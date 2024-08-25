<div class="box-border p-10">
    <div>
        <div class="font-light text-lg border-b pb-3 flex items-center gap-4">
            <x-application-mark class="block h-9 w-auto" />
            <div>
                <div class="text-3xl"> 欢迎回来! <span class="font-bold">{{ auth()->user()->name }}! </span></div>
                <div>今天也是元气满满的一天，有什么需要记录的吗？</div>
            </div>
        </div>
        <div class="flex justify-around items-center mt-4 w-full border-b pb-3 mb-4">
            <div class="flex-1">
                文章
                <div class="font-bold text-5xl text-indigo-500">{{ $article_count }}</div>
            </div>
            <div class="flex-1">
                页面
                <div class="font-bold text-5xl text-orange-500">{{ $page_count }}</div>
            </div>
            <div class="flex-1">
                评论
                <div class="font-bold text-5xl text-pink-500">NA</div>
            </div>
        </div>
        <div class="border-b pb-6">
            <div class="mb-3">⚡️ 从以下可能中快速开始！</div>
            <div class="space-x-4">
                <a class="px-4 py-2 bg-indigo-500 text-white rounded" href="{{ route('article.create') }}">创建文章</a>
                <a class="px-4 py-2 bg-pink-500 text-white rounded" href="{{ route('pages.create') }}">创建页面</a>
                <a class="border-b-2 text-indigo-500 py-2 px-4 border-dashed border-indigo-500" target="_blank" href="https://landonblue.cn">二次开发</a>
            </div>
        </div>
        <div class="py-3 space-x-4 text-gray-400">
            <span>PHP 版本：{{ phpversion() }}</span>
            <span>Laravel 版本：{{ app()::VERSION }}</span>
            <span>BlueBLOG 版本：0.0.1</span>
            <a href="https://github.com/wyml/blue-blog" target="_blank"><img src="https://img.shields.io/github/last-commit/wyml/blue-blog" alt="LAST COMMIT"></a>
        </div>
    </div>
</div>
