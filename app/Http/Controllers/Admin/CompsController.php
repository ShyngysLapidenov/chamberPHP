<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Comps;

class CompsController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $comps = Comps::latest('id')->get();
        return view('admin.comps.index', compact('comps'));
    }

    public function create()
    {
        return view('admin.comps.create');
    }

    public function store(Request $request)
    {
        $comps = new Comps();
        $comps->title = $request->title;
        $comps->body = $request->body;
        if($request->has('img')){
            $file = $request->file('img');
            $filename = $file->getClientOriginalName();
            $file->move('images/comps', $filename);
            $comps->img = $filename;
        }
        $comps->save();
        return redirect()->route('admin.comps.index');
    }

    public function edit($id)
    {
        $comps = Comps::find($id);
        return view('admin.comps.edit', compact('comps'));
    }

    public function update(Request $request, $id)
    {
        $comps = Comps::find($id);
        $comps->title = $request->title;
        $comps->body = $request->body;
        if($request->has('img')){
            $file = $request->file('img');
            $filename = $file->getClientOriginalName();
            $file->move('images/comps', $filename);
            $comps->img = $filename;
        }
        $comps->save();
        return redirect()->route('admin.comps.index');
    }
}
