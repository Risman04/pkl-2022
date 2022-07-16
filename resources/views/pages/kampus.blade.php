<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    @foreach($kampus as $mahasiswa)

        @php $total = 0 @endphp

        Nama Mahasiswa : {{$mahasiswa['name']}} <br>
        Jurusan : {{$mahasiswa['jurusan']}} <br>
        Keterangan :

        @foreach($mahasiswa['mapel'] as $data)
            <ol>
             <li>Mata pelajaran : {{$data['pelajaran']}}</li> <br>
            </ol>
            <li>
            Nilai : {{$data['nilai']}}
            </li>

            @php $total+=$data['nilai'] @endphp

        @endforeach

        @php 
        $rata = $total / count($mahasiswa['mapel'])
        @endphp

        Total nilai : {{$total}} <br>
        Rata rata nilai : {{$mahasiswa['name']}} : {{$rata}} <br>

        @php
        $garde;
        if ($rata >= 85 && $rata <= 100) {
            $grade = "A";
        }elseif($rata >= 75 && $rata <= 84) {
            $grade = "B";
        }elseif($rata >= 60 && $rata <= 74) {
            $grade = "C";
        }elseif($rata >= 50 && $rata <= 59) { 
            $grade = "D";
        }elseif($rata >= 0 && $rata <= 49) {
            $grade = "E";
        }else {
            $grade = "Grade tidak ada";
        }
        @endphp

        Grade : {{$grade}}
        <hr>
    @endforeach

</body>
</html>