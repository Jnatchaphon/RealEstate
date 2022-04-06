@extends('layouts.app')


@section('title')
<title>THAI GUNNERS แหล่งรวมพลเหล่าอาร์เซน่อลแฟนคลับ,Arsenal,Gunners</title>
<meta name="keywords"
    content="ข่าวอาร์เซน่อล,Arsenal,Arsenal ข่าวล่าสุด,เดอะ กันเนอร์ส,Gunners Thailand,Arsenal Thailand,Gunners,อาร์เซน่อล แฟนคลับ" />
<meta name="description"
    content="THAIGUNNERS แหล่งรวมพลเหล่าอาร์เซน่อลแฟนคลับ,กันเนอร์,อาร์เซน่อล,Arsenal,ข่าว อาร์เซน่อล" />
<meta property="og:locale" content="th_TH" />
<meta property="og:type" content="website" />
<meta property="og:title" content="Thai Gunners แหล่งรวมพลเหล่าอาร์เซน่อลแฟนคลับ,Arsenal,Gunners" />
<meta property="og:url" content="http://www.thaigunners.com/" />
<meta property="og:site_name"
    content="Thai Gunners แหล่งรวมพลเหล่าอาร์เซน่อลแฟนคลับ,Arsenal Thailand,Gunners Thailand" />
@endsection


