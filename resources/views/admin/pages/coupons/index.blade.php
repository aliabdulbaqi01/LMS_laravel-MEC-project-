@extends('admin.layout.app')
@section('title')
    Copouns
@endsection
@push('head')
    <!-- jsGrid -->
    <link rel="stylesheet" href="{{asset('admin/plugins/jsgrid/jsgrid.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/plugins/jsgrid/jsgrid-theme.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/plugins/datatables-buttons/css/buttons.bootstrap4.min.css')}}">

@endpush
@section('content')
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
<h3 style="display: inline-block">All Coupons</h3>
                <a href="{{route('coupons.create')}}" class="float-right btn btn-primary mr-3">Add new Coupon</a>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table class="jsgrid-table">
                    <thead>
                <tr class="jsgrid-header-row">
                    <th class="jsgrid-header-cell jsgrid-header-sortable jsgrid-header-sort jsgrid-header-sort-asc" style="width: 40px;">Id</th>
                    <th class="jsgrid-header-cell jsgrid-header-sortable" style="width: 150px;">Name</th>
                    <th class="jsgrid-header-cell jsgrid-align-center jsgrid-header-sortable" style="width: 100px;">name</th>
                    <th class="jsgrid-header-cell jsgrid-align-right jsgrid-header-sortable" style="width: 150px;">validate</th>
                    <th class="jsgrid-header-cell jsgrid-align-right jsgrid-header-sortable" style="width: 150px;">Status</th>
                    <th class="jsgrid-header-cell jsgrid-align-center jsgrid-header-sortable" style="width: 200px;">Actions</th>
                </tr>
                    </thead>
                    <tbody>
                    @foreach($coupons as $coupon)
                        <tr>
                            <td class="text-center">{{$coupon->id}}</td>
                            <td class="text-center">{{$coupon->name}}</td>
                            <td class="text-center">{{$coupon->discount}}%</td>
                            <td class="text-center">{{Carbon\Carbon::parse($coupon->validaty)->format('D, d F Y')}}</td>
                            <td class="text-center">
                                @if($coupon->status)
                                    <span class="text-success">Valid</span>
                                @else
                                    <span class="text-danger">invalid</span>
                                @endif
                            </td>
                            <td class="text-center">
                                <a href="{{route('coupons.show', $coupon->id)}}" class="btn btn-success">Show</a>

                                <a href="{{route('coupons.edit', $coupon->id)}}"  class="btn btn-info">Edit</a>

                                <form action="{{route('coupons.destroy', $coupon->id)}}" id="delete" method="post" style="display: inline-block">
                                    @csrf
                                    @method('delete')
                                    <input type="submit" id="delete" class="btn btn-danger" value="Delete">
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            <!-- /.card-body -->

{{--            another option with other dashboard--}}
            {{--            <div class="card-body">--}}
            {{--                <div class="table-responsive">--}}
            {{--                    <table id="example" class="table table-striped table-bordered" style="width:100%">--}}
            {{--                        <thead>--}}
            {{--                        <tr>--}}
            {{--                            <th>Sl</th>--}}
            {{--                            <th>Category Image </th>--}}
            {{--                            <th>Category Name</th>--}}
            {{--                            <th>Action</th>--}}
            {{--                        </tr>--}}
            {{--                        </thead>--}}
            {{--                        <tbody>--}}

            {{--                        @foreach ($coupon as $key=> $item)--}}
            {{--                            <tr>--}}
            {{--                                <td>{{ $key+1 }}</td>--}}
            {{--                                <td> <img src="{{ asset($item->image) }}" alt="" style="width: 70px; height:40px;"> </td>--}}
            {{--                                <td>{{ $item->category_name }}</td>--}}
            {{--                                <td>--}}
            {{--                                    <a href="{{ route('edit.category',$item->id) }}" class="btn btn-info px-5">Edit </a>--}}
            {{--                                    <a href="{{ route('delete.category',$item->id) }}" class="btn btn-danger px-5" id="delete">Delete </a>--}}
            {{--                                </td>--}}
            {{--                            </tr>--}}
            {{--                        @endforeach--}}

            {{--                        </tbody>--}}

            {{--                    </table>--}}
            {{--                </div>--}}
            {{--            </div>--}}
            <!-- /.card-header -->
        </div>
        <!-- /.card -->
    </div>

@endsection
@push('js')
{{--    <script src="{{asset('admin')}}/plugins/jsgrid/jsgrid.min.js"></script>--}}

    <!-- AdminLTE for demo purposes -->

    <script src="{{asset('admin')}}/dist/js/demo.js"></script>
    <!-- Page specific script -->
{{--    <script>--}}
{{--        $(function () {--}}
{{--            $("#jsGrid1").jsGrid({--}}
{{--                height: "100%",--}}
{{--                width: "100%",--}}

{{--                sorting: true,--}}
{{--                paging: true,--}}

{{--                data: db.categories,--}}

{{--                fields: [--}}
{{--                    { name: "Name", type: "text", width: 150 },--}}
{{--                    { name: "Age", type: "number", width: 50 },--}}
{{--                    { name: "Address", type: "text", width: 200 },--}}
{{--                    { name: "Country", type: "select", items: db.countries, valueField: "Id", textField: "Name" },--}}
{{--                    { name: "Married", type: "checkbox", title: "Is Married" }--}}
{{--                ]--}}
{{--            });--}}
{{--        });--}}
{{--    </script>--}}
@endpush
