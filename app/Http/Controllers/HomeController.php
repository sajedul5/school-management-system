<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Division;
use App\Model\District;
use App\Model\Upazilla;
use App\Model\Union;
use App\Model\Ward;
use App\Model\Village;
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

        return view('backend.layouts.home');
    }
}
