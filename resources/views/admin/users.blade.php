@extends ('admin/master')
@section ('isi')

<div class="container-xl">
                <div class="table-responsive">
                    <div class="table-wrapper">
                        <div class="table-title">
                            <div class="row">
                                <div class="col-sm-6">
                                    <h4>Manajemen Pengguna</h4>
                                </div>
                                <div class="col-sm-6">
                                    <a href="#addUserModal" class="btn btn-success" data-toggle="modal"><i
                                            class="fa-solid fa-plus"></i> <span>Tambah Pengguna</span></a>

                                </div>
                            </div>
                        </div>
                        <table class="table table-striped table-hover">
                            <thead>
                                <tr>
                                    <th>
                                        No
                                    </th>
                                    <th>Nama</th>
                                    <th>E-mail</th>
                                    <th>No.Telepon</th>
                                    <th>Alamat</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $no = 1; @endphp
                                @foreach($user as $u)
                                <tr>
                                    <td>
                                        {{ $no++ }}
                                    </td>
                                    <td>{{ $u->name}}</td>
                                    <td>{{ $u->email }}</td>
                                    <td>{{ $u->no_hp}}</td>
                                    <td>{{ $u->alamat}}</td>
                                    <td>
                                        <div class="aksi">

                                            <a href="#editUserModal-{{$u->id}}" class="edit" data-toggle="modal"><button
                                                    type="button" class="btn btn-warning"><i
                                                        class="fa-solid fa-pen-to-square" data-toggle="tooltip"
                                                        title="Edit"></button></i></a>
                                            <a href="#deleteUserModal-{{$u->id}}" class="delete" data-toggle="modal"><button
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
            <div id="addUserModal" class="modal fade">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <form method="POST">
                            @csrf   
                            <div class="modal-header">
                                <h4 class="modal-title">Form Tambah pengguna</h4>
                                <button type="button" class="close" data-dismiss="modal"
                                    aria-hidden="true">&times;</button>
                            </div>
                            <div class="modal-body">
                                <div class="form-group">
                                    <label>Nama</label>
                                    <input type="text" name="name" class=" form-control" required>
                                </div>
                                <div class="form-group">
                                    <label>E-mail</label>
                                    <input type="email" name="email" class=" form-control" required>
                                </div>
                                <div class="form-group">
                                    <label>No.Telepon</label>
                                    <input type="number" name="no_hp" class="form-control" required>
                                </div>

                                <div class="form-group">
                                    <label>Alamat</label>
                                    <textarea name="alamat" class="form-control"></textarea>
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input type="password" name="password" class="form-control">
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


            @foreach($user as $u)
            <!-- Edit Modal HTML -->
            <div id="editUserModal-{{$u->id}}" class="modal fade">
                <div class="modal-dialog">
                    <div class="modal-content">
                    <form method="post" action="{{url('/users/'.$u->id)}}">
                            @csrf
                            @method('PUT')
                            <div class="modal-header">
                                <h4 class="modal-title">Form Edit pengguna</h4>
                                <button type="button" class="close" data-dismiss="modal"
                                    aria-hidden="true">&times;</button>
                            </div>
                            <div class="modal-body">
                                <div class="form-group">
                                    <label>Nama</label>
                                    <input type="text" name="name" class=" form-control" value="{{$u->name}}">
                                </div>
                                <div class="form-group">
                                    <label>E-mail</label>
                                    <input type="email" name="email" class=" form-control" value="{{$u->email}}">
                                </div>
                                <div class="form-group">
                                    <label>No.Telepon</label>
                                    <input type="number" name="no_hp" class="form-control" value="{{$u->no_hp}}">
                                </div>

                                <div class="form-group">
                                    <label>Alamat</label>
                                    <textarea name="alamat" class="form-control">{{$u->alamat}}</textarea>
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input type="password" name="password" class="form-control">
                                    <small id="passwordHelp" class="form-text text-muted">Kosongin jika tidak ingin merubah password.</small>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <input type="button" class="btn btn-secondary" data-dismiss="modal" value="Batal">
                                <input type="submit" class="btn btn-success" value="Simpan">
                            </div>

                        </form>
                    </div>
                </div>
            </div>
            @endforeach

            <!-- Delete Modal HTML -->
            @foreach($user as $u)
            <form method="post" action="{{url('/users/'.$u->id)}}">
            @method('DELETE')
            @csrf
            <div id="deleteUserModal-{{$u->id}}" class="modal fade">
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