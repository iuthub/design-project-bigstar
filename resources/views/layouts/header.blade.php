<head>
    <meta charset="utf-8">
    <title>About</title>
    <!-- links to add links and bootstrap -->
    <link rel="stylesheet" type="text/css" href="{{ asset("css/bootstrap/css/bootstrap.css") }}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link href="{{ asset("css/CSS/css.css") }}" rel='stylesheet'>
    <link rel="stylesheet" href="{{asset("css/CSS/animate.css")}}">
    <link rel="stylesheet" href="{{asset("css/CSS/statistics.css")}}">
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
            <li class="current"><a href="{{route('index')}}">Home</a></li>
            <li><a href="{{ route('about') }}">About</a></li>
            <li><a href="{{ route('trendy') }}">Trendy</a></li>
            <li><a href="{{ route('genres') }}">Genres</a></li>
            <li><a href="{{ route('news') }}">Latest News</a></li>
            <li><a href="{{ route('upcoming') }}">Upcoming</a></li>
        </ul>
    </nav>
</header>