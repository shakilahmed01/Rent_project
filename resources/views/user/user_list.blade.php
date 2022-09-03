@extends('layouts.master')
@section('content')
<body>
@include('Dashboard.css.css')
	<div class="mobile-menu-overlay"></div>

	<div class="container">
		<div class="pd-ltr-20 xs-pd-20-10">
			<div class="min-height-200px">
				<div class="page-header">
					<div class="row">
						<div class="col-md-6 col-sm-12">
							<div class="title">
								<h4>User Details</h4>
							</div>
							<nav aria-label="breadcrumb" role="navigation">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="index.html">Home</a></li>
									<li class="breadcrumb-item active" aria-current="page">List user</li>
								</ol>
							</nav>
						</div>
						<div class="col-md-6 col-sm-12 text-right">
							<div class="dropdown">
								<a class="btn btn-primary dropdown-toggle" id="datetime" href="#" role="button" data-toggle="dropdown">

								</a>
                <script>
                var dt = new Date();
                document.getElementById("datetime").innerHTML = (("0"+dt.getDate()).slice(-2)) +"."+ (("0"+(dt.getMonth()+1)).slice(-2)) +"."+ (dt.getFullYear()) +" "+ (("0"+dt.getHours()).slice(-2)) +":"+ (("0"+dt.getMinutes()).slice(-2));
                </script>
								<div class="dropdown-menu dropdown-menu-right">
									<a class="dropdown-item" href="#">Export List</a>
									<a class="dropdown-item" href="#">Policies</a>
									<a class="dropdown-item" href="#">View Assets</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- basic table  Start -->
				<div class="pd-20 card-box mb-30">
					<div class="clearfix mb-20">
						<div class="pull-left">
							<h4 class="text-blue h4">List Table</h4>

						</div>

					</div>
					<table id="tblStocks" class="table">
						<thead>
							<tr>
                <th scope="col">Id</th>
                <th scope="col">User Name</th>
								<th scope="col">Email</th>
                <th scope="col">Address</th>
                <th scope="col">nationality</th>
                <th scope="col">Date of birth</th>
                <th scope="col">Father name</th>
                <th scope="col">Mother name</th>
                <th scope="col">Gender</th>
                <th scope="col">Profile Pic</th>
                <th scope="col">Action</th>


							</tr>
						</thead>
						<tbody>
              @foreach($users as $list)
              <tr>
                <th scope="row">{{$list->id}}</th>
                <th scope="row">{{$list->name}}</th>
								<td>{{$list->email}}</td>
                <td>{{$list->address}}</td>
                <td>{{$list->nationality}}</td>
                <td>{{$list->date_of_birth}}</td>
                <td>{{$list->father_name}}</td>
                <td>{{$list->mother_name}}</td>
                <td>{{$list->gender}}</td>
                <td>
                <img src="{{ asset('uploads/auth') }}/{{ $list->n_photo }}" alt="">
                </td>
                <td>
                  <a href="{{ url('/user/edit') }}/{{ $list->id }}" class=" btn-sm btn-primary">Edit</a>
                </td>
              </tr>
          @endforeach

						</tbody>
					</table>

      	</div>
				<!-- basic table  End -->


				</div>
				<!-- Contextual classes End -->
			</div>
			<div class="footer-wrap pd-20 mb-20 card-box">
				toletx By <a href="https://codetreebd.com" target="_blank">codetree</a>
			</div>
		</div>
	</div>
	<!-- js -->
@include('Dashboard.js.js')
</body>
@endsection
