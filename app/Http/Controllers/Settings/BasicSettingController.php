<?php

namespace App\Http\Controllers\Settings;

use App\Http\Controllers\Controller;

class BasicSettingController extends Controller
{
    //

    public function basicContent()
    {
        $data['page_title'] = "Basic Content";
        return view('backend.settings.basic-content', $data);
    }
}