@section('content')
<div class="container-fluid bg-fade p-0">
    <div class="container">
        <div class="row border-bottom">
            <div class="col border-right">
                <i class="fab fa-facebook-f p-2" style="color: antiquewhite" aria-hidden="true"></i>
                <i class="fab fa-twitter p-2" style="color: antiquewhite" aria-hidden="true"></i>
                <i class="fab fa-instagram p-2" style="color: antiquewhite" aria-hidden="true"></i>
            </div>
            <div class="col txtc">
                TG.Thaigunners@gmail.com
            </div>
            <div class="col text-right text-white p-1 mr-3 txtr">
                +6696-293-9839
            </div>
        </div>
    </div>
    <div class="container-fluid p-0">

        <div class="row rfd p-0 m-0">
            <div class="col p-0">
                <div class="p-0 float-left ff1 mfade activeff">
                    <a href="{{url('news/'.$tn1[0]->id.'.html')}}" class="nav-link m-0 p-0">
                        <div class="card bg-dark text-white brdn cd1">
                            <div class="divfd">
                                <img src="{{ url('img/upload/'.$tn1[0]->pic) }}" class="picfd">
                            </div>
                            <div class="card-img-overlay w-75 imgovr1">
                                <div class="card-title promptb topicnews cd11">{{ $tn1[0]->nm }}</div>
                                <div class="card-title topicviews cd11">
                                    <i class="far fa-eye"></i>
                                    <h7>{{ $tn1[0]->n_views }}</h7> | <i class="far fa-clock"></i>
                                    <h7>{{ $tn1[0]->n_date }}</h7>
                                </div>
                            </div>
                            <div class="ttv1"></div>
                        </div>
                    </a>
                </div>

                <div class="p-0 float-left mfade ff2">
                    <a href="{{url('news/'.$tn2[0]->id.'.html')}}" class="nav-link m-0 p-0">
                        <div class="card bg-dark text-white brdn cd2">
                            <div class="divfd">
                                <img src="{{ url('img/upload/'.$tn2[0]->pic) }}" class="picfd">
                            </div>
                            <div class="card-img-overlay w-75 imgovr2">
                                <div class="card-title promptb topicnews cd22">{{ $tn2[0]->nm }}</div>
                                <div class="card-title topicviews cd22">
                                    <i class="far fa-eye"></i>
                                    <h7>{{ $tn2[0]->n_views }}</h7> | <i class="far fa-clock"></i>
                                    <h7>{{ $tn2[0]->n_date }}</h7>
                                </div>
                            </div>
                            <div class="ttv2"></div>
                        </div>
                    </a>
                </div>
                <div class="p-0 float-left mfade ff3">
                    <a href="{{url('news/'.$tn22[0]->id.'.html')}}" class="nav-link m-0 p-0">
                        <div class="card bg-dark text-white brdn cd3">
                            <div class="divfd">
                                <img src="{{ url('img/upload/'.$tn22[0]->pic) }}" class="picfd">
                            </div>
                            <div class="card-img-overlay w-75 imgovr3">
                                <div class="card-title promptb topicnews cd33">{{ $tn22[0]->nm }}</div>
                                <div class="card-title topicviews cd33">
                                    <i class="far fa-eye"></i>
                                    <h7>{{ $tn22[0]->n_views }}</h7> | <i class="far fa-clock"></i>
                                    <h7>{{ $tn22[0]->n_date }}</h7>
                                </div>
                            </div>
                            <div class="ttv3"></div>
                        </div>
                    </a>
                </div>
            </div>

        </div>


    </div>



    <div class="container-fluid preview p-0">
        <div class="row p-0">
            <div class="col-sm-6">
                <h3 class="promptb text-white mt-4">NEXT MATCH</h3>
                <div class="row p-0">
                    <div class="text-center nmh"><img src="{{ url('img/upload/'.$nmatch[0]->m_home) }}"
                            class="img-rounded" width="100"></div>
                    <div class="text-center nmm">
                        <h4 class="promptb text-white">vs</h4>
                    </div>
                    <div class="text-center nmh"><img src="{{ url('img/upload/'.$nmatch[0]->m_away) }}"
                            class="img-rounded" width="100"></div>
                </div>
                <div class="row p-0">
                    <div class="text-center nmh">
                        <h6 class="promptb text-white m-0">{{ $nmatch[0]->nm_home }}</h6>
                    </div>
                    <div class="text-left nmm"></div>
                    <div class="text-center nmh">
                        <h6 class="promptb text-white m-0">{{ $nmatch[0]->nm_away }}</h6>
                    </div>
                </div>
                <div class="row p-0">
                    <div class="col-sm">
                        <h6 class="promptl text-white">{!!$nmatch[0]->des !!}</h6>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 bgw">
                <div class="row p-1 mt-1">
                    <div class="col-sm mt-4">
                        <p class="text-sm font-weight-bold mb-2">LEAGUE TABLE</p>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-2 pt-3 text-center">
                        <img src="{{ url('img/img-up.png') }}" width="40">
                    </div>
                    <div class="col-2">
                        <h1 class="promptb text-center m-0">{{ $league->pos }}</h1>
                    </div>
                    <div class="col-2">
                        <h1 class="promptb text-center m-0">{{ $league->win }}</h1>
                    </div>
                    <div class="col-2">
                        <h1 class="promptb text-center m-0">{{ $league->draw }}</h1>
                    </div>
                    <div class="col-2">
                        <h1 class="promptb text-center m-0">{{ $league->lost }}</h1>
                    </div>
                    <div class="col-2">
                        <h1 class="promptb text-center m-0">{{ $league->pts }}</h1>
                    </div>
                </div>
                <div class="row p-1">
                    <div class="col-2">

                    </div>
                    <div class="col-2">
                        <p class="text-sm font-weight-bold text-center">POSITION</p>
                    </div>
                    <div class="col-2">
                        <p class="text-sm font-weight-bold text-center">WIN</p>
                    </div>
                    <div class="col-2">
                        <p class="text-sm font-weight-bold text-center">DRAW</p>
                    </div>
                    <div class="col-2">
                        <p class="text-sm font-weight-bold text-center">LOST</p>
                    </div>
                    <div class="col-2">
                        <p class="text-sm font-weight-bold text-center">POINT</p>
                    </div>
                </div>
                <div class="row p-1 mt-3">
                    <div class="col-2">

                    </div>
                    <div class="col-3 p-0 text-center">
                        <p class="text-sm font-weight-bold text-center mb-1">TOP SCROES</p>
                    </div>
                    <div class="col-3 p-0 ml-3 text-center">
                        <p class="text-sm font-weight-bold text-center mb-1">MOST ASSISTED</p>
                    </div>
                    <div class="col-3 p-0 ml-3 text-center">
                        <p class="text-sm font-weight-bold text-center mb-1">AVG. RATING</p>
                    </div>
                </div>
                <div class="row p-1">
                    <div class="col-2">

                    </div>
                    <div class="col-3 p-0 text-center">
                        <img src="{{ url('img/upload/'.$player[0]->pic1) }}" class="img-circle" width="80">
                    </div>
                    <div class="col-3 p-0 ml-3 text-center">
                        <img src="{{ url('img/upload/'.$player[0]->pic1) }}" class="img-circle" width="80">
                    </div>
                    <div class="col-3 p-0 ml-3 text-center">
                        <img src="{{ url('img/upload/'.$player[0]->pic1) }}" class="img-circle" width="80">
                    </div>
                </div>
                <div class="row p-1 mb-3">
                    <div class="col-2">

                    </div>
                    <div class="col-3 p-0 text-center">
                        <h1 class="promptb text-center m-0 mt-1">{{ $player[0]->goals }}</h1>
                    </div>
                    <div class="col-3 p-0 ml-3 text-center">
                        <h1 class="promptb text-center m-0 mt-1">{{ $player[0]->goals }}</h1>
                    </div>
                    <div class="col-3 p-0 ml-3 text-center">
                        <h1 class="promptb text-center m-0 mt-1">{{ $player[0]->goals }}</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>




