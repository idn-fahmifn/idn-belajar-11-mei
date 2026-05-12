<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Hallo ini adalah halaman barang</h1>
    <p> {{ $data }} </p>

    {{-- foreach --}}

    <table style="width: 80dvw">
        <thead>
            <th>Lokasi Baru</th>
            <th>Nama Barang</th>
            <th>Serial Number</th>
        </thead>
        <tbody>
            @foreach ($dataBarangs as $barang)
                @if ($barang->status === 'Masuk')
                    <tr>
                        <td>{{ $barang->new_location }}</td>
                        <td>{{ $barang->asset->name }}</td>
                        <td>{{ $barang->asset->serial_number }}</td>
                    </tr>
                @endif
            @endforeach
        </tbody>
    </table>


    {{-- forelese --}}
    <table style="width: 80dvw">
        <thead>
            <th>Lokasi Baru</th>
            <th>Nama Barang</th>
            <th>Serial Number</th>
        </thead>
        <tbody>
            @forelse ($dataBarangs as $barang)
                <tr>
                    <td>{{ $barang->new_location }}</td>
                    <td>{{ $barang->asset->name }}</td>
                    <td>{{ $barang->asset->serial_number }}</td>
                </tr>
            @empty
                <tr>
                    <td>Data tidak ditemukan</td>
                </tr>
            @endforelse

        </tbody>
    </table>


</body>

</html>
