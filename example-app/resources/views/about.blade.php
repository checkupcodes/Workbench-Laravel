<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>About</title>
</head>

<body>
    <h1>Bu sayfa about sayfasidir</h1>
    <p>Hoşgeldin : {{ $name }}</p>
    <?php
    $sayi = 20;
    ?>
    @if ($sayi > 10)
        <h4>Sayi değerimiz {{$sayi}}</h4>
    @elseif($sayi == 15)
        <h4>Sayi değerimiz 15</h4>
    @else
        <h4>Sayi değeri bilinmiyor</h4>
    @endif

</body>

</html>
