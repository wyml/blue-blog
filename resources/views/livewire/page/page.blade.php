<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('Page') }}
    </h2>
</x-slot>

<div class="py-12 box-border">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="my-2">
            <a href="{{ route('pages.create') }}" class="bg-indigo-500 rounded-md text-white px-4 py-2">
                {{ __('Create') }}
            </a>
        </div>
        <div class="bg-white box-border text-left p-6 mt-6 overflow-hidden shadow-xl sm:rounded-lg">
            <table class="table-auto w-full border-slate-400 text-sm">
                <thead class="border-b bg-gray-200">
                    <tr>
                        <th class="w-10% p-4 font-bold text-center">序号</th>
                        <th class="p-4 font-bold">标题</th>
                        <th class="p-4 font-black">简介</th>
                        <th class="p-4 font-bold text-right">发表时间</th>
                        <th class="p-4 font-bold">操作</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($pageList as $page)
                    <tr class="hover:bg-gray-100">
                        <td class="p-4 text-gray-600 text-center">{{ $page->id }}</td>
                        <td class="p-4 text-gray-600">{{ $page->title }}</td>
                        <td class="p-4 text-gray-600">{{ $page->slug }}</td>
                        <td class="p-4 text-gray-600 text-right">{{ $page->created_at }}</td>
                        <td class="p-4 text-gray-600 text-left">
                            <div class="flex justify-start items-center gap-2 w-full">
                                <a href="{{ route('pages.edit',['id'=>$page->id]) }}" class="text-indigo-500" style="color: #6366f1;">
                                    {{ __('Edit') }}
                                </a>
                                <a href="javascript:;" wire:click="delete({{$page->id}})" wire:confirm="{{ __('Are you sure delete?') }}" class="text-red-500">
                                    {{ __('Delete') }}
                                </a>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

            {{ $pageList->links() }}

        </div>
    </div>
</div>
