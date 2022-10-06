<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\ServicePortfolio;
use App\Models\ServiceTestimonial;

class WelcomeController extends Controller
{
    public function index()
    {
        $data['page_title'] = 'Welcome Page';
        $data['services'] = Service::with('media')->whereStatus(true)->whereFeatured(true)->get();
        $data['portfolios'] = ServicePortfolio::orderByDesc('id')
            ->with(['media', 'service:id,title'])
            ->inRandomOrder()
            ->take(9)
            ->get();
        $data['testimonials'] = ServiceTestimonial::with('media')->get();

        return view('frontend.home', $data);
    }

    public function howToWork()
    {
        $data['page_title'] = 'How we Work';

        return view('frontend.how-work', $data);
    }

    public function freeTrial()
    {
        $data['page_title'] = "Free Trial";
        return view("frontend.free-trial", $data);
    }
}
