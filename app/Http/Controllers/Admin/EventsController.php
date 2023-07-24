<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Events;

class EventsController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $events = Events::latest('id')->get();
        return view('admin.events.index', compact('events'));
    }

    public function create()
    {
        return view('admin.events.create');
    }

    public function store(Request $request)
    {
        $event = new Events();
        $event->title = $request->title;
        $event->body = $request->body;
        $event->location = $request->location;
        $event->date = $request->date;
        if($request->has('img')){
            //upload img
            $file = $request->file('img');
            $filename = $file->getClientOriginalName();
            $file->move('images/events', $filename);
            $event->img = $filename;
        }
        $event->save();
        return redirect()->route('admin.events.index');
    }

    public function edit($id)
    {
        $event = Events::find($id);
        return view('admin.events.edit', compact('event'));
    }

    public function update(Request $request, $id)
    {
        $event = Events::find($id);
        $event->title = $request->title;
        $event->body = $request->body;
        $event->location = $request->location;
        $event->date = $request->date;
        if($request->has('img')){
            //upload img
            $file = $request->file('img');
            $filename = $file->getClientOriginalName();
            $file->move('images/events', $filename);
            $event->img = $filename;
        }
        $event->save();
        return redirect()->route('admin.events.index');
    }

    public function delete($id)
    {
        $event = Events::find($id);
        $event->delete();
        return redirect()->route('admin.events.index');
    }
}
