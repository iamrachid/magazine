<?php
include('header.php');
require_once('config.php');
if (isset($_POST['lock']) && $_POST['lock'] == 'root'){
    @session_start();
    $_SESSION['user'] = 'admin';
}
if (isset($_SESSION['user']) && $_SESSION['user'] == 'admin') {
    $query="SELECT * FROM `article` WHERE 1";
    $result = mysqli_query($id, $query);
?>
    <div style="min-height:calc(100vh - 115px);max-width:960px;margin: 0 auto;" class="p-5 d-flex justify-content-center align-content-center">
        <div class="row w-75 mx-auto">
            <div class="p-4 border w-75 mx-auto">
         
                       <table class="table table-striped">
                          <thead>
                             <tr>
                                <th scope="col">Image</th>
                                <th scope="col">Article</th>
                                <th scope="col">Quantite</th>
                                <th scope="col">Prix unitaire</th>
                             <tr>
                          </thead>
                        <tbody class="scroll">
                        <?php while($product = mysqli_fetch_assoc($result)) {
                            ?>
                             <tr>
                                <th scope="row">
                                   <img src="<?php echo $product['image']?>" alt="" height="60px" width="60px" >
                                </th>
                                <td><?=$product['categorie'] ?></td>
                                <td><?=$product['designation'] ?></td>
                                <td><?=$product['prix'] ?></td>
                                <td>
                                    <form action="<?= $_SERVER['PHP_SELF']?>">
                                        <input type="hidden" name="id" value="<?=$product['id']?>">
                                        <label for="delete"><i class="fa fa-trash"></i></label>
                                        <input id="delete" type="submit" value="delete">
                                    </form>
                                </td>
                                
                             </tr>
                    <?php } ?>
                        </tbody>
                       </table>
                
            </div>
        </div>
    </div>

<?php
} else {
?>
    <div style="min-height:calc(100vh - 115px);max-width:960px;margin: 0 auto;" class="p-5 d-flex justify-content-center align-content-center">
        <div class="row w-75 mx-auto">
            <div class="p-4 border w-75 mx-auto">
                <form method="POST" class="form-group">
                    <label class="label-control">Cette page est verouillé, Veillez saisir le mot de passe pour y accéder.</label>
                    <input required type="password" name="lock" placeholder="Mot de passe" class="mt-2 form-control">
                    <input type="submit" class="btn btn-primary mt-2" value="Deverouiller" />
                </form>
                <div class="mt-2">
                    <a href="index.php">Revenir au page d'accueil</a>
                </div>
            </div>
        </div>
    </div>
<?php
}

include('footer.php'); ?>