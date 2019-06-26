<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<link rel="shortcut icon" href=""/>
<header>
  <meta charset="UTF-8">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="description" content="">
  <meta name="keywords" content="@yield('key')">
  <meta name="author" content="">
  <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no" />
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  @yield('canonical')
<title>
    @yield('titles2')
    @yield('title') - PONDOK PESANTREN JOGJA BANTUL
    @yield('titles')
</title>

@yield('markup')

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', '            ', 'auto');
  ga('send', 'pageview');

</script>

  <style>
  
  
body, html {
    height: 100%;
}

  #baris1 {padding:20px;color: ; background-color: white}
  #baris2 {padding:20px;color: #fff; background: radial-gradient(circle, #00b300, #008000, #00b300);}
  #baris3 {padding:20px;height: ; background-color: white}
  #baris4 {padding:20px;height:;color: #fff;   background: radial-gradient(circle, #00b300, #008000, #00b300);border-bottom:white solid white;margin-bottom:1px;}

  #baris5 {padding:20px;height: ; background-color: white}
  #baris6 {padding-top:20px;height:;color: ; background: radial-gradient(circle, #00b300, #008000, #00b300);}
  </style>

</header>




<body data-spy="scroll" data-target=".navbar" data-offset="55">

<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                    
                    @foreach ($kategori as $kat)
                    
                    @if($kat->dataTipe->count() > 1 )
                    <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                  {{$kat->nama}} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <!-- semua data $tipe dicari dan dipisahkan berdasarkan colom kategori dengan nilai $kat->id dan semua ditampilkan-->
                                @foreach ($kat->dataTipe as $item)

                                <div>
                               <a href="{{url($kat->slug.'/'.$item->slug)}}" >{{$item->nama}} </a>
                                </div>

                                @endforeach
                                </div>
                    </li>
                    @else
                            @foreach ($kat->dataTipe as $item)
                             <li class="nav-item">
                                <a class="nav-link" href="{{url($kat->slug.'/'.$item->slug)}}">{{$kat->slug }}</a>
                            </li>
                              @endforeach
                    @endif
                @endforeach


                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

<div class="web">
<link rel="stylesheet" href="{{ asset('css/animations.css')}}" type="text/css">
</div>



<div id="baris1" class="container-fluid">

<main class="py-4">
            @yield('content')
        </main>
</div>

</body>
</html>
