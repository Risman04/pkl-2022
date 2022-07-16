<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    @foreach($belanja as $belanja2)

    @php $total = 0 @endphp

        Nama : {{$belanja2['name']}} <br>
        Daftar belanja :
            @foreach($belanja2['belanja'] as $list)
                <li>{{$list['produk']}} : Rp. {{$list['harga']}}</li>
                @php  
                    $total += $list['harga']
                @endphp
            @endforeach
                <br>
                    Total belanjaan : Rp . {{$total}}
                <br>
                
                    @if($total >= 250000 && $total < 500000)
                        @php $disc = $total * 0.05 @endphp

                        Cashback : Rp. {{$disc}} <br>
                        Total harga : Rp. {{$total - $disc}} <br>
                    @elseif($total >= 500000)
                        @php $disc = $total * 0.1 @endphp
                       
                        Cashback : Rp. {{$disc}} <br>
                        Total harga : Rp. {{$total - $disc}} <br>
                    @endif
        <hr>
    @endforeach

</body>
</html>