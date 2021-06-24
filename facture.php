<?php 
   session_start();
   include_once('config.php');
   $date=date("Y-m-d h:i:s");
   $requete="INSERT INTO `commande`(`id_client`, `date`) VALUES ('$_SESSION[id_client]','$date');";
   mysqli_query($id,$requete);
   $requete="SELECT `id_comm` FROM `commande` WHERE `id_client`='$_SESSION[id_client]' AND `date`='$date';";
   $result=mysqli_query($id,$requete);
   $coord=mysqli_fetch_row($result);
   $id_commande=$coord[0];

   for ($i=0 ; $i < count($_SESSION['name_article']) ; $i++)
   {
      $name=$_SESSION['name_article'][$i];
      $price=$_SESSION['prix_article'][$i];
      $quantite=$_SESSION['quantite_article'][$i];
      $image=$_SESSION['image_article'][$i];
      
      if($quantite>0)
      {
         $requete="SELECT `id_article` FROM `article` WHERE `designation`='$name' AND `prix`='$price' AND `image`='$image';";
         $result=mysqli_query($id,$requete);
         $coord=mysqli_fetch_row($result);
         $id_article=$coord[0];
         $requete="INSERT INTO `ligne`(`id_comm`, `id_article`, `quantite`, `prix_unit`) VALUES ('$id_commande','$id_article','$quantite','$price');";
         mysqli_query($id,$requete);
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

<body >
   <header>
      <!-- Static navbar -->
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
         <div class="container-fluid">
            <a class="navbar-brand" href="index.php">
               <img src="images/logo.png" alt="">
            </a>
         </div>
      </nav>
   </header>
    

   <div style="min-height:calc(100vh - 115px);max-width:960px;margin: 0 auto;" class="p-5 d-flex justify-content-center align-content-center">
    <div class="w-75 mx-auto">
        <div class="p-4 border w-75 mx-auto">
            <i class="fa fa-check-circle green"></i>
            Votre Paiement est bien effectué, Vous pouvez consulter votre reçu sur votre boite mail.
            </br>
            <a href="index.php">Retour a la page d'acceuil</a>
        </div>
        
    </div>
   </div>

    <?php
    $to_email = "$_SESSION[mail],ensaprojet87@gmail.com";
    $subject = "Confirmation de votre achat";
    $body = "Merci pour votre achat passé le : $date d'un montant de : $_SESSION[sum] $\nVos produits vous seront livrés le plus rapidement possible à l'adresse \"$_SESSION[adresse]\"\nMerci de nous faire confiance \nA la prochaine.";
    $headers = "From: testadressimad@gmail.com";
    if ( mail($to_email, $subject, $body, $headers)) 
    {
        echo("Email successfully sent to $to_email...");
    } 
    else 
    {
        echo("Email sending failed...");
    }
    ?>


<?php session_destroy(); ?>