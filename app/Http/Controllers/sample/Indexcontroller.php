<?php

namespace App\Http\Controllers\sample;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Indexcontroller extends Controller
{
    public function show(){
        return "Hello";
    }
}
