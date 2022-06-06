<?php

namespace App\Http\Controllers;

use Auth;

class ProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function manageProfile()
    {
        $data['page_title'] = 'Manage Profile';
        $data['user'] = Auth::user();

        return view('profile.profile', $data);
    }
}
