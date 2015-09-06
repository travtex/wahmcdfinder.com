@extends('layouts.wahm')

@section('title')
	Login
@stop

@section('content')
	<h1>Login Page</h1>

	<form action="/auth/login" method="POST">
		{!! csrf_field() !!}

		<div>
			Email
			<input type="email" name="email" value="{{ old('email') }}">
		</div>

		<div>
			Password
			<input type="password" name="password" id="password">
		</div>

		<div>
			<input type="checkbox" name="remember"> Remember Me
		</div>

		<div>
			<button type="submit">Login</button>
		</div>

	</form>

@stop