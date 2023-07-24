<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Memberships;

class MembershipsController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $memberships = Memberships::latest('id')->get();
        return view('admin.memberships.index', compact('memberships'));
    }

    public function view($id)
    {
        $membership = Memberships::find($id);
        return view('admin.memberships.view', compact('membership'));
    }

}
