<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { 
        // $posts = Post::where([
        //     ['name', '!=', Null],
        //     [function ($query) use ($request) {
        //         if (($term = $request->term)) {
        //             $query->orWhere('name', 'LIKE', '%' . $term . '%')->get();
        //         }
        //     }]
        // ])

        // ->orderBy("id", "desc")
        // ->paginate(10);
        $data = Post::latest()->paginate(5);
    
        return view('posts.index',compact('data'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $request->validate([
            'name' => 'required',
            'age' => 'required',
            'telephone' => 'required',
            'date' => 'required',
            'address' => 'required',
            'complain' => 'required',
            'procedure' => 'required',
        ]);
    
        Post::create($request->all());
     
        return redirect()->route('posts.index')
                        ->with('success','Patient created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        return view('posts.show',compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        return view('posts.edit',compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        $request->validate([
            'name' => 'required',
            'age' => 'required',
            'telephone' => 'required',
            'date' => 'required',
            'address' => 'required',
            'complain' => 'required',
            'procedure' => 'required',
        ]);
    
        $post->update($request->all());
    
        return redirect()->route('posts.index')
                        ->with('success','Patient edited successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        $post->delete();
    
        return redirect()->route('posts.index')
                        ->with('success','Patient deleted successfully');
    }

    //

    public function search(Request $request){
        // Get the search value from the request
        $search = $request->input('search');
    
        // Search in the title and body columns from the posts table
        // $data = Post::query()
        //     ->where('name', 'LIKE', "%{$search}%")
        //     ->orWhere('name', 'LIKE', "%{$search}%")
        //     ->get();
            $data = Post::
            where([
                    ['name', '!=', Null],
                    [function ($query) use ($request) {
                        if (($term = $request->term)) {
                            $query->orWhere('name', 'LIKE', '%' . $term . '%')->get();
                        }
                    }]
                ]);
        // Return the search view with the resluts compacted
        return view('search', compact('data'));
    }
}