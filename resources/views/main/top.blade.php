<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Top 5 Brand</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>
<body>
    @include('header')
    <div class="top-body-container">
        <h2>TOP 5 BRANDS</h2>
        <div class="top-body">
            <div class="card-container">
                <div class="card" style="width: 15rem;">
                    <img src="{{asset('img/Hosh.png')}}" class="card-img-top" alt="...">
                    <div class="card-top">
                        <h4 class="text-brand">HoshHosh</h4>
                        <a href="/brand">
                            <button type="button" class="btn btn-warning">Detail</button>
                        </a>
                    </div>
                </div>
                <div class="card" style="width: 15rem;">
                    <img src="{{asset('img/maxim.png')}}" class="card-img-top" alt="...">
                    <div class="card-top">
                        <h4 class="text-brand">Maximal</h4>
                        <button type="button" class="btn btn-warning">Detail</button>
                    </div>
                </div>
                <div class="card" style="width: 15rem;">
                    <img src="{{asset('img/pulu.png')}}" class="card-img-top" alt="...">
                    <div class="card-top">
                        <h4 class="text-brand">Pulu</h4>
                        <button type="button" class="btn btn-warning">Detail</button>
                    </div>
                </div>
                <div class="card" style="width: 15rem;">
                    <img src="{{asset('img/adadah.png')}}" class="card-img-top" alt="...">
                    <div class="card-top">
                        <h4 class="text-brand">Adadah</h4>
                        <button type="button" class="btn btn-warning">Detail</button>
                    </div>
                </div>
                <div class="card" style="width: 15rem;">
                    <img src="{{asset('img/hawe.png')}}" class="card-img-top" alt="...">
                    <div class="card-top">
                        <h4 class="text-brand">Hawee</h4>
                        <button type="button" class="btn btn-warning">Detail</button>
                    </div>
                </div>
            </div>
        </div>
        
            
    </div>
    @include('footer')
</body>
</html>