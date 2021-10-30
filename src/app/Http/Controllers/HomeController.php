<?php

namespace App\Http\Controllers;


use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $users = User::select('name')->first();

//        paginate(20);

        dd($users);

        return view('welcome', compact('users'));
    }
}
