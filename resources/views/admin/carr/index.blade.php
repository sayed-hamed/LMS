@extends('admin.empty')

@section('css')
    @toastr_css

@endsection



@section('title')
    {{trans('main_trans.masseges')}}
@stop

@section('css')


@endsection

@section('page-header')
    <!-- breadcrumb -->
    <div class="page-title">
        <div class="row">
            <div class="col-sm-6">
                <h4 class="mb-0"> {{trans('main_trans.masseges')}}
                </h4>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right ">
                    <li class="breadcrumb-item"><a href="#" class="default-color">Home</a></li>
                    <li class="breadcrumb-item active">{{trans('main_trans.masseges')}}</li>
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

                <div class="card-body">

                    <div class="table-responsive">
                        <table id="datatable" class="table table-striped table-bordered p-0">
                            <thead>
                            <tr>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">{{trans('main_trans.Name')}}</th>
                                <th scope="col">{{trans('main_trans.Email')}}</th>
                                <th scope="col">{{trans('main_trans.Phone')}}</th>
                                <th scope="col">{{trans('main_trans.company')}}</th>
                                <th scope="col">{{trans('main_trans.job_title')}}</th>
                                <th scope="col">{{trans('main_trans.edu_level')}}</th>
                                <th scope="col">{{trans('main_trans.file')}}</th>
                            </tr>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($carrs as $car)
                                <tr>
                                    <th scope="row">{{$loop->iteration}}</th>
                                    <td>{{$car->name}}</td>
                                    <td>{{$car->email}}</td>
                                    <td>{{$car->phone}}</td>
                                    <td>{{$car->company}}</td>
                                    <td>{{$car->job_title}}</td>
                                    <td>{{$car->edu_level}}</td>
                                    <td><a href="{{asset('uploads/careers/').$car->file}}" download>file</a></td>
                                    {{--                                    <td>--}}
                                    {{--                                        <a href="{{route('admin.message.delete',$message->id)}}"  class="btn btn-sm btn-danger">{{trans('main_trans.Delete')}}</a>--}}
                                    {{--                                    </td>--}}

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


@section('js')

    @toastr_js
    @toastr_render


@endsection

@endsection
