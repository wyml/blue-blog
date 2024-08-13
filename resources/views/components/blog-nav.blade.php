<nav style="height: 100px;" class="bg-white w-full flex items-center">
    <div class="container mx-auto text-indigo-600 font-bold flex justify-between items-center">
        <div>
            <a href="{{route('home')}}">LandonBlue</a>
        </div>
        <div>
            <ul class="list-none flex gap-4 text-indigo-300 ">
                <li @class([
                    'text-indigo-600'=> Route::currentRouteName() == 'home'
                    ]) class="hover:text-indigo-600">
                    <a  href="{{route('home')}}">首页</a>
                </li>
                <li class="hover:text-indigo-600">
                    <a href="{{route('article')}}">归档</a>
                </li>
                @auth
                <li class="hover:text-indigo-600">
                    <a href="{{route('dashboard')}}">{{ __('Dashboard') }}</a>
                </li>
                @endauth
            </ul>
        </div>
    </div>
</nav>
