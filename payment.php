<?php 
    include('header2.php');
    include('config.php');


    if(@$_POST['existe'] != 1)
    {
        $nom=@$_POST['nom'];
        $prenom=@$_POST['prenom'];
        $mail=@$_POST['mail'];
        $password=@$_POST['password'];
        $age=@$_POST['age'];
        $ville=@$_POST['ville'];
        $adresse=@$_POST['adresse'];

        $requete="INSERT INTO `client`(`nom`, `prenom`, `age`, `adresse`, `ville`, `mail`, `pass`) VALUES ('$nom','$prenom','$age','$adresse','$ville','$mail','$password');";
        mysqli_query($id,$requete);
    }
?>

<div style="min-height:calc(100vh - 115px)" class="p-5 d-flex justify-content-center align-content-center">
        <div class="col-md-8">
            <div class="p-4 border">
                <div class="d-flex justify-content-between">
                    <span class="fs-m">Total a payer</span>
                    <span class="fs-m"><?php echo number_format($_SESSION['sum'],2); ?>$</span>
                    <div class="icons">
                        <img src="https://img.icons8.com/color/48/000000/visa.png" class="w-2" />
                        <img src="https://img.icons8.com/color/48/000000/mastercard-logo.png" class="w-2" />
                        <img src="https://img.icons8.com/color/48/000000/maestro.png" class="w-2" />
                    </div>
                </div>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <h5>Information Bancaire</h5>
                        <form method="POST">
                            <span>Card Number:</span>
                            <input id="creditcard" placeholder="999-9999-9999-9909" class="form-control" name="card" required>
                            <div class="row">
                                <div class="col-6"><span>Expiry date:</span>
                                    <input placeholder="YY/MM" class="form-control" required>
                                </div>
                                <div class="col-6 mb-3 ">
                                    <span>CVV:</span>
                                    <input id="cvv" placeholder="999" class="form-control" required>
                                </div>
                            </div>
                            <button class="btn btn-primary" onclick="validateCard(document.getElementById('creditcard').value)">Payer</button>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
<?php include('footer.php'); ?>