<?php

    //CARD.PHP
$sql_querie;

    if(isset($_GET['categorie'])){
        $categorie = $_GET['categorie'];
        //echo $categorie;
        //We hebben een categorie ontvangen
        $sql_querie = "SELECT spel_id, spelnaam, prijs, voorraad, rating, afbeelding1 
        FROM (spellen 
        INNER JOIN tabel_afbeelding 
        ON spellen.afbeelding = tabel_afbeelding.afbeelding_id) WHERE categorie='$categorie' ORDER BY spelnaam";

    }else{
         //We hebben GEEN categorie ontvangen
         $sql_querie = "SELECT spel_id, spelnaam, prijs, voorraad, rating, afbeelding1 
        FROM (spellen 
        INNER JOIN tabel_afbeelding 
        ON spellen.afbeelding = tabel_afbeelding.afbeelding_id) WHERE categorie='3' ORDER BY spelnaam";
        //echo "categorie bestaat niet";
    }

    include "db_connection.php";           
 
    $db_result = $conn->query($sql_querie);  

    foreach ($db_result as $row)
    {            
     
    echo    
    '<a href="details.php?spel_ID=' . $row['spel_id'] . '">' . 
    '<div class="debug card">' .
          '<div class="debug card-image">' .
              '<img class="debug image" src="' . $row['afbeelding1'] . '" alt="' . $row['spelnaam'] . '">' .
          '</div> <!-- card-image-->' .
          '<div class="debug card-content">' .
              '<span class="card-title">' . $row['spelnaam'] . '</span>' .
              '<br>'.
              '<span class="card-stock">Voorraad : ' . $row['voorraad'] .'</span>' .
              '<br>' .
              '<span class="card-rating">Rating : ' . $row['rating'] . '</span>' .
              '<br>' .
              '<span class="card-price">€ ' . $row['prijs'] . '</span>' .
          '</div> <!-- card-content-->' .
      '</div> <!-- end card-->' .
      '</a>';
       
    }    
    


    $conn = null;

   
  
?>