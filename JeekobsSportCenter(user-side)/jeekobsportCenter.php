
<?php
session_start();
include("connect.php");
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Anta&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Anta&family=Space+Grotesk:wght@300..700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/jeekobs.css">
    <script src="https://kit.fontawesome.com/c26cd2166c.js"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <title>JEEKOBS SPORTS</title>


  </head>
  <style>
    .material-symbols-outlined {
      font-variation-settings:
      'FILL' 0,
      'wght' 400,
      'GRAD' 0,
      'opsz' 24
      
    }
    .material-symbols-outlined{
    font-size: 2.1rem;
    cursor: pointer;
    border: none;
    background: transparent;
    }
    .material-symbols-outlined:hover{
      color:brown;
    }
   
    
    </style>
  
    
  <body id="blur">
   
   <nav class="navbar navbar-expand-lg">
      
        <div class="container">
          <a class="navbar-brand" href="#">Jeekobs <img src="logo3.png" ></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarScroll">
            <ul class="navbar-nav m-auto my-2 my-lg-0">
              <li class="nav-item">
                <a class="nav-link active" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="add_cart.html">Store</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Trending</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">About us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Contact us</a>
                </li>
                <li class="nav-item">
                 <button  class="material-symbols-outlined" onclick="shopNow()">logout</button> 
                
                </li>
          
           
            </ul>
            <form class="d-flex" role="search">
              <input class=" px-2 search" type="search" placeholder="Search" aria-label="Search">
              <button class="btn-0" type="submit">Search</button>
            
            
              
            </form>
          </div>
        </div>
      </nav>
     
<!--- First section-->
      <section class="main" ">
        <div class="container py-5" >
            <div class="row py-4">
                <div class="col-lg-7 pt-5 "> <h1>
                        Ready set go!
                        
                </h1>
                <span class="pt-5">Don't stop until you reached the goal</span><br>
                <button class="btn mt-3"  onclick="goToShop()"> Shop now</button>
            </div>
            </div>
        </div>
      </section>
   
<!--- Second section-->
<section class="new" >

<div class="container py-5" >
  <div class="row pt-5">
    <div class="col-lg-7 m-auto">
      <div class="row text-center">
        <div class="col-lg-4">
          <img src="img/wear.png" class="img-fluid">
          <h6>WEAR</h6>

        </div>

        <div class="col-lg-4">
          <img src="img/access2.webp" class="img-fluid">
          <h6>ACCESSORIES</h6>

          
        </div>
        <div class="col-lg-4">
          <img src="img/shoess.webp" class="img-fluid">
          <h6 >SHOES</h6>
          
        </div>
      </div>
    </div>
  </div>
</div>



</section>

<section class="product" >
  <div class="container py-5">
    <div class="row py-5 ">
      <div class="col-lg-5 m-auto text-center">
        <h1>Look what's Trending</h1>
        <h6 style="color: crimson;">Push Your Limits with Our Sporting Goods</h6>
      </div>
    </div>
    <div class="row ">
      <div class="col-lg-3 text-center">
        <div class="card border-0 bg-light mb-2">
          <div class="card-body">
            <img src="img/jerseyadidas.jpeg" class="img-fluid">
          </div>
        </div>
        <h6>Adidas authenthic jersey</h6>
        <span>$999</span>
      </div>
      <div class="col-lg-3 text-center">
        <div class="card border-0 bg-light mb-4">
          <div class="card-body">
            <img src="img/shoe3.jpeg" class="img-fluid">
          </div>
        </div>
        <h6>Adidas authenthic jersey</h6>
        <span>$999</span>
      </div>
      <div class="col-lg-3 text-center">
        <div class="card border-0 bg-light mb-3">
          <div class="card-body">
            <img src="mikasaball.jpeg" class="img-fluid">
          </div>
        </div>
        <h6>Adidas authenthic jersey</h6>
        <span>$999</span>
      </div>
      <div class="col-lg-3 text-center">
        <div class="card border-0 bg-light mb-2">
          <div class="card-body">
            <img src="img/nbaball.jpeg" class="img-fluid">
          </div>
        </div>
        <h6>Adidas authenthic jersey</h6>
        <span>$999</span>
      </div>
    </div>
    <div class="col-lg-6 text-center m-auto">
      <button class="btn1" onclick="goToShop()"> view for more</button>
    </div>
    </div>
    </div>
    
    
    </div>
    
  </div>
