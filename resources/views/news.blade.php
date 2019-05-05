<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>FilmBuff | Home</title>
<!-- links to external css and bootstrap elements -->
    <link rel="stylesheet" type="text/css" href="{{ asset("css/bootstrap/css/bootstrap.css") }}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css"
          integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link href="{{asset("css/CSS/css.css")}}" rel='stylesheet'>
    <link rel="stylesheet" href="{{asset("css/animate.min.css")}}">
    <link rel="stylesheet" href="{{asset("css/news.css")}}">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  </head>
    <header>
      <div id="branding">
      <a href="index.blade.php"><h1><span class="highlight">Film</span>Buff</h1></a>
      </div>
      <!-- navigation menu -->
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
<br> <br>


<!-- heading with special wow functionality -->
<h1 class="wow bounceInLeft">Stay updated!</h1>
<!-- cards with images and links -->
<br><br>
    <div class="card-columns">
      <div class="card">
        <img class="card-img-top" src="{{asset("img/goth.jpg")}}" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Game Of Thrones’ Final Season Coming In April 2019</h5>
          <a href="https://www.empireonline.com/movies/news/game-thrones-final-season-coming-april-2019/news.blade.php"><h2>Learn more</h2></a>
        </div>
      </div>


      <div class="card text-center ">
        <blockquote class="blockquote mb-0 card-body">
          <p>New Aquaman Character Posters Show Off Heroes And Villains</p>
          <img class="card-img-top" src="{{asset("imgbox/aquaman-charaposter1-xl.jpg")}}" alt="Aquaman poster">
          <br><br>
          <a href="https://www.empireonline.com/movies/aquaman/new-aquaman-character-posters-show-heroes-villains/"> <h2> Learn more </h2> </a>
        </blockquote>
      </div>


      <div class="card">
        <img class="card-img-top" src="{{asset("imgbox/Avengers_Infinity_War_Marvel_Studios.jpg")}}" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Avengers 4 Is Currently Three Hours Long, Director Joe Russo Reveals</h5>
        <a href="https://www.empireonline.com/movies/news/avengers-4-currently-three-hours-long-director-joe-russo-reveals/news.blade.php"><h2 class="card-text"> Learn more </h2></a>
        </div>
      </div>

<br><br>

      <div class="card  text-white text-center p-3">
        <blockquote class="blockquote mb-0">
          <a href="https://www.empireonline.com/movies/news/2/news.blade.php"> <h2>GET MORE WORLD CINEMA NEWS</h2> </a>

          </footer>
        </blockquote>
      </div>

<br><br>

      <div class="card text-center">
        <blockquote class="blockquote mb-0">
          <p>The Grinch Makes Off With The Top Spot At The US Box Office</p>
            <img class="card-img-top" src="{{asset("imgbox/grinch.jpg")}}" alt="Card image cap">
            <br><br>
            <a href="https://www.empireonline.com/movies/grinch-2/grinch-makes-top-spot-us-box-office/"> <h2>Learn more</h2> </a>
        </blockquote>
      </div>

      <div class="card text-center">
        <img class="card text-center" src="{{asset("imgbox/stan-lee-marvel-cameo-jessica-jones.jpg")}}" alt="Card image">
      <div class="card p-3 text-right">
        <blockquote class="blockquote card-body mb-0">
          <p>One of the biggest influences on modern pop culture, in both the comicbook world and the cinematic output based on it that dominates the motion picture industry today, has died. Stan Lee was 95.</p>
          <a href="https://www.empireonline.com/movies/news/pop-culture-legend-stan-lee-dies-aged-95/news.blade.php"> <h2>Learn more</h2> </a>
        </blockquote>
      </div>
      </div>


      <div class="card">
        <div class="card-body">
          <h5 class="card-title"></h5>
          <img src="{{asset("imgbox/shrek.jpg")}}" alt="Shrek">
          <blockquote class="blockquote card-body mb-0">Shrek Reboot Coming From Despicable Me Studio Head</blockquote>
          <a href="https://www.empireonline.com/movies/news/shrek-reboot-coming-despicable-studio-head/news.blade.php"> <h2>Learn more</h2> </a>
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
      <script src="{{asset("js/wow.min.js")}}"></script>
              <script>
              new WOW().init();
              </script>
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>


  </body>
</html>
