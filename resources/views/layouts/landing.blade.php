<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <title>SIM SPP</title>
</head>

<body style="background: #6777ef">

    <!-- Optional JavaScript; choose one of the two! -->
    <div class="container">
        
        
    {{-- <div class="card">
        <div class="card-body">
            <h1>Selamat Datang</h1>
            <p>Pendaftaran Peserta Didik Baru<br> 
             <br> di SMK WIkrama Bogor</p>
            <a href="#" class="btn btn-outline-primary">Mulai</a>
            <img src="{{ asset('assets/img/keuangan.png') }}" class="img-fluid" alt=""
                            style="width: 500px;height:325px">
        </div>
    </div> --}}

     <div class="row">
        <div class="col-sm-12">
            <div class="card" style="margin-top:70px;">
                <!-- Image and text -->
<nav class="navbar">
  <a class="navbar-brand">
    <p ><img src="{{ asset('assets/img/logo.png') }}" width="30" height="30" class="d-inline-block align-top" alt="">
    SIM SPP</p>
  </a>
</nav>
                <div class="card-body" style="padding-bottom:80px">
                    <p style="text-align:justify;"><img src="{{ asset('assets/img/keuangan.png') }}"
                            class="img-fluid" alt="" style="width: 500px;height:325px;float:right;">
                    <h2 style="color: cornflowerblue;margin-top:80px;margin-left:25px;">Selamat Datang</h2>
                    <p style="margin-left: 25px;">SIM SPP SMK WIKRAMA BOGOR adalah Sistem Informasi<br> 
                    yang berguna untuk mengelola pembayaran keuangan <br> di SMK WIkrama Bogor</p>
                    </p>
                    </h6>
                    <a href="{{ route('login') }}"class="btn btn-outline-info" style="border-radius: 5px;border-radius:15px;width:100px;margin-left:25px;">Mulai</a>
                </div>
            </div>
        </div>
    </div>

    </div>
    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    -->
</body>

</html>