<?php

    //CARD.PHP
    
    //$categorie = $_GET['categorie'];
    //echo $categorie;
    
    if(isset($_GET['categorie'])){
        $categorie = $_GET['categorie'];
        $genre = $_GET['genre'];
        $spelnaam = $_GET['spelnaam'];
        $prijsmin = $_GET['prijsmin']*100;
        $prijsmax = $_GET['prijsmax']*100;
        $sorteren = $_GET['sorteren'];
        $sorteertype = $_GET['sorteertype'];
        $uitgever = $_GET['uitgever'];
        
        //We hebben een categorie ontvangen
        if ($categorie > 0 AND $genre == 0 AND $uitgever == 0) {
          $sql_querie = "SELECT spel_id, spelnaam, prijs, voorraad, merk_naam.uitgever, rating, tabel_genre.genre, afbeelding1, categorie_naam.categorie 
          FROM ((((spellen 
          INNER JOIN tabel_afbeelding ON spellen.afbeelding = tabel_afbeelding.afbeelding_id) 
          INNER JOIN categorie_naam ON spellen.categorie = categorie_naam.categorie_id)
          INNER JOIN merk_naam ON spellen.uitgever = merk_naam.uitgever_id)
          INNER JOIN tabel_genre ON spellen.genre = tabel_genre.id_genre)
          WHERE (spellen.categorie=$categorie AND prijs>$prijsmin AND prijs<$prijsmax) AND (spelnaam LIKE '%$spelnaam%')
          ORDER BY $sorteren $sorteertype";
         }
        elseif ($categorie > 0 AND $genre > 0 AND $uitgever == 0) {
          $sql_querie = "SELECT spel_id, spelnaam, prijs, voorraad, merk_naam.uitgever, spellen.genre, rating, tabel_genre.genre, afbeelding1, categorie_naam.categorie
          FROM ((((spellen 
          INNER JOIN tabel_afbeelding ON spellen.afbeelding = tabel_afbeelding.afbeelding_id) 
          INNER JOIN categorie_naam ON spellen.categorie = categorie_naam.categorie_id)
          INNER JOIN merk_naam ON spellen.uitgever = merk_naam.uitgever_id)
          INNER JOIN tabel_genre ON spellen.genre = tabel_genre.id_genre)
          WHERE (spellen.categorie=$categorie AND spellen.genre=$genre AND prijs>$prijsmin AND prijs<$prijsmax) AND (spelnaam LIKE '%$spelnaam%')
          ORDER BY $sorteren $sorteertype";
        }
        elseif ($categorie == 0 AND $genre > 0  AND $uitgever == 0) {
          $sql_querie = "SELECT spel_id, spelnaam, prijs, voorraad, merk_naam.uitgever, rating, spellen.genre, tabel_genre.genre, afbeelding1, categorie_naam.categorie
          FROM ((((spellen 
          INNER JOIN tabel_afbeelding ON spellen.afbeelding = tabel_afbeelding.afbeelding_id) 
          INNER JOIN categorie_naam ON spellen.categorie = categorie_naam.categorie_id)
          INNER JOIN merk_naam ON spellen.uitgever = merk_naam.uitgever_id)
          INNER JOIN tabel_genre ON spellen.genre = tabel_genre.id_genre)
          WHERE (spellen.genre=$genre AND prijs>$prijsmin AND prijs<$prijsmax) AND (spelnaam LIKE '%$spelnaam%')
          ORDER BY $sorteren $sorteertype";
        }

        elseif ($categorie == 0 AND $genre == 0 AND $uitgever > 0) {
          $sql_querie = "SELECT spel_id, spelnaam, prijs, voorraad, merk_naam.uitgever, rating, tabel_genre.genre, afbeelding1, categorie_naam.categorie 
            FROM ((((spellen 
            INNER JOIN tabel_afbeelding ON spellen.afbeelding = tabel_afbeelding.afbeelding_id) 
            INNER JOIN categorie_naam ON spellen.categorie = categorie_naam.categorie_id)
            INNER JOIN merk_naam ON spellen.uitgever = merk_naam.uitgever_id)
            INNER JOIN tabel_genre ON spellen.genre = tabel_genre.id_genre)
            WHERE (spellen.uitgever=$uitgever AND prijs>$prijsmin AND prijs<$prijsmax) AND (spelnaam LIKE '%$spelnaam%')
            ORDER BY $sorteren $sorteertype";
        }
          elseif ($categorie > 0 AND $genre == 0 AND $uitgever > 0) {
            $sql_querie = "SELECT spel_id, spelnaam, prijs, voorraad, merk_naam.uitgever, rating, tabel_genre.genre, afbeelding1, categorie_naam.categorie
            FROM ((((spellen 
            INNER JOIN tabel_afbeelding ON spellen.afbeelding = tabel_afbeelding.afbeelding_id) 
            INNER JOIN categorie_naam ON spellen.categorie = categorie_naam.categorie_id)
            INNER JOIN merk_naam ON spellen.uitgever = merk_naam.uitgever_id)
            INNER JOIN tabel_genre ON spellen.genre = tabel_genre.id_genre)
            WHERE (spellen.categorie=$categorie AND spellen.uitgever=$uitgever AND prijs>$prijsmin AND prijs<$prijsmax) AND (spelnaam LIKE '%$spelnaam%')
            ORDER BY $sorteren $sorteertype";
          }
          elseif ($categorie == 0 AND $genre > 0  AND $uitgever > 0) {
            $sql_querie = "SELECT spel_id, spelnaam, prijs, voorraad, merk_naam.uitgever, rating, spellen.genre, tabel_genre.genre, afbeelding1, categorie_naam.categorie
            FROM ((((spellen 
            INNER JOIN tabel_afbeelding ON spellen.afbeelding = tabel_afbeelding.afbeelding_id) 
            INNER JOIN categorie_naam ON spellen.categorie = categorie_naam.categorie_id)
            INNER JOIN merk_naam ON spellen.uitgever = merk_naam.uitgever_id)
            INNER JOIN tabel_genre ON spellen.genre = tabel_genre.id_genre)
            WHERE (spellen.genre=$genre AND spellen.uitgever=$uitgever AND prijs>$prijsmin AND prijs<$prijsmax) AND (spelnaam LIKE '%$spelnaam%')
            ORDER BY $sorteren $sorteertype";
          }
          elseif ($categorie > 0 AND $genre > 0  AND $uitgever > 0) {
            $sql_querie = "SELECT spel_id, spelnaam, prijs, voorraad, merk_naam.uitgever, rating, spellen.genre, tabel_genre.genre, afbeelding1, categorie_naam.categorie 
            FROM ((((spellen 
            INNER JOIN tabel_afbeelding ON spellen.afbeelding = tabel_afbeelding.afbeelding_id) 
            INNER JOIN categorie_naam ON spellen.categorie = categorie_naam.categorie_id)
            INNER JOIN merk_naam ON spellen.uitgever = merk_naam.uitgever_id)
            INNER JOIN tabel_genre ON spellen.genre = tabel_genre.id_genre)
            WHERE (spellen.categorie=$categorie AND spellen.genre=$genre AND spellen.uitgever=$uitgever AND prijs>$prijsmin AND prijs<$prijsmax) AND (spelnaam LIKE '%$spelnaam%')
            ORDER BY $sorteren $sorteertype";
          }

        else {
          $sql_querie = "SELECT spel_id, spelnaam, prijs, voorraad, merk_naam.uitgever, rating, tabel_genre.genre, afbeelding1, categorie_naam.categorie 
          FROM ((((spellen 
          INNER JOIN tabel_afbeelding ON spellen.afbeelding = tabel_afbeelding.afbeelding_id) 
          INNER JOIN categorie_naam ON spellen.categorie = categorie_naam.categorie_id)
          INNER JOIN merk_naam ON spellen.uitgever = merk_naam.uitgever_id)
          INNER JOIN tabel_genre ON spellen.genre = tabel_genre.id_genre)
          WHERE (prijs>$prijsmin AND prijs<$prijsmax) AND (spelnaam LIKE '%$spelnaam%')
          ORDER BY $sorteren $sorteertype";
        }

    }
    else {
      //We hebben GEEN categorie ontvangen
      $sql_querie = "SELECT spel_id, spelnaam, prijs, voorraad, rating, tabel_genre.genre, merk_naam.uitgever, afbeelding1, categorie_naam.categorie
      FROM ((((spellen 
      INNER JOIN tabel_afbeelding ON spellen.afbeelding = tabel_afbeelding.afbeelding_id) 
      INNER JOIN categorie_naam ON spellen.categorie = categorie_naam.categorie_id)
      INNER JOIN merk_naam ON spellen.uitgever = merk_naam.uitgever_id)
      INNER JOIN tabel_genre ON spellen.genre = tabel_genre.id_genre)
      ORDER BY spelnaam";
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
              '<span class="card-stock">Uitgever : ' . $row['uitgever'] .'</span>' .
              '<br>'.
              '<span class="card-stock">Categorie : ' . $row['categorie'] .'</span>' .
              '<br>'.
              '<span class="card-stock">Genre : ' . $row['genre'] .'</span>' .
              '<br>'.
              '<span class="card-stock">Voorraad : ' . $row['voorraad'] .'</span>' .
              '<br>' .
              '<span class="card-rating">Rating : ' . $row['rating'] . '</span>' .
              '<br>' .
              '<span class="card-price">€ ' . intval($row[('prijs')])/100 . '</span>' .
          '</div> <!-- card-content-->' .
      '</div> <!-- end card-->' .
      '</a>';
      
       
    }    
    


    $conn = null;

   
  
?>