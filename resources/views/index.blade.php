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
  <link rel="stylesheet" href="https://pendataan.baliprov.go.id/assets/frontend/map/MarkerCluster.css" />
  <link rel="stylesheet" href="https://pendataan.baliprov.go.id/assets/frontend/map/MarkerCluster.Default.css" />
  <!-- Leaflet-KMZ -->
  <script src="https://unpkg.com/leaflet-kmz@latest/dist/leaflet-kmz.js"></script>
  <script type="text/javascript" language="javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
  <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>

  <style>
    html,
    body,
    #map {
        height: 500px;
        width: 100%;
        padding: 0;
        margin: 0;
    }
    .hero {
        width: 100%;
        height: 40vh;
        background: #f3f3f3;
        border-bottom: 2px solid #e2e2e2;
        margin: 0 0 0 0;
        background-image: url('https://cdn2.tstatic.net/palu/foto/bank/images2/ilustrasi-virus-corona-baru-covid-19-67.jpg');
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
    }
    .services .icon-box {
      padding: 10px;
      position: relative;
      overflow: hidden;
      margin: 0 0 0 0;
      opacity: 0.8;
      background: #f3f3f3;
      box-shadow: 0 10px 29px 0 rgba(68, 88, 144, 0.1);
      transition: all 0.3s ease-in-out;
      border-radius: 10px;
      text-align: center;
      border-bottom: 3px solid #f3f3f3;
    }

    .section-header h3 {
      font-size: 36px;
      color: #413e66;
      text-align: center;
      font-weight: 700;
      position: relative;
      font-family: "Montserrat", sans-serif;
    }

    .section-header h4 {
      font-size: 24px;
      color: #413e66;
      text-align: center;
      font-weight: 500;
      position: relative;
      font-family: "Montserrat", sans-serif;
    }

    #why-us .sub span {
      font-family: "Montserrat", sans-serif;
      font-weight: bold;
      font-size: 30px;
      display: block;
      color: #555186;
    }

    .form-group{
      text-align: center;
      vertical-align: middle;
    }

    .lebar{
      width:50%;
      margin-left:270px;
      
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


<section id="hero" class="services d-flex align-items-center">
  <div class="hero">
        <div class="container">
            <div class="row" style="">
              <div class="col-lg-12 pt-3 pt-lg-3">
                <h1><span style="color: rgb(245,214,213)"> Bali </span><span style="color: rgb(250,0,0)">COVID-19</span></h1>
              </div>
            </div>
          
        <div class="row pt-0 aos-init aos-animate" data-aos="fade-zoom-out">
          <div class="col-md-6 col-lg-6 d-flex align-items-stretch aos-init aos-animate" data-aos="zoom-in" data-aos-delay="100">
              <div class="icon-box">
                <h3 class="title" style="color: rgb(0,0,0)">Update informasi persebaran COVID-19 di Provinsi Bali sampai tanggal {{$tanggalSekarang}}.</h3>
                </div>
              </div>
          </div>
        </div>
        </div>
      </div>
</section>

<main id="main" style="padding: 5%; background-color:#f5f8fd;">
    <section id="why-us" class="why-us wow fadeInUp card shadow p-3 mb-5 bg-white rounded" style="visibility: visible; animation-name: fadeInUp;">
        <div class="container-fluid">
            <header class="section-header mt-3">
                <h3 style="margin-bottom: 10px;">Monitoring Data COVID-19 Provinsi Bali</h3>                       
            </header>
        </div>
      
        <div class="container">
            <div class="row counters">  
            <!-- <div class="row mt-4"> -->
      <!-- <div class="col-sm-4"> -->
              <!-- <div class="col-lg-12 col-md-12 col-12" style="margin-top: 20px"> 
                <div class="card">
                    <div class="card-body">
                      <form action="/search" method="POST">
                        @csrf
                            <div class="form-group">
                              <label for="exampleFormControlInput1">Masukkan tanggal yang ingin diketahui informasinya</label>
                              <input type="date" class="form-control" name="tanggal" id="tanggalSearch"  @if(isset($tanggal)) value="{{$tanggal}}" @endif><br>
                            
                            <button type="submit" class="btn btn-success btn-flat">Search</button>
                        </div>
                      </form>
                    </div>
                </div> -->
                
                <div class="col-lg-12 col-md-12 col-12" style="margin-top: 30px" >
                    <div class="card">
                    <form action="/search" method="POST">
                        @csrf
                            <div class="form-group">
                              <label for="exampleFormControlInput1">Masukkan tanggal yang ingin diketahui informasinya</label>
                              <input type="date" class="form-control lebar" name="tanggal" id="tanggalSearch"  @if(isset($tanggal)) value="{{$tanggal}}" @endif><br>
                            
                            <button type="submit" class="btn btn-success btn-flat">Search</button>
                        </div>
                      </form>
                    </div>
                  </div>

              <div class="col-lg-12 col-md-12 col-12" style="margin-top: 40px">
                    <div class="card">
                        
                        <div class="row sub" style="padding:10px; ">
                            <div class="col-md-3 col-6 text-center ">
                                <span style="color: #E5000D;  font-size: 48px;">{{$positif[0]->positif}}</span>
                                <h4 class="title card-title" style="margin-top:10px; color: #E5000D;">Positif</h4>
                            </div>
                            <div class="col-md-3 col-6 text-center ">
                                <span style="color: #5d62b5;  font-size: 48px;">{{$rawat[0]->rawat}}</span>
                                <h4 class="title card-title" style="margin-top:10px; color: #5d62b5;">Dirawat</h4>
                            </div>
                             <div class="col-md-3 col-6 text-center ">
                                <span class="text-success" style=" font-size: 48px;">{{$sembuh[0]->sembuh}}</span>
                                <h4 class="text-success" style="margin-top:10px; color: #5d62b5;">Sembuh</h4>
                            </div>
                            <div class="col-md-3 col-6 text-center ">
                                <span class="text-dark" style=" font-size: 48px;">{{$meninggal[0]->meninggal}}</span>
                                <h4 class="title card-title" style="margin-top:10px; color: #000000;">Meninggal</h4>
                            </div>
                        </div>
                    </div>
                  </div>

                
<!-- <div class="container mt-4">
  <div class="row mt-4 mb-4">
    <div class="col-sm-3">
        <div class="card">
            <div class="card-header">
              Positif
            </div>
            <div class="card-body">
              <h5 class="card-title">Jumlah</h5>
              <p class="card-text">{{$positif[0]->positif}} Orang</p>
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
              <p class="card-text">{{$rawat[0]->rawat}} Orang</p>
              
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
              <p class="card-text">{{$sembuh[0]->sembuh}} Orang</p>
              
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
              <p class="card-text">{{$meninggal[0]->meninggal}} Orang</p>
            </div>
          </div>    
    </div>
  </div> -->
  
  <div class="col-lg-12 col-md-12 col-12" style="margin-top: 50px"> 
        <div class="card">
        <div class="container-fluid">
            <header class="section-header mt-3">
                <h4 style="margin-bottom: 10px;" style="margin-top: 10px">Peta Persebaran COVID-19 setiap Kabupaten/Kota Tanggal {{$tanggalSekarang}}</h4>                       
            </header>
        </div>
        <div class="card-body">
              <div id="map"></div>
            
            <div class="card-footer" style="background: white">
              <div class="row">
                <div class="col-4">
                  Wilayah terdampak paling banyak
                  <input type="color" value="#E5000D" class="form-control" id="colorStart">
                </div>
                <div class="col-4">
                  Wilayah terdampak paling sedikit
                  <input type="color" value="#FFFFFF" class="form-control" id="colorEnd">
                </div>
                <div class="col-4">
                <button class="btn btn-success form-control form-group" id="btnGenerateColor" style="margin-top:10px">Generate</button>
                </div>
              </div>
              </div>
            </div>
          </div>
      </div>
</div>
  </div>
  
</div>
<div class="container" style="margin-top:30px" style="margin-bottom:30px">
    <div class="row mt-4">
        <div class="col-sm-12">
            <div class="card">
            <div class="container-fluid">
            <header class="section-header mt-3">
                <h4 style="margin-bottom: 10px;" style="margin-top: 10px">Data Persebaran COVID-19 setiap Kabupaten/Kota Tanggal {{$tanggalSekarang}}</h4>                       
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
                      </tr>
                    </thead>
                    <tbody style="text-align: center">
                        @foreach ($data as $item)
                        <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $item->kabupaten }}</td>
                        <td>{{ $item->sembuh }}</td>
                        <td>{{ $item->positif }}</td>
                        <td>{{ $item->rawat }}</td>
                        <td>{{ $item->meninggal }}</td>
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
<script src="https://pendataan.baliprov.go.id/assets/frontend/map/leaflet.markercluster-src.js"></script>
<script type="text/javascript" class="init">
	
  $(document).ready(function() {
      $('#example').DataTable();
  } );
  
