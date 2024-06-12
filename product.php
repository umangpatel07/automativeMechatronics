<?php
session_start();
$conn=mysqli_connect("localhost","root","","automative_mechatronics");

// if(isset($_POST))

$select_product="SELECT * FROM product";
$selectProduct=mysqli_query($conn,$select_product);

?>

<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Automative Mechatronics  </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- CSS here -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/slicknav.css">
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/gijgo.css">
    <link rel="stylesheet" href="css/animate.min.css">
    <link rel="stylesheet" href="css/animated-headline.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/fontawesome-all.min.css">
    <link rel="stylesheet" href="css/themify-icons.css">
    <link rel="stylesheet" href="css/slick.css">
    <link rel="stylesheet" href="css/nice-select.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <style type="text/css">
        :root {
  --gradient: linear-gradient(to left top, #DD2476 10%, #FF512F 90%) !important;
}



.card {
  background: #222;
  border: 1px solid #dd2476;
  color: rgba(250, 250, 250, 0.8);
  margin-bottom: 2rem;
}

.btn {
  border: 5px solid   #00008B;
  border-image-slice: 1;
  background: var(--gradient) !important;
  -webkit-background-clip: text !important;
  -webkit-text-fill-color: transparent !important;
  border-image-source:  var(--gradient) !important; 
  text-decoration: none;
  transition: all .4s ease;
}

.btn:hover, .btn:focus {
      background: var(--gradient) !important;
  
  -webkit-text-fill-color: #fff !important;
  border: 5px solid #fff !important; 
  box-shadow: #222 1px 0 10px;
  text-decoration: underline;
}
.extra:hover{

   transform: translateY(-20px);
   transition: 0.3s;
 }
 .wrapper {
  height: 420px;
  width: 654px;
  margin: 50px auto;
  border-radius: 7px 7px 7px 7px;
  /* VIA CSS MATIC https://goo.gl/cIbnS */
  -webkit-box-shadow: 0px 14px 32px 0px rgba(0, 0, 0, 0.15);
  -moz-box-shadow: 0px 14px 32px 0px rgba(0, 0, 0, 0.15);
  box-shadow: 0px 14px 32px 0px rgba(0, 0, 0, 0.15);
}

.product-img {
  float: left;
  height: 420px;
  width: 327px;
}

.product-img img {
  border-radius: 7px 0 0 7px;
}

.product-info {
  float: left;
  height: 420px;
  width: 327px;
  border-radius: 0 7px 10px 7px;
  background-color: #ffffff;
}

.product-text {
  height: 300px;
  width: 327px;
}

.product-text h1 {
  margin: 0 0 0 38px;
  padding-top: 52px;
  font-size: 34px;
  color: #474747;
}

.product-text h1,
.product-price-btn p {
  font-family: 'Bentham', serif;
}

.product-text h2 {
  margin: 0 0 47px 38px;
  font-size: 13px;
  font-family: 'Raleway', sans-serif;
  font-weight: 400;
  text-transform: uppercase;
  color: #d2d2d2;
  letter-spacing: 0.2em;
}

.product-text p {
  height: 125px;
  margin: 0 0 0 38px;
  font-family: 'Playfair Display', serif;
  color: #8d8d8d;
  line-height: 1.7em;
  font-size: 15px;
  font-weight: lighter;
  overflow: hidden;
}

.product-price-btn {
  height: 103px;
  width: 327px;
  margin-top: 17px;
  position: relative;
}

.product-price-btn p {
  display: inline-block;
  position: absolute;
  top: -13px;
  height: 50px;
  font-family: 'Trocchi', serif;
  margin: 0 0 0 38px;
  font-size: 28px;
  font-weight: lighter;
  color: #474747;
}

span {
  display: inline-block;
  height: 50px;
  font-family: 'Suranna', serif;
  font-size: 34px;
}

.product-price-btn button {
  float: right;
  display: inline-block;
  height: 50px;
  width: 176px;
  margin: 0 40px 0 16px;
  box-sizing: border-box;
  border: transparent;
  border-radius: 60px;
  font-family: 'Raleway', sans-serif;
  font-size: 14px;
  font-weight: 500;
  text-transform: uppercase;
  letter-spacing: 0.2em;
  color: #ffffff;
  background-color: #9cebd5;
  cursor: pointer;
  outline: none;
}

.product-price-btn button:hover {
  background-color: #79b0a1;
}

.card p
{
  color: white;
  margin: 10px 50px;
  font-size: 20px;
}

.box{
  width:70px;
  margin-left:44px;
  height: 30px;
  font-size:20px;
  margin-bottom: 50px;
}
    </style>
</head>
<body class="black-bg">
    <header>
        <!-- Header Start -->
        <div class="header-area header-transparent">
            <div class="main-header header-sticky">
                <div class="container-fluid">
                    <div class="menu-wrapper d-flex align-items-center justify-content-between">
                        <!-- Logo -->
                        <div class="logo1">
                            <a href="index.php"><img src="img/Screenshot_20240125_111959-modified (1).png" class="logo1" alt=""></a>
                        </div>
                        <!-- Main-menu -->
                        <div class="main-menu f-right d-none d-lg-block">
                            <nav>
                               
                                <ul id="navigation">
                                  
                                    <li><a href="index.php">Home</a></li>
                                    <li><a href="product.php">products</a></li>
                                    <li><a href="order.php">My_order</a></li>
                                    <li><a href="contact.php">Contact</a></li>
                                    <li><a href="aboutus.php">About us</a></li>

                                </ul>
                            </nav>
                        </div>          
                        <!-- Header-btn -->
                        <div class="header-btns d-none d-lg-block f-right">
                        <a href="add.php"><img src="img/shopping-cart.png" class="logo1" style="margin-right:20px; height:50px;" alt=""></a>
<?php
if(isset($_SESSION['email'])) {
    ?>
                          <a href="logout.php" class="btn">Logout</a>
                       </div>

                       <?php 
}else{
                       ?>
                       
                       <a href="log.php" class="btn">log in</a>
                       <?php
                       
}?>
                       <!-- Mobile Menu -->
                       <div class="col-12">
                        <div class="mobile_menu d-block d-lg-none"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->
</header>
<main>
    <!--? slider Area Start-->
    <!--? Hero Start -->
    <div class="slider-area2">
        <div class="slider-height2 d-flex align-items-center">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="hero-cap hero-cap2 pt-70">
                            <h2>products</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Hero End --><!-- slider Area End-->
    <!--? Our provided Start -->
    <div class="gallery-area section-padding30 ">
        <div class="container-fluid ">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section-tittle text-center mb-55 wow fadeInUp" data-wow-duration="2s" data-wow-delay=".1s">
                        <h2>CNC tools</h2>
                    </div>
                </div>
            </div>
     


<div class="container-fluid">
<div class="row mt-5">
<div class="row">
  <?php
  if(mysqli_num_rows($selectProduct))
  {
    while($sel_product=mysqli_fetch_assoc($selectProduct))
    {
  ?>
  
  <div class="col-sm-10 col-md-6 col-lg-3 col">
    <div class="card bg-dark extra">
      <div class="card-body h-100">
      <form method="post" action="add.php?pid=<?php echo $sel_product['pid']; ?>">
         <!-- <img src="image/" class="d-block w-100" class="d-block w-100"  style="height: 311px;" > -->
         <?php echo "<img src='admin_panel/image/".$sel_product['image']."'class='img-fluid' style='height:311px; width:400px;'>";?>
       <p><?php echo $sel_product['name']; ?></p>
       <p><?php echo $sel_product['price']; ?> rs</p>
       <p>Quantitys: </p>
       <input type="number" name="qty" value="1" class="box form-control">
       <input type="hidden" name="name" value="<?php echo $sel_product['name'] ?>">
       <input type="hidden" name="image" value="<?php echo $sel_product['image'] ?>">
       <input type="hidden" name="price" value="<?php echo $sel_product['price'] ?>">
         <center> 
          <input type="submit" name="addtocart" class="btn btn-primary mt-5 w-75" value="Add To Cart">
         </center>
         <center><a href="shippingform.php?buyid=<?php echo $sel_product['pid']; ?>" class="btn btn-primary mt-5 w-75" >Buy</a></center>
         </form>
      </div> 
    </div>
  </div>
    
  <?php
    }
  }
  ?>
  </div>
  </div>
  </div>
    <!--  End -->
    
<!--? Footer Start-->
<footer>
     <div class="footer-area lightgrey-bg">
        <div class="container">
            <div class="row"> 
                <!-- footer-last -->
              <div class="col-lg-4 col-md-4 col-sm-12 col-12">
                <div class="flex-head">
                    <h2>Quick links</h2>
                </div>
                <div class="flex-link">
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li><a href="product.php">Products</a></li>
                        <li><a href="contact.php">Contact</a></li>
                        <li><a href="aboutus.php">About us</a></li>
                        <li><a href="add.php">Add to Cart</a></li>
                        <li><a href="order.php">MY Order</a></li>

                    </ul>
                </div>
              </div>
              <div class="col-lg-4 col-md-4 col-sm-12 col-12">
                <div class="flex-head">
                    <h2>Contact Us</h2>
                </div>
                <div class="flex-link">
                    <ul>
                        <li><a href="#"><i class="fas fa-phone"></i> +91 9924178481</a></li>
                        <li><a href="#"><i class="fas fa-phone"></i> +91 8401492895</a></li>
                        <br>
                        <li><a href="#"><i class="fa-solid fa-address-book"></i> Udhoyog nagr 80 foot rod <br>Surendranagar,363001</a></li>
                    </ul>
                </div>
              </div>
              <div class="col-lg-4 col-md-4 col-sm-12 col-12">
                <div class="flex-head">
                    <h2>info</h2>
                </div>
                <div class="flex-link">
                    <ul>
                        <li><a href="#"><i class="fa-solid fa-clock"></i> 6:00am - 10:00pm</a></li>
                        <li><a href="#"><i class="fas fa-envelope"></i> Shivampatel00@gmail.com</a></li>
                         <li><a href="#"><i class="fas fa-envelope"></i> Umangpatel99.com</a></li>
                        <li><a href="feedback.php" target="_blank"><i class="fas fa-star"></i>Give feedback</a></li>
                    </ul>
                </div>
              </div>
            </div>
        
            <div class="text-center"><i class="fas fa-ellipsis-h"></i></div>
            
            <div class="row text-center">
              <div class="col-md-4 box">
                <span class="copyright quick-links">Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | <a href="https://www.Silver shol club.com" target="_blank">Sumit Gupta</a>
                </span>
              </div>
              <div class="col-md-4 box">
                <ul class="list-inline social-buttons">
                  <li class="list-inline-item">
                    <a href="">
                    <i class="fab fa-youtube"></i>
                  </a>
                  </li>
                  <li class="list-inline-item">
                    <a href="">
                    <i class="fab fa-facebook-f"></i>
                  </a>
                  </li>
                  <li class="list-inline-item">
                    <a href="">
                    <i class="fab fa-instagram"></i>
                  </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
    
    </div>
</footer>
<!-- Footer End-->

<!-- JS here -->

<script src="./js/modernizr-3.5.0.min.js"></script>
<!-- Jquery, Popper, Bootstrap -->
<script src="./js/jquery-1.12.4.min.js"></script>
<script src="./js/popper.min.js"></script>
<script src="./js/bootstrap.min.js"></script>
<!-- Jquery Mobile Menu -->
<script src="./js/jquery.slicknav.min.js"></script>

<!-- Jquery Slick , Owl-Carousel Plugins -->
<script src="./js/owl.carousel.min.js"></script>
<script src="./js/slick.min.js"></script>
<!-- One Page, Animated-HeadLin -->
<script src="./js/wow.min.js"></script>
<script src="./js/animated.headline.js"></script>
<script src="./js/jquery.magnific-popup.js"></script>

<!-- Date Picker -->
<script src="./js/gijgo.min.js"></script>
<!-- Nice-select, sticky -->
<script src="./js/jquery.nice-select.min.js"></script>
<script src="./js/jquery.sticky.js"></script>

<!-- counter , waypoint,Hover Direction -->
<script src="./js/jquery.counterup.min.js"></script>
<script src="./js/waypoints.min.js"></script>
<script src="./js/jquery.countdown.min.js"></script>
<script src="./js/hover-direction-snake.min.js"></script>

<!-- contact js -->
<script src="./js/contact.js"></script>
<script src="./js/jquery.form.js"></script>
<script src="./js/jquery.validate.min.js"></script>
<script src="./js/mail-script.js"></script>
<script src="./js/jquery.ajaxchimp.min.js"></script>

<!-- Jquery Plugins, main Jquery -->    
<script src="./js/plugins.js"></script>
<script src="./js/main.js"></script>

</body>
</html>