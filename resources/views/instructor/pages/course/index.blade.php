@extends('instructor.layout.app')
@section('title')
@endsection
@push('css')
    <!-- Datatable -->
    <link href="{{ asset('backend/assets/plugins/datatable/css/dataTables.bootstrap5.min.css') }}" rel="stylesheet" />
    <!-- End Datatable -->
@endpush
@section('content')
    <div class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">All Course</li>
                    </ol>
                </nav>
            </div>
            <div class="ms-auto">
                <div class="btn-group">
                    <a href="{{ route('courses.create') }}" class="btn btn-primary px-5">Add Courses </a>
                </div>
            </div>
        </div>
        <!--end breadcrumb-->

        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table id="example" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                        <tr>
                            <th>Sl</th>
                            <th>Image </th>
                            <th>Course Name</th>
                            <th>Category</th>
                            <th>Price</th>
                            <th>Discount</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>

                        @foreach ($courses as $key=> $item)
                            <tr>
                                <td>{{ $key+1 }}</td>
                                <td> <img src="{{ isset($item->course_image) ? asset($item->course_image) : url('upload/no_image.jpg')  }}" alt="" style="width: 70px; height:40px;"> </td>
                                <td>{{ $item->course_name }}</td>
                                <td>{{ $item->category_id }}</td>
                                <td>{{ $item->selling_price }}</td>
                                <td>{{ $item->discount_price }}</td>
                                <td>
                                    <a href="{{ route('courses.edit',$item->id) }}" class="btn btn-info px-5">Edit </a>
                                    <a href="{{ route('courses.destroy',$item->id) }}" class="btn btn-danger px-5" id="delete">Delete </a>
                                </td>
                            </tr>
                        @endforeach

                        </tbody>

                    </table>
                </div>
            </div>
        </div>


    </div>
@endsection()
@push('js')
    <script src="{{ asset('backend/assets/js/validate.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script src="{{ asset('backend/assets/js/code.js') }}"></script>

    <!--Datatable-->
    <script src="{{ asset('backend/assets/plugins/datatable/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('backend/assets/plugins/datatable/js/dataTables.bootstrap5.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('#example').DataTable();
        } );
    </script>
    <!--End Datatable-->

@endpush
