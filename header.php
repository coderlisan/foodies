<?php global $my_theme ?>
<!DOCTYPE html>
<html lang="en" style="margin-top:0 !important">
<head>
<meta charset="<?php bloginfo('charset') ?>" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php bloginfo('title') ?></title>
<?php wp_head() ?>
</head>
<body <?php body_class() ?>>
<div class="site-wrapper">
  <header class="header headr-style-2">
    <div class="container">
    <div class="row"> 
      <!-- Menu -->
      <div class="navbar yamm navbar-default">
        <div class="container">
          <div class="navbar-header">
            <button type="button" data-toggle="collapse" data-target="#navbar-collapse-1" class="navbar-toggle">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a href="<?= get_home_url() ?>" class="navbar-brand logo"><img src="<?= $my_theme['logo_up']['url'] ?>" /></a>
          </div>
          <div class="cart pull-right" style="float:right;" >
            <button class="dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <span class="icon-basket"></span><span class="cart-info">2</span></button>
            <div class="dropdown-menu">
              <div class="wrapp-mini-cart">
                <div class="mini-cart">
                  <h3 class="font-color font20">My Cart</h3>
                  <div class="cart-item">
                    <div class="cart-img"><img class="img-responsive" alt="" src="https://placeholdit.imgix.net/~text?txtsize=18&txt=68%C3%9772&w=68&h=72"></div>
                    <div class="cart-content">
                      <h4 class="item-name m-bottom1"><a href="#">Special Hot and Sour Soup</a></h4>
                      <p class="font16 font-color">$8.95</p>
                    </div>
                  </div>
                  <div class="cart-action"><span class="fleft top-checkout-price font20 font-color font-bold">$259.95</span> <a href="#" class="button-cart">View Cart</a> </div>
                </div>
              </div>
            </div>
          </div>
          <div id="navbar-collapse-1" class="navbar-collapse collapse pull-right dark-color nopadding">
            <nav>
              <ul class="nav navbar-nav">


                <?php
                  wp_nav_menu([
                    'theme_location' => 'main_menu',
                    'container' => false,
                    'items_wrap' => '%3$s',
                    'menu_id' => ' ',
                    'menu_class' => '',
                  ])
                ?>


              </ul>
            </nav>
            <div class="search-box no-display-phone">
              <form class="navbar-form" role="search">
                <div class="input-group">
                  <input type="text" class="form-control" placeholder="Search here...!">
                  <span class="input-group-btn">
                    <button type="reset" class="btn btn-default"><span class="fa fa-close"> <span class="sr-only">Close</span></span></button>
                    <button type="submit" class="btn btn-default"><span class="fa fa-search"> <span class="sr-only">Search here...!</span></span></button>
                  </span>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>
</header>