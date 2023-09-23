<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>
<body>
    @include('header')
    <div class="body-aboutUs">
        <h1><b>Top Reseller</b></h1>
        <p class="text-bold"><b><u>Address</u></b></p>
        <p>Binus Anggrek</p>
        <p>Jl.Raya Kb. Jeruk No.27, RT.1/RW.9, KB, Jeruk, Kec. Kb. Jeruk, Kota Jakarta Barat, Daerah Khusus Ibukota Jakarta 11530</p>
        <p class="mt-3">Email: reseller-midterm@binus.ac.id</p>
        <p class="mt-3">Phone: 021-234567890</p>

        <p class="text-bold mt-2"><b><u>Open Hours</u></b></p>
        <p>Daily(include weekend) - 08:00 AM - 05:00 PM</p>
    </div>
    @include('footer')
    
</body>
</html>