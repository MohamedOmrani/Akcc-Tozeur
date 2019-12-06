<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Post;
use BD;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() 
    {
        $posts= Post::all(); 
        //$posts= Post::orderBy('titre','asc')->paginate(20);
        return view('posts.index')->with('posts',$posts);
    } 


    public function recherche(Request $request){
        $q = $request->input('recherche');
        $posts= Post::where('titre', 'LIKE', '%'.$q.'%')
                    ->orwhere('body', 'LIKE', '%'.$q.'%')
                    ->orwhere('created_date', 'LIKE', '%'.$q.'%')
                    ->orwhere('created_dateTime', 'LIKE', '%'.$q.'%')
                   ->paginate(5);
         //$posts = Post::search($q)->paginate(5);        
        
        
        return view('posts.recherche')->with('posts',$posts);
        
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
        $this->validate($request,[
            'titre' => 'required',
            'body' => 'required'
         
            
        ]);

       

        if ($request->hasFile('file')) {
            $image = $request->file('file');
            $imageName = $image->getClientOriginalName();
            $image->move(public_path('/storage/cover_images'), $imageName);
    
           
            $post = new POST;
            $post->titre = $request->input('titre');
            $post->body = $request->input('body');
            $post->cover_image = $imageName;
            $post->save();

          
        }
  
        return redirect('/posts'); 
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $idu
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {   
        //$posts= Post::all();
        $post= POST::find($id);
        return view ('posts.show')->with('post',$post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post= POST::find($id);
        return view ('posts.edit')->with('post',$post);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'titre' => 'required',
            'body' => 'required',         
            
        ]);
        
        $post= POST::find($id);
        $post->titre = $request->input('titre');
        $post->body = $request->input('body');      
        $post->save();
        return redirect('/posts');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post= POST::find($id);
        $post->delete();
        return redirect('/posts');
    }
}
