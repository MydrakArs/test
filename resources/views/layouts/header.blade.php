<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>MusicCharts</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    
    
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('home') }}">
                        MusicCharts
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                            <li class="noty" onclick="showNoty()">
                                <a href="/notifications" class="noty-a">
                                    <img src="{{URL::asset('/images/ringer.svg')}}">
                                    <unreadnots></unreadnots>
                                    <div class="noty-ul" id="noty-ul">
                                        <h2>Ваши уведомления</h2>
                                        <ul>
                                            {{-- @foreach ($nots as $not)
                                                <li>
                                                    {{ $not->data['name'] }} &nbsp; {{ $not->data['message'] }}
                                                </li>
                                            @endforeach --}}
                                        </ul>
                                    </div>
                                </a>
                                <notification :id="{{ Auth::id() }}"></notification>
                                <audio id="noty_audio">
                                    <source src="{{ asset('audio/tone.mp3') }}">
                                </audio>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ route('profile', ['id' => Auth::user()->id]) }}">
                                            Мой профиль
                                        </a>
                                    </li> 
                                    <li>
                                        <a href="{{ route('profile.edit') }}">
                                            Настройки
                                        </a>
                                    </li>  
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Выйти
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>

        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{asset('/js/noty.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('/js/noty.js')}}" type="text/javascript"></script>

    <script>
        // function showNoty() {
        //     flag = 0;
        //     document.getElementById("noty-ul").style.display = "block";
        // }
    </script>
</body>
</html>