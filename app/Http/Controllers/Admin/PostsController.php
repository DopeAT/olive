<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class PostsController extends Controller
{

    public function index()
    {
        $posts = Post::withTranslation()->translatedIn(app()->getLocale())->get();

        return view('admin.posts.index', [
            'posts' => $posts
        ]);
    }

    public function create()
    {
        return view('admin.posts.create', [
            'langs' => $this->webLangs
        ]);
    }

    public function store(Request $request)
    {
        $new_image = '';
        $postsFolder = public_path().'/images/posts';

        if(!file_exists($postsFolder)) {
            File::makeDirectory($postsFolder, 0777, true, true);
        }

        if($request->hasFile('image')){
            $request->validate(['image' => 'image|mimes:jpeg,png,jpg',]);
            $image  = $request->file('image');
            $name   = 'post_'.time();
            $new_image = $name. '.' . $image->getClientOriginalExtension();

            // Upload image
            $request->image->move($postsFolder, $new_image);
        }

        $data = $request->all();
        $data['image'] = $new_image;

        foreach (config('translatable.locales') as $locale) {
            $data[$locale]['slug'] = slug($data[$locale]['title']);
        }

        Post::create($data);

        session()->flash('success', 'Post Created Successfully.');
        return redirect('/admin/posts');
    }

    public function show($id)
    {
        //
    }

    public function edit(Post $post)
    {
        return view('admin.posts.edit', [
            'data' => $post
        ]);
    }

    public function update(Request $request, Post $post)
    {
        $image = $post->image;
        $postsFolder = public_path().'/images/posts';

        if($request->hasFile('image')){

            $request->validate(['image' => 'image|mimes:jpeg,png,jpg',]);
            $image  = $request->file('image');
            $name   = 'post_'.time();
            $new_image = $name. '.' . $image->getClientOriginalExtension();

            // Upload image
            $request->image->move($postsFolder, $new_image);

            // remove old image
            File::delete($postsFolder.'/'.$image);

            $image = $new_image;
        }

        $data = $request->all();
        $data['image'] = $image;

        foreach (config('translatable.locales') as $locale) {
            $data[$locale]['slug'] = slug($data[$locale]['title']);
        }

        $post->update($data);

        session()->flash('success', "{$post->title} Updated Successfully.");
        return redirect('/admin/posts');
    }

    public function destroy(Post $post)
    {
        $post->delete();

        session()->flash('success', 'Post Removed.');
        return redirect('/admin/posts');
    }
}
