<?php

namespace App\Http\Controllers;

use Session;
use Validator;
use Auth;
use Illuminate\Http\Request;
use App\AdminModel;

class AdminController extends Controller
{
    function index()
    {
     return view('admin/login');
    }

    function checklogin(Request $request)
    {
         $this->validate($request, [
          'email'   => 'required|email',
          'password'  => 'required|min:3'
         ]);

         $user_data = array(
          'email'  => $request->get('email'),
          'password' => $request->get('password')
         );

        if(Auth::attempt($user_data))
        {
            return redirect('/dashboard');
        }
        else
        {
        return back()->with('error', 'Wrong Login Details');
        }

    }

   
    function logout()
    {
        Auth::logout();
        return redirect('/login');
    }

}