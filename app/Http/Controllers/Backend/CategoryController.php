<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryRequest;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::all();
        return view('backend.categories.index',compact('categories'));
    }


    public function create()
    {
        return view('backend.categories.create');
    }


    public function store(CategoryRequest $request)
    {


        Category::create([
            'name' => $request->name,
        ]);

        return redirect()->back();
        
    }

    public function edit(string $id)
    {
        $category = Category::findOrFail($id);
        return view('backend.categories.edit',compact('category'));
    }


    public function update(Request $request, string $id)
    {
        $category = Category::findOrFail($id);
        $category->update([
            'name' => $request->name,
        ]);
        return redirect()->route('admin.categories');
    }


    public function destroy(string $id)
    {
        Category::findOrFail($id)->delete();
        return redirect()->back();
    }
}
