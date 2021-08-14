<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BlogController extends Controller
{
    public function index()
    {
        $posts = Post::translatedIn(app()->getLocale())->get();

        return view('web.blog.index', [
            'posts' => $posts
        ]);
    }

    public function show($post)
    {
        $postData = Post::whereTranslation('slug', $post)->translatedIn(app()->getLocale())->first();

        if ($postData->slug !== $post) {
            $postTranslatedData = Post::whereTranslation('post_id', $postData->id)->translatedIn(app()->getLocale())->first();

            $urlLocale = app()->getLocale() === 'el' ? '' : '/' . app()->getLocale();

            return redirect($urlLocale . '/blog/' . $postTranslatedData->slug);
        }

        return view('web.blog.show', [
            'post' => $postData
        ]);
    }
}
