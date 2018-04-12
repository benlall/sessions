<?php
require 'inc/head.php';

if (!isset($_SESSION['loginname'])) {
    header('Location: login.php');
    die;
}


/* version sessions*/
$prod46 = 'product-46';
$nameProd46 = 'name product-46';
$prod36 = 'product-36';
$nameProd36 = 'name product-36';
$prod58 = 'product-58';
$nameProd58 = 'name product-58';
$prod32 = 'product-32';
$nameProd32 = 'name product-32';
if (isset($_GET['add_to_cart'])) {
    if (isset($_SESSION[$prod46]) && $_GET['add_to_cart'] == 46) {
        $_SESSION[$prod46] =  $_SESSION[$prod46] +1 ;
    } elseif (!isset($_SESSION[$prod46]) && $_GET['add_to_cart'] == 46) {
        $_SESSION[$prod46] = 1;
        $_SESSION[$nameProd46] = 'Pecan nuts';
    }
    if (isset($_SESSION[$prod36]) && $_GET['add_to_cart'] == 36) {
        $_SESSION[$prod36] =  $_SESSION[$prod36] +1 ;
    } elseif (!isset($_SESSION[$prod36]) && $_GET['add_to_cart'] == 36) {
        $_SESSION[$prod36] = 1;
        $_SESSION[$nameProd36] = 'Chocolate chips';
    }
    if (isset($_SESSION[$prod58]) && $_GET['add_to_cart'] == 58) {
        $_SESSION[$prod58] =  $_SESSION[$prod58] +1 ;
    } elseif (!isset($_SESSION[$prod58]) && $_GET['add_to_cart'] == 58) {
        $_SESSION[$prod58] = 1;
        $_SESSION[$nameProd58] = 'Chocolate cookie';
    }
    if (isset($_SESSION[$prod32]) && $_GET['add_to_cart'] == 32) {
        $_SESSION[$prod32] =  $_SESSION[$prod32] +1 ;
    } elseif (!isset($_SESSION[$prod32]) && $_GET['add_to_cart'] == 32) {
        $_SESSION[$prod32] = 1;
        $_SESSION[$nameProd32] = 'M&M\'s&copy; cookies';
    }
    header('Refresh:2, index.php');
}

if (isset($_GET['delete_to_cart'])) {
    if (isset($_SESSION[$prod46]) && $_GET['delete_to_cart'] == 46 && $_SESSION[$prod46] <= 1) {
        $_SESSION[$prod46] = 0;
    } elseif ($_SESSION[$prod46] > 1 && $_GET['delete_to_cart'] == 46) {
        $_SESSION[$prod46] =  $_SESSION[$prod46] - 1;
    }
    if (isset($_SESSION[$prod36]) && $_GET['delete_to_cart'] == 36 && $_SESSION[$prod36] <= 1) {
        $_SESSION[$prod36] =  0;
    } elseif ($_SESSION[$prod36] > 1  && $_GET['delete_to_cart'] == 36) {
        $_SESSION[$prod36] =  $_SESSION[$prod36] - 1;
    }
    if (isset($_SESSION[$prod58]) && $_GET['delete_to_cart'] == 58 && $_SESSION[$prod58] <= 1) {
        $_SESSION[$prod58] =  0;
    } elseif ($_SESSION[$prod58] > 1  && $_GET['delete_to_cart'] == 58) {
        $_SESSION[$prod58] =  $_SESSION[$prod58] - 1;
    }
    if (isset($_SESSION[$prod32]) && $_GET['delete_to_cart'] == 32 && $_SESSION[$prod32] <= 1) {
        $_SESSION[$prod32] =  0;
    } elseif ($_SESSION[$prod32] > 1 && $_GET['delete_to_cart'] == 32) {
        $_SESSION[$prod32] =  $_SESSION[$prod32] - 1 ;
    }
    header('Refresh:2, index.php');
}

?>


<section class="cookies container-fluid">
  <div class="row">
    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
      <figure class="thumbnail text-center">
        <img src="assets/img/product-46.jpg" alt="cookies choclate chips" class="img-responsive">
        <figcaption class="caption">
          <h3>Pecan nuts</h3>
          <p>Cooked by Penny !</p>
            <form action="index.php" method="post">
              <div class="row">
                  <p>Quantity : <span><?php if(isset($_SESSION[$prod46])) echo
                          $_SESSION[$prod46] ?></span></p>
              </div><br>
              <a href="?add_to_cart=46" class="btn btn-primary" name="">
                <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>Add to cart
              </a>
              <a href="?delete_to_cart=46" class="btn btn-primary" name="">
                <span class=" glyphicon glyphicon-minus" aria-hidden="true"></span>Delete to cart
              </a>
            </form>
        </figcaption>
      </figure>
    </div>
    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
      <figure class="thumbnail text-center">
        <img src="assets/img/product-36.jpg" alt="cookies choclate chips" class="img-responsive">
        <figcaption class="caption">
          <h3>Chocolate chips</h3>
          <p>Cooked by Bernadette !</p>
            <div class="row">
                <p>Quantity : <span><?php if(isset($_SESSION[$prod36])) echo $_SESSION[$prod36] ?></span></p>
            </div><br>
          <a href="?add_to_cart=36" class="btn btn-primary" name="">
            <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Add to cart
          </a>
          <a href="?delete_to_cart=36" class="btn btn-primary" name="">
            <span class=" glyphicon glyphicon-minus" aria-hidden="true"></span>Delete to cart
          </a>
        </figcaption>
      </figure>
    </div>
    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
      <figure class="thumbnail text-center">
        <img src="assets/img/product-58.jpg" alt="cookies choclate chips" class="img-responsive">
        <figcaption class="caption">
          <h3>Chocolate cookie</h3>
          <p>Cooked by Bernadette !</p>
            <div class="row">
                <p>Quantity : <span><?php if(isset($_SESSION[$prod58])) echo $_SESSION[$prod58] ?></span></p>
            </div><br>
          <a href="?add_to_cart=58" class="btn btn-primary" name="">
            <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Add to cart
          </a>
          <a href="?delete_to_cart=58" class="btn btn-primary" name="">
            <span class=" glyphicon glyphicon-minus" aria-hidden="true"></span>Delete to cart
          </a>
        </figcaption>
      </figure>
    </div>
    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
      <figure class="thumbnail text-center">
        <img src="assets/img/product-32.jpg" alt="cookies choclate chips" class="img-responsive">
        <figcaption class="caption">
          <h3>M&M's&copy; cookies</h3>
          <p>Cooked by Penny !</p>
            <div class="row">
                <p>Quantity : <span><?php if(isset($_SESSION[$prod32])) echo $_SESSION[$prod32] ?></span></p>
            </div><br>
          <a href="?add_to_cart=32" class="btn btn-primary" name="">
            <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Add to cart
          </a>
          <a href="?delete_to_cart=32" class="btn btn-primary" name="">
            <span class=" glyphicon glyphicon-minus" aria-hidden="true"></span>Delete to cart
          </a>
        </figcaption>
      </figure>
    </div>
  </div>
</section>
<?php require 'inc/foot.php'; ?>
