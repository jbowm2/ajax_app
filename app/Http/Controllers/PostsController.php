<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Post;
use App\Http\Controllers\Controller;

class PostsController extends Controller
{
    
    public function home()
    {
        return view('posts.index');
    }

    public function ajax()
    {
        return view('posts.test');
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
        $post = new Post($request->all());
        $post->save();

        return redirect('/');
    }

    public function display(Request $request)
    {
        $query = \Request::get('q');

        $posts = $query
        ? Post::where('title', 'LIKE', "%$query%")->get()
        : Post::all();

        return view('posts.display', compact('posts'));
    }

    public function search()
    {
        return view('posts.search');
    }

    public function query(){
        $post = Request::get('term');
        $results = Post::where('name', 'like', "%$post%")->get();

    return Response::json($results);
    }

    public function typeahead()
    {
        return view('posts.typeahead');
    }



}
