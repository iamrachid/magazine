<?php include_once('config.php');?>
<?php include_once('header.php');?>
<?php require_once('functions.php');?>
<?php
    //searching in DATABASE
        if(!empty(@$_GET['category']))
        {
            $_SESSION['categorie']=@$_GET['category'];
            $_SESSION['search_name']=@$_GET['search'];
        }
        $categorie=$_SESSION['categorie'];
        $search_name=$_SESSION['search_name'];
        $order = isset($_GET['order']) ? $_GET['order'] : 'designation';

        if($categorie == "tous")
            if(empty($search_name))
            {
                $query="SELECT `designation`, `prix`, `image` FROM `article` WHERE 1 ORDER BY $order;";
            }
            else
            {
                $query="SELECT `designation`, `prix`, `image` FROM `article` WHERE `designation` LIKE '$search_name' ORDER BY $order;";
            }
        else
        {
            if(empty($search_name))
            {
                $query="SELECT `designation`, `prix`, `image` FROM `article` WHERE `categorie` LIKE '$categorie' ORDER BY $order;";
            }
            else
            {
                $query="SELECT `designation`, `prix`, `image` FROM `article` WHERE `designation` LIKE '$search_name' AND `categorie` LIKE '$categorie' ORDER BY $order;";
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
                    <form action="<?=$_SERVER['PHP_SELF']?>">
                        <input type="hidden" name="category" value="<?= $categorie ?>">
                        <input type="hidden" name="search" value="<?= $search_name ?>">
                        <select name="order"  onchange="this.form.submit()" class="form-select">
                            <option value="designation">Marque</option>
                            <option value="prix">Prix</option>
                        </select>
                    </form>
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
<script>
    var order = document.getElementsByName('order')[0];
    for(var opt,j = 0;opt = order.options[j];j++){
        if(opt.value == '<?=$order?>'){
            order.selectedIndex = j;
            break;
        }

    }
</script>
<?php include('footer.php'); ?>