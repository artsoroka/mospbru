
	<h1>Please Login</h1>

	@if( isset($myvar) )
		{{{ $myvar }}}
	@endif
	
	<form action="/login" method="POST">
		<input type="text" name="login" />
		<input type="password" name="password" />
		<input type="submit" name="login_form">Login</input>
	</form>
