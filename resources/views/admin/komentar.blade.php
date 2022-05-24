@extends ('admin/master')
@section ('isi')
<div class="table-responsive">
                    <div class="table-wrapper">
                        <div class="table-title">
                            <div class="row">
                                <div class="col-sm-6">
                                    <h4>Manajemen Komentar</h4>
                                </div>
                            </div>
                        </div>
                        <table class="table table-striped table-hover ">
                            <thead>
                                <tr>
                                    <th>
                                        No
                                    </th>
                                    <th>Judul Artikel</th>
                                    <th>Tanggal</th>
                                    <th>Nama</th>
                                    <th>Isi</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $no = 1; @endphp
                                @foreach($komentar as $k)
                                <tr>
                                    <td>
                                        {{ $no++ }}
                                    </td>
                                    <td>{{ $k->artikel->judul_artikel }} </td>
                                    <td>{{ $k->tanggal }}</td>
                                    <td>{{ $k->nama }}</td>
                                    <td>{{ $k->isi }}</td>
                                    <td>
                                        <div class="aksi">

                                            <a href="#deleteCommentModal-{{$k->id}}" class="delete" data-toggle="modal"><button
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
            <!-- Edit Modal HTML -->

            <!-- Delete Modal HTML -->
            @foreach ($komentar as $k)
            <form method="post" action="{{url('/komentar/'.$k->id)}}">
            @method('DELETE')
            @csrf
            <div id="deleteCommentModal-{{$k->id}}" class="modal fade">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <form>
                            <div class="modal-header">
                                <h4 class="modal-title">Delete User</h4>
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
            @endforeach
@endsection