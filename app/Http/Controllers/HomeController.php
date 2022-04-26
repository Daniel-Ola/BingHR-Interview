<?php

namespace App\Http\Controllers;

use App\Models\User;
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
//        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $users = User::role()
            ->level()
            ->select('users.*', 'r.title as user_role', 'l.title as user_level')
            ->take(5)
            ->get();
        return view('home', compact('users'));
    }

    public function getFullNameAttribute()
    {
        return "{$this->firstname} {$this->lastname}";
    }
}
