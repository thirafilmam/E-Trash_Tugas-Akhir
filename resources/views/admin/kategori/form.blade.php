@extends('admin.layouts.app')

@section('title', 'Form Kategori')

@section('contents')
    <form
        action="{{ isset($kategori) ? route('admin.kategori.tambah.update', $kategori->id) : route('admin.kategori.tambah.simpan') }}"
        method="post">
        @csrf
        <div class="row">
            <div class="col-12">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-success">
                            {{ isset($kategori) ? 'Form Edit Kategori' : 'Form Tambah Kategori' }}</h6>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="nama">Nama Kategori</label>
                            <input type="text" class="form-control" id="nama" name="nama"
                                value="{{ isset($kategori) ? $kategori->nama : '' }}">
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection
