<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Barang</title>
</head>

<body>
    <h1>Data Barang Laptop</h1>
    <table style="border-collapse: collapse; width: 60dvw;" >
        <thead>
            <th style="border: 0.5px solid #4e4e4e70">Nama Barang</th>
            <th style="border: 0.5px solid #4e4e4e70">Stok</th>
            <th style="border: 0.5px solid #4e4e4e70">Kondisi</th>
            <th style="border: 0.5px solid #4e4e4e70">Pilihan</th>
        </thead>
        <tbody>
            @forelse ($items as $item)
                <tr>
                    <td style="border: 0.5px solid #4e4e4e70">{{ $item->item_name }}</td>
                    <td style="border: 0.5px solid #4e4e4e70">{{ $item->stok }} unit</td>
                    <td style="border: 0.5px solid #4e4e4e70">{{ $item->condition }}</td>
                    <td style="border: 0.5px solid #4e4e4e70">
                        <a href="{{ route('barang.show', $item->uuid) }}">detail</a>
                    </td>
                </tr>
            @empty
                
            @endforelse
        </tbody>
    </table>
</body>

</html>
