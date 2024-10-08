<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        编辑文章 - {{ $article->title }}
    </h2>
</x-slot>

<div class="py-12">
    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8 bg-white">
        <form action="post" class="flex flex-col gap-4" wire:submit="save">
            <div class="flex justify-between items-center gap-2">
                <label for="title">标题</label>
                <input wire:model="title" class="flex-1 rounded border-2" type="text" name="title" id="title" />
            </div>

            <div class="flex justify-between gap-2">
                <label for="content">内容</label>
                <div class="flex-1 rounded border-2" id="markdown-container"></div>
            </div>

            <div class="flex justify-start items-center gap-2">
                <label for="type">类型</label>
                <select name="type" class="w-full border-2 rounded flex-1" id="type" wire:model="type">
                    <option value="0">文章</option>
                    <option value="1">随心贴</option>
                </select>
            </div>

            <div class="flex justify-end">
                <button class="py-2 px-4 text-white rounded bg-indigo-600" type="submit">{{ __('actions.submit') }}</button>
            </div>
        </form>
    </div>
</div>

@assets
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/cherry-markdown@0.8.46/dist/cherry-markdown.min.css" integrity="sha256-gZuP4O9MLsU4nvtnUuOY9hRSWZcTXq0v0qNq2/dVFQQ=" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/cherry-markdown@0.8.46/dist/cherry-markdown.min.js" integrity="sha256-5zlqB0Ul0L4WlqnWOX+bJePEBPGWwIguyur+hrY7KHE=" crossorigin="anonymous"></script>
@endassets

<script>
    function fileUploadFunc(file, callback) {
        const formData = new FormData();
        formData.append('file', file);
        formData.append('_token', '{{ csrf_token() }}');

        fetch("{{ route('fileupload') }}", {
                method: 'POST',
                body: formData
            }).then(res => res.json())
            .then((json) => {
                console.log(json)
                callback(json.url)
            })
    }
</script>

@script
<script>
    new Cherry({
        id: 'markdown-container',
        value: $wire.content,
        fileUpload: fileUploadFunc,
        callback: {
            afterChange: function(md, html) {
                $wire.content = md;
            }
        }
    });
</script>
@endscript