<div class="container mb-5">
    <div class="bannerb" style="position: absolute; z-index: 100; left: 15%;"><img src="{{url('img/B-2.png')}}"></div>
    <div class="bannerb" style="position: absolute; z-index: 100; right: 15%;"><img src="{{url('img/B-2.png')}}"></div>
    <div class="container mt-4 mb-4">
        <div class="row"><img src="{{url('img/B-1.jpg')}}"></div>
        <div class="row">
            <div class="col-nm">
                <h2 class="promptb text-center text-white">GUNNERS NEWS</h1>
            </div>
        </div>
    </div>


    <div class="row">
        <div class="col-sm-8  tn">
            <a href="{{url('news/'.$n1[0]->id.'.html')}}" class="nav-link m-0 p-0">
                <div class="card bg-dark text-white brdn">
                    <div class="divab">
                        <div class="logonews"><img src="{{url('img/newsico.jpg')}}"></div>
                        <img src="{{ url('img/upload/'.$n1[0]->pic) }}" class="picab">
                    </div>
                    <div class="card-img-overlay w-75 topichvarietyc2">
                        <div class="card-title promptb topicnews">{{ $n1[0]->nm }}</div>
                        <div class="card-title topicviews">
                            <i class="far fa-eye"></i>
                            <h7>{{ $n1[0]->n_views }}</h7> | <i class="far fa-clock"></i>
                            <h7>{{ $n1[0]->n_date }}</h7>
                        </div>
                    </div>
                    <div class="topichvariety2"></div>
                    <div class="bg-topicnews"></div>

                </div>
            </a>
        </div>
        <div class="col-sm-4 tn2">
            <a href="{{url('news/'.$n2[0]->id.'.html')}}" class="nav-link m-0 p-0">
                <div class="card divab2 brdn">
                    <div class="logonews"><img src="{{url('img/clipico.jpg')}}"></div>
                    <img src="{{ url('img/upload/'.$n2[0]->pic) }}" class="card-img-top">
                    <div class="card-body bgred p-2">
                        <p class="card-text text-white pb-2 pt-1">{{ $n2[0]->n_date }}<br>
                            {{ $n2[0]->nm }}</p>
                    </div>
                </div>
            </a>
        </div>
    </div>

    <div class="row mt-3">
        <div class="card-columns overflow-hidden">
            @foreach ($n3 as $r)

            <div class="card bg-topic brdn tog">
                <a href="{{url('news/'.$r->id.'.html')}}" class="nav-link m-0 p-0">
                    <div class="col p-0 m-0"><img src="{{ url('img/upload/'.$r->pic) }}" class="card-img-top" alt="...">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title promptb mt-0">{{ $r->nm }}</h5>
                        <!-- {!! Illuminate\Support\Str::limit($r->de, 200, $end='...') !!} -->
                        <p class="card-text promptl">{{ $r->des }}</p>
                    </div>
                    <div class="card-footer text-center">
                        <small class="text-muted txtsm"> <i class="far fa-eye"></i>
                            {{ $r->n_views }} | <i class="far fa-clock"></i>
                            {{ $r->n_date }}
                        </small>
                    </div>
                </a>
            </div>
            @endforeach


        </div>

        <!--
        <div class="container text-center m-5">
            <img src="{{url('img/btnload.png')}}" class="img-rounded">
        </div>
    -->
    <div class="row"><img src="{{url('img/B-1.jpg')}}"></div>
        <div class="col-sm-12 mt-2 bannerb">

            <div style="margin:auto; width:100%; height:90px; margin-bottom:20px;">
                <script charset="windows-1251" type="text/javascript">
                    (function (e) {
                        var t = "DIV_DA_" + e + "_" + parseInt(Math.random() * 1e3);
                        document.write('<div id="' + t + '" class="DA-BLOCK DA-BLOCK-' + e + '"></div>');
                        if ("undefined" === typeof loaded_blocks_da) {
                            loaded_blocks_da = [];

                            function n() {
                                var e = loaded_blocks_da.shift();
                                var t = e.adp_id;
                                var r = e.div;
                                var i = document.createElement("script");
                                i.type = "text/javascript";
                                i.async = true;
                                i.charset = "windows-1251";
                                i.src = "//www.yengo.com/show.cgi?async=1&adp=" + t + "&div=" + r + "&t=" + Math
                                    .random();
                                var s = document.getElementsByTagName("head")[0] || document.getElementsByTagName(
                                    "body")[0];
                                s.appendChild(i);
                                var o = setInterval(function () {
                                    if (document.getElementById(r).innerHTML && loaded_blocks_da.length) {
                                        n();
                                        clearInterval(o)
                                    }
                                }, 50)
                            }
                            setTimeout(n)
                        }
                        loaded_blocks_da.push({
                            adp_id: e,
                            div: t
                        })
                    })(95196)

                </script>
            </div>

        </div>
    </div>
