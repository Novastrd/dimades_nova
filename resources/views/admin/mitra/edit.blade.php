@extends('admin.layout')
@section('content')
<form action="{{ route('mitra.update',Crypt::encrypt($data->id)) }}" method="post">
    {{ csrf_field() }}
    <div class="content">
        <div class="row">
            <div class="col-lg-6">
                <div class="card card-defaiult">
                    <div class="card-header">
                        <h2> Edit mitra</h2>
                    </div>
                </div>
                @include('admin.partials.flash')
                <div class="card-body">
                    <div class="form-group">
                        <label class="form-label">Nama Perusahaan</label>
                        <input type="text" name="name" class="form-control" value="{{$data->name}}">
                    </div>
                    <div class="form-group">
                        <label class="form-label">Nama Admin Pt</label>
                        <input type="text" name="namaAdminPt" class="form-control" value="{{$data->namaAdminPt}}">
                    </div>
                    <div class="form-group">
                        <label class="form-label">Jenis Kelamin</label>
                        <select class="form-control" name="jk">
                            <option>pilih jenis kelamin</option>
                            <option value="Laki-laki" {{$data->jk == "Laki-laki" ? "selected" : ""}}>Laki-laki</option>
                            <option value="Perempuan" {{$data->jk == "Perempuan" ? "selected" : ""}}>Perempuan</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="form-label">No Telepon</label>
                        <input type="text" name="notelp" class="form-control" value="{{$data->notelp}}">
                    </div>
                    <div class="form-group">
                        <label class="form-label">Email</label>
                        <input type="text" name="email" class="form-control" value="{{$data->email}}">
                    </div>
                    <div class="form-footer pt-5 border-top">
                        <button type="submit" class="btn btn-primary btn-default">Simpan</button>
                        <a href="{{route('mitra.index')}}" class="btn btn-secondary btn-default">Kembali</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
@endsection