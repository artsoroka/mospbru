<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

App::error(function($exception, $code)
{
    switch ($code)
    {
        case 403:
            //return Response::view('errors.403', array(), 403);
        	return "it seems we've got some proplems "; 

        case 404:
            //return Response::view('errors.404', array(), 404);
        	return "it seems we've got some proplems "; 

        case 500:
            //return Response::view('errors.500', array(), 500);
        	return "it seems we've got some proplems "; 

        default:
            //return Response::view('errors.default', array(), $code);
        	return "it seems we've got some proplems "; 
    }
});

Route::get('/', function()
{
	return View::make('hello');
});

Route::get('login', function(){
    return View::make('admin.auth.login'); 
}); 

Route::post('login', function(){
    
        $rules = array(
            'username'    => 'required', // make sure the email is an actual email
            'password' => 'required' // password can only be alphanumeric and has to be greater than 3 characters
        );

        $validation = Validator::make(Input::all(), $rules);

        // if the validator fails, redirect back to the form
        if ($validation->fails()) {
            return Redirect::to('login')
                ->withErrors($validation) // send back all errors to the login form
                ->withInput(Input::except('password')); // send back the input (not the password) so that we can repopulate the form
        } else {

            // create our user data for the authentication
            $userdata = array(
                'username'     => Input::get('username'),
                'password'  => Input::get('password')
            );
            print_r($userdata); 
            // attempt to do the login
            if (Auth::attempt($userdata)) {

                echo 'SUCCESS!';

            } else {        
                echo "there is something... "; 
                //return Redirect::to('login');


            }

        }

}); 

Route::get('/userdata', function(){
	echo Auth::user(); 
});

Route::get('/users', function(){
        
    echo  User::all(); 
	return DB::table('users')->distinct()->get();
}); 
