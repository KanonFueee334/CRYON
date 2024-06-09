<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    //Show Dashboard Page For Admin
    public function index(){
        return view('admin.dashboard');
    }
}