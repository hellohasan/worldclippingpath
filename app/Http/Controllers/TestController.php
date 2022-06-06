<?php

namespace App\Http\Controllers;

use App\Models\BasicSetting;

class TestController extends Controller
{
    public function __invoke()
    {
        $data['page_title'] = 'Bade Test';
        $data['basic'] = BasicSetting::first();
        $data['countries'] = [
            '1' => 'Belgium',
            '2' => 'France',
            '3' => 'The Netherlands',
        ];

        return view('backend.settings.basic-content2', $data);
    }
}