</div>

<div class="container-fluid bgviolet p-0 m-0">
    <div class="container">
        <div class="row">
            <div class="col-sm-7 p-0">
                <div class="h2 col p-3 text-white promptb bgpink">TEAM OF THE WEEK <br> GAMEWEEK 1</div>
                <img src="{{url('img/tow.jpg')}}" class="img-fluid">
            </div>

            <div class="col-sm-5 p-0">
                <img src="{{url('img/tow2.jpg')}}" class="img-fluid">
            </div>
        </div>
    </div>
</div>



<div class="home-demo">
    <div class="row"><img src="{{url('img/B-1.jpg')}}"></div>
    <div class="row mt-0 mb-0">
        <div class="col-sm">
            <h2 class="promptb text-center text-white p-2 mb-4">COLUMNIST</h2>
        </div>
    </div>
    <div class="row">
        <div class="col-sm">
            <div class="owl-carousel owl-theme">

                @foreach($co as $r)
                <div class="item">

                    <div class="col p-0 m-0 float-left">
                        <a href="{{url('columnist/'.$r->id.'.html')}}" class="nav-link m-0 p-0">
                            <div class="card bg-dark text-white brdn ">
                                <div class="divco">
                                    <img src="{{ url('img/upload/'.$r->pic) }}" class="picco">
                                </div>
                                <div class="card-img-overlay bgcolumn">
                                    <h6 class="card-title text-white promptl p-1 topiccolumns">{{ $r->nm }}</h6>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </div>
</div>




