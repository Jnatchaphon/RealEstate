<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Image;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\File;
use App\News;
use App\Http\Requests\NewsRequest;
use DateTime;

class NewsController extends Controller
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
        $new = News::orderby('id','desc')->paginate(15);
        $count = News::count();
        return view('Admin.News.index', ['new' => $new , 'count' => $count]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('Admin.News.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(NewsRequest $request)
    {
        //
        $news = new News();
        $news->nm = $request->name;
        $news->des = $request->des;
        $news->de = $request->detail;
        $news->n_type = $request->types;
        $news->shows = 1;
        $news->p_1 = 0;
        $news->p_2 = 0;
        $news->n_views = 0;
        $news->w_views = 0;
        $news->m_views = 0;
        $news->n_date = date("j-n-Y");
        $news->w_date = date("j-n-Y");
        $news->m_date = date("j-n-Y");
        $news->n_time = date('H:i:s');
        $news->pin = 2;
        $news->t_r = 2;
        $news->str_n = 0;
        $news->str_w = 0;
        $news->str_m = 0;




        if ($request->hasFile('image')) {
            $filename = str_random(10) . '.' . $request->file('image')->getClientOriginalExtension();
            $request->file('image')->move(public_path() . '/img/upload/', $filename);
            $news->pic = $filename;
        } else {
            $news->pic = 'no_pic.png';
        }
        Session::flash('status', 'success');
        $news->save();


        return redirect('Admin/News');
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
        $ss = News::find($id);
        if ($ss->pic != 'no_pic.png') {
            if (file_exists(public_path() . '/img/upload/' . $ss->pic)) {
                File::delete(public_path() . '/img/upload/' . $ss->pic);
            }
        }
        $ss->pic = 'no_pic.png';
        $ss->save();
        return view('Admin.News.edit', ['news' => $ss]);
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
        $news = News::find($id);
        return view('Admin.News.edit', ['news' => $news]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(NewsRequest $request, $id)
    {
        //
        $news = News::find($id);
        $news->nm = $request->name;
        $news->des = $request->des;
        $news->de = $request->detail;
        $news->n_type = $request->types;

        if ($request->hasFile('image')) {

            if($news->pic != 'no_pic.png'){
                if (file_exists(public_path() . '/img/upload/' . $news->pic)) {
                    File::delete(public_path() . '/img/upload/' . $news->pic);
                }
            }

            $filename = str_random(10) . '.' . $request->file('image')->getClientOriginalExtension();
            $request->file('image')->move(public_path() . '/img/upload/', $filename);
            $news->pic = $filename;
        }
        Session::flash('status', 'success');
        $news->save();

        return redirect('Admin/News');
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
        $ss = News::find($id);
        if ($ss->pic != 'no_pic.png') {
            if (file_exists(public_path() . '/img/upload/' . $ss->pic)) {
                File::delete(public_path() . '/img/upload/' . $ss->pic);
            }
        }

        News::destroy($id);
        Session::flash('status', 'success');
        return redirect('Admin/News');
    }




    public function settest($id1 , $id2)
    {
        $r = News::find($id1);
        $r->shows = $id2;
        $r->save();
        return back();
    }



}
