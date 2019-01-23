<?php

    //DETAILS.PHP

    include "db_connection.php"; 
    
    $spel_detail = $_GET['spel_ID'];

    
    $sql_querie = "SELECT spel_id, spelnaam, prijs, voorraad, rating, afbeelding1 
    FROM (spellen 
    INNER JOIN tabel_afbeelding 
    ON spellen.afbeelding = tabel_afbeelding.afbeelding_id)
    WHERE spel_id= '$spel_detail'";
    
 
    $db_result = $conn->query($sql_querie);  

    foreach ($db_result as $row)
    {            
     
    echo    
    
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
      '</div> <!-- end card-->' ;
      
       
    }    
    


    $conn = null;

   
  
?>