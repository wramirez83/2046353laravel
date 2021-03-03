<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;
class CommentController extends Controller
{
    public function index(Request $res){
        return view('comment-user');
    }
    public function save(Request $res){
        $comment = new Comment();
        $comment->name = $res->name;
        $comment->last_name = $res->lastname;
        $comment->email = $res->email;
        $comment->comment = $res->comment;
        $comment->save();
        dd($res->all());
    }
}
