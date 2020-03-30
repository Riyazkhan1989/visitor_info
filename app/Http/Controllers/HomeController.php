<?php

namespace App\Http\Controllers;

use App\VisitorInfo;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $visitor_detail_list = VisitorInfo::all();
        return view('home', compact('visitor_detail_list'));
    }
}
