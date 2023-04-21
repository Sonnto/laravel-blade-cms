<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="Portfolio website" />
    <meta
      name="keywords"
      content="full-stack, developer, front-end, back-end, software, engineer, portfolio, HTML, CSS, JavaScript, MongoDB, Express.js, React.js, Node.js, SQL, mySQL, PHP, C#, Python, JQuery, Toronto, Ontario, Canada, Hong Kong, Cantonese"
    />
    <meta name="author" content="Kee-Fung Anthony Ho" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Anthony Ho | Full-Stack Developer</title>
    <script
      src="https://kit.fontawesome.com/fe76fcb7fd.js"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" type="text/css" href="{{asset('css/normalize.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('css/main.css')}}" />
    <meta name="theme-color" content="#fafafa" />
</head>
<body>
    <header id="header">
      <!--============================== NAV ==============================-->
      <nav id="nav">
        <div id="menu-tab"></div>
        <div id="menu-toggle">
          <input name="menu-button-click" type="checkbox" />
          <span></span>
          <span></span>
          <span></span>
          <ul id="menu">
            <li><a href="#home">Home</a></li>
            <li><hr class="nav-division" /></li>
            <li><a href="#about">About</a></li>
            <li><hr class="nav-division" /></li>
            <li><a href="#resume">Resume</a></li>
            <li><hr class="nav-division" /></li>
            <li><a href="#projects">Projects</a></li>
          </ul>
        </div>
      </nav>
    </header>


@yield('content')

<footer id="footer">

    © Copyright, Kee-Fung Anthony Ho, {{date('Y')}}

    <br>

    @if (Auth::check())
        You are logged in as {{auth()->user()->first}} {{auth()->user()->last}} | 
        <a href="/console/logout">Log Out</a> | 
        <a href="/console/dashboard">Dashboard</a>
    @else
        <a href="/console/login">Login</a>
    @endif

</footer>

</body>
</html>