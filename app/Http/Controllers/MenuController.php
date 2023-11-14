<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function index(){
        return  view('home');
        
    }
    public function showSearch(){
        return redirect(url('car'));
    }
    public function showFavorite(){
        return  view('myFavorite');
        
    }
    public function showMySearch(){
        return  view('mySearch');
    }
}
