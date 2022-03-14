@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <h1 class="page-head-line">FORM TAMBAH BUKU </h1>
        </div>
        <div class="col-md-12">           
            <div class="panel panel-default">
                <div class="panel-heading">
                    FORM TAMBAH BUKU
                </div>
                <div class="panel-body">
                    <form action="/buku/tambah_buku" method="POST">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="exampleInputEmail1">Nama buku</label>
                            <input type="text" name="nama_buku" class="form-control" placeholder="Masukkan nama buku" />
                        </div>
                        <div class="form-group">
                            <label for="author">Author</label>
                            <input type="text" name="author" class="form-control" placeholder="Masukan nama Author" />
                        </div>
                        <div class="form-group">
                            <label for="author">Penerbit</label>
                            <input type="text" name="penerbit" class="form-control" placeholder="Masukan nama Penerbit" />
                        </div>
                        <div class="form-group">
                            <label for="tahun_terbit">Tahun terbit</label>
                            <input type="text" name="tahun_terbit" class="form-control" placeholder="Masukan tahun terbit" />
                        </div>
                        <div class="form-group">
                            <label for="desc">Deskripsi</label>
                            <textarea name="desc" class="form-control" cols="30" rows="5" placeholder="Masukkan Deskripsi/Sinopsis buku"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
