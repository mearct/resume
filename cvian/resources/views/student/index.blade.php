<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
	<meta charset="utf-8">
	<title>Laravel 6.0 Crud Application</title>

	<!-- Favicon -->
	<link rel="shortcut icon" type="image/x-icon" href="{{ asset('backend_assets/img/favicon.png') }}">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="{{ asset('backend_assets/css/bootstrap.min.css') }}">

	<!-- Fontawesome CSS -->
	<link rel="stylesheet" href="{{ asset('backend_assets/css/font-awesome.min.css') }}">

	<!-- Lineawesome CSS -->
	<link rel="stylesheet" href="{{ asset('backend_assets/css/line-awesome.min.css') }}">

	<!-- Select2 CSS -->
	<link rel="stylesheet" href="{{ asset('backend_assets/css/select2.min.css') }}">

	<!-- Datetimepicker CSS -->
	<link rel="stylesheet" href="{{ asset('backend_assets/css/bootstrap-datetimepicker.min.css') }}">

	<!-- Main CSS -->
	<link rel="stylesheet" href="{{ asset('backend_assets/css/style.css') }}">
</head>

<body>
	<style media="screen">
		.container {
			padding: 0.5%;
		}
	</style>
	<div class="container">
		<h2 class="alert alert-success">LARAVEL 6.0 CRUD APPLICATION</h2>

		<div class="row">
			<a href="#" class="btn btn-info" style="margin-left:82%" data-toggle="modal" data-target="#myModal">Add New Student</a>
			<div class="col-md-12">
				<table class="table table-bordered">
					<thead>
						<tr>
							<th>#</th>
							<th>FirstName</th>
							<th>LastName</th>
							<th>Gender</th>
							<th>Country</th>
							<th>City</th>
							<th>Address</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						@foreach($students as $key=>$student)
						<tr>
							<td>{{ ++$key }}</td>
							<td>{{ $student->firstname }}</td>
							<td>{{ $student->lastname }}</td>
							<td>{{ $student->gender }}</td>
							<td>{{ $student->country }}</td>
							<td>{{ $student->city }}</td>
							<td>{{ $student->address }}</td>
							<td>
								<a type="button" class="btn btn-warning btn-sm">Show</a>
								<!-- ---------------------------------------------------------------	Edit Button Code Start Here ------------------------------------------------------->
								<a data-student_id="{{$student->id}}"
										data-firstname="{{$student->firstname}}"
										data-lastname="{{$student->lastname}}"
										data-gender="{{$student->gender}}"
										data-country="{{$student->country}}"
										data-city="{{$student->city}}"
										data-address="{{$student->address}}"
										data-toggle="modal" data-target="#myModal-edit" type="button" class="btn btn-info btn-sm">Edit</a>
								<!-- ----------------------------------------------------------------	Edit Button Code end Here ------------------------------------------------------->
								<a  data-student_id="{{ $student->id }}" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#myModal-delete">Delete</a>
							</td>
						</tr>
						@endforeach
					</tbody>
					{{ $students->links() }}

				</table>

				{{-- Add New Student --}}

				<!-- The Modal -->
				<div class="modal fade right" id="myModal" tabindex="-1" role="dialog">
					<div class="modal-dialog modal-notify modal-lg modal-right modal-success" role="document">
						<div class="modal-content">

							<!-- Modal Header -->
							<div class="modal-header">
								<h4 class="modal-title">Modal Heading</h4>
								<button type="button" class="close" data-dismiss="modal">&times;</button>
							</div>

							<!-- Modal body -->
							<div class="modal-body">
								<form action="{{ route('student.store') }}" method="post">
									@csrf
									<div class="input-group">
										<div class="input-group-prepend">
											<span class="input-group-text">Firstname and Lastname</span>
										</div>
										<input type="text" class="form-control" name="firstname" placeholder="Enter First Name">
										<input type="text" class="form-control" name="lastname" placeholder="Enter Last Name">
									</div>

									<div class="input-group">
										<div class="input-group-prepend">
											<span class="input-group-text">Country and City</span>
										</div>
										<input type="text" class="form-control" name="country" placeholder="Enter Country Name">
										<input type="text" class="form-control" name="city" placeholder="Enter City Name">
									</div>

									<div class="input-group">
										<div class="input-group-prepend">
											<span class="input-group-text">Address and Gender</span>
										</div>
										<textarea type="text" class="form-control" name="address" placeholder="Enter Address"></textarea>
										<input type="text" class="form-control" name="gender" placeholder="Enter Gender">
									</div>

							</div>

							<!-- Modal footer -->
							<div class="modal-footer">
								<button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
								<button type="submit" class="btn btn-success">Save Student</button>

							</div>
							</form>
						</div>
					</div>
				</div>

				{{-- Edit New Student --}}

				<!-- The Modal -->
				<div class="modal fade right" id="myModal-edit" tabindex="-1" role="dialog">
					<div class="modal-dialog modal-notify modal-lg modal-right modal-success" role="document">
						<div class="modal-content">

							<!-- Modal Header -->
							<div class="modal-header">
								<h4 class="modal-title" id="exampleModalLabel">Modal Heading</h4>
								<button type="button" class="close" data-dismiss="modal">&times;</button>
							</div>

							<!-- Modal body -->
							<div class="modal-body">
								<form action="{{ route('student.update', 'student_id') }}" method="post">
									@csrf
									@method('PATCH')
									<div class="input-group">
										<div class="input-group-prepend">
											<span class="input-group-text">Firstname and Lastname</span>
										</div>
										<input type="text" class="form-control" id="firstname" name="firstname" >
										<input type="text" class="form-control" id="lastname" name="lastname" placeholder="Enter Last Name">
									</div>
									<input type="hidden" id="student_id" name="student_id">
									<br>
									<div class="input-group">
										<div class="input-group-prepend">
											<span class="input-group-text">Country and City</span>
										</div>
										<input type="text" class="form-control" id="country" name="country" placeholder="Enter Country Name">
										<input type="text" class="form-control" id="city" name="city" placeholder="Enter City Name">
									</div>

									<div class="input-group">
										<div class="input-group-prepend">
											<span class="input-group-text">Address and Gender</span>
										</div>
										<textarea type="text" class="form-control" id="address" name="address" placeholder="Enter Address"></textarea>
										<input type="text" class="form-control" id="gender" name="gender" placeholder="Enter Gender">
									</div>

							</div>

							<!-- Modal footer -->
							<div class="modal-footer">
								<button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
								<button type="submit" class="btn btn-info">update Student</button>
							</div>
							</form>
						</div>
					</div>
				</div>

				{{-- Delete New Student --}}

				<!-- The Modal -->
				<div class="modal fade right" id="myModal-delete" tabindex="-1" role="dialog">
					<div class="modal-dialog modal-notify modal-lg modal-right modal-success" role="document">
						<div class="modal-content">

							<!-- Modal Header -->
							<div class="modal-header">
								<h4 class="modal-title" id="exampleModalLabel">Modal Heading</h4>
								<button type="button" class="close" data-dismiss="modal">&times;</button>
							</div>

							<!-- Modal body -->
							<div class="modal-body">
								<form action="{{ route('student.destroy', 'student_id') }}" method="post">
									@csrf
									@method('DELETE')

									<input type="hidden" id="student_id" name="student_id">
									<p class="text-center" width="50%"> Are You Sure You Want to Delete</p>
							</div>

							<!-- Modal footer -->
							<div class="modal-footer">
								<button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
								<button type="submit" class="btn btn-danger">Yes/Delete Student</button>
							</div>
							</form>
						</div>
					</div>
				</div>


			</div>
		</div>
	</div>



	<script>
		$("#myModal-edit").on('show.bs.modal', function(event) {

			var button = $(event.relatedTarget)
			var firstname = button.data('firstname')
			var lastname = button.data('lastname')
			var country = button.data('country')
			var city = button.data('city')
			var address = button.data('address')
			var gender = button.data('gender')
			var student_id = button.data('student_id')

			var modal = $(this)

			modal.find('.modal-title').text('EDIT STUDENT INFORMATION');
			modal.find('.modal-body #firstname').val(firstname);
			modal.find('.modal-body #lastname').val(lastname);
			modal.find('.modal-body #country').val(country);
			modal.find('.modal-body #city').val(city);
			modal.find('.modal-body #address').val(address);
			modal.find('.modal-body #gender').val(gender);
			modal.find('.modal-body #student_id').val(student_id);
		});

		$("#myModal-delete").on('show.bs.modal', function(event) {

			var button = $(event.relatedTarget)
			var student_id = button.data('student_id')

			var modal = $(this)

			modal.find('.modal-title').text('DELETE STUDENT INFORMATION');
			modal.find('.modal-body #firstname').val(firstname);
			modal.find('.modal-body #lastname').val(lastname);
			modal.find('.modal-body #country').val(country);
			modal.find('.modal-body #city').val(city);
			modal.find('.modal-body #address').val(address);
			modal.find('.modal-body #gender').val(gender);
			modal.find('.modal-body #student_id').val(student_id);
		})
	</script>






	<!-- jQuery -->
	<script src="{{ asset('backend_assets/js/jquery-3.2.1.min.js') }}"></script>

	<!-- Bootstrap Core JS -->
	<script src="{{ asset('backend_assets/js/popper.min.js') }}"></script>
	<script src="{{ asset('backend_assets/js/bootstrap.min.js') }}"></script>

	<!-- Slimscroll JS -->
	<script src="{{ asset('backend_assets/js/jquery.slimscroll.min.js') }}"></script>

	<!-- Select2 JS -->
	<script src="{{ asset('backend_assets/js/select2.min.js') }}"></script>

	<!-- Datetimepicker JS -->
	<script src="{{ asset('backend_assets/js/moment.min.js') }}"></script>
	<script src="{{ asset('backend_assets/js/bootstrap-datetimepicker.min.js') }}"></script>

	<!-- Custom JS -->
	<script src="{{ asset('backend_assets/js/app.js') }}"></script>
	@stack('js')
</body>

</html>
