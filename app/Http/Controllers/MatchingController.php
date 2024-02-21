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
}
