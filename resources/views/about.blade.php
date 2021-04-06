<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>About Personal Portfolio</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://fonts.googleapis.com/css?family=Poppins:400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,600i,700" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link href="/css/style.css" rel="stylesheet">

    <link href="/css/pink.css" rel="stylesheet">

</head>

<body class="about">
<header class="header" id="navbar-collapse-toggle">
    <ul class="icon-menu d-none d-lg-block revealator-slideup revealator-once revealator-delay1">
        <li class="icon-box">
            <i class="fas fa-home"></i>
            <a href="{{route('portfolio')}}">
                <h2>{{__('about.home')}}</h2>
            </a>
        </li>
        <li class="icon-box active">
            <i class="fas fa-user"></i>
            <a href="{{route('about')}}">
                <h2>{{__('about.about')}}</h2>
            </a>
        </li>
       
        <li class="icon-box">
            <i class="fas fa-envelope-open"></i>
            <a href="{{route('contact')}}">
                <h2>{{__('about.contact')}}</h2>
            </a>
        </li>

        <li class="icon-box">
            <i class="fa fa-language"></i>
            <a href="{{route('aboutt','en')}}" class="drp">
                <h2>EN</h2>
            </a>
        </li>
        <li class="icon-box">
            <i class="fa fa-language"></i>
            <a href="{{route('aboutt','ru')}}" class="drp">
                <h2>RU</h2>
            </a>
        </li>
        <li class="icon-box">
            <i class="fa fa-language"></i>
            <a href="{{route('aboutt','kz')}}" class="drp">
                <h2>KZ</h2>
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
                <li><a href="{{ route('portfolio') }}"><i class="fa fa-home"></i><span>{{__('about.home')}}</span></a></li>
                <li class="active"><a href="{{ route('about') }}"><i class="fa fa-user"></i><span>{{__('about.about')}}</span></a></li>
                <li><a href="{{ route('contact') }}"><i class="fa fa-envelope-open"></i><span>{{__('about.contact')}}</span></a></li>
            </ul>
        </div>
    </nav>
</header>

<section class="title-section text-left text-sm-center revealator-slideup revealator-once revealator-delay1">
    <h1>{{__('about.a')}} <span>{{__('about.me')}}</span></h1>
    <span class="title-bg">{{__('about.resume')}}</span>
</section>
<section class="main-content revealator-slideup revealator-once revealator-delay1">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-5 col-xl-6">
                <div class="row">
                    <div class="col-12">
                        <h3 class="text-uppercase custom-title mb-0 ft-wt-600">{{__('about.title')}}</h3>
                    </div>
                    <div class="col-12 d-block d-sm-none">
                    </div>
                    <div class="col-6">
                        <ul class="about-list list-unstyled open-sans-font">
                            <li> <span class="title">{{__('about.firstname')}}</span> <span class="value d-block d-sm-inline-block d-lg-block d-xl-inline-block">{{__('about.fname')}}</span> </li>
                            <li> <span class="title">{{__('about.lastname')}}</span> <span class="value d-block d-sm-inline-block d-lg-block d-xl-inline-block">{{__('about.lname')}}</span> </li>
                            <li> <span class="title">{{__('about.age')}}</span> <span class="value d-block d-sm-inline-block d-lg-block d-xl-inline-block">{{__('about.ag')}}</span> </li>
                            <li> <span class="title">{{__('about.nationality')}}</span> <span class="value d-block d-sm-inline-block d-lg-block d-xl-inline-block">{{__('about.n')}}</span> </li>
                        </ul>
                    </div>
                    <div class="col-6">
                        <ul class="about-list list-unstyled open-sans-font">
                            <li> <span class="title">{{__('about.city')}}</span> <span class="value d-block d-sm-inline-block d-lg-block d-xl-inline-block">{{__('about.c')}}</span> </li>
                            <li> <span class="title">{{__('about.phone')}}</span> <span class="value d-block d-sm-inline-block d-lg-block d-xl-inline-block">+77782056535</span> </li>
                            <li> <span class="title">{{__('about.email')}}</span> <span class="value d-block d-sm-inline-block d-lg-block d-xl-inline-block">sessiyeva@gmail.com</span> </li>
                            <li> <span class="title">{{__('about.languages')}}</span> <span class="value d-block d-sm-inline-block d-lg-block d-xl-inline-block">{{__('about.l')}}</span> </li>
                        </ul>
                    </div>
                    <div class="col-12 mt-3">
                        <a href="h{{route('contact')}}" class="btn btn-download">{{__('about.contact')}}</a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-7 col-xl-6 mt-5 mt-lg-0">
                <div class="row">
                    <div class="col-6">
                        <div class="box-stats with-margin">
                            <h3 class="poppins-font ">60%</h3>
                            <p class="open-sans-font m-0 position-relative text-uppercase">Java</span></p>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="box-stats with-margin">
                            <h3 class="poppins-font position-relative">55%</h3>
                            <p class="open-sans-font m-0 position-relative text-uppercase">HTML</p>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="box-stats">
                            <h3 class="poppins-font position-relative">40%</h3>
                            <p class="open-sans-font m-0 position-relative text-uppercase">Javascript</p>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="box-stats">
                            <h3 class="poppins-font position-relative">20%</h3>
                            <p class="open-sans-font m-0 position-relative text-uppercase">PHP</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
</body>
</html>
