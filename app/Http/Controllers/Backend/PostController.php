<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::all();
        return view('backend.post.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view('backend.post.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */

    private function uploadImage($image)
    {


        $imageName = time() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('uploaded/post'), $imageName);
        return $imageName;
    }

    public function store(Request $request)
    {

        $request->validate([
            'meta_title' => 'required',
            'meta_keyword' => 'required',
            'meta_description' => 'required',
            'title' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'description' => 'required',
            'category_id' => 'required',
        ]);


        $uploadedImage = $request->file('image');
        $imageName = $this->uploadImage($uploadedImage);

        Post::create([
            'meta_title' => $request->meta_title,
            'meta_keyword' => $request->meta_keyword,
            'meta_description' => $request->meta_description,
            'title' => $request->title,
            'image' => 'uploaded/post/' . $imageName,
            'description' => $request->description,
            'category_id' => $request->category_id,
            'user_id' => Auth::user()->id,
        ]);


        return redirect()->route('admin.posts');
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
        $post = Post::findOrFail($id);
//        return  $post ;
        $categories = Category::all();
        return view('backend.post.edit', compact('categories', 'post'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
//        return $request->all();
        $post = Post::findOrFail($id);

        $uploadedImage = $request->file('image');

        $imageName = '';
        if ($uploadedImage) {
            $imageName = $this->uploadImage($uploadedImage);
            if ($imageName) {
                @unlink($post->image);
            }
        }

        $post->update([
            'meta_title' => $request->meta_title,
            'meta_keyword' => $request->meta_keyword,
            'meta_description' => $request->meta_description,
            'title' => $request->title,
            'image' => $imageName ? 'uploaded/post/' . $imageName : $post->image,
            'description' => $request->description,
            'category_id' => $request->category_id,
            'user_id' => Auth::user()->id,
        ]);


        return redirect()->route('admin.posts');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $post = Post::findOrFail($id);

        if ($post) {
            $post->delete();
            @unlink($post->image);
        }
        return redirect()->back();
    }
}
