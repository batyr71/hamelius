<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class HomeController extends Controller
{
    //Редирект пользователей
    public function index()
    {
        if(Auth::check()){

            if(Auth::user()->isadmin){
                
                return redirect( '/admin');
                
            } else {
                
                return redirect('/user');
            }
        } 
        
        else {
            
            return redirect('/login');
        
        }
    }
}
