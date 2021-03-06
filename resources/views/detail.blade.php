<!DOCTYPE html>
<html lang="en">
<head>
  <title>COVID-19 | Bali</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
  <link rel="stylesheet" href=" https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css">
  <!-- Leaflet (JS/CSS) -->
  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.3.4/dist/leaflet.css">
  <script src="https://unpkg.com/leaflet@1.3.4/dist/leaflet.js"></script>
  <!-- Leaflet-KMZ -->
  <script src="https://unpkg.com/leaflet-kmz@latest/dist/leaflet-kmz.js"></script>
  <script type="text/javascript" language="javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
  <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>
  <script type="text/javascript" class="init">
	
    $(document).ready(function() {
        $('#example').DataTable();
    } );
    
        </script>
  <style>
    html,
    body,
    #map {
        height: 400px;
        width: 100%;
        padding: 0;
        margin: 0;
    }

    .section-header h4 {
      font-size: 20px;
      color: #413e66;
      text-align: center;
      font-weight: 600;
      position: relative;
    }
</style>
</head>
<body>

<!-- Image and text -->
<!-- <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand ml-5" href="/">
      <img src="https://4.bp.blogspot.com/-ELlrLdH0frM/WSz4AjqIWaI/AAAAAAAAASY/EF5ayA5zXn05TXw53cRUVTJeh6lzUJDDwCLcB/s400/Lambang%2BDaerah%2BProvinsi%2BBali%2B2.png" width="30" height="30" class="d-inline-block align-top" alt="">
      Provinsi Bali
    </a>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="/data">Data</a>
        </li>
      </ul>
    </div>
</nav> -->

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a id="nav-logo-bali-top" class="navbar-brand" ></a>
  <div class="container">
    <div>
      <a id="nav-logo-bali-top" class="navbar-brand" >
      <img src="https://4.bp.blogspot.com/-ELlrLdH0frM/WSz4AjqIWaI/AAAAAAAAASY/EF5ayA5zXn05TXw53cRUVTJeh6lzUJDDwCLcB/s400/Lambang%2BDaerah%2BProvinsi%2BBali%2B2.png" alt="" class="src" style="width: 40px;"> 
      </a>
    </div>
      <div class="col-9 p-0">
                    <h6 style="margin: 5px 0px 0px 0px;font-weight: 400; font-size: 12px; color: #413e66;  white-space: nowrap;">Pemerintah Provinsi Bali</h6>
                    <span class="font-weight-bold" style="color: #413e66;">Tanggap <span style="color: #ff7f63;">COVID-19</span></span>
                </div>
      
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" style="">
      <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <div class="col-md-10">
              <ul class="navbar-nav ml-auto" style="">
                  <li class="nav-item active">
                      <a class="nav-link" href="/"> Beranda <span class="sr-only">(current)</span>
                      </a>
                  </li>
                  <li class="nav-item active">
                    <a class="nav-link" href="/data">Data</a>
                  </li>
              </ul>
          </div>
      </div>
  </div>
</nav>

<div class="container">
    <div class="row mt-4">
        <div class="col-lg-12 col-md-12 col-12">
            <div class="card">
              <div class="container-fluid">
                <header class="section-header mt-3">
                    <h4 style="margin-bottom: 10px;" style="margin-top: 10px">Data Persebaran COVID-19 di Kabupaten/Kota {{$data[0]['kabupaten']}} </h4>                       
                </header>
              </div>
                <div class="card-body">
                <div class="table-responsive">
                  <table id="example" class="table table-striped rounded" >
                    <thead style="text-align: center">
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Tanggal</th>
                        <th scope="col">Sembuh</th>
                        <th scope="col">Positif</th>
                        <th scope="col">Dalam Perawatan</th>
                        <th scope="col">Meninggal</th>
                        <th scope="col">Aksi</th>
                      </tr>
                    </thead>
                    <tbody style="text-align: center">
                        @foreach ($data as $item)
                        <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $item->tgl_data }}</td>
                        <td>{{ $item->sembuh }}</td>
                        <td>{{ $item->positif }}</td>
                        <td>{{ $item->rawat }}</td>
                        <td>{{ $item->meninggal }}</td>
                        <td>
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <form action="/data/{{$item->id}}/edit" method="GET">
                                    <button class="btn btn-warning " type="submit">
                                        Edit
                                    </button>
                                </form>
                                <form action="/data/{{$item->id}}/" method="POST">
                                    @method("DELETE")
                                    @csrf
                                    <button class="btn btn-danger " type="submit">
                                        Delete
                                    </button>
                                </form>
                              </div>
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
</body>
</html>