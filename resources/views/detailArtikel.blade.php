@extends ('master')
@section ('isi')
<img class="image-detail" src="/images/{{ $artikel->gambar }}">
 <ul class="breadcrumb">
         <li><a href="/">Home</a></li>
         <li><a href="#">Visit</a></li>
         <li><a href="#">{{ $artikel->judul_artikel }}</a></li>
 </ul>
 <section class="detailpost">
         <h4 style="text-align: center; font-size: 26px;">{{ $artikel->judul_artikel }}</h4>
         <h3 style="text-align: center; color: var(--blue); margin-bottom: 20px;"> <i class="fas fa-map-marker-alt"></i> {{ $artikel->lokasi }}
        </h3>
         <p class="isi-detail">{{ $artikel->isi}}</p>
 </section>
 <section>
<h2> Komentar Sebelumnya </h2>
    @foreach($komentars as $komentar)
    <div class="container-comment">
        <p style="font-weight: bold; font-size: 16px">{{ $komentar->nama }}</p>
            <p style="font-size: 8px">{{ $komentar->tanggal}}</p>
            <p style="font-size: 14px; margin-top: 5px;">{{ $komentar->isi }}</p>
    </div>
    @endforeach
</section>
<div class="container comment" id="Comment">
    <h3 class="section-title">Masukkan Komentar anda</h3>
    <form method="POST" action="{{url('/artikel/'.$artikel->id.'/komentar')}}" name="inputcomment">
    @csrf    
    <div class="row">
            <div class="col-25">
                <label class="label-komentar" for="fname">Nama</label>
            </div>
            <div class="col-75">
                <input type="text" name="nama" placeholder="Your name..">
            </div>
        </div>
        <div class="row">
            <div class="col-25">
                <label class="label-komentar" for="subject">Subject</label>
            </div>
            <div class="col-75">
                <textarea name="isi" cols="30" rows="10" placeholder="Write something.."
                    style="height:200px"></textarea>
            </div>
        </div>
        <input type="submit" name='submit' class="btn-submit-komentar" value="send message">
    </form>
</div>
@endsection