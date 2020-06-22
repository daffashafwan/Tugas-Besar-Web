<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link href="./css/style.css" rel="stylesheet">
    <title>Pamer.io</title>
</head>

<body>
    <div id="container">
        <nav id="navbar">
            <h2 id="logo">Pamer.io</h2>
            <div class="navigation">
                <a href="/landing">Home</a>
                <a href="/photo">Explore</a>
                <form action="/photo/cari" method="GET">
                <input id="formCari" name="cari" class="form-control form-control-sm" type="text" placeholder="Portofolio" value="{{ old('cari') }}">
                </form>
                <button class="btn btn-sm btn-outline-light" onclick="window.location.href='/login';">Sign In</button>
        </nav>

        </div>

        <div id="banner">
            <div id="parallax">
                <div class="wrapper">
                    <div>
                        <p>Where photographers <br>get work done</p>
                        <div class="line"></div>
                        <h5>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do<br> eiusmod tempor incididunt ut labore et dolore magna aliqua.<br> Ut enim ad minim veniam, quis nostrud <br> exercitation ullamco laboris nisi ut aliquip<br> ex
                            ea commodo consequat
                        </h5>
                        <button type="button" class="btn btn-lg btn-outline-light">GET STARTED</button>
                    </div>
                </div>
            </div>
            <div class="content">
                <div class="left">
                    <p id="porto">PORTOFOLIO<br> TERBAIK ANDA</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do<br> eiusmod tempor incididunt ut labore et dolore magna aliqua.<br> Ut enim ad minim veniam, quis nostrud <br> exercitation ullamco laboris nisi ut aliquip<br> ex ea commodo
                        consequat
                    </p>
                    <button type="button" class="btn btn-lg btn-outline-dark">JOIN NOW</button>
                </div>
                <div class="right"></div>
            </div>
        </div>
        <footer>

        </footer>

    </div>
    <script>
    document.getElementById("formCari").submit();
    </script>
</body>

</html>
