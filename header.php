<?php 
   session_start();
   if(@$_POST['submit'] == "Ajouter au panier")
   {
      if(isset($_SESSION["shopping_cart"]))
      {
         if(isset($_SESSION["shopping_cart"][$_POST["name"]]))
         {
            $_SESSION["shopping_cart"][$_POST["name"]]["quantite"]+=$_POST["quantite"];
         }
         else
         {
            $item_array = array("quantite"=>$_POST["quantite"], "prix"=>$_POST["price"] ,"image"=>$_POST["image"]);
            $_SESSION["shopping_cart"]+=array("$_POST[name]" =>$item_array);
         }
      }
      else
      {
         $item_array = array("quantite"=>$_POST["quantite"], "prix"=>$_POST["price"] ,"image"=>$_POST["image"]);
         $_SESSION["shopping_cart"]=array("$_POST[name]" =>$item_array);
      }
      
   }

?>

<!DOCTYPE html>
<html lang="en" >

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
   <link rel="stylesheet" href="css/style.css?v=1.3">
   <!--my custom css-->
   <script src="js/functions.js"></script>
</head>

<body <?php if(@$_POST['submit']=="Ajouter au panier"){ echo "onload=\"showCart()\"";} ?>>
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
                     <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="informatique.php">Informatique</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="video.php">Video</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="divers.php">Divers</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="photo.php">Photos</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="tous.php">Tous les produits</a>
                  </li>
               </ul>
               <span type="button" class="icon-cart">
                  <i  id="but_chart" class="fa fa-shopping-cart" aria-hidden="true" data-bs-toggle="modal" data-bs-target="#cart"></i>
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
                        echo "<table class=\"table table-striped\">";
                        echo "   <thead>";
                        echo "      <tr>";
                        echo "         <th scope=\"col\">Image</th>";
                        echo "         <th scope=\"col\">Article</th>";
                        echo "         <th scope=\"col\">Quantite</th>";
                        echo "         <th scope=\"col\">Prix unitaire</th>";
                        echo "      <tr>";
                        echo "   </thead>";
                        $sum=0;
                        echo " <form action=\"payment.php\" method=\"POST\" >";

                        foreach($_SESSION["shopping_cart"] as $key=>$value)
                        {
                           echo "<tbody class=\"scroll\">";
                           echo "   <tr>";
                           echo "      <th scope=\"row\">";
                           echo "         <img src=\"$value[image]\" alt=\"\" height=\"60px\" width=\"60px\" >";
                           echo "      </th>";
                           echo "      <td>$key</td>";
                           echo "      <td><input class=\"w-50\" type=\"number\" name=\"quantite[]\" value=\"$value[quantite]\" max=\"99\" min=\"0\"></td>";
                           echo "      <td>$value[prix]$</td>";
                           echo "      <input type=\"hidden\" name=\"name[]\" value=\"$key\">";
                           echo "      <input type=\"hidden\" name=\"image[]\" value=\"$value[image]\">";
                           echo "      <input type=\"hidden\" name=\"prix[]\" value=\"$value[prix]\">";
                           $sum+=$value['quantite']*$value['prix'];
                        }
                        echo "<tr>";
                        echo "<th></th>";
                        echo "<th></th>";
                        echo "<th scope=\"col\">Total</th>";
                        echo "<th scope=\"col\">";echo number_format($sum,2);echo "$</th>";
                        echo "</tr>";
                        echo "</tfoot>";

                     }
                     else
                     {
                        echo "Panier Vide";
                     }
                     

                  ?>
               </table>
            </div>
            <div class="modal-footer">
               <button type="button" class="btn btn-secondary fs-xs" data-bs-dismiss="modal">Continuer Vos achats</button>
               <?php
               if(isset($_SESSION["shopping_cart"]))  
               {
                  echo '<button type="button" class="btn btn-outline-danger fs-xs">Vider le panier</button>';
                  echo "<input type=\"submit\" name=\"submit\" class=\"btn btn-primary fs-xs\" value=\"Proceder Au payement\">";
                  echo "</form>";
               }
               ?>
            </div>
         </div>
      </div>
   </div>