</script>
<script>
  $(document).ready(function () {
    var dataMap=null;
    var colorMap=[
      "cceabb",
      "ffa299",
      "d9455f",
      "ffe277",
      "fdd998",
      "4d4c7d",
      "ef962d",
      "639a67",
      "b80d57"
      // "e5000d",
      // "e71925",
      // "ea333d",
      // "ec4c55",
      // "ef666d",
      // "f27f68",
      // "f4999e",
      // "f7b2b6",
      // "f9ccce"
    ];
    var tanggal = $('#tanggalSearch').val();
    console.log(tanggal);
    $.ajax({
      async:false,
      url:'getData',
      type:'get',
      dataType:'json',
      data:{date: tanggal},
      success: function(response){
        dataMap = response;
      }
    });
    console.log(dataMap);

    $.ajax({
      async:false,
      url:'getPositif',
      type:'get',
      dataType:'json',
      data:{date: tanggal},
      success: function(response){
        dataPos = response;
      }
    });
    console.log(dataPos);
    
    $('#btnGenerateColor').on('click',function(e){
      var colorStart = $('#colorStart').val();
      var colorEnd = $('#colorEnd').val();
      $.ajax({
        async:false,
        url:'/create-pallete',
        type:'get',
        dataType:'json',
        data:{start: colorStart, end:colorEnd},
        success: function(response){
          colorMap = response;
          setMapColor();
        }
      });
      
    });

    var map = L.map('map');
    map.setView(new L.LatLng(-8.374187,115.172922), 10);

    var OpenTopoMap = L.tileLayer('https://{s}.tile.opentopomap.org/{z}/{x}/{y}.png', {
      maxZoom: 17,
      attribution: 'Map data: &copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>, <a href="http://viewfinderpanoramas.org">SRTM</a> | Map style: &copy; <a href="https://opentopomap.org">OpenTopoMap</a> (<a href="https://creativecommons.org/licenses/by-sa/3.0/">CC-BY-SA</a>)',
      opacity: 0.90
    });

    OpenTopoMap.addTo(map);
    setMapColor();
    // define variables
    var lastLayer;
    var defStyle = {opacity:'1',color:'#000000',fillOpacity:'0',fillColor:'#CCCCCC'};
    var selStyle = {color:'#0000FF',opacity:'1',fillColor:'#00FF00',fillOpacity:'1'};
    
    function setMapColor(){
      var markerIcon = L.icon({
        iconUrl: '/mar.png',
        iconSize: [40, 40],
      });
      var BADUNG,BULELENG,BANGLI,DENPASAR,GIANYAR,JEMBRANA,KARANGASEM,KLUNGKUNG,TABANAN;
      dataPos.forEach(function(value,index){
        var colorKab = dataPos[index].kabupaten.toUpperCase();
        console.log(colorKab);
        if(colorKab == "BADUNG"){
          BADUNG = {opacity:'1',color:'#000',fillOpacity:'1',fillColor: '#'+colorMap[index]};
        }else if(colorKab=="BANGLI"){
          BANGLI = {opacity:'1',color:'#000',fillOpacity:'1',fillColor: '#'+colorMap[index]};
        } else if(colorKab=="BULELENG"){
          BULELENG = {opacity:'1',color:'#000',fillOpacity:'1',fillColor: '#'+colorMap[index]};
        }else if(colorKab=="DENPASAR"){
          DENPASAR = {opacity:'1',color:'#000',fillOpacity:'1',fillColor: '#'+colorMap[index]};
        }else if(colorKab=="GIANYAR"){
          GIANYAR = {opacity:'1',color:'#000',fillOpacity:'1',fillColor: '#'+colorMap[index]};
        }else if(colorKab =="JEMBRANA"){
          JEMBRANA = {opacity:'1',color:'#000',fillOpacity:'1',fillColor: '#'+colorMap[index]};
        }else if(colorKab=="KARANGASEM"){
          KARANGASEM = {opacity:'1',color:'#000',fillOpacity:'1',fillColor: '#'+colorMap[index]};
        }else if(colorKab=="KLUNGKUNG"){
          KLUNGKUNG = {opacity:'1',color:'#000',fillOpacity:'1',fillColor: '#'+colorMap[index]};
        }else if(colorKab =="TABANAN"){
          TABANAN = {opacity:'1',color:'#000',fillOpacity:'1',fillColor: '#'+colorMap[index]};
        }

      });

    // Instantiate KMZ parser (async)
    var kmzParser = new L.KMZParser({
        onKMZLoaded: function (layer, name) {
          control.addOverlay(layer, name);
          var markers = L.markerClusterGroup();
          var layers = layer.getLayers()[0].getLayers();

            // fetching sub layer
      	  layers.forEach(function(layer, index){
          
          var kab  = layer.feature.properties.NAME_2;
          kab = kab.toUpperCase();
          var prov = layer.feature.properties.NAME_1;
          
          //
          if(!Array.isArray(dataMap) || !dataMap.length == 0 ){
            // set sub layer default style positif covid
            if(kab == 'BADUNG'){
              layer.setStyle(BADUNG);
            }else if(kab == 'BANGLI'){
              layer.setStyle(BANGLI);
            }else if(kab == 'BULELENG'){
              layer.setStyle(BULELENG);
            }else if(kab == 'DENPASAR'){
              layer.setStyle(DENPASAR);
            }else if(kab == 'GIANYAR'){
              layer.setStyle(GIANYAR);
            }else if(kab == 'JEMBRANA'){
              layer.setStyle(JEMBRANA);
            }else if(kab == 'KARANGASEM'){
              layer.setStyle(KARANGASEM);
            }else if(kab == 'KLUNGKUNG'){
              layer.setStyle(KLUNGKUNG);
            }else if(kab == 'TABANAN'){
              layer.setStyle(TABANAN);
            } 


            
            // peparing data format
            var data = '<table width="300">';
                data +='  <tr>';
                data +='    <th colspan="2">Keterangan</th>';
                data +='  </tr>';
              
              
              data +='  <tr>';
              data +='    <td>Kabupaten</td>';
              data +='    <td>: '+kab+'</td>';
              data +='  </tr>';              

              
              data +='  <tr style="color:red">';
              data +='    <td>Positif</td>';
              data +='    <td>: '+dataMap[index].positif+'</td>';
              data +='  </tr>';
              

              data +='  <tr style="color:green">';
              data +='    <td>Sembuh</td>';
              data +='    <td>: '+dataMap[index].sembuh+'</td>';
              data +='  </tr>'; 

              data +='  <tr style="color:black">';
              data +='    <td>Meninggal</td>';
              data +='    <td>: '+dataMap[index].meninggal+'</td>';
              data +='  </tr>';

          
              data +='  <tr style="color:blue">';
              data +='    <td>Dalam Perawatan</td>';
              data +='    <td>: '+dataMap[index].rawat+'</td>';
              data +='  </tr>';               
              
              
            data +='</table>';
    
            if(kab == 'BANGLI'){
              markers.addLayer( 
                L.marker([-8.254251, 115.366936] ,{
                  icon: markerIcon
                }).bindPopup(data).addTo(map)
              );
            }
            else if(kab == 'GIANYAR'){
              markers.addLayer( 
                L.marker([-8.422739, 115.255700] ,{
                  icon: markerIcon
                }).bindPopup(data).addTo(map)
              );

            }else if(kab == 'KLUNGKUNG'){
              markers.addLayer( 
                L.marker([-8.487338, 115.380029] ,{
                  icon: markerIcon
                }).bindPopup(data).addTo(map)
              );

            }else{
              markers.addLayer( 
                L.marker(layer.getBounds().getCenter(),{
                  icon: markerIcon
                }).bindPopup(data).addTo(map)
              );
            }

          }else{
            var data = "Tidak ada Data pada tanggal tersebut"
            layer.setStyle(defStyle);
          }
          layer.bindPopup(data);
      	});
        map.addLayer(markers);
        layer.addTo(map);
        }
    });
  
    // Add remote KMZ files as layers (NB if they are 3rd-party servers, they MUST have CORS enabled)
    kmzParser.load('bali-kabupaten.kmz');
    // kmzParser.load('https://raruto.github.io/leaflet-kmz/examples/globe.kmz');

    var control = L.control.layers(null, null, {
        collapsed: false
    }).addTo(map);
    $('.leaflet-control-layers').hide();
    }
  });

  
</script>
</body>
</html>
