<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Hash;
use Illuminate\Support\facades\Auth;
use Illuminate\Support\facades\Redirect;


class PasswordController extends Controller
{
    public function index()
    {
       return view('passwordChange');
    }
    
    
    

    public function passwordUpdate(Request $req)

    {

        $password = Auth::user()->password;
        //$id = Auth::user()->id;
        $oldpass = $req->oldpass;
        if (Hash::check($oldpass, $password)) {
           $user = User::find(Auth::id());
           $user->password = Hash::make($req->password);
           $user->save();
           Auth::logout();
           return Redirect()->route('login')->with('successMsg', 'Password changed successfully');
        }else{
            return redirect()->back()->with('ErrorMsg', 'Old password does not matched');
        }
       
    }

   
}

