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
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Add Section</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    {{-- /// Add Section and Lecture  --}}
    @foreach ($sections as $section => $item )
        <div class="container">
            <div class="main-body">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body p-4 d-flex justify-content-between">
                                <h6>{{ $item->section_title }} </h6>

                                <div class="d-flex justify-content-between align-items-center">
                                    <button type="submit" class="btn btn-danger px-2 ms-auto"> Delete Section</button> &nbsp;
                                    <a class="btn btn-primary" onclick="addLectureDiv({{ $course->id }}, {{ $item->id }}, 'lectureContainer{{ $section }}' )" id="addLectureBtn($key)"> Add Lecture </a>
                                </div>
                            </div>
                            <div class="courseHide" id="lectureContainer{{ $section }}">
                                <div class="container">
                                    <div class="lectureDiv mb-3 d-flex align-items-center justify-content-between">
                                        <div>
                                            <strong>lecture title asdfsdafasfdsf</strong>
                                        </div>
                                        <div class="btn-group">
                                            <a href="" class="btn btn-sm btn-primary">Edit</a> &nbsp;
                                            <a href="" class="btn btn-sm btn-danger">Delete</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
    {{-- /// End Add Section and Lecture  --}}



    <!-- model that show form to add new section -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add Section </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <form action="{{ route('sections.store') }}" method="POST">
                        @csrf
                        <input type="hidden" name="course_id" value="{{ $course->id }}">
                        <div class="form-group mb-3">
                            <label for="input1" class="form-label">Course Section</label>
                            <input type="text" name="section_title" class="form-control" id="input1"  >
                        </div>

                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">Save changes</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    {{--  model end here    --}}



@endsection
@push('js')
    <script>
        function addLectureDiv(courseId, sectionId, containerId) {
            const lectureContainer = document.getElementById(containerId);
            const newLectureDiv = document.createElement('div');
            newLectureDiv.classList.add('lectureDiv','mb-3');
            newLectureDiv.innerHTML = `
 <div class="container">
    <h6>Lecture Title </h6>
    <input type="text" class="form-control" placeholder="Enter Lecture Title">
    <textarea class="form-control mt-2" placeholder="Enter Lecture Content"  ></textarea>
    <h6 class="mt-3">Add Video Url</h6>
    <input type="text" name="url" class="form-control" placeholder="Add URL">
    <button class="btn btn-primary mt-3" onclick="saveLecture('${courseId}',${sectionId},'${containerId}')" >Save Lecture</button>
    <button class="btn btn-secondary mt-3" onclick="hideLectureContainer('${containerId}')">Cancel</button>
</div>
     `;
            lectureContainer.appendChild(newLectureDiv);
        }
        function hideLectureContainer(containerId) {
            const lectureContainer = document.getElementById(containerId);
            lectureContainer.style.display = 'none';
            location.reload();

        }

        </script>
    <<script>
        function saveLecture(courseId, sectionId, containerId){
            const lectureContainer = document.getElementById(containerId);
            const lectureTitle = lectureContainer.querySelector('input[type="text"]').value;
            const lectureContent = lectureContainer.querySelector('textarea').value;
            const lectureUrl = lectureContainer.querySelector('input[name="url"]').value;
            fetch('/lec/store', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': '{{ csrf_token() }}',
                },
                body: JSON.stringify({
                    course_id: courseId,
                    section_id: sectionId,
                    lecture_title: lectureTitle,
                    lecture_url: lectureUrl,
                    content: lectureContent,
                }),
            })
                .then(response => response.json())
                .then(data => {
                    console.log(data);

                })
                .catch(error => {
                    console.error(error);
                });
        }
    </script>
@endpush
