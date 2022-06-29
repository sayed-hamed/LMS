@extends('admin.empty')

@section('css')
    @toastr_css

@endsection



@section('title')
    {{trans('main_trans.Courses')}}
@stop
@section('page-header')
    <!-- breadcrumb -->
    <div class="page-title">
        <div class="row">
            <div class="col-sm-6">
                <h4 class="mb-0"> {{trans('main_trans.Courses')}}
                </h4>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right ">
                    <li class="breadcrumb-item"><a href="#" class="default-color">Home</a></li>
                    <li class="breadcrumb-item active">{{trans('main_trans.Courses')}}</li>
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
                <a href="{{route('admin.course.create')}}" class="btn btn-lg btn-success justify-content-center  mt-10 bg-gradient ml-1" style="margin-left: 260px">{{trans('main_trans.Add Courses')}}</a>

                <div class="card-body">

                    <div class="table-responsive">
                        <table id="datatable" class="table table-striped table-bordered p-0">
                            <thead>
                            <tr>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">{{trans('main_trans.Image')}}</th>
                                <th scope="col">{{trans('main_trans.Name')}}</th>
                                <th scope="col">{{trans('main_trans.sm_desc')}}</th>
                                <th scope="col">{{trans('main_trans.desciption')}}</th>
                                <th scope="col">{{trans('main_trans.level')}}</th>
                                <th scope="col">{{trans('main_trans.Phone')}}</th>
                                <th scope="col">{{trans('main_trans.course_type')}}</th>
                                <th scope="col">{{trans('main_trans.duraion')}}</th>
                                <th scope="col">{{trans('main_trans.price')}}</th>
                                <th scope="col">{{trans('main_trans.aim_course')}}</th>
                                <th scope="col">{{trans('main_trans.start_date')}}</th>
                                <th scope="col">{{trans('main_trans.end_date')}}</th>
                                <th scope="col">{{trans('main_trans.language')}}</th>
                                <th scope="col">{{trans('main_trans.Actions')}}</th>
                            </tr>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($courses as $course)
                                <tr>
                                    <th scope="row">{{$loop->iteration}}</th>

                                    <td class="word-break" style="font-size: 10px">
                                        <img src="{{asset('uploads/courses/'.$course->img)}}"  style="width: 40px;height: 40px; border-radius: 50%" srcset="">
                                    </td>
                                    <td  class="word-break" style="font-size: 10px">{{$course->name}}</td>
                                    <td  class="word-break" style="font-size: 10px">{{$course->small_desc}}</td>
                                    <td class="word-break" style="font-size: 5px">{{$course->desc}}</td>
                                    <td class="word-break" style="font-size: 10px">{{$course->level}}</td>
                                    <td class="word-break" style="font-size: 10px">{{$course->phone}}</td>
                                    <td class="word-break" style="font-size: 10px">{{$course->course_type}}</td>
                                    <td class="word-break" style="font-size: 10px">{{$course->duration}}</td>
                                    <td class="word-break" style="font-size: 10px">{{$course->price}}</td>
                                    <td class="word-break" style="font-size: 5px">{{$course->aim_course}}</td>
                                    <td class="word-break" style="font-size: 10px">{{$course->start_date}}</td>
                                    <td class="word-break" style="font-size: 10px">{{$course->end_date}}</td>
                                    <td class="word-break" style="font-size: 10px">{{$course->lang}}</td>





                                    <td class="text-center">



                                        <a href="{{route('admin.course.edit',$course->id)}}" class="btn btn-sm btn-info m-1">{{trans('main_trans.Edit')}}</a>


                                        <a href="{{route('admin.course.delete',$course->id)}}" type="button" class="btn btn-sm btn-danger m-1">{{trans('main_trans.Delete')}}</a>


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
@section('js')

    @toastr_js
    @toastr_render


@endsection

{{--@section('content')--}}


{{--    <div style="background-color:#c7baba;">--}}

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
{{--        <h3 class=" bg-gradient text-dark text-start" style="margin-left: 300px">ADD COURSE</h3>--}}
{{--        <a href="{{route('admin.course.create')}}" class="btn btn-lg btn-dark justify-content-center  mt-10 bg-gradient" style="margin-left: 260px">ADD COURSE</a>--}}

{{--    </div>--}}


