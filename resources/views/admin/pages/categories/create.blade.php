@extends('admin.layout.app')
@section('title')
    Add New Category
@endsection
@push('head')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
@endpush
@section('content')
    <div class="col-12 center">
        <!-- general form elements -->
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Quick Example</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form id="myForm" action="{{route('categories.store')}}" method="post"
            enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label for="name">Category Name</label>
                        <input type="text" class="form-control" name="name" id="name" placeholder="Enter category name">
                    </div>
                    <div class="form-group">
                        <label for="image">File input</label>
                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file" name="image" class="custom-file-input" id="image">
                                <label class="custom-file-label" for="image">Choose file</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <img id="showImage" src="{{url('upload/no_image.jpg')}}" alt="Category image">
                    </div>

                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
        <!-- /.card -->



    </div>
@endsection
@push('js')
    <script type="text/javascript">
        $(document).ready(function (){
            $('#myForm').validate({
                rules: {
                    name: {
                        required : true,
                    },
                    image: {
                        required : true,
                    },

                },
                messages :{
                    name: {
                        required : 'Please Enter Category Name',
                    },
                    image: {
                        required : 'Please select Category image',
                    },


                },
                errorElement : 'span',
                errorPlacement: function (error,element) {
                    error.addClass('invalid-feedback');
                    element.closest('.form-group').append(error);
                },
                highlight : function(element, errorClass, validClass){
                    $(element).addClass('is-invalid');
                },
                unhighlight : function(element, errorClass, validClass){
                    $(element).removeClass('is-invalid');
                },
            });
        });

    </script>


    <script type="text/javascript">
        $(document).ready(function(){
            $("#image").change(function(e){
                var reader = new FileReader();
                reader.onload = function (e) {
                    $('#showImage').attr('src',e.target.result);
                }
                reader.readAsDataURL(e.target.files['0']);
            });
        });
    </script>
@endpush
