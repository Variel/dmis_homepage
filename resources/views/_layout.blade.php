<!doctype html>
@php
if (!isset($url)) {
    $url = '';
}
@endphp
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>DIMS Laboratory</title>

        <!-- Fonts -->
        <link href="//fonts.googleapis.com/earlyaccess/notosanskr.css" rel="stylesheet" type="text/css">
        <link href="/css/site.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <div class="topbar">
            <div class="container">
                <a href="/"><img class="logo" src="/img/logo.png"/></a>
                <ul class="menu">
                    <li class="{{$url === 'home' ? 'active' : ''}}"><a href="/">Home</a></li>
                    <li class="{{$url === 'people' ? 'active' : ''}}"><a href="/people">People</a></li>
                    <li class="{{$url === 'research' ? 'active' : ''}}"><a href="/research">Research</a></li>
                    <li class="{{$url === 'publications' ? 'active' : ''}}"><a href="/publications">Publications</a></li>
                    <li class="{{$url === 'seminar' ? 'active' : ''}}"><a href="/seminar">Seminar</a></li>
                    <li class="{{$url === 'course' ? 'active' : ''}}"><a href="/course">Course</a></li>
                    <li class="{{$url === 'alumni' ? 'active' : ''}}"><a href="/alumni">Alumni</a></li>
                    <li class="{{$url === 'about' ? 'active' : ''}}"><a href="/about">About</a></li>
                </ul>
            </div>
        </div>
        <div class="content">
            @yield('content')
        </div>
        <footer>
            Adress : Office 501B, Woojung Information Building, Korea University, 145 Anam-ro, Seongbuk-gu, Seoul, Republic of Korea 02841(136-713)  Tel : +82-2-3290-3566<br>
            Copyright © 2017, By Data Mining & Information Systems Laboratory, Department of Information and Communications, Korea University, All Rights Reserved.
        </footer>
    @yield('scripts')
    </body>
</html>
