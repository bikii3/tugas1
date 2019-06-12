@extends('Mahasiswa.layout')

@section('title')
Tambah Data Mahasiswa
@endsection

@section('content')
<a href="{{ url('mahasiswa') }}" class="btn btn-success btn-sm">
	Daftar Mahasiswa
</a>
<form method="post" action="{{ url('mahasiswa') }}">
	{{ csrf_field() }}
	<div class="form-group">
		<label>NRP</label>
		<input type="number" name="NRP" class="form-control">
	</div>
	<div class="form-group">
		<label>Nama</label>
		<input type="text" name="Nama" class="form-control">
	</div>
	<div class="form-group">
		<label>Pangkat</label>
		<input type="text" name="Pangkat" class="form-control">
	</div>
	<div class="form-group">
		<label>Alamat</label>
		<textarea name="Alamat" class="form-control"></textarea>
	</div>
	<button type="submit" class="btn btn-success btn-block">
		Tambah Data
	</button>
</form>
@endsection