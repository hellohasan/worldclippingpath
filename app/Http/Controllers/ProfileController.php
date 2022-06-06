<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;
use Intervention\Image\Facades\Image;

class ProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function manageProfile()
    {
        $data['page_title'] = 'Manage Profile';
        $data['user'] = Auth::user();

        return view('profile.profile', $data);
    }

    /**
     * @param Request $request
     */
    public function updateProfile(Request $request)
    {
        $data = $request->validate([
            'name'   => 'required|max:191',
            'email'  => 'required|email|unique:users,email,' . auth()->id(),
            'avatar' => 'sometimes|mimes:png,jpg,jpeg|max:500',
        ]);

        $user = Auth::user();
        if ($request->hasFile('avatar')) {
            $image = $request->file('avatar');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $originalAvatar = $user->getRawOriginal('avatar');
            Image::make($image)->resize(215, 215)->save(public_path("storage/users/{$filename}"));
            if ($originalAvatar != 'avatar.png') {
                File::delete(public_path("storage/users/{$originalAvatar}"));
            }
            $data['avatar'] = $filename;
        }

        $user->update($data);

        return redirect()->back()->withToastSuccess('Profile Successfully Completed.');
    }

    public function managePassword()
    {
        $data['page_title'] = 'Update Password';

        return view('profile.password', $data);
    }

    /**
     * @param Request $request
     */
    public function updatePassword(Request $request)
    {
        $this->validate($request, [
            'current_password' => 'required',
            'password'         => ['required', 'confirmed', Password::min(8)->letters()->mixedCase()->numbers()->symbols()->uncompromised()],
        ]);

        $user = Auth::user();

        $c_password = $user->password;

        if (Hash::check($request->current_password, $c_password)) {
            $password = Hash::make($request->password);
            $user->password = $password;
            $user->save();

            return redirect()->back()->withToastSuccess('Password Changes Successfully.');
        } else {
            return redirect()->back()->withWarning('Current Password Not Match');
        }
    }
}
