@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <h1 class="page-head-line">PENGUNJUNG </h1>
            @if (session('success'))
                <div class="alert alert-success" role="alert">
                    {{ session('success') }}
                </div>
            @endif
        </div>
        <div class="col-md-12">           
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="d-flex justify-content-between">
                        <a href="/pengunjung/create" class="btn btn-success">Tambah</a>
                    </div>
                </div>
                <div class="panel-body">
                    <table class="table-responsive table-striped table-bordered table-hover" id="tabel-buku">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Nama pengunjung</th>
                                <th>Nomer hp</th>
                                <th>Alamat</th>
                                <th style="width: 150px;">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($pengunjung as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>    
                                    <td><b>{{ $item->nama_pengunjung }}</b></td>    
                                    <td>{{ $item->no_hp }}</td>    
                                    <td>{{ $item->alamat }}</td>   
                                    <td>
                                        <form action="{{ route('pengunjung.destroy', $item->id_pengunjung) }}" method="POST">
                                            <a href="{{ route('pengunjung.edit', $item->id_pengunjung) }}" class="btn btn-primary">Edit</a>
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">Hapus</button>
                                        </form>
                                    </td>
                                            
                                </tr>                                
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function confirmHapusPengunjung(id) {
        let text = "Apakah anda yakin ?";
        if (confirm(text) == true) {
            window.location = 'pengunjung/destroy/'+id;
        }
    }
</script>
@endsection
