<?php

namespace App\Http\Controllers;

use Artisan;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        return view('welcome');
    }

    public function optimize(Request $request){
        Artisan::call('optimize');
        return 'Optimized & storage linked';
    }
}
