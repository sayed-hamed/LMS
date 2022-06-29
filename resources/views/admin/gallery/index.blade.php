@extends('admin.empty')

@section('css')
    @toastr_css

@endsection

@section('title')
    {{trans('main_trans.Gallery')}}
@stop
@section('page-header')
    <!-- breadcrumb -->
    <div class="page-title">
        <div class="row">
            <div class="col-sm-6">
                <h4 class="mb-0"> {{trans('main_trans.Gallery')}}
                </h4>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right ">
                    <li class="breadcrumb-item"><a href="#" class="default-color">Home</a></li>
                    <li class="breadcrumb-item active">{{trans('main_trans.Gallery')}}</li>
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
                <a href="{{route('admin.gallery.create')}}" class="btn btn-lg btn-success justify-content-center  mt-10 bg-gradient ml-1" style="margin-left: 260px">{{trans('main_trans.Add To Gallery')}}</a>

                <div class="card-body">

                    <div class="table-responsive">
                        <table id="datatable" class="table table-striped table-bordered p-0">
                            <thead>
                            <tr>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">{{trans('main_trans.Image')}}</th>
                                <th scope="col">{{trans('main_trans.Title')}}</th>
                                <th scope="col">{{trans('main_trans.Specialist')}}</th>
                                <th scope="col">{{trans('main_trans.Actions')}}</th>
                            </tr>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($galleries as $gallery)
                                <tr>
                                    <th scope="row">{{$loop->iteration}}</th>
                                    <td>{{asset('uploads/gallery/').$gallery->img}}</td>
                                    <td>{{$gallery->title}}</td>
                                    <td>
                                        @if($gallery->spec !==null)
                                            {{$gallery->spec}}
                                        @else
                                            NOT EXIST
                                        @endif
                                    </td>


                                    <td class="text-center">



                                        <a href="{{route('admin.gallery.edit',$gallery->id)}}" class="btn btn-sm btn-success m-1">{{trans('main_trans.Edit')}}</a>
                                        <a href="{{route('admin.gallery.delete',$gallery->id)}}" type="button" class="btn btn-sm btn-danger m-1">{{trans('main_trans.Delete')}}</a>


                                    </td>
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
