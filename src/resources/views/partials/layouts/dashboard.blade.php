@extends('partials.layouts.base')
@section('title')
@yield('title')
@endsection

@section('header')
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.5.1/chart.min.js"></script>
@yield('header')
@endsection

@section('body')
<div x-data="{ menuOpen: false }" class="flex min-h-screen custom-scrollbar">


    @include('partials.dashboard.sidebar')

    <div class="lg:pl-64 w-full flex flex-col">
        @include('partials.dashboard.topbar')

        @yield('content')
    </div>
</div>
@yield('scripts')
@endsection