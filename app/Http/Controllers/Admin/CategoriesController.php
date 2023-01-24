<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Categories;

class CategoriesController extends Controller
{
    public function index() 
    {
        $data = categories::all();
        return view('admin.categories.index', ['categories'=>$data]);

    }

    public function create() 
    {
        return view('admin.categories.create');
    }
}
