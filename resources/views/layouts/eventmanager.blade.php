<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, user-scalable=yes, maximum-scale=1, minimum-scale=1">
        <title>event manager | @yield('title')</title>
        <link rel="stylesheet" href="{{ asset('assets/css/html5reset-1.6.1.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    </head>
    <body>
        <div class="container">
            <header class="header">
                <div class="header_left">
                    <h1 class="header_title"><a href="{{ route('index') }}" class="header_titlelink">event manager</a></h1>
                    <a href="{{ route('add') }}" class="header_link">投稿する</a>
                </div>
                <div class="header_right">
                    <p class="header_right_welcome">ようこそ</p>
                    @if (Auth::check())
                        <p>{{$user->name . '様'}}</p>
                        <a href="{{ route('logout') }}" class="header_link">ログアウト</a>
                    @else
                        <p>ゲスト様</p>
                        {{-- <a href="auth" class="header_link">ログイン</a> --}}
                        <a href="{{ route('login') }}" class="header_link">ログイン</a>
                    @endif
                    
                </div>
                @yield('header')
            </header>

            @yield('content')
        </div>
    </body>
</html>