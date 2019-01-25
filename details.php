<?php

    //DETAILS.PHP

    include "db_connection.php";

    $spel_detail = $_GET['spel_ID'];

    
    $sql_querie = "SELECT spel_id, spelnaam, prijs, voorraad, merk_naam.uitgever, rating, tabel_genre.genre, afbeelding1, categorie_naam.categorie,speler_min,speler_max,
    speelduur_min,speelduur_max,leeftijd_min,leeftijd_max 
    FROM spellen 
    INNER JOIN tabel_afbeelding ON spellen.afbeelding = tabel_afbeelding.afbeelding_id
    INNER JOIN categorie_naam ON spellen.categorie = categorie_naam.categorie_id
    INNER JOIN merk_naam ON spellen.uitgever = merk_naam.uitgever_id
    INNER JOIN tabel_genre ON spellen.genre = tabel_genre.id_genre
    WHERE spel_id = '$spel_detail'";

    $db_result = $conn->query($sql_querie);

    foreach ($db_result as $row)
    {
        echo
        '<div class="debug spel-detail">' .
          '<div class="debug card-image">' .
              '<img class="debug image" src="' . $row['afbeelding1'] . '" alt="' . $row['spelnaam'] . '">' .
          '</div> <!-- card-image-->' .
          '<div class="debug card-content">' .
                '<div class="spel-detail-title">' . $row['spelnaam'] . 
                '</div>' .
                '<div class="card-rest">' . 
                  '<span class="spel-detail-text">uitgever : ' . $row['uitgever'] .'</span>' .
                  '<br>'.
                  '<span class="spel-detail-text">categorie : ' . $row['categorie'] .'</span>' .
                  '<br>'.
                  '<span class="spel-detail-text">genre : ' . $row['genre'] .'</span>' .
                  '<br>' .
                  '<span class="spel-detail-text">aantal spelers min : ' . $row['speler_min'] . ' max: ' . $row['speler_max'] . '</span>' .
                  '<br>' .
                  '<span class="spel-detail-text">leeftijd min : ' . $row['leeftijd_min'] . ' tot: ' . $row['leeftijd_max'] . '</span>' .
                  '<br>' .
                  '<span class="spel-detail-text">speelduur tussen : ' . $row['speelduur_min'] . ' en ' . $row['speelduur_max'] . '</span>' .
                '</div>' .
          '</div> <!-- card-content-->' .     
                '<div class="spel-card-content-bottom-head">' .
                  '<div class="card-content-bottom">' .
                    '<span class="card-stock">voorraad</span>
                     <span class="card-rating">rating</span>
                     <span class="card-price">€</span>' .
                  '</div>'.
                  '<div class="card-content-bottom">
                    <span class="card-stock-number">' . $row['voorraad'] . '</span>' .  
                    '<span class="card-rating-number">' . $row['rating'] . '</span>' . 
                    '<span class="card-price-number">' . ($row[('prijs')])/100 . '</span>' .
                  '</div>' .
              
                '</div> <!-- card-content-bottom-head -->' .
      '</div> <!-- end card-->' ;
    
    }

    $conn = null;
?>
