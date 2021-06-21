<?php 
    include_once("config.php");
    session_start();
    $connecte=0;
?>
<head>
    <title>Panier</title>
       <!--fontawesome css-->
   <link rel="stylesheet" href="css/font-awesome.min.css?v=1.1">
   <!--bootstrap css-->
   <link rel="stylesheet" href="css/bootstrap.min.css?v=1.1">
   <!--main css-->
   <link rel="stylesheet" href="css/style.css?v=1.2">
</head>
<body>
<?php
    if(isset($_POST["connecte"]))
    {

        $email=$_POST["mail"];
        $mdp=$_POST["password"];
        $requete="SELECT `nom`, `prenom`, `age`, `adresse`, `ville` FROM `client` WHERE `mail`='$email' AND `pass`='$mdp'; ";
        $resultat=mysqli_query($id,$requete);
        $coord=mysqli_fetch_row($resultat);
        if($coord != NULL)
        {
            $connecte=1;
        }
        else
        {
            echo "<script type=text/javascript>";
            echo "window.alert(\"Mot De Passe Incorrect\")</script>";
        }
    }
?>
<div style="min-height:calc(100vh - 115px)" class="p-5 d-flex justify-content-center align-content-center">
    <div class="row">
        <div class="col-md-7">
            <div class="p-4 register border">
                <div class="d-flex justify-content-between">
                    <span class="fs-m">Information du client</span>
                </div>
                <ul class="nav nav-tabs my-2" id="myTab" role="tablist">
                    <?php if($connecte != 1)
                    {
                    ?>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Se connecter</button>
                    </li>

                    <?php } ?>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true"><?php if($connecte) { echo "Vos informations";}else{echo "Creer un compte"; }?></button>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">

                        <form action="payment.php" method="POST">
                            <label class="label-control">Nom:</label>
                            <input name="nom" placeholder="Linda" class="form-control" value="<?php if($connecte) { echo "$coord[0]"; }?>">
                            <label class="label-control">Prenom:</label>
                            <input name="prenom" placeholder="Williams" class="form-control" value="<?php if($connecte) { echo "$coord[1]"; }?>">
                            <?php if($connecte != 1)
                            {
                            ?>
                            <label class="label-control">Adresse email:</label>
                            <input type="email" name="mail" placeholder="example@email.com" class="form-control">
                            <label class="label-control">Mot de passe:</label>
                            <input type="password" name="password" class="form-control">
                            <?php } ?>
                            <div class="row">
                                <div class="col-6">
                                    <label class="label-control">Age:</label>
                                    <input name="age" class="form-control" value="<?php if($connecte) { echo "$coord[2]"; }?>">
                                </div>
                                <div class="col-6">
                                    <label class="label-control">Ville:</label>
                                    <input name="ville" class="form-control" value="<?php if($connecte) { echo "$coord[4]"; }?>">
                                </div>
                            </div>
                            <label class="label-control">Adresse:</label>
                            <input name="adresse" class="form-control" value="<?php if($connecte) { echo "$coord[3]"; }?>">
                            </br>
                            <input type="hidden" name="existe" value="<?php echo $connecte ?>">
                            <input type="hidden" name="sum" value="<?php echo $sum ?>">
                            <button class="btn btn-primary">Proceder au payement</button>
                        </form>
                    </div>
                    <?php if($connecte != 1)
                    {
                    ?>
                        <div class="tab-pane fade text-center" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                            <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
                                <label class="form-label" for="mail">
                                    Adresse email:
                                    <input type="text" id="mail" name="mail" class="form-control" required>
                                </label><br />
                                <label class="form-label" for="password">
                                    Mot de passe:
                                    <input type="password" name="password" id="password" class="form-control" required>
                                </label><br />
                                <input type="submit" name="connecte" value="Se connecter" class="btn btn-primary">
                            </form>
                        </div>
                    <?php } ?>
                </div>

            </div>
        </div>
        <div class="col-md-5 border p-4">
            <div class="">
                <div class="header">Votre Panier</div>
                <div class="panier">
                <?php
                    if(isset($_POST['name']))
                    {
                        $_SESSION['name_article']=$_POST['name'];
                        $_SESSION['prix_article']=$_POST['prix'];
                        $_SESSION['image_article']=$_POST['image'];
                        $_SESSION['quantite_article']=$_POST['quantite'];
                    }
                    $sum=0;
                    for ($i=0 ; $i < count($_SESSION['name_article']) ; $i++)
                    {
                        $name=$_SESSION['name_article'][$i];
                        $price=$_SESSION['prix_article'][$i];
                        $image=$_SESSION['image_article'][$i];
                        $quantite=$_SESSION['quantite_article'][$i];
                        echo "<div class=\"row py-2\">";
                        echo "    <div class=\"col-4 align-self-center\"><img class=\"img-fluid\" src=\"$image\"></div>";
                        echo "    <div class=\"col-8\">";
                        echo "        <div class=\"row\"><b>$price$</b></div>";
                        echo "        <div class=\"row text-muted\">$name</div>";
                        echo "        <div class=\"row\">Qty:$quantite</div>";
                        echo "    </div>";
                        echo "</div>";
                        $sum+=$price*$quantite;
                    }
                ?>
                </div>
                <hr>
                <div class="row">
                    <div class="col text-left"><b>Total to pay</b></div>
                    <div class="col text-right"><b><?php $_SESSION['sum']=$sum;echo number_format($sum,2); ?></b></div>
                </div>
            </div>
            
        </div>
    </div>
</div>

<!--main js-->
<script src="js/jquery-1.12.4.min.js"></script>
<!--bootstrap js-->
<script src="js/bootstrap.min.js"></script>
<!--custom js-->
<script src="js/custom.js"></script>

</body>