<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <title>FilmBuff | Home</title>
    <!-- links to bootstrap and other documents -->
    <link rel="stylesheet" type="text/css" href="{{ asset("css/bootstrap/css/bootstrap.css") }}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css"
          integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link href="{{asset("css/CSS/css.css")}}" rel='stylesheet'>
    <link rel="stylesheet" href="{{asset("css/CSS/animate.css")}}">
    <link rel="stylesheet" href="{{asset("css/CSS/genres.css")}}">


    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
<header>
    <!-- branding part -->
    <div id="branding">
        <a href="index.blade.php"><h1><span class="highlight">Film</span>Buff</h1></a>
    </div>
    <!-- navigation menu elements -->
    <nav>
        <ul>
            <li><a href="{{ route('index') }}">Home</a></li>
            <li><a href="{{ route('about') }}">About</a></li>
            <li><a href="{{ route('trendy') }}">Trendy</a></li>
            <li><a href="{{ route('genres') }}">Genres</a></li>
            <li><a href="{{ route('news') }}">Latest News</a></li>
            <li><a href="{{ route('upcoming') }}">Upcoming</a></li>
        </ul>
    </nav>
</header>
<body>

<!-- video addition and some technical style was added  -->
<video src="" autoplay controls style="width:100%;">
</video>

<!-- giving line breaks -->
<br><br><br><br>

<!-- giving container tag which holds all the elements for genres-->
<div class="container">
    <div class="row">

        <div class="col-md-4">
            <h2>Action</h2>

            <div class="container">
                <img src="{{asset("imgbox/action.jpg")}}" alt="Avatar" class="image">
                <div class="overlay">
                    <div class="text"><a href="genres.blade.php">Know more</a>
                    </div>
                </div>
            </div>
        </div>


        <div class="col-md-4">
            <h2>Science fiction</h2>

            <div class="container">
                <img src="{{asset("imgbox/sciencefiction.jpg")}}" alt="Avatar" class="image">
                <div class="overlay">
                    <div class="text"><a href="genres.blade.php">Know more</a>

                    </div>
                </div>
            </div>
        </div>


        <div class="col-md-4">
            <h2>Drama</h2>

            <div class="container">
                <img src="{{asset("imgbox/drama.jpg")}}" alt="Avatar" class="image">
                <div class="overlay">
                    <div class="text"><a href="genres.blade.php">Know more</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">

                <div class="col-md-4">
                    <h2>Thriller</h2>
                    <div class="container">
                        <img src="{{asset("imgbox/thriller.jpg")}}" alt="Avatar" class="image">
                        <div class="overlay">
                            <div class="text"><a href="genres.blade.php">Know more</a>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-md-4">
                    <h2>Comedy</h2>

                    <div class="container">
                        <img src="{{asset("imgbox/comedy.jpg")}}" alt="Avatar" class="image">
                        <div class="overlay">
                            <div class="text"><a href="genres.blade.php">Know more</a>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-md-4">
                    <h2>Horror</h2>

                    <div class="container">
                        <img src="{{asset("imgbox/horror.jpg")}}" alt="Avatar" class="image">
                        <div class="overlay">
                            <div class="text"><a href="genres.blade.php">Know more</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<br><br><br><br>
<!-- footer features were added -->
<footer>
    <div class="container">
        <div class="row">
            <div class="sitemap col-md-5 offset-md-1" id="foot">
                <h3> Site Map</h3>
                <ul>
                    <li><a href="{{ route('index') }}">Home</a></li>
                    <li><a href="{{ route('about') }}">About</a></li>
                    <li><a href="{{ route('trendy') }}">Trendy</a></li>
                    <li><a href="{{ route('genres') }}">Genres</a></li>
                    <li><a href="{{ route('news') }}">Latest News</a></li>
                    <li><a href="{{ route('upcoming') }}">Upcoming</a></li>
                </ul>
            </div>
            <div class="sitemap col-md-6">
                <h3>Additional info</h3>
                <ul>
                    <li><a href="https://www.instagram.com/azamcodes/"><i class="fab fa-instagram"></i></a></li>
                    <li> <a href="https://t.me/Azam_Nurullaev"><i class="fab fa-telegram"></i></a></li>
                    <li><a href="nurullayevazam4@gmail.com">Gmail</a></li>
                    <li><a >Mobile +998906367357</a></li>
                </ul>
            </div>
        </div>

    </div>
    <div>
        <p>FilmBuff, Copyright &copy; 2018</p>
    </div>
</footer>
<script src="{{asset("js/wow.min.js")}}"></script>
<script>
    new WOW().init();
</script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>
<script src="{{asset("js/genres.js")}}">

</script>
</body>
</html>
