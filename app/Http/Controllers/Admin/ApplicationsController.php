<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Applications;

class ApplicationsController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $applications = Applications::select('applications.*', 'events.title')->join('events', 'events.id', '=', 'applications.event_id', 'left')->latest('applications.id')->get();
        return view('admin.applications.index', compact('applications'));
    }

    public function edit($id)
    {
        $application = Applications::find($id);
        return view('admin.applications.edit', compact('application'));
    }

}
