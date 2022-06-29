@extends('admin.empty')
@section('css')
    @toastr_css

@endsection



@section('title')
{{trans('main_trans.Categories')}}
@stop
@section('page-header')
    <!-- breadcrumb -->
    <div class="page-title">
        <div class="row">
            <div class="col-sm-6">
                <h4 class="mb-0"> {{trans('main_trans.Categories')}}
                </h4>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right ">
                    <li class="breadcrumb-item"><a href="#" class="default-color">Home</a></li>
                    <li class="breadcrumb-item active">{{trans('main_trans.Categories')}}</li>
                </ol>
            </div>
        </div>
    </div>
    <!-- breadcrumb -->
@endsection
@section('content')
    <!-- row -->
    <div class="row">
        <div class="col-xl-12 mb-30">
            <div class="card card-statistics h-100">
                <a href="{{route('admin.cat.create')}}" class="btn btn-lg btn-success justify-content-center  mt-10 bg-gradient ml-1" style="margin-left: 260px">{{trans('main_trans.Add Categories')}}</a>

                <div class="card-body">

                    <div class="table-responsive">
                        <table id="datatable" class="table table-striped table-bordered p-0">
                            <thead>
                            <tr>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">{{trans('main_trans.Name')}}</th>
                                <th scope="col">{{trans('main_trans.Actions')}}</th>
                            </tr>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($cats as $cat)
                                <tr>
                                    <th scope="row">{{$loop->iteration}}</th>
                                    <td>{{$cat->name}}</td>
                                    <td>
                                        <a href="{{route('admin.cat.edit',$cat->id)}}" class="btn btn-sm btn-primary m-1">{{trans('main_trans.Edit')}}</a>
                                        <a href="{{route('admin.cat.delete',$cat->id)}}"  class="btn btn-sm btn-danger">{{trans('main_trans.Delete')}}</a>




                                </tr>
                            @endforeach

                            </tbody>

                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- row closed -->
@endsection
@section('js')

    @toastr_js
    @toastr_render


@endsection




























{{--@extends('admin.empty')--}}

{{--@section('css')--}}


{{--@endsection--}}


{{--@section('content')--}}



{{--        <div class="d-flex justify-content-center">--}}
{{--            @if (session()->has('delete'))--}}
{{--                <div class="alert alert-success alert-dismissible fade show" role="alert">--}}
{{--                    <strong>{{ session()->get('delete') }}</strong>--}}

{{--                </div>--}}
{{--            @endif--}}

{{--        </div>--}}


{{--        <div class="d-flex justify-content-center">--}}
{{--            @if (session()->has('Add'))--}}
{{--                <div class="alert alert-success alert-dismissible fade show" role="alert">--}}
{{--                    <strong>{{ session()->get('Add') }}</strong>--}}

{{--                </div>--}}
{{--            @endif--}}

{{--        </div>--}}

{{--        <div class="d-flex justify-content-center">--}}
{{--            @if (session()->has('update'))--}}
{{--                <div class="alert alert-success alert-dismissible fade show" role="alert">--}}
{{--                    <strong>{{ session()->get('update') }}</strong>--}}

{{--                </div>--}}
{{--            @endif--}}

{{--        </div>--}}

{{--        <div class="container justify-content-center mt-10 text-lg-center">--}}
{{--            <h3 class=" bg-gradient text-dark text-start" style="margin-left: 300px">ADD CATEGORIES</h3>--}}
{{--            <a href="{{route('admin.cat.create')}}" class="btn btn-lg btn-dark justify-content-center  mt-10 bg-gradient" style="margin-left: 260px">ADD CATEGORIES</a>--}}

{{--        </div>--}}

{{--        <table class="container table table-dark" style="width: 800px ; margin-top: 20px" border="1">--}}


{{--            <thead class="thead-dark">--}}
{{--            <tr>--}}
{{--                <th scope="col">#</th>--}}
{{--                <th scope="col">Name</th>--}}
{{--                <th scope="col">Actions</th>--}}
{{--            </tr>--}}
{{--            </thead>--}}
{{--            <tbody>--}}

{{--            @foreach($cats as $cat)--}}
{{--            <tr>--}}
{{--                <th scope="row">{{$loop->iteration}}</th>--}}
{{--                <td>{{$cat->name}}</td>--}}
{{--                <td>--}}
{{--                    <a href="{{route('admin.cat.edit',$cat->id)}}" class="btn btn-sm btn-info m-1">Edit</a>--}}
{{--                    <a href="{{route('admin.cat.delete',$cat->id)}}" type="button" class="btn btn-danger">Delete</a>--}}




{{--            </tr>--}}
{{--            @endforeach--}}
{{--            </tbody>--}}
{{--        </table>--}}


{{--@endsection--}}


{{--    </div>--}}



{{--@section('scripts')--}}

{{-- <script>--}}
{{--    var myModal = document.getElementById('myModal')--}}
{{--    var myInput = document.getElementById('myInput')--}}

{{--    myModal.addEventListener('shown.bs.modal', function () {--}}
{{--    myInput.focus()--}}
{{--    })--}}

{{-- </script>--}}

{{--@endsection--}}
