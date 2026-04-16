<h2>Data Stock</h2>

<a href="{{ route('stock.create') }}">Tambah Data</a>

<table border="1" cellpadding="5">
    <tr>
        <th>Kode</th>
        <th>Nama</th>
        <th>Satuan</th>
        <th>Aksi</th>
    </tr>

    @foreach ($data as $row)
        <tr>
            <td>{{ $row->kode_brg }}</td>
            <td>{{ $row->nama_brg }}</td>
            <td>{{ $row->satuan }}</td>
            <td>
                <a href="{{ route('stock.edit', $row->id) }}">Edit</a>

                <form action="{{ route('stock.destroy', $row->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Hapus</button>
                </form>
            </td>
        </tr>
    @endforeach
</table>
