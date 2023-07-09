<?php

namespace App\Http\Controllers;

use App\Models\State;
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
        // fetch all states
        $states = State::all();

        $stateCount = State::count() - 1;


        return view('admin.home', [ 
            'states' => $states,
            'stateCount' => $stateCount
        ]);
    }
}
