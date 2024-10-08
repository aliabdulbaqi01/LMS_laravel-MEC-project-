@extends('instructor.layout.app')
@section('title')
@endsection
@push('css')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

@endpush
@section('content')

    <div class="page-content">
        <div class="row">
            <div class="col-12">
                <div class="card radius-10">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <img src="{{ isset($course->course_image) ? asset($course->course_image) : url('upload/no_image.jpg') }}" class="rounded-circle p-1 border" width="90" height="90" alt="...">
                            <div class="flex-grow-1 ms-3">
                                <h5 class="mt-0">{{ $course->course_name }}</h5>
                                <p class="mb-0">{{$course->course_title}}</p>
                            </div>
                        </div>
                    </div>
                </div>







            </div>
        </div>
    </div>
@endsection
