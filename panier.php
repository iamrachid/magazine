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
<div style="min-height:calc(100vh - 115px)" class="p-5 d-flex justify-content-center align-content-center">
    <div class="row">
        <div class="col-md-7">
            <div class="p-4 border">
                <div class="d-flex justify-content-between">
                    <span class="fs-m">Information du client</span>
                    <div class="icons">
                        <img src="https://img.icons8.com/color/48/000000/visa.png" class="w-2" />
                        <img src="https://img.icons8.com/color/48/000000/mastercard-logo.png" class="w-2" />
                        <img src="https://img.icons8.com/color/48/000000/maestro.png" class="w-2" />
                    </div>
                </div>
                <ul class="nav nav-tabs my-2" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">register</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Login</button>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">

                        <form method="POST">
                            <label class="label-control">Nom:</label>
                            <input name="nom" placeholder="Linda" class="form-control">
                            <label class="label-control">Prenom:</label>
                            <input name="prenom" placeholder="Williams" class="form-control">
                            <label class="label-control">Adresse email:</label>
                            <input type="email" name="mail" placeholder="example@email.com" class="form-control">
                            <label class="label-control">Mot de passe:</label>
                            <input type="password" name="password" class="form-control">
                            <div class="row">
                                <div class="col-6">
                                    <label class="label-control">Age:</label>
                                    <input name="age" class="form-control">
                                </div>
                                <div class="col-6">
                                    <label class="label-control">Ville:</label>
                                    <input name="ville" class="form-control">
                                </div>
                            </div>
                            <label class="label-control">Adresse:</label>
                            <input name="adresse" class="form-control">
                            <button class="btn btn-primary">Valider</button>
                        </form>
                    </div>
                    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                        <form action="" method="post">
                            <label class="form-label" for="mail">
                                Adresse email:
                                <input type="text" id="mail" name="mail" class="form-control">
                            </label><br />
                            <label class="form-label" for="password">
                                Mot de passe:
                                <input type="password" name="password" id="password" class="form-control">
                            </label><br />
                            <input type="submit" value="Entrer" class="btn btn-primary">
                        </form>
                    </div>
                </div>

            </div>
        </div>
        <div class="col-md-5 border p-4">
            <div class="">
                <div class="header">Votre Panier</div>
                <div class="panier">
                <?php
                    $sum=0;
                    for ($i=0 ; $i < count($_POST['name']) ; $i++)
                    {
                        $name=$_POST['name'][$i];
                        $price=$_POST['prix'][$i];
                        $image=$_POST['image'][$i];
                        $quantite=$_POST['quantite'][$i];
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
                    <div class="col text-right"><b><?php echo number_format($sum,2); ?></b></div>
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