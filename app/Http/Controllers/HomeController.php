<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Illuminate\Support\Facades\Input;
use Auth;
use App\Http\Requests;

class HomeController extends Controller
{
    public function showLogin()
{
    // show the form
    return View('auth\login');
}

    public function showRegister()
{
    // show the form
    return View('auth\register');
}

public function doLogin()
{
// validate the info, create rules for the inputs
$rules = array(
    'email'    => 'required|email', // make sure the email is an actual email
    'password' => 'required|alphaNum|min:3' // password can only be alphanumeric and has to be greater than 3 characters
);

// run the validation rules on the inputs from the form
$validator = Validator::make(Input::all(), $rules);

// if the validator fails, redirect back to the form
if ($validator->fails()) {
    return redirect()->intended('/');

        //->withErrors($validator) // send back all errors to the login form
        //->withInput(Input::except('password')); // send back the input (not the password) so that we can repopulate the form
} else {

    // create our user data for the authentication
    $userdata = array(
        'email'     => Input::get('email'),
        'password'  => Input::get('password')
    );

    // attempt to do the login
    if (Auth::attempt($userdata)) {

        // validation successful!
        // redirect them to the secure section or whatever
        // return Redirect::to('secure');
        // for now we'll just echo success (even though echoing in a controller is bad)
        //echo 'SUCCESS!';
       return redirect()->intended('/');

    } else {        

        // validation not successful, send back to form 
        return redirect()->intended('/');

    }

}
}

    public function doLogout(){

        Auth::logout(); // log the user out of our application
     return redirect()->intended('/');

    }
   public function authenticate()
    {

        if (Auth::attempt(['email' => $email, 'password' => $password])) {
            // Authentication passed...
            return redirect()->intended('dashboard');
        }
    }
}
