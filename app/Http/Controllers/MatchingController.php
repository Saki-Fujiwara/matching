<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Matching;
use App\Models\Post;
use Auth;

class MatchingController extends Controller
{
    public function matching(Post $post,Matching $matching) {
        $matching->sender_id =Auth::Id();
        $matching->receiver_id =$post->user_id;
        $matching->save();
        return redirect("/posts/".$post->id);
    }
    
    public function index() {
        $senderId = Auth::id();
        $matching = Matching::with('user')->where('receiver_id',$senderId)->get();
        
        return view("posts.matching",['matches' => $matching]);
    }
}



