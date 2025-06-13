
@include('admin.sidebar')
@include('admin.navbar')

<form action="{{ route('admin.perlindunganindividu.store') }}" method="post">
         @csrf
    <div class="form-group">
        <label for="nama">Nama</label>
        <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukan Nama Pengguna Asuransi" >
        @error('nama')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>
        <div class="form-group">
            <label for="nama_produk">Produk</label>
            <input type="text" class="form-control" id="nama_produk" name="nama_produk" >
            @error('nama_produk')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        <div class="form-group">
            <label for="tanggal_efektif">Tanggal Efektif</label>
            <input type="text" class="form-control" id="tanggal_efektif" name="tanggal_efektif" >
            @error('tanggal_efektif')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        <div class="form-group">
            <label for="premi">Premi</label>
            <input type="text" class="form-control" id="premi" name="premi" >
            @error('premi')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        <div class="form-group">
            <label for="masa_polis">Masa Polis</label>
            <input type="text" class="form-control" id="masa_polis" name="masa_polis" >
            @error('masa_polis')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        <div class="form-group">
            <label for="status">Status</label>
            <input type="text" class="form-control" id="status" name="status" >
            @error('status')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        <a href="{{ route('admin.perlindunganindividu.show') }}" class="btn btn-danger">Kembali</a>
        <button type="submit" class="btn btn-warning">Edit</button>
    </form>
@include('admin.footer')


