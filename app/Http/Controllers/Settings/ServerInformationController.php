<?php

namespace App\Http\Controllers\Settings;

use App\Http\Controllers\Controller;

class ServerInformationController extends Controller
{
    public function __construct()
    {
        $this->middleware(['role:Super Admin']);
    }

    public function getInformation()
    {
        $data['page_title'] = 'System Information';
        $data['laravel'] = app()->version();
        $data['server'] = $_SERVER;
        $data['php'] = phpversion();
        $data['timeZone'] = config('app.timezone');
        //dd($data);

        return view('backend.settings.system-information', $data);
    }
}
