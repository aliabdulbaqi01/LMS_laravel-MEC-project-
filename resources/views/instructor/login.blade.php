<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--favicon-->
	<link rel="icon" href="{{asset('instructor')}}/assets/images/favicon-32x32.png" type="image/png" />
	<!--plugins-->
	<link href="{{asset('instructor')}}/assets/plugins/simplebar/css/simplebar.css" rel="stylesheet" />
	<link href="{{asset('instructor')}}/assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" />
	<link href="{{asset('instructor')}}/assets/plugins/metismenu/css/metisMenu.min.css" rel="stylesheet" />
	<!-- loader-->
	<link href="{{asset('instructor')}}/assets/css/pace.min.css" rel="stylesheet" />
	<script src="{{asset('instructor')}}/assets/js/pace.min.js"></script>
	<!-- Bootstrap CSS -->
	<link href="{{asset('instructor')}}/assets/css/bootstrap.min.css" rel="stylesheet">
	<link href="{{asset('instructor')}}/assets/css/bootstrap-extended.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
	<link href="{{asset('instructor')}}/assets/css/app.css" rel="stylesheet">
	<link href="{{asset('instructor')}}/assets/css/icons.css" rel="stylesheet">
	<title>MEC &bull; Login Instructor</title>
</head>

<body class="">
	<!--wrapper-->
	<div class="wrapper">
		<div class="section-authentication-signin d-flex align-items-center justify-content-center my-5 my-lg-0">
			<div class="container">
				<div class="row row-cols-1 row-cols-lg-2 row-cols-xl-3">
					<div class="col mx-auto">
						<div class="card mb-0">
							<div class="card-body">
								<div class="p-4">
									<div class="mb-3 text-center">
										<img src="{{asset('instructor')}}/assets/images/logo-icon.png" width="60" alt="" />
									</div>
									<div class="text-center mb-4">
										<h5 class="">MEC Instructor</h5>
                                        @if(session('status'))
                                          <p class="text-danger">{{session('status')}}</p>  {{--  //login-box-msg--}}
                                        @else
										<p class="mb-0">Please log in to your account</p>
                                        @endif
									</div>
									<div class="form-body">
										<form class="row g-3" method="post" action="{{route('instructor.login')}}">
                                            @csrf
											<div class="col-12">
												<label for="username" class="form-label">Username</label>
												<input type="text" name="username" class="form-control" id="username" placeholder="Please enter username">
                                                @error('username') <span class="text-danger">{{$message}}</span> @enderror
											</div>
											<div class="col-12">
												<label for="inputChoosePassword" class="form-label">Password</label>
												<div class="input-group" id="show_hide_password">
													<input type="password" name="password" class="form-control border-end-0" id="inputChoosePassword"  placeholder="Enter Password"> <a href="javascript:;" class="input-group-text bg-transparent"><i class='bx bx-hide'></i></a>
                                                    @error('password') <span class="text-danger">{{$message}}</span> @enderror

                                                </div>
											</div>
											<div class="col-12">
												<div class="d-grid">
													<button type="submit" class="btn btn-primary">Sign in</button>
												</div>
											</div>
										</form>
									</div>

								</div>
							</div>
						</div>
					</div>
				</div>
				<!--end row-->
			</div>
		</div>
	</div>
	<!--end wrapper-->
	<!-- Bootstrap JS -->
	<script src="{{asset('instructor')}}/assets/js/bootstrap.bundle.min.js"></script>
	<!--plugins-->
	<script src="{{asset('instructor')}}/assets/js/jquery.min.js"></script>
	<script src="{{asset('instructor')}}/assets/plugins/simplebar/js/simplebar.min.js"></script>
	<script src="{{asset('instructor')}}/assets/plugins/metismenu/js/metisMenu.min.js"></script>
	<script src="{{asset('instructor')}}/assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>
	<!--Password show & hide js -->
	<script>
		$(document).ready(function () {
			$("#show_hide_password a").on('click', function (event) {
				event.preventDefault();
				if ($('#show_hide_password input').attr("type") == "text") {
					$('#show_hide_password input').attr('type', 'password');
					$('#show_hide_password i').addClass("bx-hide");
					$('#show_hide_password i').removeClass("bx-show");
				} else if ($('#show_hide_password input').attr("type") == "password") {
					$('#show_hide_password input').attr('type', 'text');
					$('#show_hide_password i').removeClass("bx-hide");
					$('#show_hide_password i').addClass("bx-show");
				}
			});
		});
	</script>
	<!--app JS-->
	<script src="{{asset('instructor')}}/assets/js/app.js"></script>
</body>

</html>
