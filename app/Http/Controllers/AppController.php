<?php

namespace App\Http\Controllers;

class AppController extends Controller
{
    /**
     * Show app install form
     */
    public function install() {
        return view('install');
    }
}
