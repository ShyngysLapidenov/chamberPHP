<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\News;

class NewsController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $news = News::latest('id')->get();
        return view('admin.news.index', compact('news'));
    }

    public function create()
    {
        return view('admin.news.create');
    }

    public function store(Request $request)
    {
        $news = new News();
        $news->alias = $request->title;
        $news->title = $request->title;
        $news->body = $request->body;
        $news->date = $request->date;
        if($request->has('img')){
            //upload img
            $file = $request->file('img');
            $filename = $file->getClientOriginalName();
            $file->move('images/news', $filename);
            $news->img = $filename;
        }
        $news->save();
        return redirect()->route('admin.news.index');
    }

    public function edit($id)
    {
        $news = News::find($id);
        return view('admin.news.edit', compact('news'));
    }

    public function update(Request $request, $id)
    {
        $news = News::find($id);
        $news->title = $request->title;
        $news->body = $request->body;
        $news->date = $request->date;
        if($request->has('img')){
            //upload img
            $file = $request->file('img');
            $filename = $file->getClientOriginalName();
            $file->move('images/news', $filename);
            $news->img = $filename;
        }
        $news->save();
        return redirect()->route('admin.news.index');
    }

    public function delete($id)
    {
        $news = News::find($id);
        $news->delete();
        return redirect()->route('admin.news.index');
    }
}
