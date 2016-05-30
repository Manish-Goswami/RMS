<?php

namespace App\Http\Controllers\users;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    /**
     *User will go to login page.
     */
    public function index(){
        //echo 'login page'; die();
        return view('login');
    }

    public function login(){

        echo '<pre>';
        print_r($_POST);
        
        die();

    }
}
