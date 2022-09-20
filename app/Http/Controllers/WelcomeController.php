<?php

namespace App\Http\Controllers;

class WelcomeController extends Controller
{
    public function index()
    {
        $data['page_title'] = 'Welcome Page';

        return view('welcome', $data);
    }
}
