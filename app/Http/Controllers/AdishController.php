<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdishController extends Controller
{
    public function index()
    {
        return view('{{ name }}');
    }
}
