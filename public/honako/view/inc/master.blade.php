<?php
/**
 * HONAKO THEME
 * By: Hoiyen
 * Ver: 0.0.1
 * Last Update: 05/03/2016
 *
 * Domain: 
 * Public
 *
 * Type:
 * Template
 * 
 * Description:
 * Master template
 */
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
  <title>HONAKO.COM</title>

  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'>

  {{ Html::style('public/honako/assets/css/bootstrap.min.css') }}
  {{ Html::style('public/honako/assets/css/font-awesome.min.css') }}
  {{ Html::style('public/honako/assets/css/owl.carousel.css') }}
  {{ Html::style('public/honako/assets/css/youplay.min.css') }}

  <!--[if lt IE 9]>
  <![endif]-->
</head>

<body>

  <!-- Preloader -->
  <div class="page-preloader preloader-wrapp">
    {{ Html::image('public/honako/assets/images/logo-site.png') }}
    <div class="preloader"></div>
  </div>
  <!-- /Preloader -->

  <!-- Navbar -->
  <nav class="navbar-youplay navbar navbar-default navbar-fixed-top ">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="off-canvas" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index-2.html">
          <img src="assets/images/logo.png" alt="">
        </a>
      </div>
      <div id="navbar" class="navbar-collapse collapse">
        <ul class="nav navbar-nav">
          <li class="dropdown dropdown-hover ">
            <a href="#!" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
              Store <span class="caret"></span> <span class="label">games</span>
            </a>
            <div class="dropdown-menu" style="width: 320px;">
              <ul role="menu">
                <li><a href="store-1.html">Store Style 1</a>
                </li>
                <li><a href="store-2.html">Store Style 2</a>
                </li>
                <li><a href="cart.html">Cart</a>
                </li>
              </ul>
              <ul role="menu">
                <li><a href="store-product-1.html">Product Style 1</a>
                </li>
                <li><a href="store-product-2.html">Product Style 2</a>
                </li>
                <li><a href="checkout.html">Checkout</a>
                </li>
              </ul>
            </div>
          </li>
          <li class="dropdown dropdown-hover ">
            <a href="#!" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
              Blog <span class="caret"></span> <span class="label">news</span>
            </a>
            <div class="dropdown-menu" style="width: 320px;">
              <ul role="menu">
                <li><a href="blog-1.html">Blog Style 1</a>
                </li>
                <li><a href="blog-2.html">Blog Style 2</a>
                </li>
                <li><a href="blog-3.html">Blog Style 3</a>
                </li>
              </ul>
              <!--
                        -->
              <ul role="menu">
                <li><a href="blog-post-1.html">Blog Post 1</a>
                </li>
                <li><a href="blog-post-2.html">Blog Post 2</a>
                </li>
                <li><a href="blog-post-3.html">Blog Post 3</a>
                </li>
              </ul>
            </div>
          </li>
          <li class="dropdown dropdown-hover ">
            <a href="#!" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                      Features <span class="caret"></span> <span class="label">full list</span>
                    </a>
            <div class="dropdown-menu" style="width: 350px;">
              <ul role="menu">
                <li class="dropdown dropdown-submenu pull-left ">
                  <a href="#!" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">User</a>
                  <div class="dropdown-menu">
                    <ul role="menu">
                      <li><a href="user-activity.html">Activity</a>
                      </li>
                      <li><a href="user-profile.html">Profile</a>
                      </li>
                      <li><a href="user-messages.html">Messages</a>
                      </li>
                      <li><a href="user-messages-compose.html">Messages Compose</a>
                      </li>
                      <li><a href="user-settings.html">Settings</a>
                      </li>
                    </ul>
                  </div>
                </li>
                <li><a href="forums.html">Forums</a>
                </li>
                <li><a href="forums-topics.html">Forums Topics</a>
                </li>
                <li><a href="forums-single-topic.html">Single Topic</a>
                </li>
                <li><a href="matches-list.html">Matches List</a>
                </li>
                <li><a href="match.html">Match</a>
                </li>
                <li><a href="match-2.html">Match with Maps</a>
                </li>
              </ul>
              <!--
                        -->
              <ul role="menu">
                <li><a href="components.html">Components</a>
                </li>
                <li><a href="coming-soon.html">Coming Soon</a>
                </li>
                <li><a href="contact.html">Contact Us</a>
                </li>
                <li><a href="search.html">Search</a>
                </li>
                <li><a href="login.html">Login</a>
                </li>
                <li><a href="404.html">404</a>
                </li>
                <li><a href="blank.html">Blank</a>
                </li>
              </ul>
            </div>
          </li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li class="dropdown dropdown-hover">
            <a href="#!" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                      John Doe <span class="badge bg-default">2</span> <span class="caret"></span> <span class="label">it is you</span>
                    </a>
            <div class="dropdown-menu">
              <ul role="menu">
                <li><a href="http://html.nkdev.info/youplay/documentation">Documentation</a>
                </li>
                <li><a href="http://themeforest.net/item/youplay-game-template-based-on-bootstrap/11306207?ref=_nK">Purchase</a>
                </li>
                <li class="divider"></li>

                <li><a href="user-profile.html">Profile <span class="badge pull-right bg-warning">13</span></a>
                </li>
                <li><a href="cart.html">My Cart <span class="badge pull-right bg-default">3</span></a>
                </li>
                <li class="divider"></li>

                <li><a href="login.html">Log Out</a>
                </li>
                <li class="dropdown dropdown-submenu pull-left">
                  <a href="#!" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">More..</a>
                  <div class="dropdown-menu">
                    <ul role="menu">
                      <li><a href="#!">3rd level</a>
                      </li>
                      <li><a href="#!">3rd level</a>
                      </li>
                    </ul>
                  </div>
                </li>
              </ul>
            </div>
          </li>
          <li>
            <a class="search-toggle" href="search.html">
              <i class="fa fa-search"></i>
            </a>
          </li>
          <li class="dropdown dropdown-hover dropdown-cart">
            <a href="#!" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
              <i class="fa fa-shopping-cart"></i>
            </a>
            <div class="dropdown-menu" style="width: 300px;">
              <div class="row youplay-side-news">
                <div class="col-xs-3 col-md-4">
                  <a href="#" class="angled-img">
                    <div class="img">

                      <img src="assets/images/game-bloodborne-500x375.jpg" alt="">
                    </div>
                  </a>
                </div>
                <div class="col-xs-9 col-md-8">
                  <a href="#" style="text-decoration: none;" class="pull-right mr-10"><i class="fa fa-times"></i></a>

                  <h4 class="ellipsis"><a href="#">Bloodborne</a></h4>
                  <span class="quantity">1 × <span class="amount">$50.00</span></span>
                </div>
              </div>

              <div class="row youplay-side-news">
                <div class="col-xs-3 col-md-4">
                  <a href="#" class="angled-img">
                    <div class="img">

                      <img src="assets/images/game-kingdoms-of-amalur-reckoning-500x375.jpg" alt="">
                    </div>
                  </a>
                </div>
                <div class="col-xs-9 col-md-8">
                  <a href="#" style="text-decoration: none;" class="pull-right mr-10"><i class="fa fa-times"></i></a>

                  <h4 class="ellipsis"><a href="#">Kingdoms of Amalur</a></h4>
                  <span class="quantity">1 × <span class="amount">$20.00</span></span>
                </div>
              </div>

              <div class="ml-20 mr-20 pull-right"><strong>Subtotal:</strong>  <span class="amount">$70.00</span>
              </div>

              <div class="btn-group pull-right m-15">
                <a href="#" class="btn btn-default btn-sm">View Cart</a>
                <a href="#" class="btn btn-default btn-sm">Checkout</a>
              </div>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- /Navbar -->

  <!-- Main Content -->
  <section class="content-wrap">

    <!-- Banner -->
    <section class="youplay-banner banner-top">
      <div class="image" style="background-image: url(assets/images/banner-bg.jpg)" data-top="background-position: 50% 0px;" data-top-bottom="background-position: 50% -200px;">
      </div>

      <div class="info" data-top="opacity: 1; transform: translate3d(0px,0px,0px);" data-top-bottom="opacity: 0; transform: translate3d(0px,150px,0px);" data-anchor-target=".youplay-banner.banner-top">
        <div>
          <div class="container">
            <h2>Diablo III: <br>Reaper of Souls</h2>
            <em>"One of the best grind games"</em>
            <br>
            <br>
            <br>
            <a class="btn btn-lg" href="#!">Purchase</a>
          </div>
        </div>
      </div>
    </section>
    <!-- /Banner -->

    <!-- Images With Text -->
    <div class="youplay-carousel">
      <a class="angled-img" href="store-product-1.html">
        <div class="img">
          <img src="assets/images/game-bloodborne-500x375.jpg" alt="">
        </div>
        <div class="over-info">
          <div>
            <div>
              <h4>Bloodborne</h4>
              <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
              </div>
            </div>
          </div>
        </div>
      </a>
      <a class="angled-img" href="#!">
        <div class="img">
          <img src="assets/images/game-dark-souls-ii-500x375.jpg" alt="">
        </div>
        <div class="over-info">
          <div>
            <div>
              <h4>Dark Souls II</h4>
              <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-half-o"></i>
              </div>
            </div>
          </div>
        </div>
      </a>
      <a class="angled-img" href="#!">
        <div class="img">
          <img src="assets/images/game-lords-of-the-fallen-500x375.jpg" alt="">
        </div>
        <div class="over-info">
          <div>
            <div>
              <h4>Lords of the Fallen</h4>
              <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-o"></i>
              </div>
            </div>
          </div>
        </div>
      </a>
      <a class="angled-img" href="#!">
        <div class="img">
          <img src="assets/images/game-middle-eart-shadow-of-mordor-500x375.jpg" alt="">
        </div>
        <div class="over-info">
          <div>
            <div>
              <h4>Middle-earth: Shadow of Mordor</h4>
              <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-half-o"></i>
              </div>
            </div>
          </div>
        </div>
      </a>
      <a class="angled-img" href="#!">
        <div class="img">
          <img src="assets/images/game-soul-sacrifice-500x375.jpg" alt="">
        </div>
        <div class="over-info">
          <div>
            <div>
              <h4>Soul Sacrifice</h4>
              <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-half-o"></i>
              </div>
            </div>
          </div>
        </div>
      </a>
      <a class="angled-img" href="#!">
        <div class="img">
          <img src="assets/images/game-kingdoms-of-amalur-reckoning-500x375.jpg" alt="">
        </div>
        <div class="over-info">
          <div>
            <div>
              <h4>Kingdoms of Amalur: Reckoning</h4>
              <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-half-o"></i>
              </div>
            </div>
          </div>
        </div>
      </a>
      <a class="angled-img" href="#!">
        <div class="img">
          <img src="assets/images/game-the-witcher-500x375.jpg" alt="">
        </div>
        <div class="over-info">
          <div>
            <div>
              <h4>The Witcher: Rise of the White Wolf</h4>
              <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-half-o"></i>
              </div>
            </div>
          </div>
        </div>
      </a>
      <a class="angled-img" href="#!">
        <div class="img">
          <img src="assets/images/game-diablo-iii-500x375.jpg" alt="">
        </div>
        <div class="over-info">
          <div>
            <div>
              <h4>Diablo III: Reaper of Souls</h4>
              <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-half-o"></i>
              </div>
            </div>
          </div>
        </div>
      </a>
      <a class="angled-img" href="#!">
        <div class="img">
          <img src="assets/images/game-dragons-dogma-500x375.jpg" alt="">
        </div>
        <div class="over-info">
          <div>
            <div>
              <h4>Dragons Dogma</h4>
              <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-half-o"></i>
              </div>
            </div>
          </div>
        </div>
      </a>
    </div>
    <!-- /Images With Text -->



    <!-- Popular -->
    <h2 class="container h1">Popular <a href="#!" class="btn pull-right">See More</a></h2>
    <div class="youplay-carousel">
      <a class="angled-img" href="#!">
        <div class="img">
          <img src="assets/images/game-kingdoms-of-amalur-reckoning-500x375.jpg" alt="">
        </div>
        <div class="over-info">
          <div>
            <div>
              <h4>Kingdoms of Amalur: Reckoning</h4>
              <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-half-o"></i>
              </div>
            </div>
          </div>
        </div>
      </a>
      <a class="angled-img" href="#!">
        <div class="img">
          <img src="assets/images/game-the-witcher-500x375.jpg" alt="">
        </div>
        <div class="over-info">
          <div>
            <div>
              <h4>The Witcher: Rise of the White Wolf</h4>
              <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-half-o"></i>
              </div>
            </div>
          </div>
        </div>
      </a>
      <a class="angled-img" href="#!">
        <div class="img">
          <img src="assets/images/game-diablo-iii-500x375.jpg" alt="">
        </div>
        <div class="over-info">
          <div>
            <div>
              <h4>Diablo III: Reaper of Souls</h4>
              <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-half-o"></i>
              </div>
            </div>
          </div>
        </div>
      </a>
      <a class="angled-img" href="#!">
        <div class="img">
          <img src="assets/images/game-dragons-dogma-500x375.jpg" alt="">
        </div>
        <div class="over-info">
          <div>
            <div>
              <h4>Dragons Dogma</h4>
              <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-half-o"></i>
              </div>
            </div>
          </div>
        </div>
      </a>
    </div>
    <!-- /Popular -->


    <!-- Specials -->
    <h2 class="container h1">Specials <a href="#!" class="btn pull-right">See More</a></h2>
    <div class="youplay-carousel">
      <a class="angled-img" href="#!">
        <div class="img img-offset">
          <img src="assets/images/game-dark-souls-ii-500x375.jpg" alt="">
          <div class="badge bg-default">
            -20%
          </div>
        </div>
        <div class="bottom-info">
          <h4>Dark Souls II</h4>
          <div class="row">
            <div class="col-xs-6">
              <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-half-o"></i>
              </div>
            </div>
            <div class="col-xs-6">
              <div class="price">$39.99 <sup><del>$49.99</del></sup>
              </div>
            </div>
          </div>
        </div>
      </a>
      <a class="angled-img" href="#!">
        <div class="img img-offset">
          <img src="assets/images/game-lords-of-the-fallen-500x375.jpg" alt="">
          <div class="badge bg-default">
            -25%
          </div>
        </div>
        <div class="bottom-info">
          <h4>Lords of the Fallen</h4>
          <div class="row">
            <div class="col-xs-6">
              <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-half-o"></i>
                <i class="fa fa-star-o"></i>
              </div>
            </div>
            <div class="col-xs-6">
              <div class="price">$26.25 <sup><del>$35.00</del></sup>
              </div>
            </div>
          </div>
        </div>
      </a>
      <a class="angled-img" href="#!">
        <div class="img img-offset">
          <img src="assets/images/game-dragons-dogma-500x375.jpg" alt="">
          <div class="badge bg-default">
            -30%
          </div>
        </div>
        <div class="bottom-info">
          <h4>Dragons Dogma</h4>
          <div class="row">
            <div class="col-xs-6">
              <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-half-o"></i>
              </div>
            </div>
            <div class="col-xs-6">
              <div class="price">$34.99 <sup><del>$49.99</del></sup>
              </div>
            </div>
          </div>
        </div>
      </a>
      <a class="angled-img" href="#!">
        <div class="img img-offset">
          <img src="assets/images/game-soul-sacrifice-500x375.jpg" alt="">
          <div class="badge bg-success">
            -100%
          </div>
        </div>
        <div class="bottom-info">
          <h4>Soul Sacrifice</h4>
          <div class="row">
            <div class="col-xs-6">
              <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-half-o"></i>
              </div>
            </div>
            <div class="col-xs-6">
              <div class="price"><span class="text-success">FREE!</span>  <sup><del>$29.99</del></sup>
              </div>
            </div>
          </div>
        </div>
      </a>
    </div>
    <!-- /Specials -->


    <!-- Preorder -->
    <div class="h2"></div>
    <section class="youplay-banner small">
      <div class="image" style="background-image: url(assets/images/banner-witcher-3.jpg); background-size: cover;" data-top-bottom="background-position: 50% -150px;" data-bottom-top="background-position: 50% 150px;">
      </div>

      <div class="info container align-center">
        <div>
          <h2>The Witcher 3:<br> Wild Hunt</h2>

          <!-- See countdown init in bottom of the page -->
          <div class="countdown h2" data-end="2017/01/01"></div>

          <br>
          <br>
          <a class="btn btn-lg" href="#!">Pre-Order</a>
        </div>
      </div>
    </section>
    <!-- /Preorder -->


    <!-- Latest News -->
    <h2 class="container h1">Latest News</h2>
    <section class="youplay-news container">
      <!-- Single News Block -->
      <div class="news-one row vertical-gutter">
        <div class="col-md-4">
          <a href="blog-post-1.html" class="angled-img">
            <div class="img">
              <img src="assets/images/game-bloodborne-500x375.jpg" alt="">
            </div>
            <div class="youplay-hexagon-rating youplay-hexagon-rating-small" data-max="10" data-size="50" title="9.1 out of 10"><span>9.1</span>
            </div>
          </a>
        </div>
        <div class="col-md-8">
          <div class="clearfix">
            <h3 class="h2 pull-left m-0"><a href="blog-post-1.html">Bloodborne - First Try!</a></h3>
            <span class="date pull-right"><i class="fa fa-calendar"></i> Today</span>
          </div>
          <div class="tags">
            <i class="fa fa-tags"></i>  <a href="#">Bloodborne</a>, <a href="#">first try</a>, <a href="#">first boss problem</a>, <a href="#">newbie game</a>
          </div>
          <div class="description">
            <p>
              Gus sit amet suum motum. Nescio quando, aut quomodo, nescio quo. Illud scio, amet tortor. Suarum impotens prohibere eum.
            </p>
            <p>
              Sum expectantes. Ego hodie expectantes. Expectantes, et misit unum de pueris Gus interficere. Et suus vos. Nescio quis, qui est bonus usus liberi ad Isai? Qui nosti ... Quis dimisit filios ad necem ... hmm? Gus!
            </p>
          </div>
          <a href="blog-post-1.html" class="btn read-more pull-left">Read More</a>
        </div>
      </div>
      <!-- /Single News Block -->

      <!-- Single News Block -->
      <div class="news-one row vertical-gutter">
        <div class="col-md-4">
          <a href="blog-post-2.html" class="angled-img">
            <div class="img">
              <img src="assets/images/game-dark-souls-ii-500x375.jpg" alt="">
            </div>
            <div class="youplay-hexagon-rating youplay-hexagon-rating-small" data-max="10" data-size="50" title="9 out of 10"><span>9</span>
            </div>
          </a>
        </div>
        <div class="col-md-8">
          <div class="clearfix">
            <h3 class="h2 pull-left m-0"><a href="blog-post-2.html">Coming to Youplay - Dark Souls II</a></h3>
            <span class="date pull-right"><i class="fa fa-calendar"></i> March 9, 2015</span>
          </div>
          <div class="tags">
            <i class="fa fa-tags"></i>  <a href="#">Dark Souls II</a>, <a href="#">coming soon</a>, <a href="#">first review</a>, <a href="#">sale date</a>
          </div>
          <div class="description">
            Ille vivere. Ut ad te quaerebam ... purgare caeli. Sunt uh ... nonnullus propter errorem qui de rebus inter nos et iacere puto suus in causa, id est in mensa. Levir meus, priusquam oppugnarent tempus quis, admonere dicitur. Credo quod idem mihi praesidium.
          </div>
          <a href="blog-post-2.html" class="btn read-more pull-left">Read More</a>
        </div>
      </div>
      <!-- /Single News Block -->

      <!-- Single News Block -->
      <div class="news-one row vertical-gutter">
        <div class="col-md-4">
          <a href="blog-post-3.html" class="angled-img">
            <div class="img">
              <img src="assets/images/game-kingdoms-of-amalur-reckoning-500x375.jpg" alt="">
            </div>
            <div class="youplay-hexagon-rating youplay-hexagon-rating-small" data-max="10" data-size="50" title="3.8 out of 10"><span>3.8</span>
            </div>
          </a>
        </div>
        <div class="col-md-8">
          <div class="clearfix">
            <h3 class="h2 pull-left m-0"><a href="blog-post-3.html">Review Kingdoms of Amalur</a></h3>
            <span class="date pull-right"><i class="fa fa-calendar"></i> March 1, 2015</span>
          </div>
          <div class="tags">
            <i class="fa fa-tags"></i>  <a href="#">Kingdoms of Amalur</a>, <a href="#">game</a>, <a href="#">review</a>
          </div>
          <div class="description">
            Quod satis pecuniae sempiternum. Ut sciat oportet motum. Nunquam invenies eum. Hic de tabula. Ego vivere, ut debui, et nunc fiant. Istuc quod opus non est. Lorem ipsum occurrebat pragmaticam semper ut, si quis ita velim tibi bene recognoscere. Quorum
            duo te mihi videtur.
          </div>
          <a href="blog-post-3.html" class="btn read-more">Read More</a>
        </div>
      </div>
      <!-- /Single News Block -->
    </section>
    <!-- /Latest News -->


    <!-- Partners -->
    <section class="youplay-banner small mt-80">
      <div class="image" style="background-image: url(assets/images/banner-bg.jpg); background-size: cover;" data-top-bottom="background-position: 50% -150px;" data-bottom-top="background-position: 50% 150px;">
      </div>

      <div class="info align-center">
        <div>
          <h2 class="mb-40">Partners</h2>

          <div class="row">
            <div class="col-md-10 col-md-offset-1">
              <div class="owl-carousel" data-autoplay="6000">
                <div class="item">
                  <a href="#">
                    <img src="assets/images/partner-logo-1.png" alt="">
                  </a>
                </div>
                <div class="item">
                  <a href="#">
                    <img src="assets/images/partner-logo-2.png" alt="">
                  </a>
                </div>
                <div class="item">
                  <a href="#">
                    <img src="assets/images/partner-logo-3.png" alt="">
                  </a>
                </div>
                <div class="item">
                  <a href="#">
                    <img src="assets/images/partner-logo-4.png" alt="">
                  </a>
                </div>
                <div class="item">
                  <a href="#">
                    <img src="assets/images/partner-logo-5.png" alt="">
                  </a>
                </div>
                <div class="item">
                  <a href="#">
                    <img src="assets/images/partner-logo-6.png" alt="">
                  </a>
                </div>
                <div class="item">
                  <a href="#">
                    <img src="assets/images/partner-logo-7.png" alt="">
                  </a>
                </div>
                <div class="item">
                  <a href="#">
                    <img src="assets/images/partner-logo-8.png" alt="">
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- /Partners -->


    <!-- Features -->
    <h2 class="container h1">Why Buy from Us</h2>
    <section class="youplay-features container">
      <div class="col-md-3 col-sm-6">
        <div class="feature angled-bg">
          <i class="fa fa-cc-visa"></i>
          <h3>Payment</h3>
          <small>More than 10 payment systems</small>
        </div>
      </div>
      <div class="col-md-3 col-sm-6">
        <div class="feature angled-bg">
          <i class="fa fa-gamepad"></i>
          <h3>Games</h3>
          <small>A large number of games</small>
        </div>
      </div>
      <div class="col-md-3 col-sm-6">
        <div class="feature angled-bg">
          <i class="fa fa-money"></i>
          <h3>Cheap</h3>
          <small>Lowest prices on the Internet</small>
        </div>
      </div>
      <div class="col-md-3 col-sm-6">
        <div class="feature angled-bg">
          <i class="fa fa-users"></i>
          <h3>Community</h3>
          <small>The largest gaming community</small>
        </div>
      </div>
    </section>

    <!-- Footer -->
    <footer>
      <div class="wrapper" style="background-image: url(assets/images/footer-bg.jpg)" data-bottom="transform:translate3d(0px,0px,0px);" data-bottom-top="transform:translate3d(0px,-200px,0px);" data-anchor-target="footer">

        <!-- Social Buttons -->
        <div class="social">
          <div class="container" data-bottom-top="opacity: 0;" data-bottom="opacity: 1;">
            <h3>Connect socially with <strong>youplay</strong></h3>

            <div class="row icons">
              <div class="col-xs-6 col-sm-3">
                <a href="#!">
                  <i class="fa fa-facebook-square"></i>
                  <span>Like on Facebook</span>
                </a>
              </div>
              <div class="col-xs-6 col-sm-3">
                <a href="#!">
                  <i class="fa fa-twitter-square"></i>
                  <span>Follow on Twitter</span>
                </a>
              </div>
              <div class="col-xs-6 col-sm-3">
                <a href="#!">
                  <i class="fa fa-twitch"></i>
                  <span>Watch on Twitch</span>
                </a>
              </div>
              <div class="col-xs-6 col-sm-3">
                <a href="#!">
                  <i class="fa fa-youtube-square"></i>
                  <span>Watch on Youtube</span>
                </a>
              </div>
            </div>

          </div>
        </div>
        <!-- /Social Buttons -->

        <!-- Copyright -->
        <div class="copyright">
          <div class="container">
            <strong>nK</strong> &copy; 2015. All rights reserved
          </div>
        </div>
        <!-- /Copyright -->

      </div>
    </footer>
    <!-- /Footer -->
  </section>
  <!-- /Main Content -->

  <!-- Search Block -->
  <div class="search-block">
    <a href="#!" class="search-toggle glyphicon glyphicon-remove"></a>
    <form action="http://html.nkdev.info/youplay/dark/search.html">
      <div class="youplay-input">
        <input type="text" name="search" placeholder="Search...">
      </div>
    </form>
  </div>
  <!-- /Search Block -->

  <!-- jQuery -->
  {{ Html::script('public/honako/assets/js/jquery.min.js') }}

  <!-- CSS Shapes Polyfill -->
  {{ Html::script('public/honako/assets/js/shapes-polyfill.min.js') }}

  <!-- Hexagon Progress -->
  {{ Html::script('public/honako/assets/js/jquery.hexagonprogress.min.js') }}

  <!-- Bootstrap -->
  {{ Html::script('public/honako/assets/js/bootstrap.min.js') }}

  <!-- Skrollr -->
  {{ Html::script('public/honako/assets/js/skrollr.min.js') }}

  <!-- Smooth Scroll -->
  {{ Html::script('public/honako/assets/js/smoothscroll.js') }}

  <!-- Owl Carousel -->
  {{ Html::script('public/honako/assets/js/owl.carousel.min.js') }}

  <!-- Countdown -->
  {{ Html::script('public/honako/assets/js/jquery.countdown.min.js') }}

  <!-- youplay -->
  {{ Html::script('public/honako/assets/js/youplay.js') }}
  <!-- init youplay -->
  <script>
    if(typeof youplay !== 'undefined') {
      youplay.init({
          smoothscroll: false,
      });
    }
  </script>

  <script type="text/javascript">
    $(".countdown").each(function() {
      $(this).countdown($(this).attr('data-end'), function(event) {
        $(this).text(
          event.strftime('%D days %H:%M:%S')
        );
      });
    })
  </script>

</body>
</html>