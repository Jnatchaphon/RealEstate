<?php

namespace App\Http\Controllers;

use App\Article;
use App\News;
use App\Variety;
use App\League;
use App\Player;
use App\Nextmatch;

class HomeController extends Controller
{
    public function index()
    {

        $player = Player::where('shows', '=', '1')->orderby('id', 'desc')->limit(1)->offset(0)->get();
        $nmatch = Nextmatch::where('shows', '=', '1')->orderby('id', 'desc')->limit(1)->offset(0)->get();
        $league = League::find(1);

        $tn1 = News::where('shows', 1)->orderby('id', 'desc')->limit(1)->offset(0)->get();
        $tn2 = News::where('shows', 1)->orderby('id', 'desc')->limit(1)->offset(1)->get();
        $tn22 = News::where('shows', 1)->orderby('id', 'desc')->limit(1)->offset(2)->get();

        $n1 = News::where('shows', 1)->orderby('id', 'desc')->limit(1)->offset(3)->get();
        $n2 = News::where('shows', 1)->orderby('id', 'desc')->limit(1)->offset(4)->get();
        $n3 = News::where('shows', 1)->orderby('id', 'desc')->limit(9)->offset(5)->get();

        $ar1 = Variety::where('shows', '=', 1)->where('v_type', '=', '1')->orderby('id', 'desc')->limit(1)->offset(0)->get();
        $ar2 = Variety::where('shows', '=', 1)->where('v_type', '=', '1')->orderby('id', 'desc')->limit(2)->offset(1)->get();
        $ar3 = Variety::where('shows', '=', 1)->where('v_type', '=', '1')->orderby('id', 'desc')->limit(2)->offset(3)->get();

        $va1 = Variety::where('shows', '=', 1)->where('v_type', '=', '2')->orderby('id', 'desc')->limit(1)->offset(0)->get();
        $va2 = Variety::where('shows', '=', 1)->where('v_type', '=', '2')->orderby('id', 'desc')->limit(2)->offset(1)->get();
        $va3 = Variety::where('shows', '=', 1)->where('v_type', '=', '2')->orderby('id', 'desc')->limit(2)->offset(3)->get();

        $co = Article::where('shows', '=', '1')->orderby('id', 'desc')->limit(9)->offset(0)->get();

        return view('Home.index', [
            'tn1' => $tn1, 'tn2' => $tn2, 'tn22' => $tn22,  'n1' => $n1, 'n2' => $n2, 'n3' => $n3, 'ar1' => $ar1, 'ar2' => $ar2, 'ar3' => $ar3, 'va1' => $va1,
            'va2' => $va2, 'va3' => $va3, 'co' => $co, 'player' => $player, 'nmatch' => $nmatch, 'league' => $league
        ]);
    }

    public function newsdetail($id1, $id2)
    {
        switch ($id1) {
            case 'news': {
                    $r = News::find($id2);
                    $r->n_views += 1;
                    $r->save();
                    $r2 = News::where('shows', '=', '1')->where('id', '!=', $id2)->where('n_type', '=', 1)->orderby('id', 'desc')->limit(1)->offset(0)->get();
                    $r3 = News::where('shows', '=', '1')->where('id', '!=', $id2)->where('n_type', '=', 1)->orderby('id', 'desc')->limit(4)->offset(1)->get();
                    $r4 = News::where('shows', '=', '1')->where('id', '!=', $id2)->where('n_type', '=', 1)->orderby('id', 'desc')->limit(3)->offset(5)->get();
                }
                break;
            case 'preview': {
                    $r = News::find($id2);
                    $r->n_views += 1;
                    $r->save();
                    $r2 = News::where('shows', '=', '1')->where('id', '!=', $id2)->where('n_type', '=', 3)->orderby('id', 'desc')->limit(1)->offset(0)->get();
                    $r3 = News::where('shows', '=', '1')->where('id', '!=', $id2)->where('n_type', '=', 3)->orderby('id', 'desc')->limit(4)->offset(1)->get();
                    $r4 = News::where('shows', '=', '1')->where('id', '!=', $id2)->where('n_type', '=', 3)->orderby('id', 'desc')->limit(3)->offset(5)->get();
                }
                break;
            case 'variety': {
                    $r = Variety::find($id2);
                    $r->v_views += 1;
                    $r->save();
                    $r2 = Variety::where('shows', '=', '1')->where('id', '!=', $id2)->where('v_type', '=', 2)->orderby('id', 'desc')->limit(1)->offset(0)->get();
                    $r3 = Variety::where('shows', '=', '1')->where('id', '!=', $id2)->where('v_type', '=', 2)->orderby('id', 'desc')->limit(4)->offset(1)->get();
                    $r4 = Variety::where('shows', '=', '1')->where('id', '!=', $id2)->where('v_type', '=', 2)->orderby('id', 'desc')->limit(3)->offset(5)->get();
                }
                break;
            case 'sportsworld': {
                    $r = Variety::find($id2);
                    $r->v_views += 1;
                    $r->save();
                    $r2 = Variety::where('shows', '=', '1')->where('id', '!=', $id2)->where('v_type', '=', 1)->orderby('id', 'desc')->limit(1)->offset(0)->get();
                    $r3 = Variety::where('shows', '=', '1')->where('id', '!=', $id2)->where('v_type', '=', 1)->orderby('id', 'desc')->limit(4)->offset(1)->get();
                    $r4 = Variety::where('shows', '=', '1')->where('id', '!=', $id2)->where('v_type', '=', 1)->orderby('id', 'desc')->limit(3)->offset(5)->get();
                }
                break;
            case 'columnist': {
                    $r = Article::find($id2);
                    $r->a_views += 1;
                    $r->save();
                    $r2 = Article::where('shows', '=', '1')->where('id', '!=', $id2)->orderby('id', 'desc')->limit(1)->offset(0)->get();
                    $r3 = Article::where('shows', '=', '1')->where('id', '!=', $id2)->orderby('id', 'desc')->limit(4)->offset(1)->get();
                    $r4 = Article::where('shows', '=', '1')->where('id', '!=', $id2)->orderby('id', 'desc')->limit(3)->offset(5)->get();
                }
                break;
        }

        return view('Home.newsdetail', ['r' => $r, 'r2' => $r2, 'r3' => $r3, 'r4' => $r4, 'page' => $id1]);
    }



