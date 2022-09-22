<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\ServiceCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ServiceCategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('permission:service-category', ['only' => ['index']]);
        $this->middleware('permission:service-category-create', ['only' => ['create']]);
        $this->middleware('permission:service-category-store', ['only' => ['store']]);
        $this->middleware('permission:service-category-edit', ['only' => ['edit']]);
        $this->middleware('permission:service-category-destroy', ['only' => ['destroy']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['page_title'] = 'Service Category List';
        $data['categories'] = ServiceCategory::with(['service:id,title', 'media'])->orderByDesc('id')->get();

        return view('backend.service-category.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['page_title'] = 'Create Service Category';
        $data['services'] = Service::whereStatus(true)->select(['id', 'title as text'])->get();

        return view('backend.service-category.create', $data);
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
            'title'        => 'required|unique:service_categories,title',
            'description'  => 'required',
            'before_photo' => 'required|mimes:png,jpg,jpeg',
            'after_photo'  => 'required|mimes:png,jpg,jpeg',
        ]);

        $in = $request->except(['_method', '_token']);
        $in['featured'] = $request->input('featured') == 'on' ? true : false;
        $in['status'] = $request->input('status') == 'on' ? true : false;
        $service = ServiceCategory::create($in);

        $slug = Str::slug($request->input('title'));

        if ($request->hasFile('before_photo')) {
            $filename = $slug . '_before.' . $request->file('before_photo')->getClientOriginalExtension();
            $service->addMediaFromRequest('before_photo')
                ->usingFileName($filename)
                ->toMediaCollection('service-category-before');
        }

        if ($request->hasFile('after_photo')) {
            $filename = $slug . '_after.' . $request->file('after_photo')->getClientOriginalExtension();
            $service->addMediaFromRequest('after_photo')
                ->usingFileName($filename)
                ->toMediaCollection('service-category-after');
        }

        return redirect()->back()->withToastSuccess('Service Category Created Successfully.');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ServiceCategory  $serviceCategory
     * @return \Illuminate\Http\Response
     */
    public function edit(ServiceCategory $serviceCategory)
    {
        $data['page_title'] = 'Edit Service Category';
        $data['services'] = Service::whereStatus(true)->select(['id', 'title as text'])->get();
        $data['category'] = $serviceCategory;

        return view('backend.service-category.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ServiceCategory  $serviceCategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ServiceCategory $serviceCategory)
    {
        $request->validate([
            'service_id'   => 'required',
            'title'        => 'required|unique:service_categories,title,' . $serviceCategory->id,
            'description'  => 'required',
            'before_photo' => 'sometimes|mimes:png,jpg,jpeg',
            'after_photo'  => 'sometimes|mimes:png,jpg,jpeg',
        ]);

        $in = $request->except(['_method', '_token']);
        $in['featured'] = $request->input('featured') == 'on' ? true : false;
        $in['status'] = $request->input('status') == 'on' ? true : false;
        $serviceCategory->update($in);

        $slug = Str::slug($request->input('title'));

        if ($request->hasFile('before_photo')) {
            $filename = $slug . '_before.' . $request->file('before_photo')->getClientOriginalExtension();
            $serviceCategory->addMediaFromRequest('before_photo')
                ->usingFileName($filename)
                ->toMediaCollection('service-category-before');
        }

        if ($request->hasFile('after_photo')) {
            $filename = $slug . '_after.' . $request->file('after_photo')->getClientOriginalExtension();
            $serviceCategory->addMediaFromRequest('after_photo')
                ->usingFileName($filename)
                ->toMediaCollection('service-category-after');
        }

        return redirect()->back()->withToastSuccess('Service Category Updated Successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ServiceCategory  $serviceCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(ServiceCategory $serviceCategory)
    {
        $serviceCategory->delete(); // ALERT: take decision when delete his

        return redirect()->back()->withToastSuccess('Service Category Deleted Successfully.');
    }
}
