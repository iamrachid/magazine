<?php include('header.php'); ?>
<div style="min-height:calc(100vh - 115px)" class="p-5 d-flex justify-content-center align-content-center">
    <form action="" method="post" class="form-group">
        <label class="form-label" for="mail">
            Adresse email:
            <input type="text" id="mail" name="mail"  class="form-control">
        </label><br />
        <label class="form-label" for="password">
            Mot de passe:
            <input type="password" name="password" id="password"  class="form-control">
        </label><br/>
        <input type="submit" value="Entrer" class="btn btn-primary">
    </form>
</div>
<?php include('footer.php'); ?>