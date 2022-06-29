@extends('admin.empty')

@section('css')
    @toastr_css

@endsection



@section('title')
    {{trans('main_trans.Events')}}
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
        <form class="justify-content-between" method="post" action="{{route('admin.event.store')}}" enctype="multipart/form-data">
            @csrf
            <div class="form-group mt-4" style="width: 800px;display: block ">
                <label for="exampleInputEmail1">Name in English</label>
                <input type="text" class="form-control mt-2" name="name"   placeholder="Enter Your Name" >
            </div>

            <div class="form-group mt-4" style="width: 800px;display: block ">
                <label for="exampleInputEmail1">Name in Arabic</label>
                <input type="text" class="form-control mt-2" name="name_ar"   placeholder="Enter Your Name" >
            </div>


            <div class="form-group mt-4" style="width: 800px;display: block ">
                <label for="exampleInputEmail1">Phone</label>
                <input type="text" class="form-control mt-2" name="phone"   placeholder="Enter Your Name" >
            </div>


            <div class="form-group mt-4" style="width: 800px;display: block ">
                <label for="exampleInputEmail1">Language in English</label>
                <input type="text" class="form-control mt-2" name="lang" value=""   placeholder="Enter Your language" >
            </div>

            <div class="form-group mt-4" style="width: 800px;display: block ">
                <label for="exampleInputEmail1">Language in Arabic</label>
                <input type="text" class="form-control mt-2" name="lang_ar" value=""   placeholder="Enter Your language" >
            </div>




            <div class="form-group" style="width: 800px;display: block ">
                <label for="exampleInputEmail1">Small Description in English</label>
                <input type="text" class="form-control mt-2" name="small_desc"   placeholder="Enter Description">
            </div>

            <div class="form-group" style="width: 800px;display: block ">
                <label for="exampleInputEmail1">Small Description in Arabic</label>
                <input type="text" class="form-control mt-2" name="small_desc_ar"   placeholder="Enter Description">
            </div>


            <div class="form-group mt-4" style="width: 800px;display: block ">
                <label for="exampleInputEmail1">Price</label>
                <input type="text" class="form-control mt-2" name="price"   placeholder="Enter Your Description" >
            </div>

            <div class="form-group mt-4" style="width: 800px;display: block ">
                <label for="exampleInputEmail1">Level in English</label>
                <input type="text" class="form-control mt-2" name="level"  placeholder="Enter Your Description" >
            </div>

            <div class="form-group mt-4" style="width: 800px;display: block ">
                <label for="exampleInputEmail1">Level in Arabic</label>
                <input type="text" class="form-control mt-2" name="level_ar"  placeholder="Enter Your Description" >
            </div>

            <div class="form-group mt-4" style="width: 800px;display: block ">
                <label for="exampleInputEmail1">Course Type in English</label>
                <input type="text" class="form-control mt-2" name="course_type"  placeholder="" >
            </div>

            <div class="form-group mt-4" style="width: 800px;display: block ">
                <label for="exampleInputEmail1">Course Type in Arabic</label>
                <input type="text" class="form-control mt-2" name="course_type_ar"  placeholder="" >
            </div>

            <div class="form-group mt-4" style="width: 800px;display: block ">
                <label for="exampleInputEmail1">Duration</label>
                <input type="text" class="form-control mt-2" name="duration"   placeholder="Enter Your Description" >
            </div>

            <div class="form-group mt-4" style="width: 800px;display: block ">
                <label for="exampleInputEmail1">Start Date</label>
                <input type="text" class="form-control mt-2 datepicker" name="start_date"  placeholder="YY-MM-DD" >
            </div>

            <div class="form-group mt-4" style="width: 800px;display: block ">
                <label for="exampleInputEmail1">End Date</label>
                <input type="text" class="form-control mt-2 datepicker" name="end_date"   placeholder="YY-MM-DD" >
            </div>

            <div class="form-group mt-4" style="width: 800px;display: block ">
                <label for="exampleInputEmail1">Description in English</label>
                <textarea  class="form-control mt-2" name="desc"  placeholder="Enter Your Specialist"></textarea>
            </div>

            <div class="form-group mt-4" style="width: 800px;display: block ">
                <label for="exampleInputEmail1">Description in Arabic</label>
                <textarea  class="form-control mt-2" name="desc_ar"  placeholder="Enter Your Specialist"></textarea>
            </div>



            <div class="form-group mt-4" style="width: 800px;display: block ">
                <label for="exampleInputEmail1">Aim Of Course in English</label>
                <textarea  class="form-control mt-2" name="aim_course"   placeholder="Enter Your Specialist"></textarea>
            </div>

            <div class="form-group mt-4" style="width: 800px;display: block ">
                <label for="exampleInputEmail1">Aim Of Course in Arabic</label>
                <textarea  class="form-control mt-2" name="aim_course_ar"   placeholder="Enter Your Specialist"></textarea>
            </div>



            <div class="form-group mt-4" style="width: 800px;display: block ">
                <label for="exampleInputEmail1">Image</label>
                <input type="file" class="form-control-file mt-2" name="img" id="exampleInputEmail1"  placeholder="Enter Your Image">
            </div>


            <button type="submit" class="btn btn-primary mt-1" style="display:inline-block">Submit</button>
        </form>

    </div>





@endsection





@section('scripts')

    @toastr_js
    @toastr_render




@endsection
