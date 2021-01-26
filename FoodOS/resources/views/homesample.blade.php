<!DOCTYPE html>
<html class="no-js">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Welcome to Happy-nest</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSS
    ================================================ -->
    <!-- Owl Carousel -->
    <link rel="stylesheet" href="{{asset('/FrontEnd Resource File')}}/css/owl.carousel.css">
    <!-- bootstrap.min css -->
    <link rel="stylesheet" href="{{asset('/FrontEnd Resource File')}}/css/bootstrap.min.css">
    <!-- Font-awesome.min css -->
    <link rel="stylesheet" href="{{asset('/FrontEnd Resource File')}}/css/font-awesome.min.css">
    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="{{asset('/FrontEnd Resource File')}}/css/animate.min.css">

    <link rel="stylesheet" href="{{asset('/FrontEnd Resource File')}}/css/main.css">
    <!-- Responsive Stylesheet -->
    <link rel="stylesheet" href="{{asset('/FrontEnd Resource File')}}/css/responsive.css">
    <!-- Js -->
    <script src="{{asset('/FrontEnd Resource File')}}/js/vendor/modernizr-2.6.2.min.js"></script>
    <!-- <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script> -->
    <script>window.jQuery || document.write('<script src="{{asset('/FrontEnd Resource File')}}/js/vendor/jquery-1.10.2.min.js"><\/script>')</script>
    <script src="{{asset('/FrontEnd Resource File')}}/js/jquery.nav.js"></script>
    <script src="{{asset('/FrontEnd Resource File')}}/js/jquery.sticky.js"></script>
    <script src="{{asset('/FrontEnd Resource File')}}/js/bootstrap.min.js"></script>
    <script src="{{asset('/FrontEnd Resource File')}}/js/plugins.js"></script>
    <script src="{{asset('/FrontEnd Resource File')}}/js/wow.min.js"></script>
    <script src="{{asset('/FrontEnd Resource File')}}/js/main.js"></script>
</head>
<body>
<!--
header-img start
============================== -->
<section id="hero-area">
    <img class="img-responsive" src="{{asset('/FrontEnd Resource File')}}/images/header.png" width="100%" height="900px" alt="">
</section>
<!--
Header start
============================== -->
<nav id="navigation">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="block">
                    <nav class="navbar navbar-default">
                        <div class="container-fluid">
                            <!-- Brand and toggle get grouped for better mobile display -->
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                                        data-target="#bs-example-navbar-collapse-1">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                                <a class="navbar-brand" href="#">
                                    <img src="{{asset('/FrontEnd Resource File')}}/images/frontendlogo.png" alt="Logo" width="350px" style="margin-top: -10px;">
                                </a>

                            </div>

                            <!-- Collect the nav links, forms, and other content for toggling -->
                            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                <ul class="nav navbar-nav" id="top-nav">
                                    <li><a href="#hero-area">Home</a></li>
                                    <li><a href="#about-us">About us</a></li>
                                    <li><a href="#blog">Blog</a></li>
                                    <li><a href="#price">Menu</a></li>
                                    <li><a href="#contact-us">Contacts</a></li>
                                    <li class="nav-item dropdown">
                                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                            {{ Auth::user()->name }}
                                        </a>

                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                            <a class="dropdown-item" href="{{ route('logout') }}"
                                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                {{ __('Logout') }}
                                            </a>

                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                @csrf
                                            </form>
                                        </div>
                                    </li>
                                </ul>
                            </div><!-- /.navbar-collapse -->
                        </div><!-- /.container-fluid -->
                    </nav>
                </div>
            </div><!-- .col-md-12 close -->
        </div><!-- .row close -->
    </div><!-- .container close -->
