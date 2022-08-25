<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS Online -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Bootstrap CSS Offline-->
    <link rel="stylesheet" type="text/css" href="./css/bootstrap.css">

    <!-- Font Awesome Icon offline-->
    <link rel="stylesheet" type="text/css" href="./fontawesome/css/all.css">

    <!-- Font Awesome Icon Online/CDN -->
    <script src="https://use.fontawesome.com/2d5150cd92.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <title> </title>
    <style>
        body {
            background: rgba(0, 0, 0, .4);
        }

        #header {
            background: #000;
            color: #fff;
        }

        #header .nav ul li {
            list-style-type: none;
            display: inline-block;
            width: 50px;
            background: red;
            text-align: center;
        }

        .main {
            height: 500px;
            width: 100%;
            background: lightgray;
        }

        .main .home {
            display: flex;
            flex-flow: row wrap;
            padding: 50px;
        }

        .main .home .nama {
            font-size: 50px;
            width: 50%;
        }

        .main .home .foto {
            width: 50%;
            background: url(./img/me.jpg);
            background-size: cover;
            background-repeat: no-repeat;
            height: 200px;
        }
    </style>
</head>

<body>
    <div id="header">
        <div class="nav">
            <ul>
                <li>test</li>
                <li>fg</li>
                <li>r</li>
                <li>r</li>
                <li>r</li>
            </ul>
        </div>
    </div>
    <div class="main">
        <div class="home">
            <div class="nama">
                pgeaip raj <br> raewrt
            </div>
            <div class="foto">
                foto
            </div>
        </div>
    </div>



    <!-- Optional JavaScript; choose one of the two! -->
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
-->
</body>

</html>