    public function news()
    {
        $n1 = News::where('shows', 1)->orderby('id', 'desc')->limit(9)->offset(0)->get();
        foreach ($n1 as $r) {
            $t[] = $r->id;
        }
        $n2 = News::where('shows', 1)->where([
            ['id', '!=', $t[0]],
            ['id', '!=', $t[1]],
            ['id', '!=', $t[2]],
            ['id', '!=', $t[3]],
            ['id', '!=', $t[4]],
            ['id', '!=', $t[5]],
            ['id', '!=', $t[6]],
            ['id', '!=', $t[7]],
            ['id', '!=', $t[8]],
        ])->orderby('id', 'desc')->paginate(15)->oneachside(2);
        $types = "news";
        return view('Home.news', ['n1' => $n1, 'n2' => $n2, 'types' => $types]);
    }



    public function columnists()
    {
        $n1 = Article::where('shows', 1)->orderby('id', 'desc')->limit(9)->offset(0)->get();
        foreach ($n1 as $r) {
            $t[] = $r->id;
        }
        $n2 = Article::where('shows', 1)->where([
            ['id', '!=', $t[0]],
            ['id', '!=', $t[1]],
            ['id', '!=', $t[2]],
            ['id', '!=', $t[3]],
            ['id', '!=', $t[4]],
            ['id', '!=', $t[5]],
            ['id', '!=', $t[6]],
            ['id', '!=', $t[7]],
            ['id', '!=', $t[8]],
        ])->orderby('id', 'desc')->paginate(15)->oneachside(2);
        $types = "columnists";
        return view('Home.news', ['n1' => $n1, 'n2' => $n2, 'types' => $types]);
    }


    public function sportsworld()
    {
        $n1 = Variety::where('shows', '=', 1)->where('v_type', '=', '1')->orderby('id', 'desc')->limit(9)->offset(0)->get();
        foreach ($n1 as $r) {
            $t[] = $r->id;
        }
        $n2 = Variety::where('shows', 1)->where([
            ['id', '!=', $t[0]],
            ['id', '!=', $t[1]],
            ['id', '!=', $t[2]],
            ['id', '!=', $t[3]],
            ['id', '!=', $t[4]],
            ['id', '!=', $t[5]],
            ['id', '!=', $t[6]],
            ['id', '!=', $t[7]],
            ['id', '!=', $t[8]],
        ])->orderby('id', 'desc')->paginate(15)->oneachside(2);
        $types = "sportsworld";
        return view('Home.news', ['n1' => $n1, 'n2' => $n2, 'types' => $types]);
    }


    public function previews()
    {
        $n1 = News::where('shows', 1)->where('n_type', '=', 3)->orderby('id', 'desc')->limit(9)->offset(0)->get();
        foreach ($n1 as $r) {
            $t[] = $r->id;
        }
        $n2 = News::where('shows', 1)->where([
            ['n_type', '=', 3],
            ['id', '!=', $t[0]],
            ['id', '!=', $t[1]],
            ['id', '!=', $t[2]],
            ['id', '!=', $t[3]],
            ['id', '!=', $t[4]],
            ['id', '!=', $t[5]],
            ['id', '!=', $t[6]],
            ['id', '!=', $t[7]],
            ['id', '!=', $t[8]],
        ])->orderby('id', 'desc')->paginate(15)->oneachside(2);
        $types = "previews";
        return view('Home.news', ['n1' => $n1, 'n2' => $n2, 'types' => $types]);
    }
}
