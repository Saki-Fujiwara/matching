<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Matching;
use Auth;
use App\Models\User;
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
    public function sender_post(Post $post) {
    
    $status = Matching::where("sender_id", Auth::id())->where("receiver_id", $post->user_id)->get(); 
        return view('posts.sender_index')->with(['post' => $post, 'status' => $status]);
    }

    public function sender_index($id) {
        $posts=Post::where("user_id",$id)->get();
        return view('posts.sender_index')->with(['posts' => $posts]);
    }
    public function create(Post $post) {
        return view('posts/create')->with(['post' => $post]);
    }
    public function matching(Matching $matching) {
        return view('posts/matching')->with(['matches' => $matching->where("receiver_id",Auth::id())->get()]);
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