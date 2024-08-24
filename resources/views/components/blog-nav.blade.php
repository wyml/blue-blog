<nav style="height: 100px;" class="bg-white w-full flex items-center">
    <div class="container mx-auto text-indigo-600 font-bold flex justify-between items-center">
        <div>
            <a href="{{route('home')}}" class="flex items-center gap-2">
                <img src="/logo.png" class="w-12 h-12 rotateOnHover" alt="LOGO">
                LandonBlue
            </a>
        </div>
        <div>
            <ul class="list-none flex gap-4 text-indigo-300 ">
                <li @class([ 'text-indigo-600'=> Route::currentRouteName() == 'home'
                    ,'hover:text-indigo-600'])>
                    <a href="{{route('home')}}">首页</a>
                </li>
                <li @class(['hover:text-indigo-600'])>
                    <a href="{{route('article')}}">归档</a>
                </li>
                @foreach ($pageList as $page)
                <li @class(['text-indigo-600'=>request()->routeIs('pages.info'),'hover:text-indigo-600']) >
                    <a href="{{route('pages.info',['slug'=>$page->slug])}}">{{$page->title}}</a>
                </li>
                @endforeach
                @auth
                <li class="hover:text-indigo-600">
                    <a href="{{route('dashboard')}}">{{ __('Dashboard') }}</a>
                </li>
                @endauth
            </ul>
        </div>
    </div>
</nav>
