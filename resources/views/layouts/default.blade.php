<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" media="none" onload="this.media='all'">
        <link rel="stylesheet" href="/assets/css/stylesheet.min.css">
        <title>@yield('title', 'Blog') - Laravel | E&F</title>
    </head>
    <body class="page-index">
        <div class="container">
            <header class="mainHeader">
                <div class="wrapper flex">
                <a href="{{ url('/') }}" class="logo">E&F Blog</a>
                    <nav>
                        <ul>
                            <li><a href="{{ route('about') }}"{!! request()->routeIs('about') ? ' class="is-active"' : '' !!}>O nas</a></li>
                            <li><a href="#">Wesprzyj Fisia</a></li>
                            <li><a href="#">Zaloguj się</a></li>
                            <li><a href="#">Kontakt</a></li>
                            <li><a href="#">RSS <i class="fa fa-rss-square"></i></a></li>
                        </ul>
                    </nav>
                    <form action="#" class="search">
                        <div class="form-fieldset">
                            <input type="text" class="form-field" placeholder="Szukaj...">
                        </div>
                    </form>
                </div>
            </header>
            <section class="mainContent">
                {{-- główny content --}}
                @yield('content')
            </section>
            <footer class="mainFooter">
                <div class="wrapper">
                    <p>&copy; {{ date('Y') }} E&F Blog</p>
                    <nav>
                        <ul>
                            <li><a href="{{ route('about') }}">About me</a></li>
                            <li><a href="#">Login</a></li>
                            <li><a href="#">Contact</a></li>
                            <li><a href="#">RSS</a></li>
                        </ul>
                    </nav>
                    <p class="author">All rights reserved <a href="{{ url('/') }}">E&F Blog</a></p>
                </div>
            </footer>
        </div>
    </body>
</html>

