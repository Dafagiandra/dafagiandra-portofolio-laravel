<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout - {{ $course->name }}</title>
</head>
<body>

    <h1>Checkout Kelas</h1>

    <p><strong>Nama Kelas:</strong> {{ $course->name }}</p>
    <p><strong>Harga:</strong> Rp {{ number_format($course->price, 0, ',', '.') }}</p>

    @if(session('success'))
        <p style="color:green">{{ session('success') }}</p>
    @endif

    <form action="{{ route('front.checkout.store', $course) }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div>
            <label>Upload Bukti Transfer</label><br>
            <input type="file" name="proof" required>
            @error('proof')
                <p style="color:red">{{ $message }}</p>
            @enderror
        </div>

        <br>
        <button type="submit">Kirim Bukti Transfer</button>
    </form>

    <br>
    <a href="{{ route('front.index') }}">← Kembali ke Beranda</a>

</body>
</html>