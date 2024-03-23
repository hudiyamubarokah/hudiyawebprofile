@extends('admin.layout.app')

@section('heading', 'User Create')
    
@section('main_content')
<div class="container">
    <div class="card p-sm-5">
        <form action="{{ route('admin_user_store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row g-3">@extends('admin.layout.app')

@section('heading', 'Create User')

@section('main_content')
<div class="container">
    <div class="card p-sm-5">
        <form action="{{ route('admin_user_store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row g-3">
                <div class="col-md-6">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" name="name">
                </div>
                <div class="col-md-6">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email">
                </div>
                <div class="col-md-6">
                    <label for="alamat" class="form-label">Alamat</label>
                    <input type="text" class="form-control" id="alamat" name="alamat">
                </div>
                <div class="col-md-6">
                    <label for="profesi" class="form-label">Profesi</label>
                    <input type="text" class="form-control" id="profesi" name="profesi">
                </div>
                <div class="col-md-6">
                    <label for="no_telp" class="form-label">No. Telp</label>
                    <input type="text" class="form-control" id="no_telp" name="no_telp">
                </div>
                <div class="col-md-6">
                    <label for="deskripsi" class="form-label">Deskripsi</label>
                    <textarea class="form-control" id="deskripsi" name="deskripsi" rows="3"></textarea>
                </div>
                <div class="col-md-6">
                    <label for="deskripsi" class="form-label">CV</label>
                    <textarea class="form-control" id="cv" name="cv" rows="3"></textarea>
                </div>
                <div class="col-12">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection

                <div class="col-md-6">
                    <label for="Name" class="form-label">Nama</label>
                    <input type="text" class="form-control" id="Name" name="name">
                </div>
                <div class="col-md-6">
                    <label for="Email" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="Email" name="email" placeholder="Enter email">
                </div>
                <div class="col-md-6">
                    <label for="alamat" class="form-label">Alamat</label>
                    <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Enter address">
                </div>
                <div class="col-md-6">
                    <label for="pekerjaan" class="form-label">Pekerjaan</label>
                    <input type="text" class="form-control" id="pekerjaan" name="pekerjaan" placeholder="Enter job">
                </div>
                <div class="col-12">
                    <label for="deskripsi" class="form-label">Deskripsi</label>
                    <textarea class="form-control" id="deskripsi" name="deskripsi" rows="3"></textarea>
                </div>
                <div class="col-md-6">
                    <label for="no_telp" class="form-label">Nomor Handphone</label>
                    <input type="text" class="form-control" id="no_telp" name="no_telp" placeholder="Enter phone number">
                </div>
                <div class="col-12">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