</nav><!-- header close -->
<!--
Slider start
============================== -->
<section id="slider">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="block wow fadeInUp" data-wow-duration="500ms" data-wow-delay="300ms">
                    <div class="title">
                        <h1>Delicious <span>Pizza</span></h1>
                    </div>
                    <div id="owl-example" class="owl-carousel">
                        <div>
                            <img class="img-responsive" src="{{asset('/FrontEnd Resource File')}}/images/pizza/pizza1.jpg" alt="">
                        </div>
                        <div>
                            <img class="img-responsive" src="{{asset('/FrontEnd Resource File')}}/images/pizza/pizza2.jpg" alt="">
                        </div>
                        <div>
                            <img class="img-responsive" src="{{asset('/FrontEnd Resource File')}}/images/pizza/pizza3.jpg" alt="">
                        </div>
                        <div>
                            <img class="img-responsive" src="{{asset('/FrontEnd Resource File')}}/images/pizza/pizza4.jpg" alt="">
                        </div>
                        <div>
                            <img class="img-responsive" src="{{asset('/FrontEnd Resource File')}}/images/pizza/pizza5.jpg" alt="">
                        </div>
                        <div>
                            <img class="img-responsive" src="{{asset('/FrontEnd Resource File')}}/images/pizza/pizza6.jpg" alt="">
                        </div>
                        <div>
                            <img class="img-responsive" src="{{asset('/FrontEnd Resource File')}}/images/pizza/pizza7.jpg" alt="">
                        </div>
                        <div>
                            <img class="img-responsive" src="{{asset('/FrontEnd Resource File')}}/images/pizza/pizza8.jpg" alt="">
                        </div>
                        <div>
                            <img class="img-responsive" src="{{asset('/FrontEnd Resource File')}}/images/pizza/pizza9.jpg" alt="">
                        </div>
                        <div>
                            <img class="img-responsive" src="{{asset('/FrontEnd Resource File')}}/images/pizza/pizza10.jpg" alt="">
                        </div>
                        <div>
                            <img class="img-responsive" src="{{asset('/FrontEnd Resource File')}}/images/pizza/pizza11.jpg" alt="">
                        </div>
                        <div>
                            <img class="img-responsive" src="{{asset('/FrontEnd Resource File')}}/images/pizza/pizza12.jpg" alt="">
                        </div>

                    </div>
                </div>
            </div><!-- .col-md-12 close -->
        </div><!-- .row close -->
    </div><!-- .container close -->
</section><!-- slider close -->
<!--
about-us start
============================== -->
<section id="about-us">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="block">
                    <img class="wow fadeInUp" data-wow-duration="300ms" data-wow-delay="400ms" src="{{asset('/FrontEnd Resource File')}}/images/logo.png" alt="cooker-img">
                    <h1 class="heading wow fadeInUp" data-wow-duration="400ms" data-wow-delay="500ms" ><span>Happy-nest</span>
                    </h1>
                    <p class="wow fadeInUp" data-wow-duration="300ms" data-wow-delay="600ms"></p>
                </div>
            </div><!-- .col-md-12 close -->
        </div><!-- .row close -->
    </div><!-- .containe close -->
</section><!-- #call-to-action close -->
<!--
blog start
============================ -->
<section id="blog">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="block">
                    <h1 class="heading">Latest <span>From</span> the <span>Blog</span></h1>
                    <ul>
                        <li class="wow fadeInLeft" data-wow-duration="300ms" data-wow-delay="300ms">
                            <div class="blog-img">
                                <img src="{{asset('/FrontEnd Resource File')}}/images/blog/blog-img-1.jpg" alt="blog-img">
                            </div>
                            <div class="content-right">
                                <h3>CHICKEN BARBEQUE PIZZA</h3>
                                <p></p>
                            </div>
                        </li>
                        <li class="wow fadeInLeft" data-wow-duration="300ms" data-wow-delay="400ms">
                            <div class="blog-img">
                                <img src="{{asset('/FrontEnd Resource File')}}/images/blog/blog-img-2.jpg" alt="blog-img">
                            </div>
                            <div class="content-right">
                                <h3>SHAWARMA PIZZA</h3>
                                <p></p>
                            </div>
                        </li>
                        <li class="wow fadeInLeft" data-wow-duration="300ms" data-wow-delay="500ms">
                            <div class="content-left">
                                <h3>CHEESE BURGER PIZZA</h3>
                                <p></p>
                            </div>
                            <div class="blog-img-2">
                                <img src="{{asset('/FrontEnd Resource File')}}/images/blog/blog-img-3.jpg" alt="blog-img">
                            </div>
                        </li>
                        <li class="wow fadeInLeft" data-wow-duration="300ms" data-wow-delay="600ms">
                            <div class="content-left">
                                <h3>BACON PIZZA</h3>
                                <p></p>
                            </div>
                            <div class="blog-img-2">
                                <img src="{{asset('/FrontEnd Resource File')}}/images/blog/blog-img-4.jpg" alt="blog-img">
                            </div>
                        </li>
                        <li class="wow fadeInLeft" data-wow-duration="300ms" data-wow-delay="700ms">
                            <div class="blog-img">
                                <img src="{{asset('/FrontEnd Resource File')}}/images/blog/blog-img-5.jpg" alt="blog-img">
                            </div>
                            <div class="content-right">
                                <h3>BEEF AND MUSHROOM PIZZA</h3>
                                <p></p>
                            </div>
                        </li>
                        <li class="wow fadeInUp" data-wow-duration="300ms" data-wow-delay="800ms">
                            <div class="blog-img">
                                <img src="{{asset('/FrontEnd Resource File')}}/images/blog/blog-img-6.jpg" alt="blog-img">
                            </div>
                            <div class="content-right">
                                <h3>VEGETARIAN PIZZA</h3>
                                <p></p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div><!-- .col-md-12 close -->
        </div><!-- .row close -->
    </div><!-- .containe close -->
</section><!-- #blog close -->
<!--
price start
============================ -->
<section id="price">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="block">
                    <h1 class="heading wow fadeInUp" data-wow-duration="300ms" data-wow-delay="300ms">our <span>MENU</span> the <span>PRICE</span></h1>
                    <div class="pricing-list">
                        <div class="title">
                            <h3>Featured <span>on the week</span></h3>
                        </div>
                        <ul>
                            <li class="wow fadeInUp" data-wow-duration="300ms" data-wow-delay="300ms">
                                <div class="item">
                                    <div class="item-title">
                                        <h2>Pancakes n' Such</h2>
                                        <div class="border-bottom"></div>
                                        <span>$ 25.00</span>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim&&</p>
                                </div>
                            </li>
                            <li class="wow fadeInUp" data-wow-duration="300ms" data-wow-delay="400ms">
                                <div class="item">
                                    <div class="item-title">
                                        <h2>Homestyle Chicken Pot Pie</h2>
                                        <div class="border-bottom"></div>
                                        <span>$ 10.00</span>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim&&</p>
                                </div>
                            </li>
                            <li class="wow fadeInUp" data-wow-duration="300ms" data-wow-delay="500ms">
                                <div class="item">
                                    <div class="item-title">
                                        <h2>Cereal, Panecillos y Frutas </h2>
                                        <div class="border-bottom"></div>
                                        <span>$ 5.00</span>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim&&</p>
                                </div>
                            </li>
                            <li class="wow fadeInUp" data-wow-duration="300ms" data-wow-delay="600ms">
                                <div class="item">
                                    <div class="item-title">
                                        <h2>Meat of Skewers</h2>
                                        <div class="border-bottom"></div>
                                        <span>$ 15.00</span>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim&&</p>
                                </div>
                            </li>
                            <li class="wow fadeInUp" data-wow-duration="300ms" data-wow-delay="700ms">
                                <div class="item">
                                    <div class="item-title">
                                        <h2>Steak with a Garlic and Parsley Risotto</h2>
                                        <div class="border-bottom"></div>
                                        <span>$ 75.00</span>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim&&</p>
                                </div>
                            </li>
                            <li class="wow fadeInUp" data-wow-duration="300ms" data-wow-delay="800ms">
                                <div class="item">
                                    <div class="item-title">
                                        <h2>Caesar Salad</h2>
                                        <div class="border-bottom"></div>
                                        <span>$ 7.00</span>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim&&</p>
                                </div>
                            </li>
                        </ul>
                        <a class="btn btn-default pull-right wow bounceIn" data-wow-duration="500ms" data-wow-delay="1200ms" href="{{route('order')}}" role="button">Order Now</a>
                    </div>
                </div>
            </div><!-- .col-md-12 close -->
        </div><!-- .row close -->
    </div><!-- .containe close -->
</section><!-- #price close -->
<!--
subscribe start
============================ -->
<section id="subscribe">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="block">
                    <h1 class=" heading wow fadeInUp" data-wow-duration="300ms" data-wow-delay="300ms"> SUBSCRIBE <span>to our</span> NEWSLETTER</h1>
                    <p class="wow fadeInUp" data-wow-duration="300ms" data-wow-delay="400ms"></p>
                    <form class="form-inline">
                        <div class="form-group">
                            <div class="input-group">
                                <input type="text" class="form-control" id="exampleInputAmount" placeholder="Enter your email to subscribe...">
                                <div class="input-group-addon">
                                    <button class="btn btn-default" type="submit">subscribe</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div><!-- .col-md-12 close -->
        </div><!-- .row close -->
    </div><!-- .containe close -->
</section><!-- #subscribe close -->
<!--
CONTACT US  start
============================= -->
<section id="contact-us">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="block">
                    <h1 class="heading wow fadeInUp" data-wow-duration="500ms" data-wow-delay="300ms"><span>CONTACT US</span></h1>
                    <h3 class="title wow fadeInLeft" data-wow-duration="500ms" data-wow-delay="300ms">Sign Up for <span>Email Alerts</span> </h3>
                    <form>
                        <div class="form-group wow fadeInDown" data-wow-duration="500ms" data-wow-delay="600ms">
                            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Write your full name here...">
                        </div>
                        <div class="form-group wow fadeInDown" data-wow-duration="500ms" data-wow-delay="800ms">
                            <input type="text" class="form-control" placeholder="Write your email address here...">
                        </div>
                        <div class="form-group wow fadeInDown" data-wow-duration="500ms" data-wow-delay="1000ms">
                            <textarea class="form-control" rows="3" placeholder="Write your message here..."></textarea>
                        </div>
                    </form>
                    <a class="btn btn-default wow bounceIn" data-wow-duration="500ms" data-wow-delay="1300ms" href="#" role="button">send your message</a>
                </div>
            </div><!-- .col-md-12 close -->
        </div><!-- .row close -->
    </div><!-- .container close -->
</section><!-- #contact-us close -->
<!--
footer  start
============================= -->
<section id="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="block wow fadeInLeft"  data-wow-delay="200ms">
                    <h3>CONTACT <span>INFO</span></h3>
                    <div class="info">
                        <ul>
                            <li>
                                <h4><i class="fa fa-phone"></i>Phone Number</h4>
                                <p>(000) 123 456 78- (000) 123 4567 89</p>

                            </li>
                            <li>
                                <h4><i class="fa fa-map-marker"></i>Address</h4>
                                <p>Tebag East, Sta. Barbara, Pangasinan</p>
                            </li>
                            <li>
                                <h4><i class="fa fa-envelope"></i>E-mail</h4>
                                <p>xianloverepato@gmail.com</p>

                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- .col-md-4 close -->
            <div class="col-md-4">
                <div class="block wow fadeInLeft"  data-wow-delay="1100ms">
                    <div class="gallary">
                        <h3>PHOTO <span>STREAM</span></h3>
                        <ul>
                            <li>
                                <a href="#"><img src="{{asset('/FrontEnd Resource File')}}/images/photo/photo-1.jpg" alt=""></a>
                            </li>
                            <li>
                                <a href="#"><img src="{{asset('/FrontEnd Resource File')}}/images/photo/photo-2.jpg" alt=""></a>
                            </li>
                            <li>
                                <a href="#"><img src="{{asset('/FrontEnd Resource File')}}/images/photo/photo-3.jpg" alt=""></a>
                            </li>
                            <li>
                                <a href="#"><img src="{{asset('/FrontEnd Resource File')}}/images/photo/photo-4.jpg" alt=""></a>
                            </li>
                        </ul>
                    </div>
                    <div class="social-media-link">
                        <h3>Follow <span>US</span></h3>
                        <ul>
                            <li>
                                <a href="https://web.facebook.com/MiekoysStaBarbaraPangasinan">
                                    <i class="fa fa-facebook"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-instagram"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-twitter"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- .col-md-4 close -->
        </div><!-- .row close -->
    </div><!-- .containe close -->
</section><!-- #footer close -->
<!--
footer-bottom  start
============================= -->
<footer id="footer-bottom">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="block">
                    <p>Copyright Happy-nest &copy; 2021 - All Rights Reserved.</p>
                </div>
            </div>
        </div>
    </div>
</footer>
</body>
</html>
