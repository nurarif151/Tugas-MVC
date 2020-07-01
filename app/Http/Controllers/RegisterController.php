<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{

    public function index()
    {

        return view('index');
    }

    public function daftar()
    {
        return view('daftar');
    }

    public function welcome1()
    {

        return view('welcome1');
    }
}