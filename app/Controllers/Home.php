<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('home');
    }
    public function policy()
    {
        return view('policy');
    }
    public function tos()
    {
        return view('tos');
    }
}
