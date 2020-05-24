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

    #why-us .sub span {
      font-family: "Montserrat", sans-serif;
      font-weight: bold;
      font-size: 30px;
      display: block;
      color: #555186;
    }

    .section-header h3 {
      font-size: 25px;
      color: #413e66;
      text-align: center;
      font-weight: 600;
      position: relative;
      font-family: "Montserrat", sans-serif;
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

<!-- Image and text -->
<!-- <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand " href="/" style="margin-left: 100px;">
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
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
     
      <ul class="navbar-nav mr-auto">

      </ul>

    
      <ul class="navbar-nav ml-auto" style="margin-right: 100px;">
         
          @guest
              <li class="nav-item">
                  <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
              </li>
              @if (Route::has('register'))
                  <li class="nav-item">
                      <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                  </li>
              @endif
          @else
              <li class="nav-item dropdown">
                  <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                      {{ Auth::user()->name }} <span class="caret"></span>
                  </a>

                  <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item" href="{{ route('logout') }}"
                         onclick="event.preventDefault();
                                       document.getElementById('logout-form').submit();">
                          {{ __('Logout') }}
                      </a>

                      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                          @csrf
                      </form>
                  </div>
              </li>
          @endguest
      </ul>
  </div>
</nav> -->
<!-- 
<main id="main" style="padding: 5%; background-color:#f5f8fd;"> -->
    <section id="why-us" class="why-us wow fadeInUp card shadow p-3 mb-5 bg-white rounded" style="visibility: visible; animation-name: fadeInUp;">
        <div class="container-fluid">
            <header class="section-header mt-3">
                <h3 style="margin-bottom: 20px;">Data Persebaran COVID-19 per tanggal {{$date}} di Provinsi Bali</h3>                       
            </header>
        </div>
      
        <div class="container">
            <div class="row counters">  
            <div class="col-lg-12 col-md-12 col-12" style="margin-top: 10px">
                    <div class="card">
                        
                        <div class="row sub" style="padding:10px; ">
                            <div class="col-md-3 col-6 text-center ">
                                <span style="color: #E5000D;  font-size: 48px;">{{$positif}}</span>
                                <h4 class="title card-title" style="margin-top:10px; color: #E5000D;">Positif</h4>
                            </div>
                            <div class="col-md-3 col-6 text-center ">
                                <span style="color: #5d62b5;  font-size: 48px;">{{$rawat}}</span>
                                <h4 class="title card-title" style="margin-top:10px; color: #5d62b5;">Dirawat</h4>
                            </div>
                             <div class="col-md-3 col-6 text-center ">
                                <span class="text-success" style=" font-size: 48px;">{{$sembuh}}</span>
                                <h4 class="text-success" style="margin-top:10px; color: #5d62b5;">Sembuh</h4>
                            </div>
                            <div class="col-md-3 col-6 text-center ">
                                <span class="text-dark" style=" font-size: 48px;">{{$meninggal}}</span>
                                <h4 class="title card-title" style="margin-top:10px; color: #000000;">Meninggal</h4>
                            </div>
                        </div>
                    </div>
                  </div>

<!-- <div class="container mt-4">
    <h4 >Data Sebaran Kasus Covid-19 Sampai Dengan Tanggal {{$date}} di Bali (BALI)</h4>
  <div class="row mt-4 mb-4">
    <div class="col-sm-3">
        <div class="card">
            <div class="card-header">
              Positif
            </div>
            <div class="card-body">
              <h5 class="card-title">Jumlah</h5>
              <p class="card-text">{{$positif}} Orang</p>
            </div>
          </div>
    </div>
    <div class="col-sm-3">
        <div class="card">
            <div class="card-header">
              Dalam Perawatan
            </div>
            <div class="card-body">
              <h5 class="card-title">Jumlah</h5>
              <p class="card-text">{{$rawat}} Orang</p>
              
            </div>
          </div> 
    </div>
    <div class="col-sm-3">
        <div class="card">
            <div class="card-header">
              Sembuh
            </div>
            <div class="card-body">
              <h5 class="card-title">Jumlah</h5>
              <p class="card-text">{{$sembuh}} Orang</p>
              
            </div>
          </div>  
    </div>
    <div class="col-sm-3">
        <div class="card">
            <div class="card-header">
              Meninggal
            </div>
            <div class="card-body">
              <h5 class="card-title">Jumlah</h5>
              <p class="card-text">{{$meninggal}} Orang</p>
            </div>
          </div>    
    </div>
  </div> -->

  <div class="col-lg-12 col-md-12 col-12" style="margin-top: 30px">
              <div class="card"><div class="container-fluid">
                <header class="section-header mt-3">
                    <h4 style="margin-bottom: 10px;" style="margin-top: 10px">Tambah Data Kasus COVID-19</h4>                       
                </header>
              </div>
              <div class="card-body">
              <form action="/data" method="POST">
                @csrf
                <div class="form-group">
                    <label for="exampleFormControlInput1">Tanggal</label>
                    <input type="date" class="form-control" name="tgl_data"  placeholder="">
                </div>
                <div class="form-group">
                  <label for="exampleFormControlSelect1">Kabupaten</label>
                  <select class="form-control" name="kabupaten" >
                    @foreach ($kabupaten as $item)
                        <option value="{{$item->id}}">{{$item->kabupaten}}</option>
                    @endforeach
                  </select>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Jumlah dalam Perawatan</label>
                    <input type="number" class="form-control" name="rawat" placeholder="">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Jumlah Sembuh</label>
                    <input type="number" class="form-control" name="sembuh" placeholder="">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Jumlah Meninggal</label>
                    <input type="number" class="form-control" name="meninggal" placeholder="">
                </div>
                <button type="submit" class="btn btn-success">Tambahkan</button>
              </form>
                    </div>
                    </div>
                  </div>
  <!-- <hr>
  <div class="row mt-4">
      <div class="col-sm-12">
        <div class="card">
            <div class="card-body">
              <h5 class="card-title">Tambah Data</h5>
              <form action="/data" method="POST">
                @csrf
                <div class="form-group">
                    <label for="exampleFormControlInput1">Tanggal</label>
                    <input type="date" class="form-control" name="tgl_data"  placeholder="">
                </div>
                <div class="form-group">
                  <label for="exampleFormControlSelect1">Kabupaten</label>
                  <select class="form-control" name="kabupaten" >
                    @foreach ($kabupaten as $item)
                        <option value="{{$item->id}}">{{$item->kabupaten}}</option>
                    @endforeach
                  </select>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Jumlah dalam Perawatan</label>
                    <input type="number" class="form-control" name="rawat" placeholder="">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Jumlah Sembuh</label>
                    <input type="number" class="form-control" name="sembuh" placeholder="">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Jumlah Meninggal</label>
                    <input type="number" class="form-control" name="meninggal" placeholder="">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
            </div>
          </div>
      </div>
      
  </div> -->
  <hr>
</div>
    <div class="row mt-4">
        <div class="col-lg-12 col-md-12 col-12" style="margin-top: 20px">
            <div class="card">
            <div class="container-fluid">
            <header class="section-header mt-3">
                <h4 style="margin-bottom: 10px;" style="margin-top: 10px">Data Persebaran COVID-19 setiap Kabupaten/Kota tanggal {{$date}}</h4>                       
            </header>
            </div>
                <div class="card-body">
                  <div class="table-responsive">
                  <table id="example" class="table table-striped rounded" >
                    <thead style="text-align: center">
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Kabupaten</th>
                        <th scope="col">Sembuh</th>
                        <th scope="col">Positif</th>
                        <th scope="col">Dalam Perawatan</th>
                        <th scope="col">Meninggal</th>
                        <th scope="col">Aksi</th>
                      </tr>
                    </thead>
                    <tbody style="text-align: center">
                        @foreach ($test as $item)
                        <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $item->kabupaten }}</td>
                        <td>{{ $item->sembuh }}</td>
                        <td>{{ $item->positif }}</td>
                        <td>{{ $item->rawat }}</td>
                        <td>{{ $item->meninggal }}</td>
                        <td>
                          <form action="/data/{{$item->id_kabupaten}}" method="GET">
                            <button class="btn btn-warning" type="submit">
                                See Detail
                            </button>
                        </form>
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

<script>

    var map = L.map('map');
    map.setView(new L.LatLng(-8.5723206,114.6667599),8.76);

    var OpenTopoMap = L.tileLayer('https://{s}.tile.opentopomap.org/{z}/{x}/{y}.png', {
      maxZoom: 17,
      attribution: 'Map data: &copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>, <a href="http://viewfinderpanoramas.org">SRTM</a> | Map style: &copy; <a href="https://opentopomap.org">OpenTopoMap</a> (<a href="https://creativecommons.org/licenses/by-sa/3.0/">CC-BY-SA</a>)',
      opacity: 0.90
    });

  OpenTopoMap.addTo(map);

    // Instantiate KMZ parser (async)
    var kmzParser = new L.KMZParser({
        onKMZLoaded: function (layer, name) {
            control.addOverlay(layer, name);
            layer.addTo(map);
        }
    });
    // Add remote KMZ files as layers (NB if they are 3rd-party servers, they MUST have CORS enabled)
    kmzParser.load('baliregency.kmz');
    // kmzParser.load('https://raruto.github.io/leaflet-kmz/examples/globe.kmz');

    var control = L.control.layers(null, null, {
        collapsed: false
    }).addTo(map);
</script>
</body>
</html>
