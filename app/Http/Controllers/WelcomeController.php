<?php

namespace App\Http\Controllers; use Illuminate\Http\Request;
class WelcomeController extends Controller
{

    public function hello(){ return('Hello World');
    }
        
    public function greeting(){ return view('blogs.hello')
    ->with('name','Christian Fernando')
    ->with('occupation','Astronaut');
    }
}
        
