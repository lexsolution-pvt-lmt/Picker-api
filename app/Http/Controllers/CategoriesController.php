<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
 
    public function index()
    {
        return Categories::all();
    }

    public function store(Request $request)
    {
       //
    }

    public function show(Categories $categories)
    {
        //
    }

  
    public function update(Request $request, Categories $categories)
    {
        //
    }

    public function destroy(Categories $categories)
    {
        //
    }
}
