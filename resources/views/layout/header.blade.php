<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
 
                <!-- Bootstrap -->
            <link rel="stylesheet" href="{{url('assets/plugins/bootstrap/bootstrap.min.css')}}">
            <!-- FontAwesome -->
            <link rel="stylesheet" href="{{url('assets/plugins/fontawesome/css/all.min.css')}}">
            <!-- Animation -->
            <link rel="stylesheet" href="{{url('assets/plugins/animate-css/animate.css')}}">
            <!-- slick Carousel -->
            <link rel="stylesheet" href="{{url('assets/plugins/slick/slick.css')}}">
            <link rel="stylesheet" href="{{url('assets/plugins/slick/slick-theme.css')}}">
            <!-- Colorbox -->
            <link rel="stylesheet" href="{{url('assets/plugins/colorbox/colorbox.css"')}}">
            <!-- Template styles-->
            <link rel="stylesheet" href="{{url('assets/css/style.css')}}">

</head>
<body>
    <div class="body-inner">

        <div id="top-bar" class="top-bar">
            <div class="container">
              <div class="row">
                  <div class="col-lg-8 col-md-8">
                    <ul class="top-info text-center text-md-left">
                        <li><i class="fas fa-map-marker-alt"></i> <p class="info-text">Douala Akwa Bali Cameroun</p>
                        </li>
                    </ul>
                  </div>
                  <!--/ Top info end -->
      
                  <div class="col-lg-4 col-md-4 top-social text-center text-md-right">
                    <ul class="list-unstyled">
                        <li>
                          <a title="Facebook" href="https://facebbok.com/themefisher.com">
                              <span class="social-icon"><i class="fab fa-facebook-f"></i></span>
                          </a>
                          <a title="Twitter" href="https://twitter.com/themefisher.com">
                              <span class="social-icon"><i class="fab fa-twitter"></i></span>
                          </a>
                          <a title="Instagram" href="https://instagram.com/themefisher.com">
                              <span class="social-icon"><i class="fab fa-instagram"></i></span>
                          </a>
                          <a title="Linkdin" href="https://github.com/themefisher.com">
                              <span class="social-icon"><i class="fab fa-github"></i></span>
                          </a>
                        </li>
                    </ul>
                  </div>
                  <!--/ Top social end -->
              </div>
              <!--/ Content row end -->
            </div>
            <!--/ Container end -->
        </div>
    
    <!-- Header start -->
<header id="header" class="header-two">
    <div class="site-navigation">
      <div class="container">
          <div class="row">
            <div class="col-lg-12">
                <nav class="navbar navbar-expand-lg navbar-light p-0">
                  
                  <div class="logo">
                      <a class="d-block" href="index-2.html">
                        <img loading="lazy" class="logo"    src="{{url('assets/images/logo.png')}}" alt="Jetcash">
                      </a>
                  </div><!-- logo end -->
  
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".navbar-collapse" aria-controls="navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                  </button>
                  
                  <div id="navbar-collapse" class="collapse navbar-collapse">
                      <ul class="nav navbar-nav ml-auto align-items-center">
                        <li class="nav-item dropdown active">
                            <a href="{{route('GETHOMEPAGE')}}" class="nav-link dropdown-toggle">Accueil</a>
                         
                        </li>
  
                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Soci??t?? <i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu" role="menu">
                              <li><a href="{{route('GETPAGEAPROPOS')}}">A propos</a></li>
                              <li><a href="team.html">Partenaires</a></li>
                         
                            </ul>
                        </li>
                
      
                
                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Pays <i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu" role="menu">
                              <li><a href="services.html">Tout les pays</a></li>
                            </ul>
                        </li>
                
                  
                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Devises <i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu" role="menu">
                              <li><a href="news-left-sidebar.html">Toutes les devises</a></li>
                  
                            </ul>
                        </li>
                
                        <li class="nav-item"><a class="nav-link" href="{{route('GETPAGECONTACT')}}">Contact</a></li>
  
                        <li class="header-get-a-quote">
                            <a class="btn btn-primary" href="contact.html">Get Free Quote</a>
                        </li>
                      </ul>
                  </div>
                </nav>
            </div>
            <!--/ Col end -->
          </div>
          <!--/ Row end -->
      </div>
      <!--/ Container end -->
  
    </div>
    <!--/ Navigation end -->
  </header>
  <!--/ Header end -->
    








    <script src="{{url('assets/plugins/jQuery/jquery.min.js')}}"></script>
    <!-- Bootstrap jQuery -->
    <script src="{{url('assets/plugins/bootstrap/bootstrap.min.js')}}" defer></script>
    <!-- Slick Carousel -->
    <script src="{{url('assets/plugins/slick/slick.min.js')}}"></script>
    <script src="{{url('assets/plugins/slick/slick-animation.min.js')}}"></script>
    <!-- Color box -->
    <script src="{{url('assets/plugins/colorbox/jquery.colorbox.js')}}"></script>
    <!-- shuffle -->
    <script src="{{url('assets/plugins/shuffle/shuffle.min.js')}}" defer></script>


    <!-- Google Map Plugin-->
    <script src="{{url('assets/plugins/google-map/map.js')}}" defer></script>

    <!-- Template custom -->
    <script src="{{url('assets/js/script.js')}}"></script>