<?php include_once('config.php');?>
<?php include_once('header.php');?>
<?php require_once('functions.php');?>
<div class="container p-2">
    <header class="">
        <div class="d-flex justify-content-between">
            <h4>PC HP i5</h4>
            <div class="d-flex align-items-center">
                <span  class="text-nowrap px-2">Trier par: </span>
                <select name="order" class="form-select">
                    <option value="price">Prix</option>
                    <option value="brand">Marque</option>
                </select>
            </div>
        </div>
        <div class="d-flex justify-content-between">
            <p><span class="results">545</span> resultats</p>
        </div>
    </header>

    <div class="row">
        <?php
            $query="SELECT `designation`, `prix`, `image` FROM `article` WHERE 1";
            $result=mysqli_query($id,$query);
            $ligne=mysqli_fetch_row($result);
            while($ligne)
            {
                items_display($ligne[0],$ligne[1],$ligne[2]);
                $ligne=mysqli_fetch_row($result);
            }
        ?>
    </div>
</div>
<?php include('footer.php'); ?>