{{--    <table class="container table table table-striped table-dark table-bordered table-hover   " style="width:1100px ;margin-left: 350px ;margin-top: 10px;table-layout: fixed;text-overflow: ellipsis;overflow: hidden" border="1";>--}}


{{--           <thead class="thead-dark">--}}
{{--           <tr>--}}
{{--               <th scope="col" class="word-break" style="font-size: 10px">#</th>--}}
{{--               <th scope="col" class="word-break" style="font-size: 10px">Image</th>--}}
{{--               <th scope="col" class="word-break" style="font-size: 10px">Name</th>--}}
{{--               <th scope="col" class="word-break" style="font-size: 10px">Small Description</th>--}}
{{--               <th scope="col" class="word-break" style="font-size: 10px">Description</th>--}}
{{--               <th scope="col" class="word-break" style="font-size: 10px">Level</th>--}}
{{--               <th scope="col" class="word-break" style="font-size: 10px">Phone</th>--}}
{{--               <th scope="col" class="word-break" style="font-size:10px">Course Type</th>--}}
{{--               <th scope="col" class="word-break" style="font-size: 10px">Duration</th>--}}
{{--               <th scope="col" class="word-break" style="font-size: 10px">price</th>--}}
{{--               <th scope="col" class="word-break" style="font-size: 10px">Aim Of Course</th>--}}
{{--               <th scope="col" class="word-break" style="font-size: 10px">Start Date</th>--}}
{{--               <th scope="col" class="word-break" style="font-size: 10px">End Date</th>--}}
{{--               <th scope="col" class="word-break" style="font-size: 10px">Language</th>--}}
{{--               <th scope="col" class="word-break" style="font-size: 10px">Operations</th>--}}
{{--           </tr>--}}
{{--           </thead>--}}
{{--           <tbody>--}}

{{--           @foreach($courses as $course)--}}
{{--               <tr>--}}
{{--                   <th scope="row">{{$loop->iteration}}</th>--}}

{{--                   <td class="word-break" style="font-size: 10px">--}}
{{--                       <img src="{{asset('uploads/courses/'.$course->img)}}"  style="width: 40px;height: 40px; border-radius: 50%" srcset="">--}}
{{--                   </td>--}}
{{--                   <td  class="word-break" style="font-size: 10px">{{$course->name}}</td>--}}
{{--                   <td  class="word-break" style="font-size: 10px">{{$course->small_desc}}</td>--}}
{{--                   <td class="word-break" style="font-size: 5px">{{$course->desc}}</td>--}}
{{--                   <td class="word-break" style="font-size: 10px">{{$course->level}}</td>--}}
{{--                   <td class="word-break" style="font-size: 10px">{{$course->phone}}</td>--}}
{{--                   <td class="word-break" style="font-size: 10px">{{$course->course_type}}</td>--}}
{{--                   <td class="word-break" style="font-size: 10px">{{$course->duration}}</td>--}}
{{--                   <td class="word-break" style="font-size: 10px">{{$course->price}}</td>--}}
{{--                   <td class="word-break" style="font-size: 5px">{{$course->aim_course}}</td>--}}
{{--                   <td class="word-break" style="font-size: 10px">{{$course->start_date}}</td>--}}
{{--                   <td class="word-break" style="font-size: 10px">{{$course->end_date}}</td>--}}
{{--                   <td class="word-break" style="font-size: 10px">{{$course->lang}}</td>--}}





{{--                   <td class="text-center">--}}



{{--                       <a href="{{route('admin.course.edit',$course->id)}}" class="btn btn-sm btn-info m-1"><i class="bi bi-pencil-fill"></i></a>--}}


{{--                       <a href="{{route('admin.course.delete',$course->id)}}" type="button" class="btn btn-sm btn-danger m-1"><i class="bi bi-trash"></i></a>--}}


{{--                   </td>--}}
{{--               </tr>--}}
{{--           @endforeach--}}
{{--           </tbody>--}}
{{--       </table>--}}

{{--       {!! $courses->render() !!}--}}




{{--    </div>--}}
{{--@endsection--}}
{{--@section('scripts')--}}

{{--    <script>--}}
{{--        function myFunction() {--}}
{{--            document.getElementById("myDIV").style.textOverflow = "ellipsis";--}}
{{--        }--}}
{{--    </script>--}}

{{--@endsection--}}
