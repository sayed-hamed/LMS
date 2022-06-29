@extends('admin.empty')

@section('css')
    @toastr_css

@endsection

@section('title')
    {{trans('main_trans.Career')}}
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

    <div class="container d-flex justify-content-center mt-10">
        <form class="justify-content-between" method="post" action="{{route('admin.career.update')}}">
            @csrf
            <input type="hidden" name="id" value="{{$cat->id}}">
            <div class="form-group mt-4" style="width: 800px;display: block ">
                <label for="exampleInputEmail1">Edit Career Item</label>
                <input type="text" class="form-control mt-2" name="teacher_type" id="exampleInputEmail1" value="{{$cat->teacher_type}}"  placeholder="Enter New Category">
            </div>


            <button type="submit" class="btn btn-primary mt-1" style="display:inline-block">Submit</button>
        </form>

    </div>





@endsection





@section('scripts')

    @toastr_js
    @toastr_render

@endsection
