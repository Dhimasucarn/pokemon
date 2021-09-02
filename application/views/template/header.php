

<!DOCTYPE html>
  <html lang="zxx">

  <head>
      <meta charset="UTF-8">
      <meta name="description" content="Anime Template">
      <meta name="keywords" content="Anime, unica, creative, html">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>Anime | Template</title>

      <!-- Google Font -->
      <link rel="stylesheet" href="<?= base_url('assets/');?>style.css">
      <link href="<?=base_url('assets/');?>image-picker/image-picker.css" rel="stylesheet" type="text/css">

      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
      <link href="<?=base_url('assets/');?>image-picker/image-picker.css" rel="stylesheet" type="text/css">
      
      <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400;500;600;700&display=swap" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@300;400;500;600;700;800;900&display=swap"
      rel="stylesheet">

      <!-- Css Styles -->
      <link rel="stylesheet" href="<?=base_url('assets/vendor/anime-main/');?>css/bootstrap.min.css" type="text/css">
      <link rel="stylesheet" href="<?=base_url('assets/vendor/anime-main/');?>css/font-awesome.min.css" type="text/css">
      <link rel="stylesheet" href="<?=base_url('assets/vendor/anime-main/');?>css/elegant-icons.css" type="text/css">
      <link rel="stylesheet" href="<?=base_url('assets/vendor/anime-main/');?>css/plyr.css" type="text/css">
      <link rel="stylesheet" href="<?=base_url('assets/vendor/anime-main/');?>css/nice-select.css" type="text/css">
      <link rel="stylesheet" href="<?=base_url('assets/vendor/anime-main/');?>css/owl.carousel.min.css" type="text/css">
      <link rel="stylesheet" href="<?=base_url('assets/vendor/anime-main/');?>css/slicknav.min.css" type="text/css">
      <link rel="stylesheet" href="<?=base_url('assets/vendor/anime-main/');?>css/style.css" type="text/css">
      <link href="//netdna.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
      <link rel="stylesheet" href="<?=base_url('assets/');?>dist/starrr.css" type="text/css">

  </head>
  <body>
    <!-- Page Preloder -->
  <div id="preloder">
    <div class="loader"></div>
  </div>

  <!-- Header Section Begin -->
  <header class="header">
    <div class="container">
      <div class="row">
        <div class="col-lg-2">
          <div class="header__logo">
            <a href="./index.html">
              <img src="img/logo.png" alt="">
            </a>
          </div>
        </div>
        <div class="col-lg-8">
          <div class="header__nav">
            <nav class="header__menu mobile-menu">
              <ul>
                
                <?php if($this->uri->segment(2) == '' || $this->uri->segment(2) == 'boss'):?>
                <li class="active"><a href="<?=base_url('pokemon');?>">Homepage</a></li>
                <?php else:?>
                <li><a href="<?=base_url('pokemon');?>">Homepage</a></li>  
                <?php endif;?>

                <?php if($this->uri->segment(2) == 'my_pokemon'):?>
                <li class="active"><a href="#">My Data<span class="arrow_carrot-down"></span></a>
                <?php else:?>
                <li><a href="#">My Data<span class="arrow_carrot-down"></span></a>
                <?php endif;?>
                  <ul class="dropdown">
                    <li><a href="<?=base_url('pokemon/my_pokemon');?>">My Pokemon</a></li>
                    <li><a href="./anime-details.html">My Profile</a></li>
                    <li><a href="./anime-watching.html">History</a></li>
                  </ul>
                </li>
                <li><a href="#">Get Recomendation</a></li>
                <li><a href="#">Tips n Trick</a></li>
                <li><a href="#">Tutorial</a></li>
              </ul>
            </nav>
          </div>
        </div>
        <div class="col-lg-2">
          <div class="header__right">
            <a href="#" data-toggle="modal" data-target="#exampleModal1"><img src="<?=base_url('assets/logout.png');?>" class="mb-3" width="20px"></a>
            <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-body">
                    <center>
                    <h4>Are you sure want to logout?</h4>
                    </center>
                  </div>
                  <div class="modal-footer">
                     <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                     <a href="<?=base_url('auth/logout');?>"><button type="button" class="btn btn-danger">Yes</button></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div id="mobile-menu-wrap"></div>
    </div>
  </header>
  <!-- Header End -->

  <!-- Hero Section Begin -->
  <section class="hero">
    <div class="container">
      <div class="hero__slider owl-carousel">
        <div class="hero__items set-bg" data-setbg="<?=base_url('assets/images/bag.png');?>">
          <div class="row">
            <div class="col-lg-6">
              <div class="hero__text">
                <div class="label">Adventure</div>
                <h2>Fate / Stay Night: Unlimited Blade Works</h2>
                <p>After 30 days of travel across the world...</p>

              </div>
            </div>
          </div>
        </div>
        <div class="hero__items set-bg" data-setbg="<?=base_url('assets/images/bag2.png');?>">
          <div class="row">
            <div class="col-lg-6">
              <div class="hero__text">
                <div class="label">Adventure</div>
                <h2>Fate / Stay Night: Unlimited Blade Works</h2>
                <p>After 30 days of travel across the world...</p>

              </div>
            </div>
          </div>
        </div>
        <div class="hero__items set-bg" data-setbg="<?=base_url('assets/images/bag.png');?>">
          <div class="row">
            <div class="col-lg-6">
              <div class="hero__text">
                <div class="label">Adventure</div>
                <h2>Fate / Stay Night: Unlimited Blade Works</h2>
                <p>After 30 days of travel across the world...</p>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Hero Section End -->