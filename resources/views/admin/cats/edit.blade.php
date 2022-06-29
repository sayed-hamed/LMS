@extends('admin.empty')

@section('title')
    {{trans('main_trans.Categories')}}
@stop

@section('css')


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

    <div class="container d-flex justify-content-center mt-10">
        <form class="justify-content-between" method="post" action="{{route('admin.cat.update')}}">
            @csrf
            <input type="hidden" name="id" value="{{$cat->id}}">
            <div class="form-group mt-4" style="width: 800px;display: block ">
                <label for="exampleInputEmail1">Edit Category</label>
                <input type="text" class="form-control mt-2" name="name" id="exampleInputEmail1" value="{{$cat->getTranslation('name','en')}}"  placeholder="Enter New Category">

            </div>


            <button type="submit" class="btn btn-primary mt-1" style="display:inline-block">{{trans('main_trans.Submit')}}</button>
        </form>

    </div>





@endsection





@section('scripts')


@endsection
