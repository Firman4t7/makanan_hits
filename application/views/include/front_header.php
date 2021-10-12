<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <title>Home Page Makanan Hits</title>
  <!-- Favicon-->
  <link rel="icon" type="image/x-icon" href="<?= base_url('home_page/'); ?>dist/assets/favicon.ico" />
  <!-- Bootstrap icons-->
  <link href="<?= base_url('home_page/') ?>dist/css/cdn_jsdelivr.css" rel="stylesheet" />
  <!-- Core theme CSS (includes Bootstrap)-->
  <link href="<?php echo base_url('home_page/dist/css/styles.css')?>" rel="stylesheet" />
  <!-- font awesome -->
  <link href="<?php echo base_url('home_page/dist/css/fontawesome.css')?>" rel="stylesheet" />


</head>

<style>

  #myBtn {
    display: none;
    position: fixed;
    bottom: 20px;
    right: 30px;
    z-index: 99;
    font-size: 18px;
    border: none;
    outline: none;
    background-color: black;
    color: white;
    cursor: pointer;
    padding: 19px;
    border-radius: 100%;
  }

  #myBtn:hover {
    background-color: #555;
  }

</style>

<body>
  <!-- Navigation-->
  <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light">
    <div class="container px-4 px-lg-5">
      <img src="<?= base_url('home_page/')?>dist/img/icon-removebg.png" style="width: 50px;margin-right: 10px;">
      <a class="navbar-brand" href="#">Makanan Hits</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
          <li class="nav-item"><a class="nav-link active" aria-current="page" href="#">Home</a></li>
          <li class="nav-item"><a class="nav-link" href="#About">About</a></li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Catalog</a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="#!">All Products</a></li>
              <li><hr class="dropdown-divider" /></li>
              <li><a class="dropdown-item" href="#!">Popular Items</a></li>
              <li><a class="dropdown-item" href="#!">New Arrivals</a></li>
            </ul>                
          </li>
        </ul>
               <!--  <form class="d-flex">
                    <button class="btn btn-outline-dark" type="submit">
                        <i class="bi-cart-fill me-1"></i>
                        Cart
                        <span class="badge bg-dark text-white ms-1 rounded-pill">0</span>
                    </button>
                  </form> -->
                </div>
              </div>
            </nav>