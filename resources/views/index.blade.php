<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Personal Portfolio</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://fonts.googleapis.com/css?family=Poppins:400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,600i,700" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link href="/css/style.css" rel="stylesheet">

    <link href="/css/pink.css" rel="stylesheet">

</head>

<body class="home">
<header class="header" id="navbar-collapse-toggle">
    <ul class="icon-menu d-none d-lg-block revealator-slideup revealator-once revealator-delay1">
        <li class="icon-box active">
            <i class="fas fa-home"></i>
            <a href="{{route('portfolio')}}">
                <h2>Home</h2>
            </a>
        </li>
        <li class="icon-box">
            <i class="fas fa-user"></i>
            <a href="{{route('about')}}">
                <h2>About</h2>
            </a>
        </li>
        <li class="icon-box">
            <i class="fas fa-envelope-open"></i>
            <a href="{{route('contact')}}">
                <h2>Contact</h2>
            </a>
        </li>
    </ul>

    <nav role="navigation" class="d-block d-lg-none">
        <div id="menuToggle">
            <input type="checkbox" />
            <span></span>
            <span></span>
            <span></span>
            <ul class="list-unstyled" id="menu">
                <li class="active"><a href="{{route('portfolio')}}"><i class="fas fa-home"></i><span>Home</span></a></li>
                <li><a href="{{route('about')}}"><i class="fas fa-user"></i><span>About</span></a></li>
                <li><a href="{{route('contact')}}"><i class="fas fa-envelope-open"></i><span>Contact</span></a></li>
            </ul>
        </div>
    </nav>
</header>

<section class="container-fluid main-container container-home p-0 revealator-slideup revealator-once revealator-delay1">
    <div class="color-block d-none d-lg-block"></div>
    <div class="row home-details-container align-items-center">
        <div class="col-12 col-lg-8 offset-lg-2 home-details text-left ">
            <div>
                <h6 class="text-uppercase open-sans-font mb-0 d-block d-sm-none d-lg-block">hi there !</h6>
                <h1 class="text-uppercase poppins-font"><span>I'm</span> Tomiris Sessiyeva</h1>
                <p class="open-sans-font">I'm a sophomore student at the SDU, majoring in Information Technologies. A fast learner and hard worker with high responsibility is seeking for an internship opportunity :)</p>
                <a href="{{route('about')}}" class="btn btn-about">more about me</a>
            </div>
        </div>
    </div>
</section>
</body>

</html>
