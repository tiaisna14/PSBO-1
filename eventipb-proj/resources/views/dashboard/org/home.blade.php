<?php
use Illuminate\Support\Facades\DB;
$data = DB::table('events')->get();
$data2 = DB::table('orgs')->get();

$org = DB::table('organisasis')->get();

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ URL::asset('css/navbarMHS.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/homePANITIA.css') }}">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@200;800&display=swap" rel="stylesheet">   
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://use.fontawesome.com/releases/v5.15.3/js/all.js" data-auto-replace-svg></script>

    <title>Home Organisasi IPB</title>
    <style>
        body{
            background:url('/image/bgIN.png') no-repeat;
            background-size: cover;
            padding-bottom: 500px;
        }
    </style>
</head>
<body>
    @csrf
    <div class="wrapper">
        <div class="navbar">
        <img src="{{url('/image/IPBEvent.png')}}" alt="IPB EVENT">
            <div class="left">
                <ul>
                  <li><a href="{{ route('org.home')}}">Beranda</a></li>
                  <li><a href="{{ route('org.eventcreate')}}">Buat Event</a></li>
              </ul>
            </div>
            <div class="right">
            <ul>
                  <li>
                    <a href="#">
                    <p>Organisasi Mahasiswa<br> 
                            <span>Kampus</span></p>
                    </a>
                  </li>
                  <li>
                      <a href="{{ route('org.logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();"><button class="btnlogout">Keluar <i class="fas fa-sign-out-alt"></i></button> </a>
                      <form action="{{ route('org.logout') }}" method="post" class="d-none" id="logout-form">@csrf</form>
                  </li>
                </ul> 
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <p class="upperjudul">Kegiatan Saya</p>
            <div class = "product-items">
            @foreach($data as $event) 
                <!-- single product -->
                <div class = "product">
                    <div class = "product-content">
                        <div class = "product-img">
                            <img src = "{{url('/image/poster1.png')}}"  alt = "product image">
                        </div>
                    </div>

                    <div class = "product-info">
                        <div class = "product-info-top">
                            <h2 class = "sm-title">{{$event->tanggal_pelaksanaan}}</h2>
                        </div>
                        <a href = "detail/{{ $event->idevent }}" class = "product-name">{{$event->nama_event}}</a>
                        <p class = "lokasi">{{$event->lokasi}}</p>
                    </div>

                    <div class = "off-info">
                    <h2 class = "sm-title">{{$event->kategori}}</h2>
                    </div>
                </div>
                <!-- end of single product -->
            @endforeach     
            </div> 
                       
        </div>
      </div>
    <script type="text/javascript" src="login page main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
  </body>
</html>