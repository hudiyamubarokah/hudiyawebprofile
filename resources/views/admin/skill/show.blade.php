@extends('admin.layout.app')

@section('heading', 'List Mahasiswa')
    
@section('main_content')

<div class="container">
    <div class="d-flex justify-content-between py-3">
        <div class="h4">skill</div>
        <div>
            <a href="{{ route('admin_skill_create') }}" class="btn btn-primary">CREATE</a>
        </div>
    </div>  
</div>

<div class="container p-2">
    <table class="table">
        <thead class="table-light">
            <tr>
                <th scope="col">No</th>             
                <th scope="col">Nama skill</th>
                <th scope="col">deskripsi</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($skill as $skill)
    <tr>         
        <td>{{ $loop->iteration }}</td>
        <td>{{ $skill->nama_skill }}</td>
        <td>{{ $skill->deskripsi }}</td> 
        <td>
            <form action="{{ route('admin_skill_delete', $skill->id) }}" method="post" onsubmit="return confirm('Are you sure?')">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">DELETE</button>
            </form>
        </td>
    </tr>
@endforeach

        </tbody>
    </table>
</div>

@endsection
