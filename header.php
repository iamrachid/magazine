<?php 
   session_start();
   if(@$_POST['submit'] == "Ajouter au panier")
   {
      if(isset($_SESSION["shopping_cart"]))
      {
         $count = count($_SESSION["shopping_cart"]);
         $item_array = array( $_POST["name"] , $_POST["price"] , $_POST["image"]);
         $_SESSION["shopping_cart"][$count] = $item_array;
      }
      else
      {
         $item_array = array( $_POST["name"] , $_POST["price"] , $_POST["image"]);
         $_SESSION["shopping_cart"][0] = $item_array;
      }
      
   }
?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <title>R&I MAGAZINE</title>
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <!--enable mobile device-->
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <!--fontawesome css-->
   <link rel="stylesheet" href="css/font-awesome.min.css?v=1.1">
   <!--bootstrap css-->
   <link rel="stylesheet" href="css/bootstrap.min.css?v=1.1">
   <!--main css-->
   <link rel="stylesheet" href="css/style.css?v=1.1">
</head>

<body>
   <header>
      <!-- Static navbar -->
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
         <div class="container-fluid">
            <a class="navbar-brand" href="index.php">
               <img src="images/logo.png" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
               <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                     <a class="nav-link active" aria-current="page" href="#">Home</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="#">Informatique</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="#">Video</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="#">Divers</a>
                  </li>
               </ul>
               <form class="d-flex">
                  <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                  <button class="btn btn-search" type="submit">Search</button>
               </form>
               <span  type="button" class="icon-cart">
                 <i class="fa fa-shopping-cart" aria-hidden="true" data-bs-toggle="modal" data-bs-target="#cart"></i>
               </span>
            </div>
         </div>
      </nav>
   </header>

<!-- Modal -->
<div class="modal fade" id="cart" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Panier</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <?php
         if(isset($_SESSION["shopping_cart"]))  
         {  
            foreach($_SESSION["shopping_cart"] as $value)
            {
               echo "<span>$value[0]</span></br>";
            }
         }
         else
         {
            echo "Votre panier est vide";
         }
      ?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Continuer Vos achats</button>
        <button type="button" class="btn btn-primary">Proceder Au payement</button>
      </div>
    </div>
  </div>
</div>