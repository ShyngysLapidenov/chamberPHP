<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\Comps;
use App\Models\Employees;
use App\Models\Events;
use App\Models\Applications;
use App\Models\Memberships;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function  index(){
        $news = News::orderBy('date', 'desc')->limit(10)->get();
        $comps_all = Comps::all();
        $comps = [];
        foreach ($comps_all as $comp){
            $comps[$comp['id']] = $comp;
        }
		$events = Events::orderBy('id', 'desc')->get();
        return view('pages.home', compact('news', 'comps', 'events'));
    }
    public function  about(){
        $comps_all = Comps::all();
        $comps = [];
        foreach ($comps_all as $comp){
            $comps[$comp['id']] = $comp;
        }
		$employees = Employees::all();
        return view('pages.about', compact('comps', 'employees'));
    }
    public function business(){
        $comps_all = Comps::all();
        $comps = [];
        foreach ($comps_all as $comp){
            $comps[$comp['id']] = $comp;
        }
        return view('pages.business', compact('comps'));
    }
    public function services(){
        $comps_all = Comps::all();
        $comps = [];
        foreach ($comps_all as $comp){
            $comps[$comp['id']] = $comp;
        }
        return view('pages.services', compact('comps'));
    }
    public function member(){
        $comps_all = Comps::all();
        $comps = [];
        foreach ($comps_all as $comp){
            $comps[$comp['id']] = $comp;
        }
        return view('pages.member', compact('comps'));
    }
    public function sponsor(){
        $comps_all = Comps::all();
        $comps = [];
        foreach ($comps_all as $comp){
            $comps[$comp['id']] = $comp;
        }
        return view('pages.sponsor', compact('comps'));
    }
    public function event(){
        $comps_all = Comps::all();
        $comps = [];
        foreach ($comps_all as $comp){
            $comps[$comp['id']] = $comp;
        }
		$events = Events::orderBy('id', 'desc')->get();
        return view('pages.event', compact('comps', 'events'));
    }
    public function news(Request $request){
        $comps_all = Comps::all();
        $comps = [];
        foreach ($comps_all as $comp){
            $comps[$comp['id']] = $comp;
        }
        if(!empty($request->from) && !empty($request->to)){
            $news = News::where('date', '>=', date('Y-m-d', strtotime($request->from)))->where('date', '<=', date('Y-m-d', strtotime($request->to)))->paginate(10);
        }else{
            $news = News::orderBy('date', 'desc')->paginate(10);
        }
        return view('pages.news', compact('news', 'comps'));
    }
    public function news_detail($id){
        $comps_all = Comps::all();
        $comps = [];
        foreach ($comps_all as $comp){
            $comps[$comp['id']] = $comp;
        }
        $news = News::find($id);
        return view('pages.news-inner', compact('news', 'comps'));
    }
	public function send(Request $request){
		$validator = \Validator::make($request->all(), [
            'fio' => 'required',
			'phone' => 'required',
			'email' => 'required',
        ]);
		if ($validator->fails()) {
            return redirect()->back();
        }
		Applications::create([
			'event_id' 	=> $request->event_id ?? null,
			'fio'		=> $request->fio,
			'сompany_name'	=> $request->сompany_name,
			'position'	=> $request->position,
			'phone'		=> $request->phone,
			'email'		=> $request->email,
			'message' 	=> $request->message ?? null,
			'date'		=> date('Y-m-d H:i:s')
 		]);
		return redirect()->back();
	}

    public function sponsor_send(Request $request){
		$validator = \Validator::make($request->all(), [
			'type' => 'required',
            'name' => 'required',
			'phone' => 'required',
			'email' => 'required',
        ]);
		if ($validator->fails()) {
            return redirect()->back();
        }
		Memberships::create([
			'type' 	=> $request->type,
			'company_name' 	=> $request->company_name ?? null,
            'company_bin' 	=> $request->company_bin ?? null,
            'country_incorporation' 	=> $request->country_incorporation ?? null,
            'address' 	=> $request->address ?? null,
            'city' 	=> $request->city ?? null,
            'postcode' 	=> $request->postcode ?? null,
            'country' 	=> $request->country ?? null,
            'company_phone' 	=> $request->company_phone ?? null,
            'description' 	=> $request->description ?? null,
            'employes_count' 	=> $request->employes_count ?? null,
			'name'		=> $request->name,
			'phone'		=> $request->phone,
			'email'		=> $request->email,
			'job_title' 	=> $request->job_title,
			'date'		=> date('Y-m-d H:i:s')
 		]);
		return redirect()->back();
	}
}
