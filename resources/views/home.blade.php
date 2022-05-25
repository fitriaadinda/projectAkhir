@extends ('master')
@section ('carousel')
<!-- home section starts  -->
<section class="home" id="home">
    <div class="content">
        <h3>explore indonesia</h3>
        <p>discover new places with us, adventure awaits</p>
        <a href="#" class="btn">discover more</a>
    </div>
    <div class="bg-overlay">
        <div class="video-container">
            <video src="images/vid-1.mp4" id="video-slider" loop autoplay muted></video>
        </div>
    </div>
</section>
<!-- home section ends -->
@endsection 

@section ('isi')
 <!-- packages section starts  -->
 <section class="visit" id="visit">
        <h3 class="section-title">VISIT</h3>
        <div class="box-container">
        @foreach ($artikel as $a)
            <div class="box">
                <a href="{{('detail-artikel/'.$a->id)}}"><img class="profil-image" src="images/{{ $a->gambar }}" alt=""></a>
                <div class="content">
                    <h3> <i class="fas fa-map-marker-alt"></i> {{ $a->lokasi }}</h3>
                    <a href="{{('detail-artikel/'.$a->id)}}" id="btnDetail">
                        <h2 class="visit-title">{{ $a->judul_artikel }}</h2>
                    </a>
                    <h4 style="color: rgb(126, 126, 126);">{{ substr($a->isi,0,200) }}</h4>
                    <div class="stars">
                        <p class="rating"><i class="fas fa-star"></i>{{ $a->rating }}</p>
                    </div>
                    <div class="price">Rp. {{ $a->harga }}</div>
                </div>
            </div>
            @endforeach

            @if(count($artikel)==0)
                <h2 style="color: red;">Data Tidak ditemukan</h2>
            @endif
    </section>
    <!-- packages section ends -->
@endsection

@section ('bukuTamu')
<!-- contact section starts  -->
<section class="contact" id="contact">
    <h3 class="section-title">Isi Buku Tamu</h3>
    <div class="row">
        <div class="image">
            <img src="images/contact-img.svg" alt="">
        </div>
        <form action="tamu.php" method="POST">
            <div class="inputBox">
                <input type="text" placeholder="Nama" name='nama'>
                <input type="email" placeholder="e-Mail" name='email'>
            </div>
            <div class="inputBox">
                <input type="number" placeholder="Nomor Handphone" name='nomor'>
                <input type="text" placeholder="Alamat" name='alamat'>
            </div>
            <input type="submit" class="btn btn-detail" value="Submit">
        </form>
    </div>
</section>
<!-- contact section ends -->
@endsection