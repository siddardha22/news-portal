<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Http\Request;

class SubCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sub_categories = SubCategory::with('category')->get();
        // return $sub_categories;
        return view('backend.sub-category.index',compact('sub_categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view('backend.sub-category.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required',
            'category_id' => 'required',
        ]);


        SubCategory::create([
            'name' => $request->name,
            'category_id' => $request->category_id,
        ]);
        return redirect()->route('admin.sub.categories');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $categories = Category::all();
        $sub_categories = SubCategory::findOrFail($id);
        return view('backend.sub-category.edit',compact('sub_categories','categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $sub_categories = SubCategory::findOrFail($id);
        $sub_categories->update([
            'name' => $request->name,
            'category_id' => $request->category_id,
        ]);
        return redirect()->route('admin.sub.categories');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
      SubCategory::findOrFail($id)->delete();
       return redirect()->back();
    }
}
