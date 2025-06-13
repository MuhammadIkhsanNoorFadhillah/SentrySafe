@include('admin.sidebar')
@include('admin.navbar')

<div class="table-container">
    <form action="{{ route('penagihan.update', $penagihan->id) }}" method="POST">
    @csrf
    <div class="form-group">
        <label for="id_polis">ID Polis</label>
        <input type="text" class="form-control" id="id_polis" name="id_polis" value="{{ $penagihan->id_polis }}" required>
    </div>
    <div class="form-group">
        <label for="tanggal_penagihan">Tanggal Penagihan</label>
        <input type="date" class="form-control" id="tanggal_penagihan" name="tanggal_penagihan" value="{{ $penagihan->tanggal_penagihan }}" required>
    </div>
    <div class="form-group">
        <label for="jumlah_penagihan">Jumlah Penagihan</label>
        <input type="number" class="form-control" id="jumlah_penagihan" name="jumlah_penagihan" value="{{ $penagihan->jumlah_penagihan }}" required>
    </div>
    <div class="form-group">
        <label for="status">Status</label>
        <input type="text" class="form-control" id="status" name="status" value="{{ $penagihan->status }}" required>
    </div>
    <a href="{{ route('admin.penagihan.show') }}" class="btn btn-danger">Kembali</a>
    <button type="submit" class="btn btn-warning">Edit</button>
</div>

    @push('scripts')
        <script>
            $('#table').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
            });
        </script>
    @endpush
@include('admin.footer')
</body>
</html>


