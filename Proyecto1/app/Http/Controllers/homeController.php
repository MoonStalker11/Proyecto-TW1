<?php

namespace App\Http\Controllers;

//use App\Http\Controllers\Controller;
//use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class homeController extends Controller
{
    public function index(){
        if(!Auth::check()){
            return view('welcome');
        }
        return view('panel.index');
    }
}
