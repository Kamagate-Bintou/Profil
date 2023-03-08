<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Auth;

class ProfileController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }
  
    public function index()
    {
        return view('profile');
    }

  
    // public function store(Request $request)
    // {
    //     $validated = $request->validate([
    //         'username' => 'required',
    //         'email' => 'required',
    //         'password' => 'required',
    //         'avatar' => 'required|image',
    //     ]);
  
    //     $avatarName = time().'.'.$request->avatar->getClientOriginalExtension();
    //     $request->avatar->move(public_path('avatars'), $avatarName);
  
    //     Auth()->user()->update(['avatar'=>$avatarName]);
  
    //     return back()->with('success', 'Avatar updated successfully.');
    // }
}