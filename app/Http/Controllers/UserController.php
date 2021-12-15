<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    // public function index($nama)
    // {
    //     if ($nama == "malasngoding") {
    //         return abort(403, 'Anda tidak punya akses karena anda Malas Ngoding');
    //     } elseif ($nama == "Dina") {
    //         return "Halo, " . $nama;
    //     } else {
    //         return abort(404);
    //     }
    // }

    public function index()
    {
        return view('users.index');
    }

    public function search(Request $request)
    {
        try {
            $user = User::findOrFail($request->input('user_id'));
        } catch (ModelNotFoundException $exception) {
            return back()->withError($exception->getMessage())->withInput();
        }
        return view('users.search', compact('user'));
    }
}
