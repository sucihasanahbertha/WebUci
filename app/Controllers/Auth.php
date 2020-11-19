<?php namespace App\Controllers;

class Auth extends BaseController
{

public function index() 
{ 
    return view('index');
} 

public function login() 
{
     return view('login');
}

public function register() 
{ 
    return view('register');
}

public function admin() 
{ 
    return view('admin');
} 


}