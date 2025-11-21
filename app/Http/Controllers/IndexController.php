<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    static function index() {
    return view('index');
    }

    static function about() {
    return view('pages/about', ['pageTitle' => 'About Page']);
    }

    static function contactUs() {
    return view('pages/contactUs', ['pageTitle' => 'Contact Us Page']);
    }
}
