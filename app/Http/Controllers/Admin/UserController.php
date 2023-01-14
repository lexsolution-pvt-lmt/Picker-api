<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index() 
    {
        $data = user::all();
        return view('admin.user.index', ['user'=>$data]);

    }

    public function create() 
    {
        $data = user::all();
        return view('admin.user.create', ['user'=>$data]);

    }

    public function show(User $user)
    {
        $data = user::all('id');
        return view('admin.user.create', ['user'=>$data]);
    }
}

