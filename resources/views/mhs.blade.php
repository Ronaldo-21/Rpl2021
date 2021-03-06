<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('Template/plugins/fontawesome-free/css/all.min.css')}}">   

    <!-- Link CSS -->
    <link rel="stylesheet" href="{{asset('Template/dist/css/adminlte.min.css')}}">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('Template/plugins/fontawesome-free/css/all.min.css')}}">

    <!-- Link CSS -->
    <link rel="stylesheet" href="{{asset('Template/dist/css/adminlte.min.css')}}"> 


    <title>SIKP | Home 21</title>
  </head>
  <body>

    <!-- Navigasi -->
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-gray">
            <div class="container-fluid">
            <a class="navbar-brand font-weight-bold text-white" href="/mhs">SIKP <span class="sr-only">(current)</span></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
        
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                <a class="nav-link text-white font-weight-bold" href="/mhs">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-white font-weight-bold" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Layanan
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="/mhs/suratketerangan">Pengajuan Surat Keterangan</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="/mhs/prakp">Pengajuan Pra KP</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="/mhs/kp">Pengajuan KP</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="/mhs/ujiankp">Tanggal Ujian</a>
                </div>
            </ul>
            <form class="form-inline my-2 my-lg-0 ml-auto">
                <a href="" class="btn font-weight-bold text-white">Mahasiswa</a>
                <a href="/mhs/usermhs" class="btn text-white"><i class="fas fa-user" data-toggle="tooltip" title="User Profile"></i></a> 
                <a href="" class="btn text-white"><i class="fas fa-sign-out-alt" data-toggle="tooltip" title="Logout"></i></a> 
                
            </form>
            </div>
            </div>
        </nav>
    </header>

      <!-- Main Content -->
      <main>
      <!--
        <div class="container-fluid mt-2">
            <h2><i class="fas fa-home mr-2"></i>Home</h2><hr>
            <div class="row text-white">
                <div class="card bg-info ml-3" style="width: 18rem;">
                    <div class="card-body">
                        <div class="card-body-icon">
                            <i class="fas fa-file-signature mr-2"></i>
                        </div>
                    <h5 class="card-title">Hal. Pengesahan</h5>
                    <a href="#" class="btn btn-danger font-weight-bold">Belum ada data</a>
                    </div>
                </div>
                
                <div class="card bg-warning ml-3" style="width: 18rem;">
                    <div class="card-body">
                        <div class="card-body-icon">
                            <i class="fas fa-file-signature mr-2"></i>
                        </div>
                    <h5 class="card-title">Hal. Selesai KP</h5>
                    <a href="#" class="btn btn-danger font-weight-bold">Belum ada data</a>
                    </div>
                </div>
            </div>
        </div>
        -->
    </main>

    <footer class="bg-danger text-white text-center">
        <p class="font-weight-bold mt-3">RPL 21</p>
    </footer>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>