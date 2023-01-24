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
        $categories = new Categories();
        $categories->id = $request->id;
        $categories->name = $request->name;
        $categories->image = $request->image;
        $categories->slug = $request->slug;
        $categories->description = $request->description;
        $categories->save();

         return redirect('http://127.0.0.1:8000/admin/categories/create');
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
