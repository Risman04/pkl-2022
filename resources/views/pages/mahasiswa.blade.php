<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        li {
            margin-left : 7rem;
        }
    </style>
</head>
<body>
    <fieldset>
        <legend>
            Data nilai siswa
        </legend>

        @foreach($mahasiswa as $dosen)
            Nama Dosen : {{ $dosen ['dosen'] }} <br>
            NIPD : {{ $dosen ['nipd'] }} <br>
            
            Mahasiswa : <br>
            <br>
            @foreach ($dosen['mahasiswa'] as $data)
                Nama : {{$data["name"]}} <br>
                NIPM : {{$data["nipm"]}} <br>
                Mata kuliah :
                @foreach($data['matakuliah'] as $pel)
                    <li>{{$pel}}</li>
                @endforeach
                <br>
            @endforeach

            <hr>
        @endforeach

    </fieldset>
</body>
</html>