</section>

<section class="about">
  <div class="container py-5" >
    <div class="row py-5">
      <div class="col-lg-8 m-auto text-center mb-3" >
        <h1>Welcome to Jeekobs Sport Center</h1>
        <h2 style="color: crimson;">Our team</h2>

      </div>
    </div>
    <div class="row1 ">
      <div class="col-lg-3 text-center">
        <div class="card border-0 bg-light mb-2 ">
          <div class="card-body">
            <img src="img/harold.jpg" class="img1">
          </div>
        </div>
       
        <h5>Johny Harold</h5>
        <h2>Muse</h2>
        <p>Rizz master </p>
        </div>
        <div class="col-lg-3 text-center">
          <div class="card border-0 bg-light mb-2">
            <div class="card-body">
              <img src="img/ken.jpg" class="img1">
            </div>
          </div>
          <h5>Ken Loloyd</h5>
          <h2>Backend Developer</h2>
          <p> Used to be an npc now a programmer </p>
          
        </div>
        <div class="col-lg-3 text-center">
          <div class="card border-0 bg-light mb-2">
            <div class="card-body">
              <img src="img/jeekobsss.jpg" class="img1">
            </div>
          </div>
          <h5>Jacobs awad</h5>
          <h2>Frontend Developer</h2>
          <p>Good guy a very kind person always care for others hes the angel in the team. </p>
        </div>
      </div>
   
  </div>
</section>


<section class="shop">
  <div class="container" >
    <div class="row py-5">
      <div class="col-log-8 m-auto text-center">
        <h1>Explore Our Store</h1>
        <h6>Add your cart in now!</h6>
      </div>
    </div>
    <div class="row ">
      <div class="col-lg-3 text-center">
        <div class="card border-0 bg-light mb-2">
          <div class="card-body">
            <img src="img/jerseyadidas.jpeg" class="img-fluid">
          </div>
        </div>
        <h6>Adidas authenthic jersey</h6>
        <span>$999</span>
      </div>
      <div class="col-lg-3 text-center">
        <div class="card border-0 bg-light mb-4">
          <div class="card-body">
            <img src="img/shoe3.jpeg" class="img-fluid">
          </div>
        </div>
        <h6>Adidas authenthic jersey</h6>
        <span>$999</span>
      </div>
      <div class="col-lg-3 text-center">
        <div class="card border-0 bg-light mb-3">
          <div class="card-body">
            <img src="img/mikasaball.jpeg" class="img-fluid">
          </div>
        </div>
        <h6>Adidas authenthic jersey</h6>
        <span>$999</span>
      </div>
      <div class="col-lg-3 text-center">
        <div class="card border-0 bg-light mb-2">
          <div class="card-body">
            <img src="img/nbaball.jpeg" class="img-fluid">
          </div>
        </div>
        <h6>Adidas authenthic jersey</h6>
        <span>$999</span>
      </div>
    </div>
    <div class="row ">
      <div class="col-lg-3 text-center">
        <div class="card border-0 bg-light mb-2">
          <div class="card-body">
            <img src="img/jerseyadidas.jpeg" class="img-fluid">
          </div>
        </div>
        <h6>Adidas authenthic jersey</h6>
        <span>$999</span>
      </div>
      <div class="col-lg-3 text-center">
        <div class="card border-0 bg-light mb-4">
          <div class="card-body">
            <img src="img/shoe3.jpeg" class="img-fluid">
          </div>
        </div>
        <h6>Adidas authenthic jersey</h6>
        <span>$999</span>
      </div>
      <div class="col-lg-3 text-center">
        <div class="card border-0 bg-light mb-3">
          <div class="card-body">
            <img src="img/mikasaball.jpeg" class="img-fluid">
          </div>
        </div>
        <h6>Adidas authenthic jersey</h6>
        <span>$999</span>
      </div>
      <div class="col-lg-3 text-center">
        <div class="card border-0 bg-light mb-2">
          <div class="card-body">
            <img src="img/nbaball.jpeg" class="img-fluid">
          </div>
        </div>
        <h6>Adidas authenthic jersey</h6>
        <span>$999</span>
      </div>
    </div>
  </div>
</section>

<section class="apple py-5 mt-3">
  <div class="container text-white py-5" >
    <div class="row">
      <div class="col-lg-6">
        <h1 class="font-weight-bold py-3">Push Your Limits With Jeekobs Help</h1>
        <h6>Start grinding now</h6>
        <button class="btn1 mt-3">View store</button>
      </div>
    </div>
  </div>
