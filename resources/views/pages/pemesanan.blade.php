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
        <legend>Pemesanan</legend>

        @if($menu1 == null)
            <strong>{{$menu1}}</strong>
        @elseif($menu1 == 'mie goreng')         
            Makanan : <strong>{{$menu1}}</strong><br>
            Harga : Rp.5.000
            <hr>
        @elseif($menu1 == 'seblak')
            Makanan : <strong>{{$menu1}}</strong><br>
            Harga : Rp.7.500
            <hr>
        @elseif($menu1 == 'nasi padang')
            Makanan : <strong>{{$menu1}}</strong><br>
            Harga : Rp.15.000
            <hr>
        @else
            Pesanan Anda : <strong>{{$menu1}}</strong><br>
            <hr>
        @endif

        @if($menu2 == null)
            <strong>{{$menu2}}</strong>
        @elseif($menu2 == 'teh')         
            Minuman : <strong>{{$menu2}}</strong><br>
            Harga : Rp.5.000
            <hr>
        @elseif($menu2 == 'kopi')
            Minuman : <strong>{{$menu2}}</strong><br>
            Harga : Rp.7.500
            <hr>
        @elseif($menu2 == 'jus')
            Minuman : <strong>{{$menu2}}</strong><br>
            Harga : Rp.10.000
            <hr>
        @else
            Pesanan Anda : <strong>{{$menu2}}</strong><br>
            <hr>
        @endif

        @if($menu3 == null)
            <strong>{{$menu3}}</strong>
        @elseif($menu3 == 'kecil')         
            Porsi makanan : <strong>{{$menu3}}</strong><br>
            Harga : Rp.2.500
            <hr>
        @elseif($menu3 == 'sedang')
            Porsi makanan: <strong>{{$menu3}}</strong><br>
            Harga : Rp.5.000
            <hr>
        @elseif($menu3 == 'besar')
            Porsi makanan : <strong>{{$menu3}}</strong><br>
            Harga : Rp.10.000
            <hr>
        @else
            Pesanan Anda : <strong>{{$menu3}}</strong><br>
            <hr>
        @endif

    </fieldset>
</body>
</html>