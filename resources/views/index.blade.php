<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>FilmBuff | Home</title>
<!-- links -->
      <link rel="stylesheet" type="text/css" href="{{ asset("css/bootstrap/css/bootstrap.css") }}">
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css"
            integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
      <link href="{{asset("css/CSS/css.css")}}" rel='stylesheet'>
      <link rel="stylesheet" href="{{asset("css/CSS/animate.css")}}">
      <link rel="stylesheet" href="{{asset("css/CSS/upcomingpageslideshow.css")}}">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
      <style>
          #showcase  {
              background-image: {{asset("img/felix-mooneeram-222805-unsplash.jpg")}};
          }
      </style>
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
    <section id="showcase">
        <div class="container">
        <!-- bounceInLeft here is a special feature of css to add extra functionality for the texts -->
          <h1 class="wow bounceInLeft"> Book online tickets for films in Tashkent </h1>

        <a href="https://www.afisha.uz/"> <button class="snip1582">Click for more info! </button> </a>
        </div>
    </section>






    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="carousel-item first-photo">
          <img src="{{asset("imgbox/mowgli-poster-cl.jpg")}}" alt="">


          <div class="carousel-caption d-md-block">
          <h5>Venom! Already in Tashkent</h5>
        </div>
      </div>
      <div class="carousel-item second-photo">
          <img src="{{asset("imgbox/skyscraper-poster-main-xl.jpg")}}" alt="">


          <div class="carousel-caption d-md-block">
          <h5>Aquaman! Soon</h5>
        </div>
      </div>
      <div class="carousel-item third-photo">
          <img src="{{asset("imgbox/45232440_10213171920072339_7990841028493967360_n.jpg")}}" alt="">


          <div class="carousel-caption d-md-block">
          <h5>The Meg! Already in Tashkent</h5>
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







<!-- newsletter part dedicated to addresses by dividing colums -->
      <section id="newsletter" >
        <div class="container">

            <div class="row">
              <div class="col-lg-4">

                <h3 class="wow bounceInRight">Mega cinema</h3>
                <i class="fas fa-video wow bounceInLeft"></i>
                <p>Юнус-Абадский р-н, м-в Юнус-Абад 11

Ориентир: гипермаркет Mega Planet, 4-й этаж

Телефон: (+998) 71-129-0007, (+998) 71-129-0020</p>
              </div>
              <div class="col-lg-4">
                <h3 class="wow bounceInRight">Next cinema</h3>
                <i class="fas fa-video wow bounceInLeft" ></i>
                <p> (Яккасарайский р-н) на карте

Ориентир: парк им. Алишера Навои

Тел: (+998) 71-231-8282</p>
              </div>
              <div class="col-lg-4">
                <h3 class="wow bounceInRight">Samarqand-darvoza</h3>
                <i class="fas fa-video wow bounceInLeft"></i>
                <p>Адрес: ул. Коратош, 5А
Телефон: (+998) 71-205-0055</p>
              </div>
            </div>

        </div>
      </section>
      <!-- footer section containing sitemap and external links to the social media accounts of the writer -->
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
      <!-- JS links and link to WOW js special text feature. Also bootstrap JS part was added -->
      <script src="{{asset("js/wow.min.js")}}"></script>
              <script>
              new WOW().init();
              </script>
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>


      <script src="{{asset("js/slideshow.js")}}"></script>
  </body>
</html>
