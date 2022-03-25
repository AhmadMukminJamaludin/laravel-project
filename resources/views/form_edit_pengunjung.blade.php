@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <h1 class="page-head-line">FORM EDIT PENGUNJUNG </h1>
        </div>
        <div class="col-md-12">           
            <div class="panel panel-default">
                <div class="panel-heading">
                    FORM EDIT PENGUNJUNG
                </div>
                <div class="panel-body">
                    @foreach ($pengunjung as $item)
                    <form action="{{ route('pengunjung.update') }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-group @error('nama_pengunjung') has-error @enderror">
                            <label for="exampleInputEmail1">Nama pengunjung</label>
                            <input type="text" name="nama_pengunjung" class="form-control" placeholder="Masukkan nama pengunjung" value="{{ old('nama_pengunjung', $item->nama_pengunjung) }}" />
                            @error('nama_pengunjung')
                                <p style="color: red;">{{$message}}</p>                            
                            @enderror
                        </div>
                        <div class="form-group @error('no_hp') has-error @enderror">
                            <label for="no_hp">Nomor Handphone</label>
                            <input type="text" name="no_hp" class="form-control" placeholder="Masukan nama Nomor Handphone" value="{{ old('no_hp', $item->no_hp) }}" />   
                            @error('no_hp')
                                <p style="color: red;">{{$message}}</p>                            
                            @enderror                         
                        </div>
                        <div class="form-group @error('alamat') has-error @enderror">
                            <label for="alamat">Alamat</label>
                            <textarea name="alamat" class="form-control" id="error" cols="30" rows="5" placeholder="Masukkan alamat pengunjung">{{ old('alamat', $item->alamat) }}</textarea>
                            @error('alamat')
                                <p style="color: red;">{{$message}}</p>                            
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