</section>



<section class="contact py-5"  >
  <div class="container py-5">
    <div class="row">
      <div class="col-lg-5 m-auto text-center">
        <h1>Contact Us</h1>
        <h6>Be In Touch With Us </h6>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-9 m-auto">
        <div class="row py-5">
          <div class="col-lg-4">
            <h6>LOCATION</h6>
            <p>Jacobs street at Mars</p>
        
          
            <h6>PHONE NO.</h6>
            <p>09664055902</p>
        
            <h6>EMAIL</h6>
            <p>Jeekobs@gmail.com</p>
          </div>
          <div class="col-lg-7">
            <div class="row">
              <div class="col-lg-6">
                <input type="text" class="form-control bg-light" placeholder="First Name" required>

            </div>
            <div class="col-lg-6">
              <input type="text" class="form-control bg-light" placeholder="Last Name" required>

          </div>
          </div>
           <div class="col-lg-12 py-3">
            <textarea name="" class="form-control bg-light" placeholder="Give us a feeback" cols="10" rows="5" required></textarea>
            <button class="btn1" onclick=" toggle()">submit</button>
            <div class="popup" id="pop"> <h2>Your record has been submitted!</h2>
              
            <button  class="btnPop" onclick="toggle()">OK</button></div>
          

           </div>
      </div>
    </div>
  </div>
</section>

<section class="news py-5">
  <div class="container py-5">
    <div class="row">
      <div class="col-lg-9 m-auto text-center">
        <h1> JOIN US</h1>
        <input type="text" class="px-3" placeholder="Enter Your Email">
        <button class="btn2">Submit</button>
      </div>
    </div>
    <div class="row">
     <div class="col-lg-11 ">
      <div class="row">
        <div class="col-lg-3 py-3">
          <h5 class="pb-3">CUSTOMER CARE</h5>
          <p>Regular</p>
          <p> On Time</p>
          <p> Always Care</p>
        </div>
        <div class="col-lg-3 py-3">
          <h5 class="pb-3">FAQ's</h5>
          <p>No charges</p>
          <p> On Shopping & delivery</p>
          <p> Always Care</p>
        </div>
        <div class="col-lg-3 py-3">
          <h5 class="pb-3">OUR COMPANT</h5>
          <p>About</p>
          <p> Brand new</p>
          <p> Product</p>
        </div>
        <div class="col-lg-3 py-3">
          <h5 class="pb-3">SOCMED</h5>
          <span> <i class="fab fa-facebook"></i></span>
          <span> <i class="fab fa-instagram"></i></span>
          <span> <i class="fab fa-twitter"></i></span>
          <span> <i class="fab fa-google-plus"></i></span>
         
      </div>
     
     </div>

    </div>
  </div>
  <hr>
  <p class="text-center">Copyright © 2010 by Jacobs James Layam
    All rights reserved. </p>


 
</section>











:)


<script>   

function shopNow (){
  window.open("loginPage.php")
  window.close("jeekobsportCenter.php") ;
 
  

}
function goToShop(){
  window.open("add_cart.html")
  window.close("jeekobsportCenter.php");
}
/*function toggle(){
  var blur = getElementById("blur");
  blur.classList.toggle("active")
}
let popup = document.getElementById("pop")
  function openPop(){
    popup.classList.add("open-popup")
   
  }
  function closePop(){
    popup.classList.remove("open-popup")
   
  }
  */
  function toggle(){
  let blur = document.getElementById("blur");
  blur.classList.toggle("active")
  let popUp = document.getElementById("pop");
  popUp.classList.toggle("active")
}
window.addEventListener("scroll", function(){
  var navbar = document.querySelector("navbar")
  navbar.classList.toggle("sticky",window.scrollY > 0);
})
 
</script>

<?php
if(isset($_SESSION['mail'])){
  $email= $_SESSION['mail'];
  $query=mysqli_query($conn,"SELECT user.*FROM `users` WHERE users.email='$email'");
  while($row=mysqli_fetch_array($query)){
  echo $row['firstname']. ' '.$row['lastname'];
  
  }
}
?>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>




         <!--- imgae slider-->




          <!--- jumbotron-->



           <!--- welcom section-->



                <!--- three collum section-->





                 <!---collum section-->


             <!--- fixed backgorund-->



              <!---font section-->



            

   