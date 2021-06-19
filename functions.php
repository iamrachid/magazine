<?php
function items_display($item_name,$item_price,$item_image,$categorie,$search_name) 
{
  echo "<div class=\"product col-md-4 col-sm-6\">";
  echo "  <div class=\"shadow px-3 py-4\">";
  echo "      <div class=\"\">";
  echo "          <div  class=\"\">";
  echo "              <div class=\"\"><img class=\"product-img\" src=\"$item_image\" alt=\"\"></div>";
  echo "              <div class=\"p-1\">";
  echo "                  <div class=\"\">";
  echo "                      <div class=\"\">";
  echo "                          <span>Article</span>";
  echo "                          <span class=\"title\">$item_name</span>";
  echo "                      </div>";
  echo "                      <div class=\"ml-auto\">";
  echo "                          <span>Prix</span>";
  echo "                          <span class=\"price\">$item_price</span>$";
  echo "                      </div>";
  echo "                  </div>";
  echo "              </div>";
  echo "              <div class=\"d-flex\">";
  echo "                  <form action=\"$_SERVER[PHP_SELF]\" method=\"POST\">";
  echo "                  <input type=\"hidden\" name=\"price\" value=\"$item_price\">";
  echo "                  <input type=\"hidden\" name=\"name\" value=\"$item_name\">";
  echo "                  <input type=\"hidden\" name=\"image\" value=\"$item_image\">";
  echo "                  <input type=\"hidden\" name=\"category\" value=\"$categorie\">";
  echo "                  <input type=\"hidden\" name=\"search_name\" value=\"$search_name\">";
  echo "                  <input class=\"btn btn-primary mx-1\" type=\"submit\" name=\"submit\" value=\"Ajouter au panier\">";
  echo "                  </form>";
  echo "              </div>";
  echo "          </div>";
  echo "      </div>";
  echo "  </div>";
  echo "</div>";
};


?>