@extends('layout.main')

@section('content')

<!doctype html>
<html lang="en">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Bootstrap CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

	<title>SEVENTABLE</title>
</head>
<body>
<div class="page-content-wrapper">
    <div class="justify-content-center">
      <div class="row-2">
        <div class="col-12 col-lg-12">
          <div class="card-body">
	<div class="container">

		<div class="row justify-content-center">
			<div class="col-12">
				<div class="card">
					<div  class="card-body">
						<h2 class="text-center mb-4">UPDATE DATA PELANGGAN</h2>
						<br>
						
						<form action="/updatedatapelanggan/{{ $data->id }}" method="POST" enctype="multipart/form-data" >
							@csrf

							<!-- NAMA PELANGGAN -->
							<div class="mb-3">
								<label for="exampleInputEmail1" class="form-label"><h5>Nama Pelanggan</h5></label>
								<input type="text" name="namapelanggan" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $data->namapelanggan }}">	
							</div>
							@error('namapelanggan')
							<div class="alert alert-danger">{{ $message }}</div>
							@enderror

							<!-- ALAMAT -->
							<div class="mb-3">
								<label for="exampleInputEmail1" class="form-label"><h5>Alamat Pelanggan</h5></label>
								<input type="text" name="alamat" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $data->alamat }}">	
							</div>
							@error('alamat')
							<div class="alert alert-danger">{{ $message }}</div>
							@enderror

							<!-- NO TELEPON -->
							<div class="mb-3">
								<label for="exampleInputEmail1" class="form-label"><h5>No Telepon Pelanggan</h5></label>
								<input type="number" name="notelepon" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $data->notelepon }}">
							</div>
							@error('notelepon')
							<div class="alert alert-danger">{{ $message }}</div>
							@enderror


							<button type="submit" class="btn btn-primary">Update Pelanggan</button>
							<a href="/pelanggan" class="btn btn-danger mb-10">Kembali</a>

						</form>
					</div>
				</div>
			</div>
		</div>
	</div>




	<!-- Optional JavaScript; choose one of the two! -->

	<!-- Option 1: Bootstrap Bundle with Popper -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

	<!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
-->
</body>
</html>

@endsection