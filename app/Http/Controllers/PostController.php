<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Matching;
use Auth;
class PostController extends Controller
{
    public function index(Post $post)
    {
    return view('posts.index')->with(['posts' => $post->getPaginateByLimit()]); 
       
    }
    
    public function show(Post $post,Matching $matching) {
        $status=$matching->where("sender_id",Auth::id())->where("receiver_id",$post->user_id)->doesntExist();
        return view('posts.show')->with(['post' => $post,'status' => $status]);
    }

    public function create(Post $post) {
        return view('posts/create');
    }
    public function store(Request $request, Post $post)
{
    $input = $request['post'];
    $input['user_id'] = Auth::id();
    $post->fill($input)->save();
    return redirect('/posts/' . $post->id);
}
}

?>