<?php

namespace App\Http\Controllers;

use App\Jobs\SendNewPostMailJob;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Gate;


class postController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //get all posts from database

        
        // if(Cache::has('posts')){
        //     $posts = Cache::get('posts');
        // }else{
        //     sleep(4);
        //     $posts = Post::paginate(3);
        //     Cache::put('posts', $posts, 10);
        // }

        $posts = Cache::remember('posts', 10, function(){
            sleep(4);
            return Post::paginate(3);
        });
        return view('posts.index', ['posts' => $posts]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // if(!auth()->check()){
        //     return to_route('login');
        // }
        //
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // validation
        $validated = $request->validate([
            'title' => ['required', 'min:5', 'max:255'],
            'content' => ['required', 'min:10'],
            'thumbnail' => ['required', 'image'],
        ]);

        $validated['thumbnail'] = $request->file('thumbnail')->store('thumbnail');

        //create a new post useing auth user
        auth()->user()->posts()->create($validated);

        // mail
       dispatch(new SendNewPostMailJob(['email' => auth()->user()->email, 'name' => auth()->user()->name, 'title' => $validated['title']]));

        return redirect()->route('posts.index')->with('message', 'Post created successfully.');
        // or
        // return to_route('posts.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        //
        // $post = Post::findOrFail($id);
        return view('posts.show', ['post' => $post]);

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        //
        Gate::authorize('update', $post);
        return view('posts.edit', ['post' => $post]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        Gate::authorize('update', $post);
         // validation
         $validated = $request->validate([
            'title' => ['required', 'min:5', 'max:255'],
            'content' => ['required', 'min:10'],
            'thumbnail' => ['sometimes', 'image'],
        ]);

        if($request->hasFile('thumbnail')) {
            File::delete(storage_path('app/public/'. $post->thumbnail));
            $validated['thumbnail'] = $request->file('thumbnail')->store('thumbnail');
        }

        $post->update($validated);

        return to_route('posts.show', ['post' => $post])->with('message', 'Post updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        //
        Gate::authorize('delete', $post);
        File::delete(storage_path('app/public/'. $post->thumbnail));
        $post->delete();
        return to_route('posts.index');
    }
}
