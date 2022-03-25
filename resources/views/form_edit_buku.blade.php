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
                        <div class="form-group @error('nama_buku') has-error @enderror">
                            <label for="exampleInputEmail1">Nama buku</label>
                            <input type="text" name="nama_buku" class="form-control" placeholder="Masukkan nama buku" value="{{ old('nama_buku', $item->nama_buku) }}" />
                            @error('nama_buku')
                                <p style="color: red;">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="form-group @error('author') has-error @enderror">
                            <label for="author">Author</label>
                            <input type="text" name="author" class="form-control" placeholder="Masukan nama Author" value="{{ old('author', $item->author) }}" />
                            @error('author')
                                <p style="color: red">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="form-group @error('penerbit') has-error @enderror">
                            <label for="author">Penerbit</label>
                            <input type="text" name="penerbit" class="form-control" placeholder="Masukan nama Penerbit" value="{{ old('penerbit', $item->penerbit) }}" />
                            @error('penerbit')
                                <p style="color: red">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="tahun_terbit">Tahun terbit</label>
                            <input type="text" name="tahun_terbit" class="form-control" placeholder="Masukan tahun terbit" value="{{ old('tahun_terbit', $item->tahun_terbit) }}" />
                        </div>
                        <div class="form-group">
                            <label for="desc">Deskripsi</label>
                            <textarea name="desc" class="form-control" cols="30" rows="5" placeholder="Masukkan Deskripsi/Sinopsis buku">{{ old('desc', $item->desc) }}</textarea>
                            @error('desc')
                                <p style="color: red">{{$message}}</p>
                            @enderror
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
