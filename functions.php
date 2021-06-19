<?php
function items_display($item_name,$item_price,$item_image) 
{
  echo "<div class=\"col-md-4 col-sm-6\">";
  echo "  <div class=\"shadow px-3 py-4\">";
  echo "      <div class=\"\">";
  echo "          <div  class=\"\">";
  echo "              <div class=\"\"><img src=\"$item_image\" alt=\"\"></div>";
  echo "              <div class=\"p-1\">";
  echo "                  <div class=\"\">";
  echo "                      <div class=\"\">";
  echo "                          <span>Article</span>";
  echo "                          <span class=\"title\">$item_name</span>";
  echo "                      </div>";
  echo "                      <div class=\"ml-auto\">";
  echo "                          <span>Prix</span>";
  echo "                          <span class=\"price\">$item_price]</span>$";
  echo "                      </div>";
  echo "                  </div>";
  echo "              </div>";
  echo "              <div class=\"d-flex\">";
  echo "                  <input class=\"btn btn-search mx-1\" type=\"button\" value=\"Acheter\">";
  echo "                  <input class=\"btn btn-primary mx-1\" type=\"button\" value=\"Ajouter au panier\">";
  echo "              </div>";
  echo "          </div>";
  echo "      </div>";
  echo "  </div>";
  echo "</div>";
};


?>