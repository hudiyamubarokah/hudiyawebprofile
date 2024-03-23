@extends('admin.layout.app')

@section('heading', 'List Mahasiswa')
    
@section('main_content')

<div class="container">
    <div class="d-flex justify-content-between py-3">
        <div class="h4">Mahasiswa</div>
        <div>
            <a href="{{ route('admin_user_create') }}" class="btn btn-primary">CREATE</a>
        </div>
    </div>  
</div>

<div class="container p-2">
    <table class="table">
        <thead class="table-light">
            <tr>
                <th scope="col">No</th>             
                <th scope="col">Nama</th>
                <th scope="col">Email</th>
                <th scope="col">Alamat</th>
                <th scope="col">Pekerjaan</th>
                <th scope="col">Deskripsi</th>
                <th scope="col">NoHp</th>
                <th scope="col">CV</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $item)
            <tr>         
                <td>{{ $loop->iteration }}</td>
                <td>{{ $item->name }}</td>
                <td>{{ $item->email }}</td> 
                <td>{{ $item->alamat }}</td>
                <td>{{ $item->Professi }}</td> <!-- Mengubah Professi menjadi pekerjaan -->
                <td>{{ $item->deskripsi }}</td>
                <td>{{ $item->no_telp }}</td> 
                <td>{{ $item->cv }}</td> 
                <td>
                    <a href="{{ route('admin_user_edit', $item->id ) }}" class="btn btn-primary">EDIT</a> <!-- Menggunakan class="btn btn-primary" -->
                    <a href="{{ route('admin_user_delete', $item->id ) }}" class="btn btn-danger" onclick="return confirm('Are you sure?')">DELETE</a> <!-- Menggunakan class="btn btn-danger" dan ubah pesan konfirmasi -->
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection
