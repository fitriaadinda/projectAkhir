@extends ('admin/master')
@section ('isi')
      <div class="row">
        <div class="col-md-12 grid-margin">
          <div class="card">
            <div class="card-body">
              <div class="row">
                <div class="col-md-12">
                  <div class="d-sm-flex align-items-baseline report-summary-header">
                    <h5 class="font-weight-semibold">Ringkasan Laporan</h5> <span class="ml-auto">Updated Report</span>
                    <button class="btn btn-icons border-0 p-2"><i class="icon-refresh"></i></button>
                  </div>
                </div>
              </div>
              <br>
              <div class="row report-inner-cards-wrapper">
                <div class=" col-md -6 col-xl report-inner-card">
                  <div class="inner-card-text">
                    <span class="report-title">ARTIKEL</span>
                    <h4>10</h4>

                  </div>
                  <div class="inner-card-icon bg-primary">
                    <i class="icon-grid"></i>
                  </div>
                </div>
                <div class="col-md-6 col-xl report-inner-card">
                  <div class="inner-card-text">
                    <span class="report-title">USERS</span>
                    <h4>3</h4>

                  </div>
                  <div class="inner-card-icon bg-danger">
                    <i class="icon-user"></i>
                  </div>
                </div>
                <div class="col-md-6 col-xl report-inner-card">
                  <div class="inner-card-text">
                    <span class="report-title">CAROUSEL</span>
                    <h4>5</h4>
                  </div>
                  <div class="inner-card-icon bg-warning">
                    <i class="icon-layers"></i>
                  </div>
                  <!-- </div>
                <div class="col-md-6 col-xl report-inner-card">
                  <div class="inner-card-text">
                    <span class="report-title">RETURN</span>
                    <h4>25,542</h4>
                    <span class="report-count"> 9 Reports</span>
                  </div>
                  <div class="inner-card-icon bg-primary">
                    <i class="icon-diamond"></i>
                  </div>
                </div> -->
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-12">
            <div class="row">
              <div class="col-md-10 mx-auto mt-7 justify-content-center">

                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                  <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active">
                    </li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
                  </ol>
                  <div class="carousel-inner mt-3">

                    <div class="carousel-item active">
                      <img
                        src="https://images.unsplash.com/photo-1476158085676-e67f57ed9ed7?crop=entropy&cs=tinysrgb&fm=jpg&ixlib=rb-1.2.1&q=80&raw_url=true&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=872"
                        class="d-block w-100" alt="Sunset Over the City" />
                      <div class="carousel-caption d-none d-md-block">
                        <h5>Padar Island</h5>
                        <p>Pulau Padar adalah pulau ketiga terbesar di kawasan Taman Nasional Komodo, setelah
                          Pulau Komodo dan Pulau
                          Rinca. Pulau</p>
                      </div>
                    </div>

                    <div class="carousel-item">
                      <img
                        src="https://images.unsplash.com/photo-1588668214407-6ea9a6d8c272?crop=entropy&cs=tinysrgb&fm=jpg&ixlib=rb-1.2.1&q=80&raw_url=true&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=871"
                        class="d-block w-100" alt="Canyon at Nigh" />
                      <div class="carousel-caption d-none d-md-block">
                        <h5>Gunung Bromo</h5>
                        <p>Gunung Bromo adalah gunung yang paling terkenal di Jawa Timur dengan kunjungan yang paling
                          ramai setiap tahunnya.</p>
                      </div>
                    </div>
                    <div class="carousel-item">
                      <img
                        src="https://images.unsplash.com/photo-1516690561799-46d8f74f9abf?crop=entropy&cs=tinysrgb&fm=jpg&ixlib=rb-1.2.1&q=80&raw_url=true&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870"
                        class="d-block w-100" alt="Cliff Above a Stormy Sea" />
                      <div class="carousel-caption d-none d-md-block">
                        <h5>Raja Ampat</h5>
                        <p> Kepulauan Raja Ampat merupakan rangkaian empat gugusan pulau yang berdekatan dan berlokasi
                          di barat bagian Kepala Burung
                          (Vogelkoop) Pulau Papua.</p>
                      </div>
                    </div>
                    <div class="carousel-item">
                      <img
                        src="https://images.unsplash.com/photo-1601058497548-f247dfe349d6?ixlib=rb-1.2.1&raw_url=true&q=80&fm=jpg&crop=entropy&cs=tinysrgb&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870"
                        class="d-block w-100" alt="Cliff Above a Stormy Sea" />
                      <div class="carousel-caption d-none d-md-block">
                        <h5>Danau Toba</h5>
                        <p>Danau Toba merupakan danau terbesar di Indonesia dan Asia Tenggara. Di tengah danau ini
                          terdapat sebuah pulau vulkanik bernama Pulau Samosir.</p>
                      </div>
                    </div>
                    <div class="carousel-item">
                      <img
                        src="https://images.unsplash.com/photo-1518548419970-58e3b4079ab2?ixlib=rb-1.2.1&raw_url=true&q=80&fm=jpg&crop=entropy&cs=tinysrgb&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870"
                        class="d-block w-100" alt="Cliff Above a Stormy Sea" />
                      <div class="carousel-caption d-none d-md-block">
                        <h5>Tanah Lot</h5>
                        <p>Objek wisata tanah lot terletak di Desa Beraban, Kecamatan Kediri, Kabupaten Tabanan, sekitar
                          13 kilometer di sebelah
                          selatan Kota Tabanan.</p>
                      </div>
                    </div>
                  </div>
                  <!-- Inner -->
                  <!-- Controls -->
                  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  @endsection