@extends('Mahasiswa.layout')

@section('title')
Mahasiswa
@endsection

@section('content')
<a href="{{ url('mahasiswa/create') }}" class="btn btn-success btn-sm">
    Tambah Data
</a>
<table class="table">
    <thead>
        <tr>
            <th>No</th>
            <th>NRP</th>
            <th>Nama</th>
            <th>Pangkat</th>
            <th>Alamat</th>
            <th>Tools</th>
        </tr>
    </thead>
    <tbody>
        @foreach($data as $i => $value)
        <tr>
            <td>{{ $i+1 }}</td>
            <td>{{ $value->NRP }}</td>
            <td>{{ $value->Nama }}</td>
            <td>{{ $value->Pangkat }}</td>
            <td>{{ $value->Alamat }}</td>
            <td>
                <a href="{{ url('mahasiswa/'.$value->id.'/edit') }}" class="btn btn-warning btn-sm">Ubah</a>
                <form action="{{ url('mahasiswa/'.$value->id) }}" method="POST">
                 {{ csrf_field() }}
                 <input type="hidden" name="_method" value="DELETE">
                 <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus?')">
                     Hapus
                 </button>
             </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection