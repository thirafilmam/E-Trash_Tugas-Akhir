@extends('admin.layouts.app')

@section('title', 'Data Kategori')

@section('contents')
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-success">Jemput Sampah</h6>
        </div>
        <div class="card-body">
            <a href="{{ route('admin.kategori.tambah') }}" class="btn btn-success mb-3">Tambah Kategori</a>
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Kategori</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php($no = 1)
                        @foreach ($kategori as $row)
                            <tr>
                                <th>{{ $no++ }}</th>
                                <td>{{ $row->nama }}</td>
                                <td>
                                    <a href="{{ route('admin.kategori.edit', $row->id) }}" class="btn btn-warning">Edit</a>
                                    <a href="{{ route('admin.kategori.hapus', $row->id) }}" class="btn btn-danger">Hapus</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
