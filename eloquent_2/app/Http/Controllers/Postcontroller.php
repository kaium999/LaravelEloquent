<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Comment;
class Postcontroller extends Controller
{
    function showpost(){
        //$data=Comment::all();
        $postdata=Comment::with('post')->get();
        return view('Postview',compact('postdata'));
    }
    function deleteComment($id){
        $comment=Comment::find($id);
        $comment->delete();
        return redirect('show');

    }
}
