@extends('admin.empty')



@section('title')
    {{trans('main_trans.Trainers')}}
@stop

@section('css')

    @toastr_css


@endsection


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
        <h3 class="text-center">Add Student</h3>
    </div>

    <div class="container d-flex justify-content-center mt-10">
        <form class="justify-content-between" method="post" action="{{route('admin.student.store')}}" enctype="multipart/form-data">
            @csrf
            <div class="form-group mt-4" style="width: 800px;display: block ">
                <label for="exampleInputEmail1">Name in English</label>
                <input type="text" class="form-control mt-2" name="name" id="exampleInputEmail1"  placeholder="Enter Your Name" >
            </div>
            <div class="form-group mt-4" style="width: 800px;display: block ">
                <label for="exampleInputEmail1">Name in Arabic</label>
                <input type="text" class="form-control mt-2" name="name_ar" id="exampleInputEmail1"  placeholder="Enter Your Name" >
            </div>
            <div class="form-group mt-4" style="width: 800px;display: block ">
                <label for="exampleInputEmail1">Email</label>
                <input type="email" class="form-control mt-2" name="email" id="exampleInputEmail1"  placeholder="Enter Your ُemail">
            </div>
            <div class="form-group mt-4" style="width: 800px;display: block ">
                <label for="exampleInputEmail1">Specialist in English</label>
                <input type="text" class="form-control mt-2" name="spec" id="exampleInputEmail1"  placeholder="Enter Your Specialist">
            </div>

            <div class="form-group mt-4" style="width: 800px;display: block ">
                <label for="exampleInputEmail1">Specialist in Arabic</label>
                <input type="text" class="form-control mt-2" name="spec_ar" id="exampleInputEmail1"  placeholder="Enter Your Specialist">
            </div>


            <button type="submit" class="btn btn-primary mt-1" style="display:inline-block">Submit</button>
        </form>

    </div>





@endsection





@section('scripts')

    @toastr_js
    @toastr_render



@endsection
