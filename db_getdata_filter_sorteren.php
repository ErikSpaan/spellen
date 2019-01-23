<?php

    //CARD.PHP

    //echo $spelnaam;
    if(isset($_GET['categorie'])){
        $categorie = $_GET['categorie'];
        $genre = $_GET['genre'];
        $spelnaam = $_GET['spelnaam'];
        $prijsmin = $_GET['prijsmin']*100;
        $prijsmax = $_GET['prijsmax']*100;
        $sorteren = $_GET['sorteren'];
        $sorteertype = $_GET['sorteertype'];
        
        //We hebben een categorie ontvangen
        if ($categorie > 0 AND $genre == 0) {
          $sql_querie = "SELECT spel_id, spelnaam, prijs, voorraad, rating, genre, afbeelding1 
          FROM (spellen 
          INNER JOIN tabel_afbeelding 
          ON spellen.afbeelding = tabel_afbeelding.afbeelding_id) 
          WHERE (categorie=$categorie AND prijs>$prijsmin AND prijs<$prijsmax) AND (spelnaam LIKE '%$spelnaam%')
          ORDER BY $sorteren $sorteertype";
          echo $genre;
          }
        elseif ($categorie > 0 AND $genre > 0) {
          $sql_querie = "SELECT spel_id, spelnaam, prijs, voorraad, rating, genre, afbeelding1 
          FROM (spellen 
          INNER JOIN tabel_afbeelding 
          ON spellen.afbeelding = tabel_afbeelding.afbeelding_id) 
          WHERE (categorie=$categorie AND genre=$genre AND prijs>$prijsmin AND prijs<$prijsmax) AND (spelnaam LIKE '%$spelnaam%')
          ORDER BY $sorteren $sorteertype";
        }
        elseif ($categorie == 0 AND $genre > 0) {
            $sql_querie = "SELECT spel_id, spelnaam, prijs, voorraad, rating, genre, afbeelding1 
            FROM (spellen 
            INNER JOIN tabel_afbeelding 
            ON spellen.afbeelding = tabel_afbeelding.afbeelding_id) 
            WHERE (genre=$genre AND prijs>$prijsmin AND prijs<$prijsmax) AND (spelnaam LIKE '%$spelnaam%')
            ORDER BY $sorteren $sorteertype";
        }
        else
        {
           
        $sql_querie = "SELECT spel_id, spelnaam, prijs, voorraad, rating, genre, afbeelding1 
        FROM (spellen 
        INNER JOIN tabel_afbeelding 
        ON spellen.afbeelding = tabel_afbeelding.afbeelding_id) 
        WHERE (prijs>$prijsmin AND prijs<$prijsmax) AND (spelnaam LIKE '%$spelnaam%')
        ORDER BY $sorteren $sorteertype";
        }

    }else{
         //We hebben GEEN categorie ontvangen
         $sql_querie = "SELECT spel_id, spelnaam, prijs, voorraad, rating, genre, afbeelding1 
        FROM (spellen 
        INNER JOIN tabel_afbeelding 
        ON spellen.afbeelding = tabel_afbeelding.afbeelding_id) 
        ORDER BY $sorteren $sorteertype";
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