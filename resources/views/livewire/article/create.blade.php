<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        新建文章
    </h2>
</x-slot>

<div class="py-12">
    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8 bg-white">
        <form action="" class="flex flex-col gap-4" wire:submit.privent="save">
            <div class="flex justify-between gap-2">
                <label for="title">标题</label>
                <input wire:model="title" class="flex-1 rounded border-2" type="text" name="title" id="title" />
            </div>

            <div class="flex justify-between gap-2">
                <label for="content">内容</label>
                <textarea class="flex-1 rounded border-2" rows="15" name="content" id="content" wire:model="content"></textarea>
            </div>


            <div class="flex justify-end">
                <button class="py-2 px-4 text-white rounded bg-indigo-600" type="submit">{{ __('actions.submit') }}</button>
            </div>
        </form>
    </div>
</div>
