<?php

namespace App\Http\Controllers;

use App\Http\Requests\NextmatchRequest;
use App\Nextmatch;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;

class NextmatchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $nm = Nextmatch::orderby('id', 'desc')->paginate(15);
        $count = Nextmatch::count();
        return view('Admin.Nextmatch.index', ['nm' => $nm, 'count' => $count]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('Admin.Nextmatch.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(NextmatchRequest $request)
    {
        //
        //
        $nm = new Nextmatch();
        $nm->league = $request->league;
        $nm->nm_home = $request->homenm;
        $nm->nm_away = $request->awaynm;
        $nm->des = $request->des;
        $nm->scores = $request->score;
        $nm->shows = 1;

        if ($request->hasFile('imagehome')) {
            $filename = str_random(10) . '.' . $request->file('imagehome')->getClientOriginalExtension();
            $request->file('imagehome')->move(public_path() . '/img/upload/', $filename);
            $nm->m_home = $filename;
        } else {
            $nm->m_home = 'no_pic.png';
        }

        if ($request->hasFile('imageaway')) {
            $filename = str_random(10) . '.' . $request->file('imageaway')->getClientOriginalExtension();
            $request->file('imageaway')->move(public_path() . '/img/upload/', $filename);
            $nm->m_away = $filename;
        } else {
            $nm->m_away = 'no_pic.png';
        }
        Session::flash('status', 'success');
        $nm->save();


        return redirect('Admin/Nextmatch');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id, $id2)
    {
        //
        if ($id2 == 1) {
            $ss = Nextmatch::find($id);
            if ($ss->m_home != 'no_pic.png') {
                if (file_exists(public_path() . '/img/upload/' . $ss->m_home)) {
                    File::delete(public_path() . '/img/upload/' . $ss->m_home);
                }
            }
            $ss->m_home = 'no_pic.png';
            $ss->save();
        }
        if ($id2 == 2) {
            $ss = Nextmatch::find($id);
            if ($ss->m_away != 'no_pic.png') {
                if (file_exists(public_path() . '/img/upload/' . $ss->m_away)) {
                    File::delete(public_path() . '/img/upload/' . $ss->m_away);
                }
            }
            $ss->m_away = 'no_pic.png';
            $ss->save();
        }
        return view('Admin.Nextmatch.edit', ['nm' => $ss]);
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
        $nm = Nextmatch::find($id);
        return view('Admin.Nextmatch.edit', ['nm' => $nm]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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




    public function settest($id1, $id2)
    {
        $r = Nextmatch::find($id1);
        $r->shows = $id2;
        $r->save();
        return back();
    }
}
