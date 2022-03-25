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
                        <div class="form-group @error('nama_buku') has-error @enderror">
                            <label for="exampleInputEmail1">Nama buku</label>
                            <input type="text" name="nama_buku" class="form-control" placeholder="Masukkan nama buku" value="{{ old('nama_buku') }}" />
                            @error('nama_buku')
                                <p style="color: red;">{{$message}}</p>                            
                            @enderror
                        </div>
                        <div class="form-group @error('author') has-error @enderror">
                            <label for="author">Author</label>
                            <input type="text" name="author" class="form-control" placeholder="Masukan nama Author" value="{{ old('author') }}" />   
                            @error('author')
                                <p style="color: red;">{{$message}}</p>                            
                            @enderror                         
                        </div>
                        <div class="form-group @error('penerbit') has-error @enderror">
                            <label for="author">Penerbit</label>
                            <input type="text" name="penerbit" class="form-control" placeholder="Masukan nama Penerbit" value="{{ old('penerbit') }}" />
                            @error('penerbit')
                                <p style="color: red;">{{$message}}</p>                            
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="tahun_terbit">Tahun terbit</label>
                            <input type="text" name="tahun_terbit" class="form-control" value="{{ old('tahun_tebit') }}" placeholder="Masukan tahun terbit" />
                        </div>
                        <div class="form-group @error('desc') has-error @enderror">
                            <label for="desc">Deskripsi</label>
                            <textarea name="desc" class="form-control" id="error" cols="30" rows="5" placeholder="Masukkan Deskripsi/Sinopsis buku">{{ old('desc') }}</textarea>
                            @error('desc')
                                <p style="color: red;">{{$message}}</p>                            
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
