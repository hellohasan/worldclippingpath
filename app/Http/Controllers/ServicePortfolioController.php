<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\ServicePortfolio;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ServicePortfolioController extends Controller
{
    public function __construct()
    {
        $this->middleware('permission:service-portfolio', ['only' => ['index']]);
        $this->middleware('permission:service-portfolio-create', ['only' => ['create']]);
        $this->middleware('permission:service-portfolio-store', ['only' => ['store']]);
        $this->middleware('permission:service-portfolio-edit', ['only' => ['edit']]);
        $this->middleware('permission:service-portfolio-destroy', ['only' => ['destroy']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['page_title'] = 'Portfolio List';
        $data['portfolios'] = ServicePortfolio::with(['service:id,title', 'media'])->orderByDesc('id')->paginate(10);

        return view('backend.service-portfolio.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['page_title'] = 'Create Service Portfolio';
        $data['services'] = Service::orderByDesc('id')->select(['id', 'title as text'])->get();

        return view('backend.service-portfolio.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'service_id'   => 'required',
            'title'        => 'required',
            'before_photo' => 'required|mimes:png,jpg,jpeg',
            'after_photo'  => 'required|mimes:png,jpg,jpeg',
        ]);

        $in = $request->except(['_method', '_token', 'before_photo', 'after_photo']);
        $in['featured'] = $request->input('featured') == 'on' ? true : false;
        $in['status'] = $request->input('status') == 'on' ? true : false;

        $portfolio = ServicePortfolio::create($in);
        $slug = Str::slug($request->input('title'));

        if ($request->hasFile('before_photo')) {
            $filename = $slug . time() . '_before.' . $request->file('before_photo')->getClientOriginalExtension();
            $portfolio->addMediaFromRequest('before_photo')
                ->usingFileName($filename)
                ->withResponsiveImages()
                ->toMediaCollection('service-portfolio-before');
        }

        if ($request->hasFile('after_photo')) {
            $filename = $slug . time() . '_after.' . $request->file('after_photo')->getClientOriginalExtension();
            $portfolio->addMediaFromRequest('after_photo')
                ->usingFileName($filename)
                ->withResponsiveImages()
                ->toMediaCollection('service-portfolio-after');
        }

        return redirect()->back()->withToastSuccess('Portfolio Created Successfully');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ServicePortfolio  $servicePortfolio
     * @return \Illuminate\Http\Response
     */
    public function edit(ServicePortfolio $servicePortfolio)
    {
        $data['page_title'] = 'Edit Portfolio';
        $data['services'] = Service::orderByDesc('id')->select(['id', 'title as text'])->get();
        $data['portfolio'] = $servicePortfolio;

        return view('backend.service-portfolio.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ServicePortfolio  $servicePortfolio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ServicePortfolio $servicePortfolio)
    {
        $request->validate([
            'service_id'   => 'required',
            'title'        => 'required',
            'before_photo' => 'sometimes|mimes:png,jpg,jpeg',
            'after_photo'  => 'sometimes|mimes:png,jpg,jpeg',
        ]);

        $in = $request->except(['_method', '_token', 'before_photo', 'after_photo']);
        $in['featured'] = $request->input('featured') == 'on' ? true : false;
        $in['status'] = $request->input('status') == 'on' ? true : false;

        $servicePortfolio->update($in);
        $slug = Str::slug($request->input('title'));

        if ($request->hasFile('before_photo')) {
            $filename = $slug . time() . '_before.' . $request->file('before_photo')->getClientOriginalExtension();
            $servicePortfolio->addMediaFromRequest('before_photo')
                ->usingFileName($filename)
                ->withResponsiveImages()
                ->toMediaCollection('service-portfolio-before');
        }

        if ($request->hasFile('after_photo')) {
            $filename = $slug . time() . '_after.' . $request->file('after_photo')->getClientOriginalExtension();
            $servicePortfolio->addMediaFromRequest('after_photo')
                ->usingFileName($filename)
                ->withResponsiveImages()
                ->toMediaCollection('service-portfolio-after');
        }
        if ($request->hasFile('both_photo')) {
            $filename = $slug . time() . '_both.' . $request->file('both_photo')->getClientOriginalExtension();
            $servicePortfolio->addMediaFromRequest('both_photo')
                ->usingFileName($filename)
                ->withResponsiveImages()
                ->toMediaCollection('service-portfolio');
        }

        return redirect()->back()->withToastSuccess('Portfolio Update Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ServicePortfolio  $servicePortfolio
     * @return \Illuminate\Http\Response
     */
    public function destroy(ServicePortfolio $servicePortfolio)
    {
        $servicePortfolio->delete();

        return redirect()->back()->withToastSuccess('Portfolio Delete Successfully.');
    }
}
