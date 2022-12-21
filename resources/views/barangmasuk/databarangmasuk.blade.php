@extends('layout.main')

@section('content')
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css"
  integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g=="
  crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.12.1/datatables.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <title>SEVENTABLE</title>
</head>

<body>
  <div class="page-content-wrapper">
    <div class="justify-content-center">
      <div class="row-2">
        <div class="col-12 col-lg-12">
          <div class="card-body">
            <div class="container">

              <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                <div class="breadcrumb-title pe-3">Barang Masuk</div>
                <div class="ps-3">
                  <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                      <li class="breadcrumb-item"><a href="javascript:;"><i class="fadeIn animated bx bx-archive-in icon-color-6"></i></a>
                      </li>
                      <li class="breadcrumb-item active" aria-current="page">Data Barang Masuk</li>
                    </ol>
                  </nav>
                </div>
              </div>

              <div class="card">
                <div class="card-body">
                  <div>
                    <h4><em>DATA BARANG MASUK</em></h4>
                    <hr>
                    <a href="/tambahbarangmasuk" class="btn btn-success mb-10">Tambah Data Barang Masuk +</a>
                    <br></br>
                    <div class="row" > 
                      {{-- @if ($message = Session::get('success'))
                      <div class="alert alert-success" role="alert">
                        {{ $message }}
                      </div>
                      @endif --}}

                      <div class="table-responsive">
                        <table class="table table-striped table-bordered mb-0" id="example">
                          <thead class="thead-dark">
                            <tr>
                              <th scope="col">#</th>
                              <th scope="col">Tanggal</th>
                              <th scope="col">Nama Supplier</th>
                              <th scope="col">Nama Barang</th>
                              
                              <th scope="col">Merk</th>
                              <th scope="col">Jumlah Beli</th>
                              <th scope="col">Harga Barang</th>
                              <th scope="col">Total</th>


                              <th scope="col">AKSI</th>
                            </tr>
                          </thead>
                          <tbody>
                            @php
                            $no = 1;
                            @endphp
                            @foreach ($data as $row)
                            <tr>
                              <th scope="row">{{ $no++ }}</th>
                              <td>{{ $row->created_at }}</td>
                              <td>{{ $row->supplier ? $row->supplier->namasupplier : 'data tidak ada' }}</td>
                              <td>{{ $row->barang ? $row->barang->namabarang : 'data tidak ada' }}</td>
                              
                              <td>{{ $row->merk }}</td>
                              <td>{{ $row->jumlahbeli}}</td>
                              <td>{{ $row->harga}}</td>
                              <td>{{ $row->total}}</td>


                              <td>
                                <a href="/tampildatabarangmasuk/{{ $row->id }}" class="btn btn-warning"><i class="fa-sharp fa-solid fa-pen-to-square"></i></a>

                                <a href="#" class="btn btn-danger delete" data-id="{{ $row->id }}"
                                  data-nama="{{ $row->nama }}"><i class="fa-sharp fa-solid fa-trash"></i></a>
                                </td>
                              </tr>
                              @endforeach
                            </tbody>
                          </table>
                        </div>
                      </div>



                    </div>
                  </div>
                </div>
              </div>
            </div>


            <!-- Optional JavaScript; choose one of the two! -->

            <!-- Option 1: Bootstrap Bundle with Popper -->
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
          </script>
          <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
          <script src="https://code.jquery.com/jquery-3.6.1.min.js"
          integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>

          <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"
          integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw=="
          crossorigin="anonymous" referrerpolicy="no-referrer"></script>
          <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
          <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
          <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap4.min.js"></script>
          <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.12.1/datatables.min.js"></script>
          <script>
            $(document).ready(function() {
              $('#example').DataTable();
            });
          </script>
          <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>
  -->

</body>
<!-- SWEET ALERT -->
<script>
  $('.delete').click(function() {
    var barangmasukid = $(this).attr('data-id');
    var namasupplier = $(this).attr('data-namasupplier');
    swal({
      title: "Yakin Ingin delete Data?",
      text: "Kamu Yakin Akan Menghapus Data Ini?",
      icon: "warning",
      buttons: true,
      dangerMode: true,
    })
    .then((willDelete) => {
      if (willDelete) {
        window.location = "/deletebarangmasuk/"+ barangmasukid +" "
        swal("Data Barang Masuk Berhasil Di Hapus", {
          icon: "success",
        });
      } else {
        swal("Data Barang Masuk Gagal Di Hapus");
      }
    });
  });
</script>
<script>
  @if (Session::has('success'))
  toastr.success("{{ Session::get('success') }}")
  @endif
</script>

</html>
@endsection
