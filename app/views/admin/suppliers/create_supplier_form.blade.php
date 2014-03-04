@extends('admin.base')

@section('main')
	<h1>Create new supplier </h1>
	<form action="/admin/suppliers/new" method="POST">
		<input type="text" name="title" placeholder="title" />
		<br>
		<textarea class="span6" name="description"></textarea>
		<br>
		<input 	type="submit" 
				name="new_supplier_form" 
				class="btn btn-success"
				value="Добавить поставщика"
		/>
	</form>
	<form class="form-horizontal">
  <div class="control-group">
    <label class="control-label" for="inputEmail">Email</label>
    <div class="controls">
      <input type="text" id="inputEmail" placeholder="Email">
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" for="inputPassword">Password</label>
    <div class="controls">
      <input type="password" id="inputPassword" placeholder="Password">
    </div>
  </div>
  <div class="control-group">
    <div class="controls">
      <label class="controlls">
		<textarea class="span6" name="description"></textarea>
      </label>
      <button type="submit" class="btn">Sign in</button>
    </div>
  </div>
</form>
@stop 