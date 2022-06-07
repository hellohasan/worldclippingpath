<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware(['permission:users'])->only(['index']);
        $this->middleware(['permission:users-create'])->only(['create']);
        $this->middleware(['permission:users-store'])->only(['store']);
        $this->middleware(['permission:users-edit'])->only(['edit']);
        $this->middleware(['permission:users-update'])->only(['update']);
        $this->middleware(['permission:users-destroy'])->only(['destroy']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['page_title'] = 'User Lists';
        $data['users'] = User::orderByDesc('id')->get();
        return view('users.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['page_title'] = 'Create User';
        $data['roles'] = Role::select('id', 'name as text')->orderBy('id', 'asc')->get();
        return view('users.create', $data);
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
            'name'     => 'required',
            'email'    => 'required|unique:users,email',
            'role_id'  => 'required',
            'password' => 'required|confirmed|min:6',
        ]);

        $in = $request->except(['role_id', 'password_confirmation']);
        $in['password'] = bcrypt($request->input("password"));
        $user = User::create($in);

        $role = Role::findById($request->input("role_id"));
        $user->assignRole($role);

        return redirect()->back()->withToastSuccess('User Successfully Created.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
