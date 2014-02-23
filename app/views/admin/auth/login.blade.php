@extends('admin.base')

@section('login_form')
	<form action="/login" method="POST">
		<input type="text" name="username" />
		<input type="password" name="password" />
		<input type="submit" name="login_form">Login</input>
	</form>
@stop