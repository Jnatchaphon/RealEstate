@extends('Admin.app')



@section('stylesheet')
@include('Admin.stylesheet')
@endsection


@section('menuadmin')
@include('Admin.menu')
@endsection


@section('contentadmin')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Columnists</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ url('/Admin') }}">Home</a></li>
                    <li class="breadcrumb-item active">Columnists</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<div class="card">
    <div class="card-header">
        <div class="row mb-0">
            <div class="col-sm-10"><h3>แสดงข้อมูล [ทั้งหมด {{ $count }} รายการ]</h3></div>
            <div class="col-sm-2 text-right"><a href='{{ url('/Admin/Columnists/create') }}'><input type="submit" class="btn btn-danger" value="เพิ่มข้อมูล"></a></div>
        </div>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <table class="table table-bordered">
            <thead class="table-dark">
                <tr>
                    <th scope="col" class="text-center"  style="width: 8%;">#</th>
                    <th scope="col" class="text-center" style="width: 10%;">Image</th>
                    <th scope="col" class="text-center">Topic</th>
                    <th scope="col" class="text-center" style="width: 8%;"></th>
                </tr>
            </thead>
            @foreach($co as $news)
            <tr>
                <th scope="row" class="text-center" style="vertical-align: middle;">{{ ($co ->currentpage()-1) * $co ->perpage() + $loop->index + 1 }}</th>
                <td class="text-center" style="vertical-align: middle;">
                    <a href="{{ url('img/upload/'.$news->pic) }}" data-lity><img src="{{ url('img/upload/'.$news->pic) }}" class="img-thumbnail" width="30" height="30"></a>
                </td>
                <td class="text-center" style="vertical-align: middle; height: 50px;">{{ $news->nm }}</td>
                <td style="display: flex; justify-content: center;">
                    @if($news->shows == 1)
                    <a href="{{ url('/Admin/CSet/'.$news->id.'/0') }}" class="btn btn-link p-1"><i class="fas fa-eye"></i></a>
                    @elseif($news->shows == 0)
                    <a href="{{ url('/Admin/CSet/'.$news->id.'/1') }}" class="btn btn-link-dark p-1"><i class="fas fa-eye-slash"></i></a>
                    @endif
                    <a href="{{ route('Columnists.edit' , $news->id) }}" class="btn btn-link p-1"><i class="fas fa-edit"></i></a>
                    <form action="{{ route('Columnists.destroy', $news->id)}}" method="post" onclick="return confirm('Are you sure.')">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-link p-1" type="submit"><i class="fas fa-trash"></i></button>
                    </form>
                </td>
            </tr>
            @endforeach

        </table>

        <div class="row mt-3">
            <div class="col-12">
                <ul class="pagination pagination-sm m-0 float-right">
                    {!! $co->render() !!}
                </ul>
            </div>
        </div>
    </div>
    <!-- /.card-body -->
</div>


@endsection



@section('footer')
@include('Admin.footer')
@endsection


@section('script')
@include('Admin.script')

@endsection
