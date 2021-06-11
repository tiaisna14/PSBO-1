<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ URL::asset('css/buatevent.css') }}">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@200;800&display=swap" rel="stylesheet">   
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://use.fontawesome.com/releases/v5.15.3/js/all.js" data-auto-replace-svg></script>


    <title>Buat Event</title>
    <style>
        body{
            background:url('/image/bgIN.png') no-repeat;
            background-size: cover;
            padding-bottom: 500px;
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="navbar">
        <img src="{{url('/image/IPBEvent.png')}}" alt="IPB EVENT">
            <div class="left">
                <ul>
                  <li><a href="#">Beranda</a></li>
                  <li><a href="#">Buat Event</a></li>
              </ul>
            </div>
            <div class="right">
                <ul>
                  <li>
                    <a href="#">
                      <p>Mahasiswa Ambisius<br> <span>G61110067</span></p><img src="{{url('/image/user.svg')}}" alt="Admin" width="40"><i class="fas fa-angle-down"></i>
                    </a>
                     
                    <div class="dropdown">
                        <ul>
                          <li><a href="#"><i class="fas fa-user" style="margin-right: 10px;"></i> Profile</a></li>
                          <li><a href="#"><i class="fas fa-sliders-h" style="margin-right: 10px;"></i> Settings</a></li>
                          <li><a href="#"><i class="fas fa-sign-out-alt" style="margin-right: 10px;"></i> Signout</a></li>
                      </ul>
                    </div>
                    
                  </li>
                </ul>
            </div>
        </div>
    </div>
    
    <form action="add" method="post">
    
   
    @csrf
        <div class="container register-form">
            <div class="form">
                <div class="row">
                    @if(Session::get('success'))
                    <div class="alert alert-success">
                        {{ Session::get('success')}}
                    </div>   
                    @endif

                    @if(Session::get('fail'))
                        <div class="alert alert-danger">
                            {{ Session::get('fail')}}
                        </div>   
                    @endif

                    <h4>Informasi Kegiatan</h4>
                        <div class="col-md-6">
                                <div class="form-field">
                                <label class="label">Kategori Kegiatan</label>
                                <input list="ktgs" name="kategori" id="ktg" class="form-control" placeholder="Pilih kategori kegiatan" required="">

                                <datalist id="ktgs">
                                <option value="Lomba/Kompetisi">
                                <option value="Webinar">
                                <option value="Workshop">
                                
                                </datalist>
                            </div>
                            <div class="form-field">
                                <label class="label">Nama Kegiatan</label>
                                <input type="text" name="nama_event" class="form-control" placeholder="Isi nama kegiatan yang diselenggarakan" value="" required/>
                            </div>
                            
                            <div class="form-field">
                                <label class="label">Tanggal</label>
                                <input type="date" name="tanggal_pelaksanaan" class="form-control" placeholder="Tanggal pelaksanaan" value="" required/>
                            </div>
                            <div class="form-field">
                                <label class="label">Waktu</label>
                                <input type="time" name="waktu_pelaksanaan" class="form-control" placeholder="Waktu pelaksanaan" value="" required/>
                            </div>
                            <div class="form-field">
                                <label class="label">Lokasi</label>
                                <input type="text" name="lokasi" class="form-control" placeholder="Lokasi pelaksanaan" value="" required/>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-field">
                                <label class="label">Deskripsi</label>
                                <textarea class="form-control" name="deskripsi" placeholder="Deskripsikan kegiatan pada bagian ini" value="" required></textarea>     
                            </div>
                            <div class="form-field">
                                <label class="label">Poster</label>
                                <input type="file" class="form-control" placeholder="Tambahkan file" value="" required/>
                            </div>
                            <button type="submit" class="btn1">Berikutnya</button>
                            
                        </div>
                       
                </div>
                    
            </div>
        </div>

        </div> 
    </section>
    <script type="text/javascript" src="login page main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
  </body>
</html>