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
                <th>Produk</th>
                <th>Perusahaan</th>
                <th>Jumlah Perlindungan</th>
                <th>Premi</th>
                <th>Masa Polis</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($list_korporat as $solusi_korporat)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $solusi_korporat->nama_produk}}</td>
                <td>{{ $solusi_korporat->nama_perusahaan}}</td>
                <td>{{ $solusi_korporat->jumlah_perlindungan }}</td>
                <td>{{ $solusi_korporat->jumlah_premi }}</td>
                <td>{{ $solusi_korporat->masa_polis }}</td>
                <td>{{ $solusi_korporat->status }}</td>
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
