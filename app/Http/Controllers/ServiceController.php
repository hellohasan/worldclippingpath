<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ServiceController extends Controller
{
    public function __construct()
    {
        $this->middleware('permission:services', ['only' => ['index']]);
        $this->middleware('permission:services-create', ['only' => ['create']]);
        $this->middleware('permission:services-store', ['only' => ['store']]);
        $this->middleware('permission:services-edit', ['only' => ['edit']]);
        $this->middleware('permission:services-destroy', ['only' => ['destroy']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['page_title'] = 'Service List';
        $data['services'] = Service::with(['category:id,name', 'media'])->orderByDesc('id')->get();

        return view('backend.services.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['page_title'] = 'Create Service';
        $data['categories'] = Category::whereStatus(true)->select(['id', 'name as text'])->get();

        return view('backend.services.create', $data);
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
            'title'             => 'required|unique:services,title',
            'category_id'       => 'required',
            'short_description' => 'required',
            'price_usd'         => 'required|numeric',
            'price_eur'         => 'required|numeric',
            'photo'             => 'required|mimes:png,jpeg,jpg',
        ]);

        $in = $request->except(['_method', '_token', 'photo']);
        $in['slug'] = Str::slug($request->input('title'));
        $in['featured'] = $request->input('featured') == 'on' ? true : false;
        $in['status'] = $request->input('status') == 'on' ? true : false;
        $service = Service::create($in);
        if ($request->hasFile('photo')) {
            $slug = $service->slug;
            $ext = $request->file('photo')->getClientOriginalExtension();
            $service->addMediaFromRequest('photo')
                ->usingName($slug)
                ->usingFileName($slug . '.' . $ext)
                ->toMediaCollection('services');
        }

        return redirect()->back()->withToastSuccess('Service Created Successfully.');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function edit(Service $service)
    {
        $data['page_title'] = 'Edit Service';
        $data['service'] = $service;
        $data['categories'] = Category::whereStatus(true)->select(['id', 'name as text'])->get();

        return view('backend.services.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Service $service)
    {
        $request->validate([
            'title'             => 'required|unique:services,title,' . $service->id,
            'category_id'       => 'required',
            'short_description' => 'required',
            'price_usd'         => 'required|numeric',
            'price_eur'         => 'required|numeric',
            'photo'             => 'sometimes|mimes:png,jpeg,jpg',
        ]);

        $in = $request->except(['_method', '_token', 'photo']);
        $in['slug'] = Str::slug($request->input('title'));
        $in['featured'] = $request->input('featured') == 'on' ? true : false;
        $in['status'] = $request->input('status') == 'on' ? true : false;
        $service->update($in);
        if ($request->hasFile('photo')) {
            $slug = $service->slug;
            $ext = $request->file('photo')->getClientOriginalExtension();
            $service->addMediaFromRequest('photo')
                ->usingName($slug)
                ->usingFileName($slug . '.' . $ext)
                ->toMediaCollection('services');
        }

        return redirect()->back()->withToastSuccess('Service Updated Successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function destroy(Service $service)
    {
        $service->categories()->delete();
        $service->delete(); //ALERT: take decision when delete this service

        return redirect()->back()->withToastSuccess('Service Deleted Successfully.');
    }
}
