<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hosh Hosh</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>
<body>
    @include('header')
    <div class="body-detail">
        <div class="brand-detail">
            <img src="{{asset('img/HoshHosh.png')}}" alt="">
            <div class="text-detailbrand">
                <h1 class="text-brand">HoshHosh</h1>
                <p>Address: Palmerah - Indonesia</p>
                <p>Email: hoshhosh@binus.ac.id</p>
                <p>Description:</p>
                <p>HoshHosh was founded in 2023 exclusively only for Binus - Mid Term Exam 2022/2023. Even Semester purposes.
                    Although it's an imaginary brand, hopefully, this shop will be remembered as the part of scoring!
                </p>
            </div>
        </div>
        <div class="body-detailbrand">
            <h3 class="text-brand">HoshHosh's Item</h3>
                <div class="card-container">
                    <div class="card" style="width: 15rem;">
                        <img src="{{asset('img/blueshirt.png')}}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text">Blue Shirt</p>
                            <p class="text-brand">HoshHosh</p>
                            <p>Rp. 200.000,-</p>
                            <button type="button" class="btn btn-warning">Detail</button>
                        </div>
                    </div>
                    <div class="card" style="width: 15rem;">
                        <img src="{{asset('img/kidsoverall.png')}}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text">Kid's Overall</p>
                            <p class="text-brand">HoshHosh</p>
                            <p>Rp. 150.000,-</p>
                            <button type="button" class="btn btn-warning">Detail</button>
                        </div>
                    </div>
                    <div class="card" style="width: 15rem;">
                        <img src="{{asset('img/babyshoes.png')}}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text">Baby Shoes</p>
                            <p class="text-brand">HoshHosh</p>
                            <p>Rp. 80.000,-</p>
                            <button type="button" class="btn btn-warning">Detail</button>
                        </div>
                    </div>
                </div>
        </div>

    </div>
    @include('footer')
</body>
</html>