@extends('admin.layouts.master')

@section('css')


@endsection


@section('content')

    <div class="container justify-content-center mt-5 text-lg-center">
        <h3>Show Courses</h3>



        @foreach($courses as $course)
            <p>{{$course->name}}</p>
        @endforeach
    </div>






@endsection





@section('scripts')


@endsection
