<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Category;
use App\User;
use App\Genre;
use App\Post;
use App\Comment;
use Alert;
// use Auth;

class PostController extends Controller
{

    public function index()
    {
        // $posts = Post::all();
        $posts = Post::latest()->paginate(9);

        return view('post.timeline',compact('posts'));
    }        

    public function karyaku()
    {        
        $posts = Auth::user()->postt()->get();
        
        $links = Post::paginate(6);

        return view('post.karyaku',compact('links','posts'));
    }

    public function readmore($post)
    {           
        $post = Post::where('slug', $post)->first();
        $comments = Comment::where('post_id', '=', $post->id)->get();

        return view('post.readmore', compact('post','comments'));
    }

    // Create
    public function create()
    {    
        $users = User::all();
        $categories = Category::all();
        $genres = Genre::all();

        return view('post.create',compact('categories','users','genres'));
    }


    public function store()
    {
        $this->validate(request(), [
            'title' => 'required|max:25',
            'content' => 'required|min:400',
            'category' => 'required',
            'genre' => 'required'
        ]);

        Post::create([
            'user_id' => auth()->id(),        
            'title' => request('title'),
            'slug' => str_slug(request('title')),
            'content' => request('content'),
            'category_id' => request('category'),
            'genre_id' => request('genre')
        ]);
                
        Alert::success('Berhasil di Posting', 'Sukses');

        return redirect()->back();
    }

    //Edit
    
    public function edit(Post $post)
    {
        $users = User::all();
        $categories = Category::all();
        $genres = Genre::all();

        return view('post.edit',compact('categories','users','genres','post'));
    }

    public function update(Post $post)
    {
        $this->validate(request(), [
            'title' => 'required|max:25',
            'content' => 'required|min:400',            
        ]);

        $post->update([
            'title' => request('title'),
            'content' => request('content'),
            'category_id' => request('category'),
            'genre_id' => request('genre'),

        ]);

        Alert::success('Berhasil di Edit', 'Sukses');

        return redirect()->back();
    }

    //edit

    //delete
    public function destroy(Post $post)
    {
        $post->delete();

        Alert::success('Berhasil di Delete', 'Sukses');


        return redirect('/karyaku');
    }
    //delete

    //comment
    public function comment(Post $post)
    {    

        Comment::create([
            'post_id' => $post->id,
            'user_id' => auth()->id(),
            'pesan' => request('comment')
        ]);        

        return redirect()->back();
    }        
            
}
