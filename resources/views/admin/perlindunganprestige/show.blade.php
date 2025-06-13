@include('admin.sidebar')
@include('admin.navbar')



<div class="table-container"> <!-- Menambahkan container untuk styling -->
<div class="mb-2">
        <a href="#" class="btn btn-primary btn-sm">
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
            @foreach ($list_prestige as $perlindungan_prestige)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $perlindungan_prestige->nama }}</td>
                <td>{{ $perlindungan_prestige->nama_produk}}</td>
                <td>{{ $perlindungan_prestige->tanggal_efektif }}</td>
                <td>{{ $perlindungan_prestige->premi }}</td>
                <td>{{ $perlindungan_prestige->masa_polis }}</td>
                <td>{{ $perlindungan_prestige->status }}</td>
               <td>
    <a href="#" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></a>
    <button type="button" class="btn btn-danger btn-sm" onclick="alert('Delete action disabled')"><i class="fas fa-trash"></i></button>

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
