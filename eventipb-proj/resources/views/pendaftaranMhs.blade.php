<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ URL::asset('css/pendaftaranMHS.css') }}">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@200;800&display=swap" rel="stylesheet">   
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://use.fontawesome.com/releases/v5.15.3/js/all.js" data-auto-replace-svg></script>

    <title>Formulir  Pendaftaran </title>
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
                  <!-- <li><a href="#">Buat Event</a></li> -->
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
    <section class="Form">
        <div class="container register-form">
            
            <div class="form">
                <div class="row">
                   
                        <div class="col-md-6">
                            <h4>Formulir Pendaftaran</h4>
                            <div class="form-field">
                                <label class="label">Nama </label>
                                <input type="text" class="form-control" placeholder="Isi nama anda" value= "Mahasiswa Ambisius" required/>
                            </div>

                            <div class="form-field">
                                <label class="label">Nomor Kontak </label>
                                <input type="text" class="form-control" placeholder="isi nomor anda, disarakan nomor WA" value= "08XXX" required/>
                            </div>

                            <h4>Tiket Event</h4>
                            <div class="container-box">
                                <div class="box">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <img src="{{url('/image/entypo_ticket.png')}}" alt="Ticket">
                                        </div>
                                        <div class="col-sm-4">
                                            <h5>Nama Tiket 1</h5>
                                            <label>Waktu Kegiatan</label><br>
                                            <label>Tanggal Kegiatan</label><br>
                                            <label>Harga</label><br>
                                        </div>
                                        <div class="col-sm-5">
                                            <h5></h5><br>
                                            <b>Waktu Kegiatan</b><br>
                                            <b>Tanggal Kegiatan</b><br>
                                            <b>Harga</b><br>
                                        </div>
                                    </div> 
                                </div>
                            </div>

                            <h4>Pembayaran</h4>
                            <div class="payment">
                                
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h5> Total Harga</h5>
                                    </div>
                                    <div class="col-sm-4">
                                        <h5>Rp harga</h5><br>
                                        <h6></h6><br>
                            
                                    </div>
                                    <div class="col-sm-5">
                                        <h6> Metode Pembayaran </h6>
                                        <h5>IPB Cashless</h5>
                                        <button type="button" class="btn1" id="btn-next">Bayar</button>
                                    </div>
                                </div> 
                            </div>
                        </div>

                        <div class="col-md-6">

                            <div class="event-detail">
                                <div class="detail-content">
                                    <div class="top-detail">
                                        <h6>Webinar</h6>
                                        <h4>University's Major: Hobby vs Parent Advice</h4>
                                    </div>
                                    <div class="body-detail">
                                        <h6>Diselenggarakan oleh</h6>
                                        <div class="penyelenggara">
                                            <img src="asset/user.svg" alt="Admin" width="40"><h4>BEM Fasilkom IPB University<br></h4>
                                        </div>
    
                                        <h6>Tanggal &amp; Waktu</h6>
                                        <div class="date">
                                            <a><svg class="svg-inline--fa fa-calendar fa-w-14" aria-hidden="true" style="margin-right: 10px;" focusable="false" data-prefix="fa" data-icon="calendar" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M12 192h424c6.6 0 12 5.4 12 12v260c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V204c0-6.6 5.4-12 12-12zm436-44v-36c0-26.5-21.5-48-48-48h-48V12c0-6.6-5.4-12-12-12h-40c-6.6 0-12 5.4-12 12v52H160V12c0-6.6-5.4-12-12-12h-40c-6.6 0-12 5.4-12 12v52H48C21.5 64 0 85.5 0 112v36c0 6.6 5.4 12 12 12h424c6.6 0 12-5.4 12-12z"></path></svg><!-- <i class="fa fa-calendar" aria-hidden="true" style="margin-right: 10px;"></i> Font Awesome fontawesome.com -->Selasa, 31 Maret 2020</a> <br>
                                            <a><svg class="svg-inline--fa fa-clock fa-w-16" aria-hidden="true" style="margin-right: 10px;" focusable="false" data-prefix="fa" data-icon="clock" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M256,8C119,8,8,119,8,256S119,504,256,504,504,393,504,256,393,8,256,8Zm92.49,313h0l-20,25a16,16,0,0,1-22.49,2.5h0l-67-49.72a40,40,0,0,1-15-31.23V112a16,16,0,0,1,16-16h32a16,16,0,0,1,16,16V256l58,42.5A16,16,0,0,1,348.49,321Z"></path></svg><!-- <i class="fa fa-clock" aria-hidden="true" style="margin-right: 10px;"></i> Font Awesome fontawesome.com -->13.00 - 15.30</a>                                        
                                        </div>
    
                                        <h6>Harga tiket</h6>
                                        <div class="price">
                                            <a>Rp 25000</a>
                                        </div>
    
                                        <h6>Lokasi</h6>
                                        <div class="loc">
                                            <a><svg class="svg-inline--fa fa-map-marker-alt fa-w-12" aria-hidden="true" style="margin-right: 10px;" focusable="false" data-prefix="fas" data-icon="map-marker-alt" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" data-fa-i2svg=""><path fill="currentColor" d="M172.268 501.67C26.97 291.031 0 269.413 0 192 0 85.961 85.961 0 192 0s192 85.961 192 192c0 77.413-26.97 99.031-172.268 309.67-9.535 13.774-29.93 13.773-39.464 0zM192 272c44.183 0 80-35.817 80-80s-35.817-80-80-80-80 35.817-80 80 35.817 80 80 80z"></path></svg><!-- <i class="fas fa-map-marker-alt" aria-hidden="true" style="margin-right: 10px;"></i> Font Awesome fontawesome.com -->Online</a>                                 
                                        </div>
                                        </div>
                                    </div>
                                    
                                </div>
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