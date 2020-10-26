<?php

namespace App\Http\Middleware;

use App\Thing;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserMiddleWare
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        //ログインユーザーIDを取得
        $loginId = Auth::id();
        //投稿情報のユーザーIDを取得
        $requestId = $request->id;
        $id=Thing::find($requestId)->user_id;

        //ログイン者と投稿情報作成者が一致しなければ別のページにリダイレクト
        if ($loginId != $id) {
            return redirect(route('index'));
        }
        return $next($request);
    }
}
