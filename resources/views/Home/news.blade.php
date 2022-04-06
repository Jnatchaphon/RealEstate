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
<div class="container-fluid bg-detail">
    <div class="container p-0">
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



    <div class="container p-0">
        <div class="container mt-5 mb-5">
            <div class="col-nm">
                <h2 class="promptb text-center text-white">
                    @switch($types)
                    @case("news")
                    GUNNERS NEWS
                    @break
                    @case("columnists")
                    COLUMNISTS
                    @break
                    @case("sportsworld")
                    SPORTSWORLD
                    @break
                    @case("previews")
                    MATCH PREVIEWS
                    @break
                    @endswitch
                </h2>
            </div>
        </div>

        <div class="row mt-3">


            @if(!isset($_GET["page"]) || ($_GET["page"] == '1'))
            <div class="card-columns">
                @foreach ($n1 as $r)
                <div class="card bg-topic brdn tog">
                    @switch($types)
                    @case("news")
                    <a href="{{url('news/'.$r->id.'.html')}}" class="nav-link m-0 p-0">
                        @break
                        @case("columnists")
                        <a href="{{url('columnist/'.$r->id.'.html')}}" class="nav-link m-0 p-0">
                            @break
                            @case("sportsworld")
                            <a href="{{url('sportsworld/'.$r->id.'.html')}}" class="nav-link m-0 p-0">
                                @break
                                @case("previews")
                                <a href="{{url('preview/'.$r->id.'.html')}}" class="nav-link m-0 p-0">
                                    @break
                                    @endswitch

                                    <img src="{{ url('img/upload/'.$r->pic) }}" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title promptb mt-0">{{ $r->nm }}</h5>
                                        <!-- {!! Illuminate\Support\Str::limit($r->de, 200, $end='...') !!} -->
                                        <p class="card-text promptl">{{ $r->des }}</p>
                                    </div>
                                    <div class="card-footer text-center">
                                        <small class="text-muted txtsm">
                                            <i class="far fa-eye"></i>
                                            @switch($types)
                                            @case("news")
                                            @case("previews")
                                            {{ $r->n_views }}
                                            @break
                                            @case("columnists")
                                            {{ $r->a_views }}
                                            @break
                                            @case("sportsworld")
                                            {{ $r->v_views }}
                                            @break
                                            @endswitch
                                            |
                                            <i class="far fa-clock"></i>
                                            @switch($types)
                                            @case("news")
                                            @case("previews")
                                            {{ $r->n_date }}
                                            @break
                                            @case("columnists")
                                            {{ $r->a_date }}
                                            @break
                                            @case("sportsworld")
                                            {{ $r->v_date }}
                                            @break
                                            @endswitch

                                        </small>
                                    </div>
                                </a>
                </div>
                @endforeach
            </div>
            @endif


            @foreach ($n2 as $r)

            <div class="card w-100 mt-1">

                @switch($types)
                @case("news")
                @case("previews")
                <a href="{{url('news/'.$r->id.'.html')}}" class="nav-link m-0 p-0">
                    @break
                    @case("columnists")
                    <a href="{{url('columnist/'.$r->id.'.html')}}" class="nav-link m-0 p-0">
                        @break
                        @case("sportsworld")
                        <a href="{{url('sportsworld/'.$r->id.'.html')}}" class="nav-link m-0 p-0">
                            @break
                            @case("previews")
                            <a href="{{url('preview/'.$r->id.'.html')}}" class="nav-link m-0 p-0">
                                @break
                                @endswitch
                                <div class="card-body togsm">
                                    <div class="col-sm-10 p-0 m-0 float-left">
                                        <p class="card-text promptb">{{ $r->nm }}</p>
                                    </div>
                                    <div class="col-sm-2 p-0 m-0 float-left">
                                        <p class="text-left txtsm m-0">
                                            <i class="far fa-eye"></i>
                                            @switch($types)
                                            @case("news")
                                            @case("previews")
                                            {{ $r->n_views }}
                                            @break
                                            @case("columnists")
                                            {{ $r->a_views }}
                                            @break
                                            @case("sportsworld")
                                            {{ $r->v_views }}
                                            @break
                                            @endswitch
                                            |
                                            <i class="far fa-clock"></i>
                                            @switch($types)
                                            @case("news")
                                            @case("previews")
                                            {{ $r->n_date }}
                                            @break
                                            @case("columnists")
                                            {{ $r->a_date }}
                                            @break
                                            @case("sportsworld")
                                            {{ $r->v_date }}
                                            @break
                                            @endswitch

                                        </p>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
            </div>

            @endforeach
            <div class="card w-100 mt-1">
                <div class="card-body">
                    <ul class="pagination pagination-sm m-0 float-right">
                        {!! $n2->render() !!}
                    </ul>
                </div>
            </div>

            <!--
        <div class="container text-center m-5">
            <img src="{{url('img/btnload.png')}}" class="img-rounded">
        </div>
    -->
        </div>
    </div>



</div>

@endsection
