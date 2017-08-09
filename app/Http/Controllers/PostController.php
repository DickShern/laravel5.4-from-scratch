<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;

use Carbon\Carbon;

use App\Repositories\Posts;

class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except(['index','show']);
    }

    //
    public function index(Posts $posts)
    {

        // dd($posts);
        
    	// $posts = Post::latest()->get();
    	// OR
        // $posts = Post::orderBy('created_at','desc')->get();
        // OR
        // Method injection(passing arguments)
        // $posts = $posts->all();



        $posts = Post::latest()
        ->filter(request(['month', 'year']))
        ->get();

        

    	return view('posts.index', compact('posts'));
        
    }

    public function show(Post $post)
    {
    	// $post = Post::find($id);
    	return view ('posts.show', compact('post'));
    }

    public function create()
    {
    	return view('posts.create');
    }

    public function store()
    {
    	//Create a new post using the request data
    	//save it to database
    	//and then redirect to the home page

    	// dd(request()->all());
    	// $post = new Post;

    	// $post->title = request('title');

    	// $post->body = request('body');

    	// $post->save();

    	$this->validate(request(), [
    		'title' => 'required',
    		'body' => 'required'
    		]);


    	// Post::create([
    	// 	'title' => request('title'),
    	// 	'body' => request('body'),
     //        'user_id' => auth()->id()
    	// 	]);


        auth()->user()->publish(
            new Post(request(['title','body']))
            );

    	return redirect('/');
    }
}
