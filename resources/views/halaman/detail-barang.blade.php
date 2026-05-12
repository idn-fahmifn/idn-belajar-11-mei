<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>Detail {{ $item->item_name }}</h1>
    <table>
        <tr>
            <td style="border: 0.5px solid #4e4e4e70; padding: 8px 16px;">Nama Barang</td>
            <td style="border: 0.5px solid #4e4e4e70; padding: 8px 16px;">{{ $item->item_name }}</td>
        </tr>
        <tr>
            <td style="border: 0.5px solid #4e4e4e70; padding: 8px 16px;">Stok</td>
            <td style="border: 0.5px solid #4e4e4e70; padding: 8px 16px;">{{ $item->stok }} unit</td>
        </tr>
        <tr>
            <td style="border: 0.5px solid #4e4e4e70; padding: 8px 16px;">Kondisi</td>
            <td style="border: 0.5px solid #4e4e4e70; padding: 8px 16px;">{{ $item->condition }}</td>
        </tr>
        <tr>
            <td style="border: 0.5px solid #4e4e4e70; padding: 8px 16px;">Deskripsi</td>
            <td style="border: 0.5px solid #4e4e4e70; padding: 8px 16px;">{{ $item->desc }}</td>
        </tr>
    </table>
</body>

</html>
