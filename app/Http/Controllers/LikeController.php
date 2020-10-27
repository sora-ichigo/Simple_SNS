<?php

namespace App\Http\Controllers;

use App\Models\Like;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LikeController extends Controller
{

    public function do_like(Request $request)
    {
        $user_id = Auth::id();
        $thing_id = $request->thing_id;
        $is_like=Like::is_like($thing_id,$user_id);
        if ($is_like) {
            $this->unlike($thing_id, $user_id);
        } else {
            $this->like($thing_id, $user_id);
        }

        //下記の記述でajaxに引数の値を返す
        $postLikesCount = count(Like::where("thing_id",$thing_id)->get());
        $json = [
            'thing_id' => $thing_id,
            'user_id' => $user_id,
            'likes_count'=>$postLikesCount,
            'is_like'=>$is_like,
        ];

        //下記の記述でajaxに引数の値を返す
        return response()->json($json);

    }


    public function like($thing_id, $user_id)
    {
        Like::create(['thing_id' => $thing_id, 'user_id' => $user_id]);
    }

    public function unlike($thing_id, $user_id)
    {
        Like::where('user_id', $user_id)->where('thing_id', $thing_id)->delete();
    }
}
