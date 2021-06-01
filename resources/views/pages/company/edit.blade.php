@extends('layouts.default')

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Edit Data Perusahaan</h1>
        </div>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Edit Data : {{$item->company_name}}</h6>
            </div>
            <div class="card-body">
                <form action="{{ route('company.update' , $item->id)}}" method="POST" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Unggah Foto :</label>
                        <div class="col-sm-10">
                            <input type="file" name="logo" value="{{ old('logo') ? old('logo') : $item->logo }}" accept="image/*"  class="form-control-file">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Nama perusahaan :</label>
                        <div class="col-sm-10">
                            <input type="text" name="company_name" value="{{ old('company_name') ? old('company_name') : $item->company_name }}" class="form-control" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Bidang usaha :</label>
                        <div class="col-sm-10">
                            <input type="text" name="field" value="{{ old('field') ? old('field') : $item->field }}" class="form-control" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Skala Perusahaan :</label>
                        <div class="col-sm-10">
                            <select class="form-control" name="scale" required>
                                <option value="{{ old('scale') ? old('scale') : $item->scale }}">{{ old('scale') ? old('scale') : $item->scale }}</option>
                                <option value="Lokal">Lokal</option>
                                <option value="Multinasional">Multinasional</option>
                                <option value="Internasional">Internasional</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Kontak person :</label>
                        <div class="col-sm-10">
                            <input type="text" name="contact" value="{{ old('contact') ? old('contact') : $item->contact }}" class="form-control" placeholder="Isi kontak person.." required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Email :</label>
                        <div class="col-sm-10">
                            <input type="email" name="email" value="{{ old('email') ? old('email') : $item->email }}" class="form-control" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Alamat :</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" name="address" value="{{ old('address') ? old('address') : $item->address }}" required>{{ old('address') ? old('address') : $item->address }}</textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Status :</label>
                        <div class="col-sm-10">
                            <select class="form-control" name="status" required>
                                <option value="{{ old('status') ? old('status') : $item->status }}">{{ old('status') ? old('status') : $item->status }}</option>
                                <option value="Sudah MoU">Sudah MoU</option>
                                <option value="Belum MoU">Belum MoU</option>
                                <option value="Pending">Pending</option>
                            </select>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->
@endsection