@extends('admin.empty')

@section('title')
    {{trans('main_trans.Categories')}}
@stop

@section('css')


@endsection


@section('content')

    <div class="container d-flex justify-content-center mt-10 list-unstyled">



   </div>

    <div class="container d-flex justify-content-center mt-10">
        <form class="justify-content-between" method="post" action="{{route('admin.cat.store')}}">
            @csrf
        <div class="form-group mt-4" style="width: 800px;display: block ">

            @if ($errors->any())
                <div class="alert alert-danger list-unstyled">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <label for="exampleInputEmail1">{{trans('main_trans.Add Categories')}}</label>
            <input type="text" class="form-control mt-2" name="name" id="exampleInputEmail1"  placeholder="Enter name in English">

                <label for="exampleInputEmail1">{{trans('main_trans.Add Categories')}}</label>
                <input type="text" class="form-control mt-2" name="name_ar" id="exampleInputEmail1"  placeholder="Enter name in Arabic">


        </div>


        <button type="submit" class="btn btn-primary mt-1" style="display:inline-block">{{trans('main_trans.Submit')}}</button>
        </form>

    </div>





@endsection





@section('scripts')




@endsection
