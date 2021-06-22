<?php 
   session_start();
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
    


    <?php
   /*
    $to_email = $_SESSION['mail'];
    $subject = "Receipt";
    $body = "Thank You to buy : $_SESSION[sum]";
    $headers = "From: testadressimad@gmail.com";
    
    if ( mail($to_email, $subject, $body, $headers)) 
    {
        echo("Email successfully sent to $to_email...");
    } 
    else 
    {
        echo("Email sending failed...");
    }
    */
    ?>


<?php session_destroy(); ?>