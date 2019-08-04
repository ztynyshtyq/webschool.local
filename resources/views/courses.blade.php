@extends("layouts.layout")
@section('styles')
    <link rel="stylesheet" href="{{asset('css/assets/pages/courses.css')}}">
@endsection
@section('title')
    Все курсы
@endsection()
@section('content')
    <div class="wrapper">
        @foreach($courses as $course)
            <div class="courseItem block noPadding">
                <div class="courseDescription">
                    <div class="courseName">{{$course->courseName}}</div>
                    <p>{{$course->content}}</p>
                </div>
                <a href="#" class="btn btn-success center">Learn More</a>
            </div>

        @endforeach
    </div>
@endsection