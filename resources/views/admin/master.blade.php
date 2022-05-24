<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Dashboard Admin</title>
  <link rel="stylesheet" href="{{ asset('assets/style.css') }}" />
  <link rel="stylesheet" href="{{ asset('vendors/flag-icon-css/css/flag-icon.min.css') }}">
  <link rel="stylesheet" href="{{ asset('vendors/simple-line-icons/css/simple-line-icons.css') }}">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
    integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
    integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
</head>

<body>
  <div class="wrapper">
    <!-- Sidebar  -->
    <nav id="sidebar">
      <div class="nav-title align-center">
        <img src="{{ asset('assets/img/logo.png') }}" alt="logo" class="logo" width="70px" />
      </div>
      <div class="sidebar-header" align="center">
        <img src="{{ asset('assets/img/admin.png') }}" class="fluid" alt="logo" height="80px" />
      </div>
      <ul class="list-unstyled components">
        <li class="active">
          <a href="/admin"><i class="fa-solid fa-house-chimney"></i> Home</a>
        </li>

        <li>
          <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="true" class="dropdown-toggle"><i
              class="fa-solid fa-newspaper"></i> Article</a>
          <ul class="collapse list-unstyled show" id="homeSubmenu">
            <li>
              <a href="artikel"><i class="fa-solid fa-table"></i> Index Article</a>
            </li>
            <li>
              <a href="komentar"><i class="fa-solid fa-comment-dots"></i></i> Index Komentar</a>
            </li>
          </ul>
        </li>
        <li>
          <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="true" class="dropdown-toggle"><i
              class="fa-solid fa-user-gear"></i> Users</a>
          <ul class="collapse list-unstyled show" id="pageSubmenu">
            <li>
              <a href="users"><i class="fa-solid fa-table"></i> Index Users</a>
            </li>
          </ul>
        </li>
      </ul>
    </nav>


    <!-- Page Content  -->
    <div id="content">
      <nav class="navbar navbar-expand-lg navbar-light bg-light" style="display: block;">
        <div class="row">
          <div class="col col-md-4">
            <div>
              <button type="button" id="sidebarCollapse" class="btn btn-info">
                <i class="fa-solid fa-bars"></i>
              </button>
            </div>
          </div>
          <div class="col-4 col-md-4">
            <h5 class="mt-2">
              Selamat datang
              <span class="badge badge-success">{{ Auth::user()->name }}</span>
            </h5>
          </div>
          <div class="col col-md-4">
            <div class="float-right">
              <div class="d-flex justify-content-center">
                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModalCenter">
                  <i class="fa-solid fa-power-off"></i> Logout
                </button>
              </div>
            </div>
          </div>
          
          <!-- Modal -->
          <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLongTitle">Apa kamu yakin ingin keluar ?</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Tidak</button>
                  <a href="/logout" type="button" class="btn btn-danger">YA</a>
                </div>
              </div>
            </div>
          </div>
      </nav>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item active" aria-current="page">Home</li>
        </ol>
      </nav>

      <!-- Quick Action Toolbar Ends-->
      @yield ('isi')

  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js"
    integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous">
  </script>
  <script type="text/javascript" src="{{ asset('assets/toggle.js') }}"></script>
