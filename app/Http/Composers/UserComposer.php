<?php

namespace App\Http\Composers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class UserComposer
{
    public function compose(View $view)
    {
        $id=Auth::id();
        $user=User::find($id);
        $view->with('user', $user);
    }
}
