@extends('admin.empty')
@section('css')
    @toastr_css

@endsection



@section('title')
    {{trans('main_trans.Courses')}}
@stop
@section('content')

    <div class="container d-flex justify-content-center mt-10 list-unstyled">

        @if ($errors->any())
            <div class="alert alert-danger list-unstyled">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

    </div>

    <div class="container d-flex justify-content-center align-center mt-4 bg-primary" style="width:300px;height: 50px;border-radius: 50%">
        <h3 class="text-center">Add Course</h3>
    </div>

    <div class="container d-flex justify-content-center mt-10">
        <form class="justify-content-between" method="post" action="{{route('admin.course.update')}}" enctype="multipart/form-data">
            @csrf

            <input type="hidden" name="id" value="{{$course->id}}">
            <div class="form-group mt-4" style="width: 800px;display: block ">
                <label for="exampleInputEmail1">Name</label>
                <input type="text" value="{{$course->name}}" class="form-control mt-2" name="name"   placeholder="Enter name" >
            </div>

            <div class="form-group mt-4" style="width: 800px;display: block ">
                <label for="exampleInputEmail1">Phone</label>
                <input type="text" class="form-control mt-2" name="phone" value="{{$course->phone}}"   placeholder="Enter Your phone" >
            </div>

            <div class="form-group mt-4" style="width: 800px;display: block ">
                <label for="exampleInputEmail1">Language</label>
                <input type="text" class="form-control mt-2" name="lang" value="{{$course->lang}}"   placeholder="Enter Your language" >
            </div>

            <div class="form-group">
                <lebal>Category</lebal>

                <select class="form-control" name="cat_id">
                    @foreach($cats as $cat)
                        <option value="{{$cat->id}}" @if($course->cat_id==$cat->id) selected @endif>{{$cat->name}}</option>
                    @endforeach
                </select>

            </div>

            <div class="form-group">
                <lebal>Trainer</lebal>

                <select class="form-control" name="trainer_id">

                    @foreach($trainers as $trainer)
                        <option value="{{$trainer->id}}" @if($course->trainer_id==$trainer->id) selected @endif>{{$trainer->name}}</option>
                    @endforeach
                </select>

            </div>

            <div class="form-group" style="width: 800px;display: block ">
                <label for="exampleInputEmail1">Small Description</label>
                <input type="text" value="{{$course->small_desc}}" class="form-control mt-2" name="small_desc"   placeholder="">
            </div>

            <div class="form-group mt-4" style="width: 800px;display: block ">
                <label for="exampleInputEmail1">Price</label>
                <input type="text" value="{{$course->price}}" class="form-control mt-2" name="price"   placeholder="" >
            </div>

            <div class="form-group mt-4" style="width: 800px;display: block ">
                <label for="exampleInputEmail1">Level</label>
                <input type="text" value="{{$course->level}}" class="form-control mt-2" name="level"  placeholder="" >
            </div>

            <div class="form-group mt-4" style="width: 800px;display: block ">
                <label for="exampleInputEmail1">Course Type</label>
                <input type="text" value="{{$course->course_type}}" class="form-control mt-2" name="course_type"  placeholder="" >
            </div>

            <div class="form-group mt-4" style="width: 800px;display: block ">
                <label for="exampleInputEmail1">Duration</label>
                <input type="text" value="{{$course->duration}}" class="form-control mt-2" name="duration"   placeholder="" >
            </div>

            <div class="form-group mt-4" style="width: 800px;display: block ">
                <label for="exampleInputEmail1">Start Date</label>
                <input type="text" value="{{$course->start_date}}" class="form-control mt-2 datepicker" name="start_date"  placeholder="YY-MM-DD" >
            </div>

            <div class="form-group mt-4" style="width: 800px;display: block ">
                <label for="exampleInputEmail1">End Date</label>
                <input type="text" value="{{$course->end_date}}" class="form-control mt-2 datepicker" name="end_date"   placeholder="YY-MM-DD" >
            </div>

            <div class="form-group mt-4" style="width: 800px;display: block ">
                <label for="exampleInputEmail1">Description</label>
                <textarea  class="form-control mt-2" value="{{$course->desc}}" name="desc"  placeholder="">{{$course->desc}}</textarea>
            </div>



            <div class="form-group mt-4" style="width: 800px;display: block ">
                <label for="exampleInputEmail1">Aim Of Course</label>
                <textarea  class="form-control mt-2" value="{{$course->aim_course}}" name="aim_course"   placeholder="">{{$course->aim_course}}</textarea>
            </div>


            <img src="{{asset('uploads/courses/'.$course->img)}}" height="100px" class="my-2">

            <div class="form-group mt-4" style="width: 800px;display: block ">
                <label for="exampleInputEmail1">Image</label>
                <input type="file" class="form-control-file mt-2" value="{{asset('uploads/courses/'.$course->img)}}" name="img" id=""  placeholder="">
            </div>


            <button type="submit" class="btn btn-primary mt-1" style="display:inline-block">Submit</button>
        </form>

    </div>





@endsection





@section('scripts')

    @toastr_js
    @toastr_render



@endsection
