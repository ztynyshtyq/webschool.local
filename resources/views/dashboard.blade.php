@extends('layouts.layout')
@section('styles')
    <link rel="stylesheet" href="{{asset('css/assets/pages/dashboard.css')}}">
    <link rel="stylesheet" href="{{asset('css/assets/pages/courses.css')}}">
@endsection()
@section('title')
    Рабочий стол
@endsection
@section('content')
    <div class="dashboard-page">
        <div class="section-header">
            <h2>Мои курсы</h2>
        </div>
        <div class="all-courses-wrapper">
            <div class="row">
                @foreach($courses as $course)
                    <div class="courseItem block noPadding">
                        <a href="#">
                            <img class="course-icon" src="{{$course->image_url}}" alt="">
                            <div class="course-description">
                                <div>
                                    {{$course->courseName}}
                                </div>
                                <p>{{$course->content}}</p>
                            </div>
                        </a>
                        <div class="progress-indicator">
                            <div class="progress-box"></div>
                            <div class="progress-counting">
                                0 из 100 уроков пройдено
                            </div>
                        </div>
                        <div class="course-stores">
                            <a href="#" class="course-start-button none-decorated-link">Продолжить</a>
                        </div>
                    </div>
                @endforeach()
            </div>
        </div>
    </div>
@endsection
