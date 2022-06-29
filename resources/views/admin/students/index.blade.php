@extends('admin.empty')

@section('css')
    @toastr_css

@endsection



@section('title')
    {{trans('main_trans.Students')}}
@stop

@section('css')


@endsection

@section('page-header')
    <!-- breadcrumb -->
    <div class="page-title">
        <div class="row">
            <div class="col-sm-6">
                <h4 class="mb-0"> {{trans('main_trans.Students')}}
                </h4>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right ">
                    <li class="breadcrumb-item"><a href="#" class="default-color">Home</a></li>
                    <li class="breadcrumb-item active">{{trans('main_trans.Students')}}</li>
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
                <a href="{{route('admin.student.create')}}" class="btn btn-lg btn-success justify-content-center  mt-10 bg-gradient ml-1" style="margin-left: 260px">{{trans('main_trans.Add Students')}}</a>

                <div class="card-body">

                    <div class="table-responsive">
                        <table id="datatable" class="table table-striped table-bordered p-0">
                            <thead>
                            <tr>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">{{trans('main_trans.Name')}}</th>
                                <th scope="col">{{trans('main_trans.Email')}}</th>
                                <th scope="col">{{trans('main_trans.Specialist')}}</th>
                                <th scope="col">{{trans('main_trans.Actions')}}</th>
                            </tr>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($students as $student)
                                <tr>
                                    <th scope="row">{{$loop->iteration}}</th>
                                    <td>{{$student->name}}</td>
                                    <td>{{$student->email}}</td>
                                    <td>
                                        @if($student->spec !==null)
                                            {{$student->spec}}
                                        @else
                                            NOT EXIST
                                        @endif
                                    </td>
                                    <td>
                                        <a href="{{route('admin.student.edit',$student->id)}}" class="btn btn-sm btn-primary m-1">{{trans('main_trans.Edit')}}</a>
                                        <a href="{{route('admin.student.delete',$student->id)}}"  class="btn btn-sm btn-danger">{{trans('main_trans.Delete')}}</a>




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

@section('js')

    @toastr_js
    @toastr_render


@endsection

@endsection
