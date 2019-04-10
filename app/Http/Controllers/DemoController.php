<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class DemoController extends Controller
{
    public function adminDemo(){
    	$userRoles = Auth::user()->roles->pluck('name');
        if (!$userRoles->contains('admin')){
            return redirect('/permission-denied');
        }
    	return view("admin");
    }

    public function userDemo(){
    	return ("hola user");
    }

    public function permissionDenied(){
    	return view('nopermission');
    }
}
