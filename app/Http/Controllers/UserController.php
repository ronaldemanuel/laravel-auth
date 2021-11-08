<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();

        return view('dashboard', ['users' => $users]);
    }

    public function destroy($id)
    {
        User::findOrFail($id)->delete();

        return redirect('dashboard');
    }
}
