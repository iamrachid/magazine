<?php
include('header.php');
require_once('config.php');
if (isset($_POST['lock']) && $_POST['lock'] == 'root') {
?>

    <div style="min-height:calc(100vh - 115px);max-width:960px;margin: 0 auto;" class="p-5 d-flex justify-content-center align-content-center">
        <div class="row w-75 mx-auto">
            <div class="p-4 border w-75 mx-auto">
                <div class="d-flex justify-content-between">
                    <span class="fs-m">Ajouter un article</span>
                </div>
                <form method="POST" class="form-group" enctype="multipart/form-data">
                    <label class="label-control">Designation:</label>
                    <input required name="designation" placeholder="Designation" class="form-control">
                    <label class="label-control">Prix:</label>
                    <input required name="prix" pattern="[0-9.]*" placeholder="prix" class="form-control">
                    <label class="label-control mt-2" for="categorie">Categorie</label>
                    <select class="form-control" id="categorie" name="categorie">
                        <option value="informatique" selected>informatique</option>
                        <option value="video">Video</option>
                        <option value="photo">Photo</option>
                        <option value="divers">Divers</option>
                    </select>
                    <label class="label-control mt-2" for="image">Image</label>
                    <input required name="image" id="image" type="file" accept="image/png image/jpg image/jpeg" class="form-control">
                    <input name="submit" type="submit" class="btn btn-primary mt-2" value="Valider" />
                </form>
                <?php
                if (isset($_POST['submit'])) {
                    $target_dir = "images/product/";
                    $target_file = 'images/product/' .  basename($_FILES['image']['name']);
                    $designation = @$_POST['designation'];
                    $prix = @$_POST['prix'];
                    $categorie = @$_POST['categorie'];
                    move_uploaded_file($_FILES['image']['tmp_name'], $target_file);
                    $image = $target_file;
                    $aid = "";

                    $query = "INSERT INTO article VALUES ('$aid', '$designation', '$prix', '$categorie', '$image');";
                    $result = mysqli_query($id, $query);
                    if ($result) {
                ?>
                        <div class="mt-2">Votre produit est ajouté avec succès</div>
                <?php
                    }
                }
                ?>
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