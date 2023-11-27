@extends('admin.layouts.app')

@section('title', 'Data Barang')

@section('contents')
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-success">Data Jenis Sampah</h6>
        </div>
        <div class="card-body">
            @if (auth()->user()->level == 'Admin')
                <a href="{{ route('admin.barang.tambah') }}" class="btn btn-success mb-3">Tambah Jenis Sampah</a>
            @endif
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Kode Barang</th>
                            <th>Nama Barang</th>
                            <th>Kategori</th>
                            <th>Harga</th>
                            <th>Jumlah</th>
                            @if (auth()->user()->level == 'Admin')
                                <th>Aksi</th>
                            @endif
                        </tr>
                    </thead>
                    <tbody>
                        @php($no = 1)
                        @foreach ($data as $row)
                            <tr>
                                <th>{{ $no++ }}</th>
                                <td>{{ $row->kode_barang }}</td>
                                <td>{{ $row->nama_barang }}</td>
                                <td>{{ $row->kategori->nama }}</td>
                                <td>{{ $row->harga }}</td>
                                <td>{{ $row->jumlah }}</td>
                                @if (auth()->user()->level == 'Admin')
                                    <td>
                                        <a href="{{ route('admin.barang.edit', $row->id) }}"
                                            class="btn btn-warning">Edit</a>
                                        <a href="{{ route('admin.barang.hapus', $row->id) }}"
                                            class="btn btn-danger">Hapus</a>
                                    </td>
                                @endif
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
