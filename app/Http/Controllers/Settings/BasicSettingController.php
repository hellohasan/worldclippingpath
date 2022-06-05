<?php

namespace App\Http\Controllers\Settings;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BasicSettingController extends Controller
{
    //

    public function basicContent()
    {
        $data['page_title'] = "Basic Content";

        return view('backend.settings.basic-content', $data);
    }

    /**
     * @param Request $request
     * @return mixed
     */
    public function updateBasicContent(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|email',
        ]);

        dd($request);
    }
}
