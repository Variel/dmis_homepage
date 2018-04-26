@extends('_layout')

@section('content')
    <div class="page-news">
        <div class="container">
            <div class="content">
                <h2>@yield('news-title')</h2>
                <div class="news-content">
                    @yield('news-content')
                </div>
            </div>
        </div>
    </div>
@endsection