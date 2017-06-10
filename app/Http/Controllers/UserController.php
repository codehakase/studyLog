<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;
use App\Tags;

class UserController extends Controller
{
    public function index()
    {
        $user = User::where('id', Auth::user()->id)->firstOrFail();
        $tag = Tags::where('user_id', Auth::user()->id)->first();
        return view('sLogs.profile', compact('user', 'tag'));
    }

    public function edit(Request $request)
    {
        $user = User::where('id', Auth::user()->id)->firstOrFail();
        $tags = $user->tags;
        $user->name = $request->name;
        $user->email = $request->email;
        foreach($tags as $tag) {
            $tag->tag = $request->tag;
            $tag->streak = $request->streak;
            $tag->save();
        }
        $user->save();
        return redirect()->back()->with("status", "Profile updated successfully!");

    }

    public function password(Request $request)
    {
        if ($request->input('password_new') == $request->input('password_confirmation')) {
            $user = User::where('id', Auth::user()->id)->first();
            $user->password = bcrypt($request->password_new);
            $user->save();
            return redirect()->back()->with("status", "Password updated successfully!");
            
        } else {
            return redirect()->back()->with("error", "Sorry! your passwords don't match");
        }

    }
}
