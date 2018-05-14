@extends('layouts.default');
@push('scripts')
    <script src="/example.js"></script>
@endpush
@section('title', 'Login');
@section('sidebar')
	@component('components.authenticated_bar', ['customer' => 'Guest']);
		Let's, Login!
	@endcomponent
@endsection
@section('content')
<div class="links">
    <form action="{{ url('/login') }}" method="post">
    	{{ csrf_field() }}
    	<label>Email : </label><input type="text" name="email"/>
    	
    	<label>Password : </label><input type="password" name = "password"/>
    	
    	<input type="submit" value="Login"/>
    </form>
    @if(!empty($errors->all()))
	<span style="color:red">{{ $errors->all()[0] }}</span>
	@endif
</div>
@endsection