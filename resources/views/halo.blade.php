<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>page nyoba</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin-top: 100px;
            background-color: #f4f6f8;
        }
        .kotak {
            background: white;
            padding: 30px;
            display: inline-block;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
        }
        h1 { color: #e3342f; }
    </style>
</head>
<body>
    <div class="kotak">
        <h1>Halo, {{ $nama }}! 👋</h1>
        <p>Selamat! page nya udh jalan bos.</p>
    </div>
</body>
</html>