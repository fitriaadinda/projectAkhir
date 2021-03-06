<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website Pariwisata</title>

    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>

    <!-- custom css file link  -->
    <link rel="stylesheet" href="{{ ('/style.css') }}">
</head>

<!-- header section starts  -->
<header>
    <div id="menu-bar" class="fas fa-bars"></div>
    <a href="/" class="logo"><img src="/images/logo.png" width="100px"></a>
    <nav class="navbar">
        <a href="/">home</a>
        <a href="#visit">visit</a>
        <a href="#services">services</a>
        <a href="#contact">contact</a>
    </nav>
    <div class="icons">
        <i class="fas fa fa-search" id="search-btn"></i>
        <a href="/login"><i class="fas fa fa-user" id="login-btn"></i></a>
    </div>
    

    <form action="/#visit" class="search-bar-container" method="GET">
        <input type="search" id="search-bar" name="keyword" placeholder="search here...">
    </form>
</header>
<!-- header section ends -->

@yield ('carousel')

@yield ('isi')

@yield ('bukuTamu')

<section class="footer">
    <h1 class="credit"> created by <span> Kelompok 4 PW-H </span> | all rights reserved! </h1>
</section>
<script src="{{ ('/script.js') }}"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
@if (session('success_message'))
  <script>
      Swal.fire({
          title: 'Berhasil!',
          text: '{{ session('success_message') }}',
          icon: 'success',
      })

  </script>
  @endif
  @if (session('error_message'))
  <script>
    Swal.fire({
      title: 'Gagal!',
      text: '{{ session('error_message') }}',
      icon: 'error',
    })
  </script>
  @endif