@extends('admin.layout.app')
@section('title')
    Add New Coupon
@endsection
@push('head')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
@endpush
@section('content')
    <div class="col-12 center">
        <!-- general form elements -->
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Add New Sub Category</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form id="myForm" action="{{route('subcategories.store')}}" method="post">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label for="name">Coupon Name</label>
                        <input type="text" class="form-control" name="name" id="name" placeholder="Enter category name">
                    </div>


                    <div class="form-group">
                        <label for="discount">Discount (%)</label>
                        <input type="number" class="form-control" min="5" max="50" name="discount" id="discount" placeholder="Enter category name">
                    </div>


                    <div class="form-group">
                        <label for="validity">Validity time </label>
                        <input type="date" class="form-control" name="validity" id="validity" min="{{\Carbon\Carbon::now()->format('Y-m-d')}}">
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
                    category_id: {
                        required : true,
                    },

                },
                messages :{
                    name: {
                        required : 'Please Enter SubCategory Name',
                    },
                    category_id: {
                        required : 'Please select Category',
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

@endpush
