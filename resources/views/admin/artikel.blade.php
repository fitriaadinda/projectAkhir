@extends ('admin/master')
@section ('isi')
            
            <div class="container">
                <div class="table-responsive">
                    <div class="table-wrapper">
                        <div class="table-title">
                            <div class="row">
                                <div class="col-sm-6">
                                    <h4>Manajemen Artikel</h4>
                                </div>
                                <div class="col-sm-6">
                                    <a href="#addArticleModal" class="btn btn-success" data-toggle="modal"><i
                                            class="fa-solid fa-plus"></i> <span>Tambah artikel</span></a>

                                </div>
                            </div>
                        </div>
                        <table class="table table-striped table-hover">
                            <thead>
                                <tr>
                                    <th>
                                        No
                                    </th>
                                    <th>Lokasi</th>
                                    <th>Judul</th>
                                    <th>Tanggal</th>
                                    <th>Isi</th>
                                    <th>Rating</th>
                                    <th>Harga</th>
                                    <th>Gambar</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $no = 1; @endphp
                                @foreach ($artikel as $a)
                                <tr>
                                    <td>
                                    {{ $no++ }}
                                    </td>
                                    <td>{{ $a->lokasi }}</td>
                                    <td>{{ $a->judul_artikel }}</td>
                                    <td>{{ $a->tanggal }}</td>
                                    <td>{{ substr($a->isi,0,200) }}</td>
                                    <td>{{ $a->rating }}</td>
                                    <td>{{ $a->harga }}</td>
                                    <td>
                                        <img src="images/{{ $a->gambar }}" alt="Snow"
                                            style="width:100px;height:100px;">
                                    </td>
                                    <td>
                                        <div class="aksi">

                                            <a href="#updateArticleModal-{{$a->id}}" class="edit" data-toggle="modal"><button
                                                    type="button" class="btn btn-warning"><i
                                                        class="fa-solid fa-pen-to-square" data-toggle="tooltip"
                                                        title="Edit"></button></i></a>
                                            <a href="#deleteArticleModal-{{$a->id}}" class="delete" data-toggle="modal"><button
                                                    type="button" class="btn btn-danger"><i class="fa-solid fa-trash"
                                                        data-toggle="tooltip" title="Delete"></button></i></a>
                                        </div>

                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="clearfix">
                        </div>
                    </div>
                </div>
            </div>

            <!-- Tambah Modal HTML -->
            <div id="addArticleModal" class="modal fade">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <form method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="modal-header">
                                <h4 class="modal-title">Form Tambah Artikel</h4>
                                <button type="button" class="close" data-dismiss="modal"
                                    aria-hidden="true">&times;</button>
                            </div>
                            <div class="modal-body">
                                <div class="form-group">
                                    <label>Lokasi</label>
                                    <input type="text" name="lokasi" class=" form-control" required>
                                </div>
                                <div class="form-group">
                                    <label>Judul</label>
                                    <input type="text" name="judul_artikel" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label>Isi</label>
                                    <textarea name="isi" class="col-md-12" placeholder="Tulis artikel disini"
                                        ng-model="myTextarea"></textarea>
                                </div>
                                <div class="form-group">
                                    <label>Rating</label>
                                    <input type="text" name="rating" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Harga</label>
                                    <input type="number" name="harga" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Gambar </label>
                                    <input type="file" name="gambar" class=" form-control">
                                </div>
                            </div>
                            <div class="modal-footer">
                                <input type="button" class="btn btn-secondary" data-dismiss="modal" value="Batal">
                                <input type="submit" class="btn btn-success" value="Tambah">
                            </div>

                        </form>
                    </div>
                </div>
            </div>

            @foreach ($artikel as $a)
            <!-- Edit Modal HTML -->
            <div id="updateArticleModal-{{$a->id}}" class="modal fade">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <form method="post" action="{{url('/artikel/'.$a->id)}}" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="modal-header">
                                <h4 class="modal-title">Form Update Artikel</h4>
                                <button type="button" class="close" data-dismiss="modal"
                                    aria-hidden="true">&times;</button>
                            </div>
                            <div class="modal-body">
                                <div class="form-group">
                                    <label>Lokasi</label>
                                    <input type="text" name="lokasi" class=" form-control" value="{{ $a->lokasi }}" required>
                                </div>
                                <div class="form-group">
                                    <label>Judul</label>
                                    <input type="text" name="judul_artikel" class="form-control" value="{{ $a->judul_artikel }}" required>
                                </div>
                                <div class="form-group">
                                    <label>Isi</label>
                                    <textarea name="isi" class="col-md-12" placeholder="Tulis artikel disini"
                                        ng-model="myTextarea">{{ $a->isi }}</textarea>
                                </div>
                                <div class="form-group">
                                    <label>Rating</label>
                                    <input type="text" name="rating" class="form-control" value="{{ $a->rating }}">
                                </div>
                                <div class="form-group">
                                    <label>Harga</label>
                                    <input type="number" name="harga" class="form-control" value="{{ $a->harga }}">
                                </div>
                                <div class="form-group">
                                    <label>Gambar </label>
                                    <input type="file" name="gambar" class=" form-control">
                                    <img src="images/{{ $a->gambar }}" alt="Snow"
                                            style="width:100px;height:100px;">

                                </div>
                            </div>
                            <div class="modal-footer">
                                <input type="button" class="btn btn-secondary" data-dismiss="modal" value="Batal">
                                <input type="submit" class="btn btn-success" value="Tambah">
                            </div>

                        </form>
                    </div>
                </div>
            </div>
            @endforeach

            <!-- Delete Modal HTML -->
            @foreach ($artikel as $a)
            <form method="post" action="{{url('/artikel/'.$a->id)}}">
            @method('DELETE')
            @csrf
            <div id="deleteArticleModal-{{$a->id}}" class="modal fade">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <form>
                            <div class="modal-header">
                                <h4 class="modal-title">Delete Article</h4>
                                <button type="button" class="close" data-dismiss="modal"
                                    aria-hidden="true">&times;</button>
                            </div>
                            <div class="modal-body">
                                <p>Apakah Anda yakin ingin menghapus data ini?</p>
                                <p class="text-warning"><small>Tindakan ini tidak bisa dibatalkan.</small></p>
                            </div>
                            <div class="modal-footer">
                                <input type="button" class="btn btn-secondary" data-dismiss="modal" value="Cancel">
                                <input type="submit" class="btn btn-danger" value="Delete">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            </form>
            @endforeach
        </div>
    </div>
@endsection