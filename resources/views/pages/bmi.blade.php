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
            Data berat badan
        </legend>

        <center>
        @if($bmi2 <= 17.0)    
            Berat badan : {{$berat}} <br> 
            Tinggi badan : {{$tinggi}} <br>
            Hasil BMI : <strong>{{$bmi2}}</strong><br>
            Status : Kurus, kekurangan berat badan <br>
            
        @elseif($bmi2 <= 18.4)    
            Berat badan : {{$berat}} <br> 
            Tinggi badan : {{$tinggi}} <br>
            Hasil BMI : <strong>{{$bmi2}}</strong><br>
            Status : Kurus, badan ringan <br>
            
        @elseif($bmi2 <= 25.0)    
            Berat badan : {{$berat}} <br> 
            Tinggi badan : {{$tinggi}} <br>
            Hasil BMI : <strong>{{$bmi2}}</strong><br>
            Status : Normal
            
        @elseif($bmi2 <= 27.0)    
            Berat badan : {{$berat}} <br> 
            Tinggi badan : {{$tinggi}} <br>
            Hasil BMI : <strong>{{$bmi2}}</strong><br>
            Status : Gemuk, kelebihan berat badanbr <br>
            
        @else 
            Berat badan : {{$berat}} <br> 
            Tinggi badan : {{$tinggi}} <br>
            Hasil BMI : <strong>{{$bmi2}}</strong><br>
            Status : Berat badan anda tidak ada di status <br>
        @endif

    <hr>

        Berat badan : {{$berat}} <br> 
        Tinggi badan : {{$tinggi}} <br>
        Hasil BMI : <strong>{{$bmi2}}</strong><br>
        Status : {{$status}} <br

        </center>
    </fieldset>
</body>
</html>