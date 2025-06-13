@include('admin.sidebar')
@include('admin.navbar')

<div class="table-container"> <!-- Menambahkan container untuk styling -->
<div class="mb-2">
        <a href="{{ route('admin.perlindunganindividu.create') }}" class="btn btn-primary btn-sm">
            <i class="fas fa-plus"></i> Tambah
        </a>
    </div>
    <table id="table" class="table table-bordered table-hover custom-table-class"> <!-- Menambahkan custom class -->
        <thead>
            <tr>
                <th>Id</th>
                <th>Nama</th>
                <th>Produk</th>
                <th>Tanggal Efektif</th>
                <th>Premi</th>
                <th>Masa Polis</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($list_individu as $perlindungan_individu)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $perlindungan_individu->nama }}</td>
                <td>{{ $perlindungan_individu->nama_produk}}</td>
                <td>{{ $perlindungan_individu->tanggal_efektif }}</td>
                <td>{{ $perlindungan_individu->premi }}</td>
                <td>{{ $perlindungan_individu->masa_polis }}</td>
                <td>{{ $perlindungan_individu->status }}</td>
                <td>
                    <form action="{{ route('admin.perlindunganindividu.destroy', $perlindungan_individu->id) }}" method="post">
                        <a href="{{ route('admin.perlindunganindividu.edit', $perlindungan_individu->id) }}" class="btn btn-warning btn-sm"><i
                                class="fas fa-edit"></i></a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></button>
                    </form>
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
