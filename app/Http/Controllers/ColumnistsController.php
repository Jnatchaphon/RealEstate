<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use App\Http\Requests\ColumnistsRequest;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\File;

class ColumnistsController extends Controller
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
        $co = Article::orderby('id','desc')->paginate(15);
        $count = Article::count();
        return view('Admin.Columnists.index', ['co' => $co , 'count' => $count]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('Admin.Columnists.create');
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
        $aa = new Article();
        $aa->nm = $request->name;
        $aa->des = $request->des;
        $aa->de = $request->detail;
        $aa->shows = 1;
        $aa->a_views = 0;
        $aa->a_date = date("j-n-Y");
        $aa->a_time = date('H:i:s');
        $aa->pin = 2;


        if ($request->hasFile('image')) {
            $filename = str_random(10) . '.' . $request->file('image')->getClientOriginalExtension();
            $request->file('image')->move(public_path() . '/img/upload/', $filename);
            $aa->pic = $filename;
        } else {
            $aa->pic = 'no_pic.png';
        }
        Session::flash('status', 'success');
        $aa->save();


        return redirect('Admin/Columnists');
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
        $ss = Article::find($id);
        if ($ss->pic != 'no_pic.png') {
            if (file_exists(public_path() . '/img/upload/' . $ss->pic)) {
                File::delete(public_path() . '/img/upload/' . $ss->pic);
            }
        }
        $ss->pic = 'no_pic.png';
        $ss->save();
        return view('Admin.Columnists.edit', ['co' => $ss]);
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
        $co = Article::find($id);
        return view('Admin.Columnists.edit', ['co' => $co]);
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
        $aa = Article::find($id);
        $aa->nm = $request->name;
        $aa->des = $request->des;
        $aa->de = $request->detail;

        if ($request->hasFile('image')) {

            if($aa->pic != 'no_pic.png'){
                if (file_exists(public_path() . '/img/upload/' . $aa->pic)) {
                    File::delete(public_path() . '/img/upload/' . $aa->pic);
                }
            }

            $filename = str_random(10) . '.' . $request->file('image')->getClientOriginalExtension();
            $request->file('image')->move(public_path() . '/img/upload/', $filename);
            $aa->pic = $filename;
        }
        Session::flash('status', 'success');
        $aa->save();

        return redirect('Admin/Columnists');
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
        $ss = Article::find($id);
        if ($ss->pic != 'no_pic.png') {
            if (file_exists(public_path() . '/img/upload/' . $ss->pic)) {
                File::delete(public_path() . '/img/upload/' . $ss->pic);
            }
        }

        Article::destroy($id);
        Session::flash('status', 'success');
        return redirect('Admin/Columnists');
    }



    public function settest($id1 , $id2)
    {
        $r = Article::find($id1);
        $r->shows = $id2;
        $r->save();
        return back();
    }

}
