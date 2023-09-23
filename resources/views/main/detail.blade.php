<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blue Shirt</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>
<body>
    @include('header')
    <div class="detail-container">
        <img src="{{asset('img/blueshirt.png')}}" alt="">
        <div class="text-detail">
            <H2>Blue Shirt</H2>
            <H4 class="text-brand">HoshHosh</H4>
            <H4>Rp. 100.000/piece</H4>

            <p>Description:</p>
            <p>HoshHosh's blue shirt is the beset-importanted shirt on "Top Reseller". This item can be ordered with minimum order > 5 pieces.
                If you want to order more than 10 pieces, please reach out through our contant (on the "About Us" page)
            </p>
        </div>
    </div>
    @include('footer')
</body>
</html>