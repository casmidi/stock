<h2>Edit Stock</h2>

<form action="{{ route('stock.update', $data->id) }}" method="POST">
    @csrf
    @method('PUT')

    Kode Barang:<br>
    <input type="text" name="kode_brg" value="{{ $data->kode_brg }}"><br><br>

    Nama Barang:<br>
    <input type="text" name="nama_brg" value="{{ $data->nama_brg }}"><br><br>

    Satuan:<br>
    <input type="text" name="satuan" value="{{ $data->satuan }}"><br><br>

    <button type="submit">Update</button>
</form>

<a href="{{ route('stock.index') }}">Kembali</a>
