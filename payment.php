<?php 
    include('header2.php');
    include('config.php');

    $_SESSION['adresse']=$_POST['adresse'];

    if(@$_POST['existe'] != 1 && isset($_POST['existe']))
    {
        $nom=@$_POST['nom'];
        $prenom=@$_POST['prenom'];
        $mail=@$_POST['mail'];
        $password=@$_POST['password'];
        $age=@$_POST['age'];
        $ville=@$_POST['ville'];
        $adresse=@$_POST['adresse'];
        $_SESSION['mail']=$mail;

        $requete="INSERT INTO `client`(`nom`, `prenom`, `age`, `adresse`, `ville`, `mail`, `pass`) VALUES ('$nom','$prenom','$age','$adresse','$ville','$mail','$password');";
        mysqli_query($id,$requete);
        $requete="SELECT `id_client` FROM `client` WHERE `mail`='$mail' AND `pass`='$password';";
        $result=mysqli_query($id,$requete);
        $coord=mysqli_fetch_row($result);
        $_SESSION['id_client']=$coord[0];
    }
?>

<div style="min-height:calc(100vh - 115px)" class="p-5 d-flex justify-content-center align-content-center">
        <div class="col-md-8">
            <div class="p-4 border">
                <div class="d-flex justify-content-between">
                    <span class="fs-m">Total a payer</span>
                    <span class="fs-m"><?php echo number_format(@$_SESSION['sum'],2); ?>$</span>
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
                            <input id="creditcard" placeholder="999-9999-9999-9909" class="form-control" name="card" >
                            <div class="row">
                                <div class="col-6"><span>Expiry date:</span>
                                    <input id="expiration" placeholder="YY/MM" class="form-control" >
                                </div>
                                <div class="col-6 mb-3 ">
                                    <span>CVV:</span>
                                    <input id="cvv" placeholder="999" class="form-control" >
                                </div>
                            </div>
                            <button class="btn btn-primary" onclick="validateCard(document.getElementById('creditcard').value,document.getElementById('expiration').value,document.getElementById('cvv').value)">Payer</button>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
<?php include('footer.php'); ?>