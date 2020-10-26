<?php

namespace App\Http\Controllers;

use App\Thing;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index($id)
    {
        $user=User::find($id);
        $things=$user->things()->get();
        return view('user.user',['user'=>$user,'things'=>$things]);
    }
}
