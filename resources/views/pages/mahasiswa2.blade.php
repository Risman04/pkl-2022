<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <fieldset>
        <legend>
            Data nilai
        </legend>

        @foreach($mahasiswa2 as $dosen2)

            Nama Dosen : {{$dosen2['dosen']}} <br>
            Mengajar : {{$dosen2['mengajar']}} <br>
            <br>

            @php
                $rata = 0
            @endphp

            <li>Mahasiswa : </li><br>
                @foreach($dosen2['mahasiswa'] as $mahasiswa)
                    Nama : {{$mahasiswa['name']}} <br>
                    Nilai : {{$mahasiswa['nilai']}} <br>
                    <br>

                @php
                    $rata += $mahasiswa['nilai']
                @endphp
                <!-- ///////////////////////////////////////////////////////// -->
                @endforeach
               
                Nilai Rata-rata Dosen : {{ $rata / count($dosen2['mahasiswa'])}}
            <hr>
        @endforeach
    </fieldset>
</body>
</html>