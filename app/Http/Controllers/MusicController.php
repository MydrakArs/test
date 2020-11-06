<?php

namespace App\Http\Controllers;

use Auth;
use Session;
use App\User;
use App\Albums;
use App\Singles;
use App\Artist;
use DB;
use Illuminate\Http\Request;

class MusicController extends Controller
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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $singls = Singles::all()->shuffle();
        $nesingls = Singles::all()->sortByDesc("created_at");
        $albums = Albums::all()->shuffle();

        return view('music', [
            'singls' => $singls,
            'newsingls' => $nesingls,
            'albums' => $albums   
        ]);
    }
}
