@extends('admin.empty')

@section('css')
    @toastr_css

@endsection



@section('title')
    {{trans('main_trans.Articles')}}
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

    <div class="container d-flex justify-content-center align-center mt-1 bg-primary" style="width:300px;height: 50px;border-radius: 50%">
        <h3 class="text-center">Edit Blog</h3>
    </div>

    <div class="container d-flex justify-content-center mt-6">
        <form class="justify-content-between" method="post" action="{{route('admin.blog.update')}}" enctype="multipart/form-data">
            @csrf

            <input type="hidden" name="id" value="{{$b->id}}">

            <div class="form-group mt-4" style="width: 800px;display: block ">
                <label for="exampleInputEmail1">Name</label>
                <input type="text" class="form-control mt-2" name="name" id="exampleInputEmail1"  placeholder="Enter Your Name" value="{{$b->name}}">
            </div>



            <div class="form-group mt-4" style="width: 800px;display: block ">
                <label for="exampleInputEmail1">Description</label>
                <textarea  class="form-control mt-2" name="desc"  value="{{$b->desc}}"  placeholder="Enter Your Specialist">{{$b->desc}}</textarea>
            </div>


            <img src="{{asset('uploads/blogs/'.$b->img)}}" height="100px" class="my-2">


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
