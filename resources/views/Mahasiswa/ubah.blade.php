@extends('Mahasiswa.layout')

@section('title')
Ubah Data Mahasiswa
@endsection

@section('content')
<a href="{{ url('mahasiswa') }}" class="btn btn-success btn-sm">
	Daftar Mahasiswa
</a>
<form method="post" action="{{ url('mahasiswa/'.$mhs->id) }}">
	{{ csrf_field() }}
	<input type="hidden" name="_method" value="PUT">
	<div class="form-group">
		<label>NRP</label>
		<input type="number" name="NRP" value="{{ $mhs->NRP }}" class="form-control">
	</div>
	<div class="form-group">
		<label>Nama</label>
		<input type="text" name="Nama" value="{{ $mhs->Nama }}" class="form-control">
	</div>
	<div class="form-group">
		<label>Pangkat</label>
		<input type="text" name="Pangkat" value="{{ $mhs->Pangkat }}" class="form-control">
	</div>
	<div class="form-group">
		<label>Alamat</label>
		<textarea name="Alamat" class="form-control">{{ $mhs->Alamat }}</textarea>
	</div>
	<button type="submit" class="btn btn-warning btn-block">
		Ubah Data
	</button>
</form>
@endsection