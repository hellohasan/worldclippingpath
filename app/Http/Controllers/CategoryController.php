<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CategoryController extends Controller
{

    public function __construct()
    {
        $this->middleware('permission:categories', ['only' => ['index']]);
        $this->middleware('permission:categories-create', ['only' => ['create']]);
        $this->middleware('permission:categories-store', ['only' => ['store']]);
        $this->middleware('permission:categories-edit', ['only' => ['edit']]);
        $this->middleware('permission:categories-destroy', ['only' => ['destroy']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['page_title'] = 'Categories';
        $data['categories'] = Category::all();

        return view('backend.categories.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['page_title'] = 'Create Category';

        return view('backend.categories.create', $data);
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
            'name' => 'required|unique:categories,name',
        ]);

        $in = $request->except(['_method', '_token']);
        $in['slug'] = Str::slug($request->input('name'));
        $in['featured'] = $request->input('featured') == 'on' ? true : false;
        $in['status'] = $request->input('status') == 'on' ? true : false;
        Category::create($in);

        return redirect()->back()->withToastSuccess('Category Created Successfully.');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $data['page_title'] = 'Edit Category';
        $data['category'] = Category::find($id);

        return view('backend.categories.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $category = Category::findOrFail($id);
        $request->validate([
            'name' => 'required|unique:categories,name,' . $id,
        ]);

        $in = $request->except(['_method', '_token']);
        $in['slug'] = Str::slug($request->input('name'));
        $in['featured'] = $request->input('featured') == 'on' ? true : false;
        $in['status'] = $request->input('status') == 'on' ? true : false;
        $category->update($in);

        return redirect()->back()->withToastSuccess('Category Updated Successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Category::destroy($id); //ALERT: Make Sure when delete the category

        return redirect()->back();
    }
}
