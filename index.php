<?php include('header.php'); ?>

         <div class="py-3 search">
            <div class="container">
               <div class="row">
                  <div class="find-box">
                     <h1 class="heading">Chercher par nom du produit</h1>
                     <form action="search.php" method="GET" class="d-flex">
                        <div class="col-sm-5">
                           <div class="form-sh">
                              <input type="text" placeholder="Nom Produit" name="search">
                           </div>
                        </div>
                        <div class="col-sm-4 mx-3 form-sh">
                              <label for="">Categorie:</label>
                              <select name="category" class="form-select">
                                 <option value="informatique">Informatique</option>
                                 <option value="photo">Photos</option>
                                 <option value="video">Videos</option>
                                 <option value="divers">Divers</option>
                                 <option value="tous" selected>Tous</option>
                              </select>
                        </div>

                        <div class="col-sm-3">
                           <input class="submit btn" value="Search" type="submit"/>
                        </div>
                     </form>
                  </div>
               </div>
            </div>
         </div>
         </div>
<?php include('footer.php'); ?>