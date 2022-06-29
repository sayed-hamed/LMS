@extends('admin.empty')

@section('css')
    @toastr_css

@endsection

@section('title')
    {{trans('main_trans.Trainers')}}
@stop
@section('page-header')
    <!-- breadcrumb -->
    <div class="page-title">
        <div class="row">
            <div class="col-sm-6">
                <h4 class="mb-0"> {{trans('main_trans.Trainers')}}
                </h4>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right ">
                    <li class="breadcrumb-item"><a href="#" class="default-color">Home</a></li>
                    <li class="breadcrumb-item active">{{trans('main_trans.Trainers')}}</li>
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
                <a href="{{route('admin.trainer.create')}}" class="btn btn-lg btn-success justify-content-center  mt-10 bg-gradient ml-1" style="margin-left: 260px">{{trans('main_trans.Add Trainers')}}</a>

                <div class="card-body">

                    <div class="table-responsive">
                        <table id="datatable" class="table table-striped table-bordered p-0">
                            <thead>
                            <tr>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">{{trans('main_trans.Image')}}</th>
                                <th scope="col">{{trans('main_trans.Name')}}</th>
                                <th scope="col">{{trans('main_trans.Specialist')}}</th>
                                <th scope="col">{{trans('main_trans.Description')}}</th>
                                <th scope="col">{{trans('main_trans.Phone')}}</th>
                                <th scope="col">{{trans('main_trans.Actions')}}</th>
                            </tr>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($trainers as $trainer)
                                <tr>
                                    <th scope="row">{{$loop->iteration}}</th>
                                    <td>{{$trainer->img}}</td>
                                    <td>{{$trainer->name}}</td>
                                    <td>{{$trainer->spec}}</td>
                                    <td>{{$trainer->desc}}</td>
                                    <td>{{$trainer->phone}}</td>
                                    <td>
                                        <a href="{{route('admin.trainer.edit',$trainer->id)}}" class="btn btn-sm btn-primary m-1">{{trans('main_trans.Edit')}}</a>
                                        <a href="{{route('admin.trainer.delete',$trainer->id)}}"  class="btn btn-sm btn-danger">{{trans('main_trans.Delete')}}</a>




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
















{{--@section('content')--}}
{{--    <div class="d-flex justify-content-center">--}}
{{--        @if (session()->has('delete'))--}}
{{--            <div class="alert alert-success alert-dismissible fade show" role="alert">--}}
{{--                <strong>{{ session()->get('delete') }}</strong>--}}

{{--            </div>--}}
{{--        @endif--}}

{{--    </div>--}}


{{--    <div class="d-flex justify-content-center">--}}
{{--        @if (session()->has('Add'))--}}
{{--            <div class="alert alert-success alert-dismissible fade show" role="alert">--}}
{{--                <strong>{{ session()->get('Add') }}</strong>--}}

{{--            </div>--}}
{{--        @endif--}}

{{--    </div>--}}

{{--    <div class="d-flex justify-content-center">--}}
{{--        @if (session()->has('update'))--}}
{{--            <div class="alert alert-success alert-dismissible fade show" role="alert">--}}
{{--                <strong>{{ session()->get('update') }}</strong>--}}

{{--            </div>--}}
{{--        @endif--}}

{{--    </div>--}}

{{--    <div class="container justify-content-center mt-10 text-lg-center">--}}
{{--        <h3 class="bg-gradient  text-dark text-start" style="margin-left: 270px">ADD TEACHER</h3>--}}
{{--        <a href="{{route('admin.trainer.create')}}" class="btn btn-lg btn-dark justify-content-center  mt-10 bg-gradient" style="margin-left: 90px">ADD TEACHER</a>--}}

{{--    </div>--}}

{{--    <table class="container table table-striped table-dark table-bordered table-hover " style="width: 900px ; margin-top: 20px" border="1">--}}


{{--        <thead class="thead-dark">--}}
{{--        <tr>--}}
{{--            <th scope="col">#</th>--}}
{{--            <th scope="col">Image</th>--}}
{{--            <th scope="col">Name</th>--}}
{{--            <th scope="col">Spcialist</th>--}}
{{--            <th scope="col" aria-colcount="2">Description</th>--}}
{{--            <th scope="col">phone</th>--}}
{{--            <th scope="col" >Actions</th>--}}
{{--        </tr>--}}
{{--        </thead>--}}
{{--        <tbody>--}}

{{--        @foreach($trainers as $trainer)--}}
{{--            <tr>--}}
{{--                <th scope="row">{{$loop->iteration}}</th>--}}

{{--                <td>--}}
{{--                    <img src="{{asset('uploads/trainers/'.$trainer->img)}}" height="50px" style="border-radius: 30%" srcset="">--}}
{{--                </td>--}}
{{--                <td>{{$trainer->name}}</td>--}}
{{--                <td>{{$trainer->spec}}</td>--}}
{{--                <td>{{$trainer->desc}}</td>--}}

{{--                <td>--}}
{{--                    @if($trainer->phone !==null)--}}
{{--                        {{$trainer->phone}}--}}
{{--                    @else--}}
{{--                        NOT EXIST--}}
{{--                    @endif--}}
{{--                </td>--}}


{{--                <td class="">--}}



{{--                    <a href="{{route('admin.trainer.edit',$trainer->id)}}" class="btn btn-sm btn-info m-1"><i class="bi bi-pencil-fill"></i></a>--}}


{{--                    <button  type="button" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo"><i class="bi bi-trash-fill"></i></button>--}}


{{--                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">--}}
{{--                        <div class="modal-dialog">--}}
{{--                            <div class="modal-content">--}}
{{--                                <div class="modal-body">--}}
{{--                                    <form>--}}
{{--                                        <div class="mb-3">--}}
{{--                                            <h4>Are You Sure?</h4>--}}
{{--                                        </div>--}}
{{--                                    </form>--}}
{{--                                </div>--}}
{{--                                <div class="modal-footer">--}}
{{--                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>--}}
{{--                                    <a href="{{route('admin.trainer.delete',$trainer->id)}}" type="button" class="btn btn-primary">Delete</a>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </td>--}}
{{--            </tr>--}}
{{--        @endforeach--}}
{{--        </tbody>--}}
{{--    </table>--}}



{{--@endsection--}}
