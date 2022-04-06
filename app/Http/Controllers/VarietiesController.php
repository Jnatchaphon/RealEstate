<?php

namespace App\Http\Controllers;

use App\Http\Requests\VarietiesRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\File;
use App\Variety;

class VarietiesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    function __construct() {

        $this->middleware('auth');
    }

    public function index()
    {
        //
        $va = Variety::orderby('id','desc')->paginate(15);
        $count = Variety::count();
        return view('Admin.Varieties.index', ['va' => $va , 'count' => $count]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('Admin.Varieties.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $va = new Variety();
        $va->nm = $request->name;
        $va->des = $request->des;
        $va->de = $request->detail;
        $va->v_type = $request->types;
        $va->shows = 1;
        $va->v_views = 0;
        $va->v_date = date("j-n-Y");
        $va->v_time = date('H:i:s');
        $va->pin = 2;

        if ($request->hasFile('image')) {
            $filename = str_random(10) . '.' . $request->file('image')->getClientOriginalExtension();
            $request->file('image')->move(public_path() . '/img/upload/', $filename);
            $va->pic = $filename;
        } else {
            $va->pic = 'no_pic.png';
        }
        Session::flash('status', 'success');
        $va->save();


        return redirect('Admin/Varieties');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $ss = Variety::find($id);
        if ($ss->pic != 'no_pic.png') {
            if (file_exists(public_path() . '/img/upload/' . $ss->pic)) {
                File::delete(public_path() . '/img/upload/' . $ss->pic);
            }
        }
        $ss->pic = 'no_pic.png';
        $ss->save();
        return view('Admin.Varieties.edit', ['va' => $ss]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $va = Variety::find($id);
        return view('Admin.Varieties.edit', ['va' => $va]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(VarietiesRequest $request, $id)
    {
        //
        $va = Variety::find($id);
        $va->nm = $request->name;
        $va->des = $request->des;
        $va->de = $request->detail;
        $va->v_type = $request->types;

        if ($request->hasFile('image')) {

            if($va->pic != 'no_pic.png'){
                if (file_exists(public_path() . '/img/upload/' . $va->pic)) {
                    File::delete(public_path() . '/img/upload/' . $va->pic);
                }
            }

            $filename = str_random(10) . '.' . $request->file('image')->getClientOriginalExtension();
            $request->file('image')->move(public_path() . '/img/upload/', $filename);
            $va->pic = $filename;
        }
        Session::flash('status', 'success');
        $va->save();

        return redirect('Admin/Varieties');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $ss = Variety::find($id);
        if ($ss->pic != 'no_pic.png') {
            if (file_exists(public_path() . '/img/upload/' . $ss->pic)) {
                File::delete(public_path() . '/img/upload/' . $ss->pic);
            }
        }

        Variety::destroy($id);
        Session::flash('status', 'success');
        return redirect('Admin/Varieties');
    }



    public function settest($id1 , $id2)
    {
        $r = Variety::find($id1);
        $r->shows = $id2;
        $r->save();
        return back();
    }



}
