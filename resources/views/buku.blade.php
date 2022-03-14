@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <h1 class="page-head-line">BUKU </h1>
        </div>
        <div class="col-md-12">           
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="d-flex justify-content-between">
                        <a href="/buku/form_tambah_buku" class="btn btn-success">Tambah</a>
                    </div>
                </div>
                <div class="panel-body">
                    <table class="table table-striped table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Nama Buku</th>
                                <th>Author</th>
                                <th>Penerbit</th>
                                <th>Tahun Terbit</th>
                                <th>deskripsi</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($buku as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>    
                                    <td>{{ $item->nama_buku }}</td>    
                                    <td>{{ $item->author }}</td>    
                                    <td>{{ $item->penerbit }}</td>    
                                    <td>{{ $item->tahun_terbit }}</td>    
                                    <td>{{ $item->desc }}</td>    
                                    <td><a href="buku/form_edit_buku/{{ $item->id }}" class="btn btn-primary">Edit</a><button onclick="confirmHapusBuku({{ $item->id }})" class="btn btn-danger">Hapus</button></td>    
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
    function confirmHapusBuku(id) {
        let text = "Apakah anda ingin menghapus buku tersebut ?";
        if (confirm(text) == true) {
            window.location = '/buku/hapus_buku/'+id;
        }
    }
</script>
@endsection
