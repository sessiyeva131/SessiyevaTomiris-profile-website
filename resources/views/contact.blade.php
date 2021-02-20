<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Contact - Personal Portfolio</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://fonts.googleapis.com/css?family=Poppins:400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,600i,700" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
  
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link href="css/style.css" rel="stylesheet">

    <link href="css/pink.css" rel="stylesheet">

</head>

<body class="contact">
<header class="header" id="navbar-collapse-toggle">
    <ul class="icon-menu d-none d-lg-block revealator-slideup revealator-once revealator-delay1">
        <li class="icon-box">
            <i class="fas fa-home"></i>
            <a href="http://127.0.0.1:8000/Portfolio">
                <h2>Home</h2>
            </a>
        </li>
        <li class="icon-box">
            <i class="fas fa-user"></i>
            <a href="http://127.0.0.1:8000/about">
                <h2>About</h2>
            </a>
        </li>
        <li class="icon-box active">
            <i class="fas fa-envelope-open"></i>
            <a href="http://127.0.0.1:8000/contact">
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
                <li><a href="http://127.0.0.1:8000/Portfolio"><i class="fas fa-home"></i><span>Home</span></a></li>
                <li><a href="http://127.0.0.1:8000/about"><i class="fas fa-user"></i><span>About</span></a></li>
                <li class="active"><a href="http://127.0.0.1:8000/contact"><i class="fas fa-envelope-open"></i><span>Contact</span></a></li>
            </ul>
        </div>
    </nav>
</header>

<section class="title-section text-left text-sm-center revealator-slideup revealator-once revealator-delay1">
    <h1>get in <span>touch</span></h1>
    <span class="title-bg">contact</span>
</section>

<section class="main-content revealator-slideup revealator-once revealator-delay1">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-4">
                <h3 class="text-uppercase custom-title mb-0 ft-wt-600 pb-3">Feel free to get in touch with me!</h3>
                <p class="open-sans-font custom-span-contact position-relative">
                    <i class="fas fa-envelope-open position-absolute"></i>
                    <span class="d-block">mail me</span>sessiyeva@gmail.com
                </p>
                <p class="open-sans-font custom-span-contact position-relative">
                    <i class="fas fa-phone-square position-absolute"></i>
                    <span class="d-block">call me</span>+77782056535
                </p>
                <ul class="social list-unstyled pt-1 mb-5">
                    <li class="facebook"><a href="#"><i class="fab fa-facebook"></i></a>
                    </li>
                    <li class="instagram"><a href="#"><i class="fab fa-instagram"></i></a>
                    </li>
                    <li class="linkedin"><a href="#"><i class="fab fa-linkedin-in"></i></a>
                    </li>
                    <li class="whatsaap"><a href="#"><i class="fab fa-whatsapp"></i></a>
                    </li>
                </ul>
            </div>
            
            <div class="col-12 col-lg-8">
                <form class="contactform" method="post" action="http://slimhamdi.net/tunis/dark/php/process-form.php">
                    <div class="contactform">
                        <div class="row">
                            <div class="col-12 col-md-4">
                                <input type="text" name="name" placeholder="YOUR NAME">
                            </div>
                            <div class="col-12 col-md-4">
                                <input type="email" name="email" placeholder="YOUR EMAIL">
                            </div>
                            <div class="col-12 col-md-4">
                                <input type="text" name="subject" placeholder="YOUR SUBJECT">
                            </div>
                            <div class="col-12">
                                <textarea name="message" placeholder="YOUR MESSAGE"></textarea>
                                <button type="submit" class="btn btn-contact">Send Message</button>
                            </div>
                            <div class="col-12 form-message">
                                <span class="output_message text-center font-weight-600 text-uppercase"></span>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
           
        </div>
    </div>
</section>
</body>
</html>
