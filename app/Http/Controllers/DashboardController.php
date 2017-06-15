<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;
use DB;
use Illuminate\Support\Str;

class DashboardController extends Controller
{
    public function __construct() {

        $this->middleware('auth');

    }

    public function getNews () {
    	$news = DB::table('news')->orderBy('id', 'asc')->paginate(10);;

        return view('dashboard.news')->with('news', $news);
    }

    public function getClients () {
    	
    }

    public function getUsers () {
    	
    }
}
