<?php
session_start();
include("connect.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>add to cart</title>
  <link rel="stylesheet" href="css/addCart.css">
  <link rel="stylesheet" href="https://fontawesome.com/icons/cart-arrow-down?f=classic&s=solid">
  <script src="https://kit.fontawesome.com/92d70a2fd8.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300..700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  
</head>
<style>
  .material-symbols-outlined {
    font-variation-settings:
      'FILL' 0,
      'wght' 400,
      'GRAD' 0,
      'opsz' 24
  }

  .material-symbols-outlined {
    font-size: 2.1rem;
    cursor: pointer;
    border: none;
    background: transparent;
  }

  .material-symbols-outlined:hover {
    color: brown;
  }
</style>

<body>
  <style>
    .material-symbols-outlined {
      font-variation-settings:
        'FILL' 0,
        'wght' 400,
        'GRAD' 0,
        'opsz' 24
    }

    .material-symbols-outlined {
      font-size: 1.5rem;
      cursor: pointer;
      border: none;
      background: transparent;
      margin-left: 6px;
    }

    .material-symbols-outlined:hover {
      color: brown;
    }
  </style>

   <nav class="navbar navbar-expand-lg ">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Navbar</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <a class="navbar-brand" href="#">Jeekobs <img class="pic" src="logo3.png"></a>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Store</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Categories
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="#">Shoes</a></li>
              <li><a class="dropdown-item" href="#">WEAR</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="#">ACCESSORIES</a></li>
            </ul>
          </li>
         
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              <i class="fa-regular fa-user"></i>
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="#">Profile</a></li>
              <li><a class="dropdown-item" href="#">Setiings</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="#">Logout</a><button class="material-symbols-outlined" id="log" onclick="shopNow()">logout</button> </li>
            </ul>
          </li>

        </ul>
        <form class="d-flex">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>
 


<body>



</body>
</html>

 
  <header>
    <h2 id="product-list">LIST</h2>
    <div class="icon-cart"><svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 4h1.5L9 16m0 0h8m-8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm-8.5-3h9.25L19 7h-1M8 7h-.688M13 5v4m-2-2h4" />
      </svg>

      <span>0</span>


  </header>





  </div>

  </div>
  <section class="main">




    <div class="listProduct">

      <div class="item">
        <img src="img/shoe1-removebg-preview.png" alt="">
        <h2>Name of product</h2>
        <div class="price">$1.00</div>
        <button class="addCart">
          add to cart
        </button>
      </div>
    </div>
    </div>

  </section>
  <div class="cartTab">
    <h1>Your Cart</h1>
    <div class="listCart">
      <div class="item">
        <div class="image">
          <img src="img/shoe1-removebg-preview.png" alt="">
        </div>
        <div class="name">NAME</div>
        <div class="totalPrice">$200</div>
        <div class="quantity">
          <span class="minus">
            -</span>
          <span>1</span>
          <span class="plus">+</span>
          <div class="foot">
            <div class="totalAmount">Total: $0.00</div>
            
          </div>
        </div>
      </div>

    </div>
    <div class="btn">
      <button class="close">CLOSE</button>
      <button class="checkOut">CHECK OUT</button>
      <div class="popup">
        <div class="popup-content">
            <span class="close-popup">&times;</span>
            <p class="popup-message"> Orders are added!</p>
        </div>
    </div>
    </div>
  </div>
</div>
 
  <script> function shopNow (){
    window.open("loginPage.php")
    window.close("add_cart.php") ;
   
    
  
  }</script>
  <script src="js/addCart.js">
  </script>

</body>

</html>