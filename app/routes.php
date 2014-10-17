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

Route::get('/', array('as' => 'home', 'uses' => 'HomeController@showWelcome'));


/*
|-----------------------------------------------------------------------
| User
|-----------------------------------------------------------------------
*/

Route::controller('users', 'UserController');

/*
|-----------------------------------------------------------------------
| Groups
|-----------------------------------------------------------------------
*/

Route::resource('groups', 'GroupController');



/*
|-----------------------------------------------------------------------
| Testing
|-----------------------------------------------------------------------
*/

Route::get('/random', function()
{
	$random = date('Yms') . rand(10*45, 19*98);
	return $random;
});