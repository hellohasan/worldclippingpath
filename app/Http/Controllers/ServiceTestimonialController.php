<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\ServiceTestimonial;
use Illuminate\Http\Request;
use Str;

class ServiceTestimonialController extends Controller
{
    public function __construct()
    {
        $this->middleware('permission:service-testimonial', ['only' => ['index']]);
        $this->middleware('permission:service-testimonial-create', ['only' => ['create']]);
        $this->middleware('permission:service-testimonial-store', ['only' => ['store']]);
        $this->middleware('permission:service-testimonial-edit', ['only' => ['edit']]);
        $this->middleware('permission:service-testimonial-destroy', ['only' => ['destroy']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['page_title'] = 'Service Testimonial List';
        $data['testimonials'] = ServiceTestimonial::orderBy('id', 'desc')->with(['media', 'service:id,title'])->paginate(10);

        return view('backend.service-testimonial.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['page_title'] = 'Create Service Testimonial';
        $data['services'] = Service::orderByDesc('id')->select(['id', 'title as text'])->get();

        return view('backend.service-testimonial.create', $data);
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
            'service_id' => 'required',
            'name'       => 'required',
            'country'    => 'required',
            'message'    => 'required',
            'photo'      => 'required|mimes:png,jpg,jpeg',
        ]);

        $in = $request->except(['_method', '_token', 'photo']);
        $in['status'] = $request->input('status') == 'on' ? true : false;
        $serviceTestimonial = ServiceTestimonial::create($in);

        if ($request->hasFile('photo')) {
            $slug = Str::slug($request->input('name') . '_' . time());
            $ext = $request->file('photo')->getClientOriginalExtension();
            $serviceTestimonial->addMediaFromRequest('photo')
                ->usingName($slug)
                ->usingFileName($slug . '.' . $ext)
                ->toMediaCollection('service-testimonial');
        }

        return redirect()->back()->withToastSuccess('Testimonial Created Successfully.');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ServiceTestimonial  $serviceTestimonial
     * @return \Illuminate\Http\Response
     */
    public function edit(ServiceTestimonial $serviceTestimonial)
    {
        $data['page_title'] = 'Edit Service Testimonial';
        $data['services'] = Service::orderByDesc('id')->select(['id', 'title as text'])->get();
        $data['testimonial'] = $serviceTestimonial;

        return view('backend.service-testimonial.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ServiceTestimonial  $serviceTestimonial
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ServiceTestimonial $serviceTestimonial)
    {
        $request->validate([
            'service_id' => 'required',
            'name'       => 'required',
            'country'    => 'required',
            'message'    => 'required',
            'photo'      => 'nullable|mimes:png,jpg,jpeg',
        ]);

        $in = $request->except(['_method', '_token', 'photo']);
        $in['status'] = $request->input('status') == 'on' ? true : false;
        $serviceTestimonial->update($in);

        if ($request->hasFile('photo')) {
            $slug = Str::slug($request->input('name') . '_' . time());
            $ext = $request->file('photo')->getClientOriginalExtension();
            $serviceTestimonial->addMediaFromRequest('photo')
                ->usingName($slug)
                ->usingFileName($slug . '.' . $ext)
                ->toMediaCollection('service-testimonial');
        }

        return redirect()->back()->withToastSuccess('Testimonial Update Successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ServiceTestimonial  $serviceTestimonial
     * @return \Illuminate\Http\Response
     */
    public function destroy(ServiceTestimonial $serviceTestimonial)
    {
        $serviceTestimonial->delete();

        return redirect()->back()->withToastSuccess('Testimonial Deleted Successfully.');
    }
}
