@extends('layouts.default')
@push('scripts')
	<script src="{{asset('js/app.js')}}"></script>
    <script src="{{asset('js/broadcast.js')}}"></script>
@endpush
@section('title', 'Welcome Znavi Project')
@section('sidebar')
	@parent
@endsection
@section('content')
<div class="links">
    <a href="{{ url('/login') }}">Login</a>
    <a href="https://laracasts.com">Laracasts</a>
    <a href="https://laravel-news.com">News</a>
    <a href="https://forge.laravel.com">Forge</a>
    <a href="https://github.com/laravel/laravel">GitHub</a>
</div>
@endsection