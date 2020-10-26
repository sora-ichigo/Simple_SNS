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

    public function show($id)
    {
        $thing = Thing::find($id);
        return view('original.show',['thing'=>$thing]);
    }

    public function edit($id)
    {
        $thing = Thing::find($id);
        return view('original.edit',['thing'=>$thing]);
    }

    public function update($id,ThingRequest $request)
    {
        $thing=Thing::find($id);
        $thing->fill($request->all())->save();
        return redirect(route('index'));
    }

    public function delete($id)
    {
        $thing = Thing::find($id);
        return view('original.delete',['thing'=>$thing]);
    }

    public function remove($id)
    {
        $thing = Thing::find($id);
        $thing->delete();
        return redirect(route('index'));
    }
}
