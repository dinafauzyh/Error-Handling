<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index($nama)
    {
        if ($nama == "malasngoding") {
            return abort(403, 'Anda tidak punya akses karena anda Malas Ngoding');
        } elseif ($nama == "Dina") {
            return "Halo, " . $nama;
        } else {
            return abort(404);
        }
    }

    public function search(Request $request)
    {
        try {
            $user = User::findOrFail($request->input('username'));
        } catch (ModelNotFoundException $exception) {
            return back()->withError('User not found by username ' . $request->input('username'))->withInput();
        }
        return view('users.search', compact('user'));
    }
}
