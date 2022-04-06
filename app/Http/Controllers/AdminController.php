<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Image;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\File;

class AdminController extends Controller
{

    //

    function __construct()
    {

        $this->middleware('auth');
    }

    public function index()
    {
        return view('Admin.Dashboard.index');
    }


    public function profile()
    {
        return view('Admin.Profile.index');
    }




}
