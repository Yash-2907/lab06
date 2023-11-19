<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        return view("aboutus");
    }

    public function contact() {
        return view('contact', [
            "name" => "YASHHHHH"
        ]);
    }

    public function create() {
        return "Success";
    }
}
