@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <h1 class="page-head-line">FORM EDIT BUKU</h1>
        </div>
        <div class="col-md-12">           
            <div class="panel panel-default">
                <div class="panel-heading">
                    FORM EDIT BUKU
                </div>
                <div class="panel-body">
                    @foreach ($data_buku as $item)
                    <form action="/buku/edit_buku" method="POST">
                        {{ csrf_field() }}
                        <input type="hidden" name="id" value="{{ $item->id }}"/>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Nama buku</label>
                            <input type="text" name="nama_buku" class="form-control" placeholder="Masukkan nama buku" value="{{ $item->nama_buku }}" />
                        </div>
                        <div class="form-group">
                            <label for="author">Author</label>
                            <input type="text" name="author" class="form-control" placeholder="Masukan nama Author" value="{{ $item->author }}" />
                        </div>
                        <div class="form-group">
                            <label for="author">Penerbit</label>
                            <input type="text" name="penerbit" class="form-control" placeholder="Masukan nama Penerbit" value="{{ $item->penerbit }}" />
                        </div>
                        <div class="form-group">
                            <label for="tahun_terbit">Tahun terbit</label>
                            <input type="text" name="tahun_terbit" class="form-control" placeholder="Masukan tahun terbit" value="{{ $item->tahun_terbit }}" />
                        </div>
                        <div class="form-group">
                            <label for="desc">Deskripsi</label>
                            <textarea name="desc" class="form-control" cols="30" rows="5" placeholder="Masukkan Deskripsi/Sinopsis buku">{{ $item->desc }}</textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </form>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
