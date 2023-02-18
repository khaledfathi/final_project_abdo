<?php
require '../init.php';
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <link rel="stylesheet" href="<?= url('assets/css/style.css') ?>">
  <link rel="stylesheet" href="<?= url('assets/css/all.min.css') ?> ">
  <link rel="stylesheet" href="<?= url('assets/css/normalize.css') ?>">
  <title>Document</title>

  <link rel="stylesheet" href="<?= url('assets/css/bootstrap.min.css') ?>">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


  <style>
    /* start item section */
    a {
      text-decoration: none;

    }

    .our-item-title {
      color: var(--green);
      font-size: 30px;
      margin-top: 15px;
    }

    .our-item-title h4 {
      color: rgb(8, 88, 28);
      margin-bottom: 25px;
      font-weight: bold;
      font-size: 25px;
      margin: 5px;
    }

    .main-items {
      display: flex;
      flex-wrap: wrap;
      justify-content: space-evenly;
      padding: 10px 0px;
      margin: 10px 0px 25px;
    }

    .main-items .card {
      box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
      transition: 0.3s;
      padding-bottom: 20px;


    }

    .main-items .card img {
      width: 100%;
      border-radius: 10px;
      height: 200px;



    }

    .main-items .card .product_header {
      font-size: 30px;
      margin-top: 15px;
      color: rgb(4, 87, 41);
      padding: 10px;

    }

    .main-items .card .product-location {
      font-size: 20px;
      color: #333333;
      position: relative;
      padding: 0 25px 0 0;
      padding: 10px;

    }

    .card:hover {
      box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2);
    }




    /* end item section */
  </style>


  <title>Document</title>
</head>

