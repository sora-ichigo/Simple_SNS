<?php

namespace App\Http\Controllers;

use App\Http\Requests\ThingRequest;
use App\Models\User;
use Illuminate\Http\Request;
use App\Thing;
use Illuminate\Support\Facades\Auth;

class ThingController extends Controller
{
    public function index()
    {
        $things = Thing::all();
        return view('original.index',['things'=>$things]);
    }

    public function add()
    {
        return view('original.add');
    }


    public function create(ThingRequest $request)
    {
        $thing = new Thing();
        $thing->user_id=Auth::id();
        $thing->fill($request->all())->save();
        return redirect(route('index'));
    }

    public function show(Thing $thing)
    {
        return view('original.show',['thing'=>$thing]);
    }

    public function edit(Thing $thing)
    {
        return view('original.edit',['thing'=>$thing]);
    }

    public function update(Thing $thing,ThingRequest $request)
    {
        $thing->fill($request->all())->save();
        return redirect(route('index'));
    }

    public function delete(Thing $thing)
    {
        return view('original.delete',['thing'=>$thing]);
    }

    public function remove(Thing $thing)
    {
        $thing->delete();
        return redirect(route('index'));
    }
}
