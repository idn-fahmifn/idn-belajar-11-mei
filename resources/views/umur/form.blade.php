<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form Umur</title>
</head>

<body>
    <h1>Form Umur</h1>
    <p>Masukan nama dan umur kamu dibawah : </p>

    @if (session('failed'))
        <p>{{ session('failed') }}</p>
    @endif

    <form action="{{ route('kirim-data') }}" method="post">
        <div class="">
            <label for="name">Nama Lengkap</label>
            <input type="text" id="name" name="name" required>
            @error('name')
                {{ $message }}
            @enderror
        </div>
        <div class="">
            <label for="age">Umur</label>
            <input type="number" id="age" name="age" required>
            @error('age')
                {{ $message }}
            @enderror
        </div>
        <div class="">
            <button type="submit">Masuk</button>
        </div>
    </form>

</body>

</html>
