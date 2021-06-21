<?php include_once('config.php');?>
<?php include_once('header.php');?>
<?php require_once('functions.php');?>
<?php
    //searching in DATABASE
        if(!empty(@$_POST['category']))
        {
            $_SESSION['categorie']=@$_POST['category'];
            $_SESSION['search_name']=@$_POST['search_name'];
        }
        $categorie=$_SESSION['categorie'];
        $categorie=$_SESSION['search_name'];
        
        if($categorie == "tous")
            if(empty($search_name))
            {
                $query="SELECT `designation`, `prix`, `image` FROM `article` WHERE 1";
            }
            else
            {
                $query="SELECT `designation`, `prix`, `image` FROM `article` WHERE `designation` LIKE '$search_name';";
            }
        else
        {
            if(empty($search_name))
            {
                $query="SELECT `designation`, `prix`, `image` FROM `article` WHERE `categorie` LIKE '$categorie'";
            }
            else
            {
                $query="SELECT `designation`, `prix`, `image` FROM `article` WHERE `designation` LIKE '$search_name' AND `categorie` LIKE '$categorie';";
            }
        }
        $result=mysqli_query($id,$query);
?>

<div style="min-height:calc(100vh - 115px);max-width:960px;" class="mx-auto">
    <div class="container p-2">
        <header class="">
            <div class="d-flex justify-content-between">
                <?php
                echo strtoupper($categorie);
                ?>
                </h4>
                <div class="d-flex align-items-center">
                    <span  class="text-nowrap px-2">Trier par: </span>
                    <select name="order" class="form-select">
                        <option value="price">Prix</option>
                        <option value="brand">Marque</option>
                    </select>
                </div>
            </div>
            <div class="d-flex justify-content-between">
                <p>
                <?php
                echo mysqli_num_rows($result);
                ?> resultats</p>
            </div>
        </header>
        <div class="row">
            <?php
                if(mysqli_num_rows($result) != 0)
                {
                    $ligne=mysqli_fetch_row($result);
                    while($ligne)
                    {
                        items_display($ligne[0],$ligne[1],$ligne[2],$categorie,$search_name);
                        $ligne=mysqli_fetch_row($result);
                    }
                }
                else
                {
                    echo "<h3>Aucune Correspandance</h3>";
                }
            ?>
        </div>
    </div>
</div>
<?php include('footer.php'); ?>