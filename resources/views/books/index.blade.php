<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>List Buku</title>
    @vite('resources/css/app.css','resources/js/app.js');
</head>
<body>
    <h1 class="text-center"> Halaman List Buku</h1>
    <table>
        <thead>
        <tr>
            <th>judul</th>
            <th>Penulis</th>
            <th>Halaman</th>
        </tr>
        </thead>
        <tbody>
            @foreach ($books as $book)
            <tr>
                <td>{{$book['judul']}}</td>
                <td>{{$book['penulis']}}</td>
                <td>{{$book['halaman']}}</td>h
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>