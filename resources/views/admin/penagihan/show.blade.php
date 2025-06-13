@include('admin.sidebar')
@include('admin.navbar')

<div class="table-container">
    <div class="mb-2">
        <a href="{{ route('penagihan.create') }}" class="btn btn-primary btn-sm">
            <i class="fas fa-plus"></i> Tambah
        </a>
    </div>
<table id="table" class="table" table-bordered table-hover>
        <thead>
            <tr>
                <th>Id</th>
                <th>Id Polis</th>
                <th>Tanggal Penagihan</th>
                <th>Jumlah Penagihan</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($list_penagihan as $penagihan)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $penagihan->id_polis }}</td>
                <td>{{ $penagihan->tanggal_penagihan }}</td>
                <td>{{ $penagihan->jumlah_penagihan }}</td>
                <td>{{ $penagihan->status }}</td>
                <td>
                    <a href="{{ route('penagihan.edit', $penagihan->id) }}" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></a>
                    <button type="submit" class="btn btn-danger btn-sm" onclick="alert('Delete action disabled')"><i class="fas fa-trash"></i></button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
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
