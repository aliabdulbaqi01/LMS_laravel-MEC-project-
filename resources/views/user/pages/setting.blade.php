@extends('user.layout.app')
@section('title')
    Setting
@endsection
@section('content')
    @push('css')
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" >
    @endpush
    <div class="dashboard-heading mb-5">
        <h3 class="fs-22 font-weight-semi-bold">Settings</h3>
    </div>
    <ul class="nav nav-tabs generic-tab pb-30px" id="myTab" role="tablist">
        <li class="nav-item">
            <a class="nav-link  " id="edit-profile-tab" data-toggle="tab" href="#edit-profile" role="tab" aria-controls="edit-profile" aria-selected="false">
                Profile
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="password-tab" data-toggle="tab" href="#password" role="tab" aria-controls="password" aria-selected="true">
                Password
            </a>
        </li>

    </ul>
        <div class="tab-content mb-80" id="myTabContent">
            <div class="tab-pane fade show active" id="edit-profile" role="tabpanel" aria-labelledby="edit-profile-tab">
                <div class="setting-body">
                    <h3 class="fs-17 font-weight-semi-bold pb-4">Edit Profile</h3>
                    <form method="post" class="row pt-40px MultiFile-intercepted" action="{{route('settings.updateProfile', $user->id)}}" enctype="multipart/form-data">
                        @method('put')
                        @csrf
                    <div class="media media-card align-items-center">
                        <div class="media-img media-img-lg mr-4 bg-gray">
                            <img class="mr-3" src="{{!empty($user->photo) ? url('upload/user_images/'.$user->photo) : url('upload/no_image.jpg')}}" alt="avatar image">
                        </div>
                        <div class="media-body">
                            <div class="file-upload-wrap file-upload-wrap-2">
                                <div class="MultiFile-wrap" id="photo">
                                    <input type="file" name="photo" class="multi file-upload-input with-preview MultiFile-applied" multiple="" id="photo">
                                    <div class="MultiFile-list" id="MultiFile2_list"></div></div>
                                <span class="file-upload-text"><i class="la la-photo mr-2"></i>Upload a Photo</span>
                            </div><!-- file-upload-wrap -->
                            <p class="fs-14">Max file size is 5MB, Minimum dimension: 200x200 And Suitable files are .jpg &amp; .png</p>
                        </div>
                    </div><!-- end media -->

                        <div class="input-box col-lg-6">
                            <label class="label-text">Name</label>
                            <div class="form-group">
                                <input class="form-control form--control
                                @error('name') is-invalid @enderror
                                " type="text" name="name" value="{{old('name') ??$user->name}}">
                                <span class="la la-user input-icon"></span>
                            </div>
                            @error('name') <span class="text-danger">{{$message}}</span> @enderror

                        </div><!-- end input-box -->

                        <div class="input-box col-lg-6">
                            <label class="label-text">Username</label>
                            <div class="form-group">
                                <input class="form-control form--control
                                @error('username') is-invalid @enderror
                                " type="text" name="username" value="{{old('username') ??$user->username}}">
                                <span class="la la-user input-icon"></span>
                            </div>
                            @error('username') <span class="text-danger">{{$message}}</span> @enderror

                        </div><!-- end input-box -->
                        <div class="input-box col-lg-6">
                            <label class="label-text">Email</label>
                            <div class="form-group">
                                <input class="form-control form--control
                                @error('username') is-invalid @enderror
                                " type="email" name="email" value="{{old('email') ??$user->email}}">
                                <span class="la la-envelope input-icon"></span>
                            </div>
                            @error('email') <span class="text-danger">{{$message}}</span> @enderror
                        </div><!-- end input-box -->
                        <div class="input-box col-lg-6">
                            <label class="label-text">Phone</label>
                            <div class="form-group">
                                <input class="form-control form--control" type="text" name="phone" value="{{old('phone') ?? $user->phone}}">
                                <span class="la la-phone input-icon"></span>
                            </div>
                        </div><!-- end input-box -->
                        <div class="input-box col-lg-12">
                            <label class="label-text">Address</label>
                            <div class="form-group">
                                <input class="form-control form--control
                                " type="text" name="address" value="{{old('address') ?? $user->address}}">
                                <span class="la la-address-card input-icon"></span>
                            </div>
                        </div><!-- end input-box -->
                        <div class="input-box col-lg-12 py-2">
                            <button type="submit" class="btn theme-btn">Save Changes</button>
                        </div><!-- end input-box -->
                    </form>
                </div><!-- end setting-body -->
            </div><!-- end tab-pane -->


            <div class="tab-pane fade" id="password" role="tabpanel" aria-labelledby="password-tab">
                <div class="setting-body">
                    <h3 class="fs-17 font-weight-semi-bold pb-4">Change Password</h3>
                    <form method="post" class="row MultiFile-intercepted" action="{{route('settings.updatePassword', $user->id)}}">
                        @csrf
                        @method('put')
                        <div class="input-box col-lg-4">
                            <label class="label-text">Old Password</label>
                            <div class="form-group">
                                <input class="form-control form--control
                                @error('old_password') is-invalid  @enderror" type="password" name="old_password" placeholder="Old Password">
                                <span class="la la-lock input-icon"></span>
                            </div>
                            @error('old_password') <span class="text-danger">{{$message}}</span> @enderror
                        </div><!-- end input-box -->
                        <div class="input-box col-lg-4">
                            <label class="label-text" for="new_password">New Password</label>
                            <div class="form-group">
                                <input class="form-control form--control
                                @error('new_password') is-invalid  @enderror" id="new_password" type="password" name="new_password" placeholder="new Password">
                                <span class="la la-lock input-icon"></span>
                            </div>
                            @error('new_password') <span class="text-danger">{{$message}}</span> @enderror
                        </div><!-- end input-box -->
                        <div class="input-box col-lg-4">
                            <label class="label-text " for="password_confirmation">Confirm New Password</label>
                            <div class="form-group">
                                <input class="form-control form--control
                                @error('password_confirmation') is-invalid  @enderror" id="password_confirmation" type="password" name="password_confirmation" placeholder="new Password Confirmation">
                                <span class="la la-lock input-icon"></span>
                            </div>
                            @error('password_confirmation') <span class="text-danger">{{$message}}</span> @enderror
                        </div><!-- end input-box -->
                        <div class="input-box col-lg-12 py-2">
                            <button class="btn theme-btn">Change Password</button>
                        </div><!-- end input-box -->
                    </form>
                </div><!-- end setting-body -->
            </div><!-- end tab-pane -->
        </div><!-- end tab-content -->

@endsection

@push('js')
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script>
        @if(Session::has('message'))
        var type = "{{ Session::get('alert-type','info') }}"
        switch(type){
            case 'info':
                toastr.info(" {{ Session::get('message') }} ");
                break;

            case 'success':
                toastr.success(" {{ Session::get('message') }} ");
                break;

            case 'warning':
                toastr.warning(" {{ Session::get('message') }} ");
                break;

            case 'error':
                toastr.error(" {{ Session::get('message') }} ");
                break;
        }
        @endif
    </script>


@endpush
