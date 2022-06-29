@extends('admin.empty')

@section('css')
    @toastr_css

@endsection

@section('title')
    {{trans('main_trans.Career')}}
@stop
@section('page-header')
    <!-- breadcrumb -->
    <div class="page-title">
        <div class="row">
            <div class="col-sm-6">
                <h4 class="mb-0"> {{trans('main_trans.Career')}}
                </h4>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right ">
                    <li class="breadcrumb-item"><a href="#" class="default-color">Home</a></li>
                    <li class="breadcrumb-item active">{{trans('main_trans.Career')}}</li>
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
                <a href="{{route('admin.career.create')}}" class="btn btn-lg btn-success justify-content-center  mt-10 bg-gradient ml-1" style="margin-left: 260px">{{trans('main_trans.Add To Career')}}</a>

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
                            @foreach($careers as $career)
                                <tr>
                                    <th scope="row">{{$loop->iteration}}</th>
                                    <td>{{$career->teacher_type}}</td>
                                    <td>
                                        <a href="{{route('admin.career.edit',$career->id)}}" class="btn btn-sm btn-info m-1">{{trans('main_trans.Edit')}}</a>
                                        <a href="{{route('admin.career.delete',$career->id)}}" type="button" class="btn btn-danger">{{trans('main_trans.Delete')}}</a>


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




@section('scripts')

    @toastr_js
    @toastr_render

@endsection


