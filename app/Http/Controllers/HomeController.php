<?php

namespace App\Http\Controllers;

use App\Models\Theme;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    static function index()
    {
        $themes = Theme::all();
        return view('homepage')->with(compact('themes'));
    }
}
