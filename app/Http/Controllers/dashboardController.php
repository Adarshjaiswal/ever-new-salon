<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class dashboardController extends Controller
{
    //show dashboard
    public function show(){
        return view('admin.dashboard');
    }
}
