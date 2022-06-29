@extends('admin.empty')

@section('css')
    @toastr_css

@endsection

@section('title')
    {{trans('main_trans.Gallery')}}
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
        <h3 class="text-center">Add Image</h3>
    </div>

    <div class="container d-flex justify-content-center mt-10">
        <form class="justify-content-between" method="post" action="{{route('admin.gallery.store')}}" enctype="multipart/form-data">
            @csrf
            <div class="form-group mt-4" style="width: 800px;display: block ">
                <label for="exampleInputEmail1">Title in English</label>
                <input type="text" class="form-control mt-2" name="title" id="exampleInputEmail1"  placeholder="Enter Your Name" >
            </div>

            <div class="form-group mt-4" style="width: 800px;display: block ">
                <label for="exampleInputEmail1">Title in Arabic</label>
                <input type="text" class="form-control mt-2" name="title_ar" id="exampleInputEmail1"  placeholder="Enter Your Name" >
            </div>






            <div class="form-group mt-4" style="width: 800px;display: block ">
                <label for="exampleInputEmail1">Specialist in English</label>
                <input type="text" class="form-control mt-2" name="spec" id="exampleInputEmail1"  placeholder="Enter Your Specialist">
            </div>

            <div class="form-group mt-4" style="width: 800px;display: block ">
                <label for="exampleInputEmail1">Specialist in Arabic</label>
                <input type="text" class="form-control mt-2" name="spec_ar" id="exampleInputEmail1"  placeholder="Enter Your Specialist">
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
