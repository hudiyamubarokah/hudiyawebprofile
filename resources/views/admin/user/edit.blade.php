@extends('admin.layout.app')

@section('heading', 'Edit User')

@section('main_content')

<form action="{{ route('admin_user_update', $users->id) }}" method="post">
    @csrf
    <div class="container">
        <div class="d-flex justify-content-between py-3">
            <div class="h4">Edit Biodata</div>
            <div>
                <a href="{{ route('admin_user_show') }}" class="btn btn-primary">Back</a>
            </div>
        </div>
        <div class="card p-sm-5">
            <form class="row g-3">
                <div class="mb-3">
                    <label for="name" class="form-label">Nama Mahasiswa</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{ $users->name }}">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="email" name="email" value="{{ $users->email }}">
                </div>
                <div class="mb-3">
                    <label for="alamat" class="form-label">Alamat</label>
                    <input type="text" class="form-control" name="alamat" id="alamat" value="{{ $users->alamat }}">
                </div>
                <div class="mb-3">
                    <label for="pekerjaan" class="form-label">Pekerjaan</label>
                    <input type="text" class="form-control" name="pekerjaan" id="pekerjaan" value="{{ $users->Professi }}">
                </div>
                <div class="mb-3">
                    <label for="no_telp" class="form-label">Nomor Handphone</label>
                    <input type="text" class="form-control" name="no_telp" value="{{ $users->no_telp }}">
                </div>
                <div class="mb-3">
                    <label for="deskripsi" class="form-label">Deskripsi</label>
                    <input type="text" class="form-control" name="deskripsi" value="{{ $users->deskripsi }}">
                </div>
                <div class="col-md-6">
                    <label for="deskripsi" class="form-label">CV</label>
                    <textarea class="form-control" id="cv" name="cv" rows="3" value="{{ $users->cv }}"></textarea>
                </div>
                <button type="submit" class="btn btn-outline-primary w-25">UPDATE</button>
            </form>
        </div>
    </div>
</form>

@endsection
