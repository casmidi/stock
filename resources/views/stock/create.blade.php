<h2>Tambah Stock</h2>

<form action="{{ route('stock.store') }}" method="POST">
    @csrf

    Kode Barang:<br>
    <input type="text" name="kode_brg"><br><br>

    Nama Barang:<br>
    <input type="text" name="nama_brg"><br><br>

    Satuan:<br>
    <input type="text" name="satuan"><br><br>

    <button type="submit">Simpan</button>
</form>

<a href="{{ route('stock.index') }}">Kembali</a>
