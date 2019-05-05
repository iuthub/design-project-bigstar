<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>FilmBuff | Home</title>

    <link rel="stylesheet" type="text/css" href="{{ asset("css/bootstrap/css/bootstrap.css") }}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css"
          integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link href="{{asset("css/CSS/css.css")}}" rel='stylesheet'>
    <link rel="stylesheet" href="{{asset("css/CSS/animate.min.css")}}">
    <link rel="stylesheet" href="{{asset("css/CSS/upcoming.css")}}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  </head>
    <header>
      <div id="branding">
      <a href="index.blade.php"><h1><span class="highlight">Film</span>Buff</h1></a>
      </div>
      <!-- navigationmenu -->
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










    <!--The source code utilized here was taken from codepen.io  -->
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
        </ol>
        <!-- Wrapper for slides -->
        <div class="carousel-inner">
          <div class="carousel-item first-photo">

            <div class="carousel-caption d-md-block">

            </div>
          </div>
          <div class="carousel-item second-photo">

            <div class="carousel-caption d-md-block">

            </div>
          </div>
          <div class="carousel-item third-photo">

            <div class="carousel-caption d-md-block">

            </div>
          </div>
          <div class="carousel-item fourth-photo">

            <div class="carousel-caption d-md-block">

            </div>
          </div>
        </div>
        <!-- Controls -->
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
      </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
      </a>
      </div>

<!-- footer parts -->

<footer>
  <div class="container">
    <div class="row">
  <div class="sitemap col-md-5 offset-md-1" id="foot">
  <h3> Site Map</h3>
  <ul>
    <li><a href="Index.html">Home</a></li>
    <li><a href="About.html">About</a></li>
    <li><a href="trendy.blade.php">Trendy</a></li>
    <li><a href="genres.blade.php">Genres</a></li>
    <li><a href="news.blade.php">Latest News</a></li>
    <li><a href="upcoming.blade.php">Upcoming</a></li>
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
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="{{asset("js/slideshow.js")}}">

</script>

  </body>
</html>
