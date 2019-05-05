<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">

    <title>Trendy</title>
<!-- external links and bootstrap was added -->
      <link rel="stylesheet" type="text/css" href="{{ asset("css/bootstrap/css/bootstrap.css") }}">
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css"
            integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
      <link href="{{asset("css/CSS/css.css")}}" rel='stylesheet'>
      <link rel="stylesheet" href="{{asset("css/CSS/animate.min.css")}}">
      <link rel="stylesheet" href="{{asset("css/CSS/trendy.css")}}">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  </head>
  <header>
    <div id="branding">
    <a href="index.blade.php"><h1><span class="highlight">Film</span>Buff</h1></a>
    </div>
    <nav>
      <!-- navigation menu -->
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

<!-- headings with wow library -->
<div class="sectiontitle">
<br><br>
 <h2 class="wow bounceInLeft" style="text-align: center;">Be on trend</h2> <br>
 <h2 class="wow bounceInRight" style="text-align: center;">Watching trendy movies in Tashkent allows YOU to have something to discuss with your friends</h2>
<br><br>
</div>
<!-- cards -->
    <div class="card-deck">
      <div class="card">
        <img class="card-img-top" src="{{asset("imgbox/venompostertransform.jpg")}}" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Venom</h5>
        </div>
      </div>
      <div class="card">
        <img class="card-img-top" src="{{asset("imgbox/The-Equalizer-2-poster.jpg")}}" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">The Equalizer</h5>
        </div>
      </div>
      <div class="card">
        <img class="card-img-top" src="{{asset("imgbox/meg_ver9_xlg.jpg")}}" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">The Meg</h5>
        </div>
      </div>
    </div>

<br><br><br>
<!-- statistics part elements -->
<div class="sectiontitle">
    <h2>What is trendy?</h2>
    <span class="headerLine"></span>
</div>
<div id="projectFacts" class="sectionClass">
    <div class="fullWidth eight columns">
        <div class="projectFactsWrap ">
            <div class="item wow fadeInUpBig animated animated" data-number="12" style="visibility: visible;">
                <i class="fab fa-wolf-pack-battalion"></i>
                <p id="number1" class="number">Venom</p>
                <span></span>
                <p>125 positive comments</p>
            </div>
            <div class="item wow fadeInUpBig animated animated" data-number="55" style="visibility: visible;">
                <i class="fas fa-video"></i>
                <p id="number2" class="number">The Meg</p>
                <span></span>
                <p>102 positive comments</p>
            </div>
            <div class="item wow fadeInUpBig animated animated" data-number="359" style="visibility: visible;">
                <i class="fas fa-video"></i>
                <p id="number3" class="number"> Mile 22 </p>
                <span></span>
                <p>86 positive comments</p>
            </div>
            <div class="item wow fadeInUpBig animated animated" data-number="246" style="visibility: visible;">
                <i class="fas fa-equals"></i>
                <p id="number4" class="number">Equalizer</p>
                <span></span>
                <p>43 positive comments</p>
            </div>
        </div>
    </div>
</div>



<br><br>


<!-- footer -->
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

  </body>
  <script src="{{asset("js/wow.min.js")}}"></script>
          <script>
          new WOW().init();
          </script>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="{{asset("js/trendy.js")}}">

</script>
</html>
