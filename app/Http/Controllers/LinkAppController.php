<?php

namespace App\Http\Controllers;

class LinkAppController extends Controller
{
    public function index()
    {
        return view('link.index');
    }

    public function myLinks()
    {
        return view('link.own');
    }
}
