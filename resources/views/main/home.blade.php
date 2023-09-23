<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>
<body>
    @include('header')
    <div class="body-container">
            <div class="banner-image">
                <p>Banner Image</p>
            </div>
            <div class="all-items">
                <p>All Items</p>
            </div>
            <div class="card-container">
                <div class="card" style="width: 15rem;">
                    <img src="{{asset('img/blueshirt.png')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">Blue Shirt</p>
                        <p class="text-brand">HoshHosh</p>
                        <p>Rp. 100.000,-</p>
                        <a href="/detail">
                            <button type="button" class="btn btn-warning">Detail</button>
                        </a>
                    </div>
                </div>
                <div class="card" style="width: 15rem;">
                    <img src="{{asset('img/totebag.png')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">Tote Bag</p>
                        <p class="text-brand">Hosh Dog</p>
                        <p>Rp. 200.000,-</p>
                        <button type="button" class="btn btn-warning">Detail</button>
                    </div>
                </div>
                <div class="card" style="width: 15rem;">
                    <img src="{{asset('img/runningshoes.png')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">Running Shoes</p>
                        <p class="text-brand">Adadah</p>
                        <p>Rp. 300.000,-</p>
                        <button type="button" class="btn btn-warning">Detail</button>
                    </div>
                </div>
                <div class="card" style="width: 15rem;">
                    <img src="{{asset('img/red-dress.png')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">Red Dress</p>
                        <p class="text-brand">Maximal</p>
                        <p>Rp. 500.000,-</p>
                        <button type="button" class="btn btn-warning">Detail</button>
                    </div>
                </div>
            </div>
            
    </div>
    @include('footer')

</body>
</html>