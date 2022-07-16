<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="2">
        <tr>
            <th>Nomor</th>
            <th>Judul</th>
            <th>Konten</th>
        </tr>
        <tr>
            @foreach($table as $table2)
                <tr>
                    <td>{{$table2['nomor']}}</td>
                    <td>{{$table2['judul']}}</td>
                    <td>{{$table2['konten']}}</td>
                </tr>
            @endforeach
        </tr>
    </table>
</body>
</html>