@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Tambah Penagihan Baru</h2>
    <form action="{{ route('admin.penagihan.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="id_polis">ID Polis</label>
            <input type="text" class="form-control" id="id_polis" name="id_polis" required>
        </div>
        <div class="form-group">
            <label for="tanggal_penagihan">Tanggal Penagihan</label>
            <input type="date" class="form-control" id="tanggal_penagihan" name="tanggal_penagihan" required>
        </div>
        <div class="form-group">
            <label for="jumlah_penagihan">Jumlah Penagihan</label>
            <input type="number" class="form-control" id="jumlah_penagihan" name="jumlah_penagihan" required>
        </div>
        <div class="form-group">
            <label for="status">Status</label>
            <input type="text" class="form-control" id="status" name="status" required>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>
@endsection
