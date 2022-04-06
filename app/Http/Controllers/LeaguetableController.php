<?php

namespace App\Http\Controllers;

use App\Http\Requests\LeaguetableRequest;
use App\League;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class LeaguetableController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $l = League::find(1);
        return view('Admin.Leaguetable.index', ['l' => $l]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(LeaguetableRequest $request, $id)
    {
        //
        $x = League::find($id);
        $x->pos = $request->pos;
        $x->play = $request->play;
        $x->win = $request->win;
        $x->draw = $request->draw;
        $x->lost = $request->lost;
        $x->gf = $request->gf;
        $x->ga = $request->ga;
        $x->gd = $request->gd;
        $x->pts = $request->pts;



        Session::flash('status', 'success');
        $x->save();


        $l = League::find($id);

        return back();
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
    }
}
