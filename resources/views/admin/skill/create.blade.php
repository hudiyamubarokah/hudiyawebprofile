@extends('admin.layout.app')

@section('heading', 'skill Create')


@section('main_content')
<div class="container">
    <div class="card p-sm-5">
        <form action="{{ route('admin_skill_store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row g-3">
                <div class="col-md-6">
                    <label for="name" class="form-label">Nama skill</label>
                    <input type="text" class="form-control" id="nama_skill" name="nama_skill">
                </div>
                <div class="col-md-6">
                    <label for="deskripsi" class="form-label">Deskripsi</label>
                    <textarea class="form-control" id="deskripsi" name="deskripsi" rows="3"></textarea>
                </div>
                <div class="col-12">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection

                