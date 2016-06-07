<?php

namespace SinBichos\Http\Controllers;

use Illuminate\Http\Request;

use Ideomatik\Http\Requests;

class FrontController extends Controller
{
    //
    public function index()
    {
        return view('welcome');
    }

    public function admin()
    {
        return view('admin.index');
    }

}
