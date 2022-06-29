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

    <div class="container d-flex justify-content-center align-center mt-1 bg-primary" style="width:300px;height: 50px;border-radius: 50%">
        <h3 class="text-center">Add Teacher</h3>
    </div>

    <div class="container d-flex justify-content-center mt-6">
        <form class="justify-content-between" method="post" action="{{route('admin.trainer.update')}}" enctype="multipart/form-data">
            @csrf

            <input type="hidden" name="id" value="{{$trainer->id}}">

            <div class="form-group mt-4" style="width: 800px;display: block ">
                <label for="exampleInputEmail1">Name</label>
                <input type="text" class="form-control mt-2" name="name" id="exampleInputEmail1"  placeholder="Enter Your Name" value="{{$trainer->name}}">
            </div>

            <div class="form-group mt-4" style="width: 800px;display: block ">
                <label for="exampleInputEmail1">Phone</label>
                <input type="text" class="form-control mt-2" name="phone" id="exampleInputEmail1"  placeholder="Enter Your Phone" value="{{$trainer->phone}}">
            </div>

            <div class="form-group mt-4" style="width: 800px;display: block ">
                <label for="exampleInputEmail1">Specialist</label>
                <input type="text" class="form-control mt-2" name="spec" id="exampleInputEmail1"  placeholder="Enter Your Specialist" value="{{$trainer->spec}}">
            </div>

            <div class="form-group mt-4" style="width: 800px;display: block ">
                <label for="exampleInputEmail1">Description</label>
                <input type="text" class="form-control mt-2" name="desc" id="exampleInputEmail1"  placeholder="Enter Your Description" value="{{$trainer->desc}}">
            </div>


            <img src="{{asset('uploads/trainers/'.$trainer->img)}}" height="100px" class="my-2">


            <div class="form-group mt-4" style="width: 800px;display: block ">
                <label for="exampleInputEmail1">Image</label>
                <input type="file" class="form-control-file mt-2" name="img" id="exampleInputEmail1"  placeholder="Enter Your Image">
            </div>


            <button type="submit" class="btn btn-primary mt-1" style="display:inline-block">Submit</button>
        </form>

    </div>





@endsection





@section('scripts')


@endsection