<body>


  <!----------------------------new Header Top-------------------- -->

  <div class="header-top">
    <div class="container">
      <div class="head">
        <div class="head-logo ">
          <a href="<./index.html"><i class="fa-solid fa-recycle"></i></a>
          <a href="./index.html">O</a>
        </div>
        <div class="head-login col-6 col-md-7 ">
          <div class="login row ">
            <a class="mb-1 p-2 p-md-3  col-md-3 text-center " href="<?= url('view/login.php') ?>">LogIn</a>
            <a class="mb-1 p-2 p-md-3  col-md-3 text-center" href="<?= url('view/account.php') ?>">SignUp</a>
            <a class="mb-1 p-2 p-md-3  col-md-3 text-center" href="<?= url('view/cart.php') ?>"><i
                class="fa-solid fa-cart-shopping"></i></a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- end of header -->

  <!-- new navbar -->

  <nav class="navbar navbar-expand-lg nav_bar ">
    <div class="container-fluid">
      <button class="navbar-toggler navbar-light bg-light  " type="button" data-bs-toggle="collapse"
        data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
        aria-label="Toggle navigation">
        <span class="navbar-toggler-icon   "></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
          <li class="nav-item p-lg-2">
            <a class="nav-link" href="<?= url('view/home.php') ?>">HOME</a>
          </li>
          <li class="nav-item p-lg-2">
            <a class="nav-link" href="<?= url('view/blog.php') ?>">BLOG</a>
          </li>
          <li class="nav-item p-lg-2">
            <a class="nav-link" href="<?= url('view/items.php') ?>">ITEMS</a>
          </li>
          <li class="nav-item p-lg-2">
            <a class="nav-link" href="<?= url('view/products.php') ?>">PRODUCTS</a>
          </li>
          <li class="nav-item p-lg-2">
            <a class="nav-link" href="<?= url('view/aboutus.php') ?>">ABOUT US</a>
          </li>
          <li class="nav-item p-lg-2">
            <a class="nav-link" href="<?= url('view/contact.php') ?>">CONTACT US</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- --------------------------end of navbar ---------------->




  <!------------------------------ item-page ---------------------------->

  <div id="item-page">

    <div class="container">

      <div class="our-item-title">

        <h4>Our Items</h4>
      </div>

      <div class="main-items row">

        <div class="card mb-3 col-md-5 col-lg-3 mx-1">
          <img src="image/productdetailsimg.jpg">
          <div class="product_header">wood Recycleing</div>
          <div class="product-location"> Egypt</div>
        </div>

        <div class="card mb-3 col-md-5 col-lg-3 mx-1">
          <img src="image/productdetailsimg.jpg">
          <div class="product_header">Paper Recycleing</div>
          <div class="product-location"> Egypt</div>
        </div>

        <div class="card mb-3 col-md-5 col-lg-3 mx-1">
          <img src="image/productdetailsimg.jpg">
          <div class="product_header">Electroic Recycleing</div>
          <div class="product-location"> Egypt</div>
        </div>

        <div class="card mb-3 col-md-5 col-lg-3 mx-1">
          <img src="image/productdetailsimg.jpg">
          <div class="product_header">car tire Recycleing</div>
          <div class="product-location"> Egypt</div>
        </div>

        <div class="card mb-3 col-md-5 col-lg-3 mx-1">
          <img src="image/productdetailsimg.jpg">
          <div class="product_header">table</div>
          <div class="product-location"> Egypt</div>
        </div>

        <div class="card mb-3 col-md-5 col-lg-3 mx-1">
          <img src="image/productdetailsimg.jpg">
          <div class="product_header">Palm trees</div>
          <div class="product-location"> Egypt</div>
        </div>

        <div class="card mb-3 col-md-5 col-lg-3 mx-1">
          <img src="image/productdetailsimg.jpg">
          <div class="product_header">Palm trees</div>
          <div class="product-location"> Egypt</div>
        </div>

        <div class="card mb-3 col-md-5 col-lg-3 mx-1">
          <img src="image/productdetailsimg.jpg">
          <div class="product_header">wood Recycleing</div>
          <div class="product-location"> Egypt</div>
        </div>

        <div class="card mb-3 col-md-5 col-lg-3 mx-1">
          <img src="image/productdetailsimg.jpg">
          <div class="product_header">wood Recycleing</div>
          <div class="product-location"> Egypt</div>

        </div>
        <div class="card mb-3 col-md-5 col-lg-3 mx-1">
          <img src="image/productdetailsimg.jpg">
          <div class="product_header">wood Recycleing</div>
          <div class="product-location"> Egypt</div>

        </div>
      </div>
    </div>
  </div>



  <!----------------------------- Footer ------------------------------->
  <!-- Footer -->
  <div class="footer">
    <div class="container">
      <div class="row justify-content-between">
        <div class="Recycling-info   col-lg-4">
          <h2 class="capital">Recycling</h2>
          <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.
            Sapient maiores magnam dolores temporibus quas quae? Esse harum error eligendi
          </p>
          <div class="footer-icon">
            <a href="#"><i class="fab fa-facebook-f icon pd-10 white-color-b"></i></a>
            <a href="#"><i class="fab fa-twitter icon pd-10 white-color-b"></i></a>
            <a href="#"><i class="fab fa-linkedin-in icon pd-10 white-color-b"></i></a>
            <a href="#"><i class="fab fa-behance icon pd-10 white-color-b"></i></a>
          </div>
        </div>
        <div class="useful-links col-md-5 col-lg-4 ">
          <h2 class="">useful links</h2>
          <ul class="">
            <li><a href="#"> Lorem ipsum dolor sit</a></li>
            <li><a href="#"> amet consectetur elit</a>
            </li>
            <li><a href="#"> Explicabo culpa doloribus</a></li>
            <li><a href="#"> iusto excepturi reiciendis</a>
            </li>
            <li><a href="#"> perspiciatis ab aliquid</a>
            </li>
          </ul>
        </div>
        <div class="additional col-md-5   col-lg-4   ">
          <h2 class="capital">additional pages</h2>
          <ul class="">
            <li><a href="<?= url("view/home.php") ?>">Home</a></li>
            <li><a href="<?= url("view/blog.php") ?>">Blog</a>
            </li>
            <li><a href="<?= url("view/items.php") ?>">Items</a></li>
            <li><a href="<?= url("view/aboutus.php") ?>">About Us</a>
            </li>
            <li><a href="<?= url("view/contact.php") ?>">contact Us</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div class="copyright">
      <p class=""> all copyright © 2023 Recycling.</p>
    </div>
  </div>


</body>

<script src="<?= url("assets/js/items.js") ?>"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
  integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
  </script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
  integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
  </script>

</html>