<div class="container mt-5">
    <div class="row"><img src="{{url('img/B-1.jpg')}}"></div>
    <div class="row">
        <div class="col-sm p-1 m-0"><img src="{{url('img/bg-variety.png')}}" height=""></div>
        <div class="col-sm p-1 m-0">
            <a href="{{url('sportsworld/'.$ar1[0]->id.'.html')}}" class="nav-link m-0 p-0">
                <div class="card bg-dark text-white bg-varietybar pb-2 brdn">
                    <div class="divva">
                        <img src="{{ url('img/upload/'.$ar1[0]->pic) }}" class="picva">
                    </div>
                    <div class="card-img-overlay">
                        <h3 class="card-title text-white promptb topichvarietyc">{{ $ar1[0]->nm }}</h3>
                        <div class="topichvariety"></div>
                    </div>
                </div>
            </a>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6 p-0 m-0">
            @foreach($ar2 as $r)
            <div class="col-6 p-1 m-0 float-left">
                <a href="{{url('sportsworld/'.$r->id.'.html')}}" class="nav-link m-0 p-0">
                    <div class="card bg-dark text-white brdn">
                        <div class="divva2">
                            <img src="{{  url('img/upload/'.$r->pic)  }}" class="picva2">
                        </div>
                        <div class="card-img-overlay p-1">
                            <h6 class="card-title text-white promptl topicvariety">{{ $r->nm }}</h6>
                        </div>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
        <div class="col-sm-6 p-0 m-0">
            @foreach($ar3 as $r)
            <div class="col-6 p-1 m-0 float-left">
                <a href="{{url('sportsworld/'.$r->id.'.html')}}" class="nav-link m-0 p-0">
                    <div class="card bg-dark text-white brdn">
                        <div class="divva2">
                            <img src="{{  url('img/upload/'.$r->pic)  }}" class="picva2">
                        </div>
                        <div class="card-img-overlay p-1">
                            <h6 class="card-title text-white promptl topicvariety">{{ $r->nm }}</h6>
                        </div>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
    </div>
</div>



<div class="container mt-5">
    <div class="row">
        <div class="col-sm p-1 m-0"><img src="{{url('img/bg-trendy.png')}}" height=""></div>
        <div class="col-sm p-1 m-0">
            <a href="{{url('variety/'.$va1[0]->id.'.html')}}" class="nav-link m-0 p-0">
                <div class="card bg-dark text-white bg-varietybar pb-2 brdn">
                    <div class="divva">
                        <img src="{{ url('img/upload/'.$va1[0]->pic) }}" class="picva">
                    </div>
                    <div class="card-img-overlay">
                        <h3 class="card-title text-white promptb topichvarietyc">{{ $va1[0]->nm }}</h3>
                        <div class="topichvariety"></div>
                    </div>
                </div>
            </a>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6 p-0 m-0">

            @foreach($va2 as $r)
            <div class="col-6 p-1 m-0 float-left">
                <a href="{{url('variety/'.$r->id.'.html')}}" class="nav-link m-0 p-0">
                    <div class="card bg-dark text-white brdn">
                        <div class="divva2">
                            <img src="{{  url('img/upload/'.$r->pic)  }}" class="picva2">
                        </div>
                        <div class="card-img-overlay p-1">
                            <h6 class="card-title text-white promptl topicvariety">{{ $r->nm }}</h6>
                        </div>
                    </div>
                </a>
            </div>
            @endforeach

        </div>
        <div class="col-sm-6 p-0 m-0">
            @foreach($va3 as $r)
            <div class="col-6 p-1 m-0 float-left">
                <a href="{{url('variety/'.$r->id.'.html')}}" class="nav-link m-0 p-0">
                    <div class="card bg-dark text-white brdn">
                        <div class="divva2">
                            <img src="{{  url('img/upload/'.$r->pic)  }}" class="picva2">
                        </div>
                        <div class="card-img-overlay p-1">
                            <h6 class="card-title text-white promptl topicvariety">{{ $r->nm }}</h6>
                        </div>
                    </div>
                </a>
            </div>
            @endforeach

        </div>
    </div>
    <div class="row"><img src="{{url('img/B-1.jpg')}}"></div>
</div>



@endsection


