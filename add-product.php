<?php include('header.php'); ?>

<div style="min-height:calc(100vh - 115px);max-width:960px;margin: 0 auto;" class="p-5 d-flex justify-content-center align-content-center">
    <div class="row w-75 mx-auto">
        <div class="p-4 border w-75 mx-auto">
            <div class="d-flex justify-content-between">
                <span class="fs-m">Ajouter un article</span>
            </div>
            <form method="POST" class="form-group">
                <label class="label-control">Designation:</label>
                <input name="designation" placeholder="Designation" class="form-control">
                <label class="label-control">Prix:</label>
                <input name="prix" placeholder="prix" class="form-control">
                <label class="label-control mt-2" for="category">Categorie</label>
                <select class="form-control" id="category" name="category">
                    <option value="informatique">informatique</option>
                    <option value="video">Video</option>
                    <option value="photo">Photo</option>
                    <option value="divers">Divers</option>
                </select>
                <label class="label-control mt-2" for="image">Image</label>
                <input name="image" id="image" type="file" accept="image/png image/jpg image/jpeg" class="form-control">
                <input type="submit" class="btn btn-primary mt-2" value="Valider" />
            </form>
        </div>
    </div>
</div>
</div>

<?php include('footer.php'); ?>