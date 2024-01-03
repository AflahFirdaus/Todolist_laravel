@extends('index')
@section('title', 'task')

@section('isihalaman')
    <h3><center>Daftar Aktivitas</center></h3>
    
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalTugasTambah"> 
        Tambah Aktivitas
    </button>

    <p>
    <div class="container">
        <table class="table table table-bordered table-striped">
            <thead>
                <tr>
                    <td align="center">No</td>
                    <td align="center">ID</td>
                    <td align="center">Nama Tugas</td>
                    <td align="center">Tanggal</td>
                    <td align="center">Aktivitas</td>
                    <td align="center">Aksi</td>
                </tr>
            </thead>
        </div>

        <tbody>
            @foreach ($task as $index=>$tk)
                <tr>
                    <td align="center" scope="row">{{ $index + $task->firstItem() }}</td>
                    <td>{{$tk->id}}</td>
                    <td>{{$tk->nama_tugas}}</td>
                    <td>{{$tk->tanggal}}</td>
                    <td>{{$tk->aktivitas}}</td>
                    <td align="center">
                        
                        <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#modalTugasEdit{{$tk->id}}"> 
                            Edit
                        </button>
                        <!-- Awal Modal EDIT data Buku -->
                        <div class="modal fade" id="modalTugasEdit{{$tk->id}}" tabindex="-1" role="dialog" aria-labelledby="modalTugasEditLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="modalTugasEditLabel">Form Edit Tugas</h5>
                                    </div>
                                    <div class="modal-body">

                                        <form name="formbukuedit" id="formbukuedit" action="/task/edit/{{ $tk->id}} " method="post" enctype="multipart/form-data">
                                            @csrf
                                            {{ method_field('PUT') }}
                                            <div class="form-group row">
                                                <label for="id" class="col-sm-4 col-form-label">Id</label>
                                                <div class="col-sm-8">
                                                    <input type="text" class="form-control" id="id" name="id" placeholder="Masukan Id">
                                                </div>
                                            </div>

                                            <p>
                                            <div class="form-group row">
                                                <label for="nama_tugas" class="col-sm-4 col-form-label">Nama Tugas</label>
                                                <div class="col-sm-8">
                                                    <input type="text" class="form-control" id="nama_tugas" name="nama_tugas" value="{{ $tk->nama_tugas}}">
                                                </div>
                                            </div>

                                            <p>
                                            <div class="form-group row">
                                                <label for="tanggal" class="col-sm-4 col-form-label">Tanggal</label>
                                                <div class="col-sm-8">
                                                    <input type="text" class="form-control" id="tanggal" name="tanggal" value="{{ $tk->tanggal}}">
                                                </div>
                                            </div>

                                            <p>
                                            <div class="form-group row">
                                                <label for="aktivitas" class="col-sm-4 col-form-label">Aktivitas</label>
                                                <div class="col-sm-8">
                                                    <input type="text" class="form-control" id="aktivitas" name="aktivitas" value="{{ $tk->aktivitas}}">
                                                </div>
                                            </div>

                                            <p>
                                            <div class="modal-footer">
                                                <button type="button" name="tutup" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                                                <button type="submit" name="bukutambah" class="btn btn-success">Edit</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Akhir Modal EDIT data buku -->
                        |
                        <a href="task/hapus/{{$tk->id}}" onclick="return confirm('Yakin mau dihapus?')">
                            <button class="btn-danger">
                                Delete
                            </button>
                        </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <!--awal pagination-->
    Halaman : {{ $task->currentPage() }} <br />
    Jumlah Data : {{ $task->total() }} <br />
    Data Per Halaman : {{ $task->perPage() }} <br />

    {{ $task->links() }}
    <!--akhir pagination-->

    <!-- Awal Modal tambah data Buku -->
    <div class="modal fade" id="modalTugasTambah" tabindex="-1" role="dialog" aria-labelledby="modalTugasTambahLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalTugasTambahLabel">Form Input Tugas</h5>
                </div>
                <div class="modal-body">
                    <form name="formtasktambah" id="formtasktambah" action="/task/tambah " method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row">
                            <label for="nama_tugas" class="col-sm-4 col-form-label">Nama Tugas</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="nama_tugas" name="nama_tugas" placeholder="Masukan Tugas">
                            </div>
                        </div>

                        <p>
                        <div class="form-group row">
                            <label for="tanggal" class="col-sm-4 col-form-label">Tanggal</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="tanggal" name="tanggal" placeholder="Masukan Tanggal">
                            </div>
                        </div>

                        <p>
                        <div class="form-group row">
                            <label for="aktivitas" class="col-sm-4 col-form-label">Aktivitas</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="aktivitas" name="aktivitas" placeholder="Masukan Aktivitas">
                            </div>
                        </div>

                        <p>
                        <div class="modal-footer">
                            <button type="button" name="tutup" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                            <button type="submit" name="tugastambah" class="btn btn-success">Tambah</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Akhir Modal tambah data buku -->
    
@endsection