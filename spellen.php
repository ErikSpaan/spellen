<!DOCTYPE html>
<html>
    <head>
        <title>MySQL PHP</title>        
        <link rel="stylesheet" type="text/css" media="screen" href="spellen.css" />
        <script src="spellen.js"></script>
    </head>

    <body>
        <div class="debug bigwrapper">
            <div class="debug flex">
                <?php include "db_getdata_filter_sorteren.php"; ?>
            </div>  <!-- end flex -->

            <div class="debug head-title">
                Spellen
            </div>  <!-- end title-->

            <!-- DIV filter -->
            <div class="debug head-filter">
              <form action="spellen.php" method="GET">
               
                         
              <label>Sorteren type:</label>
              <div class="custom-select" style="width:200px;">
                <select name="sorteertype">
                    <option value="ASC">Oplopend</option>
                    <option value="DESC">Aflopend</option>
                  
                </select>
              </div>
                          
              <label>Sorteren op:</label>
              <div class="custom-select" style="width:200px;">
                <select name="sorteren">
                    <option value="spelnaam">Spelnaam</option>
                    <option value="prijs">Prijs</option>
                    <option value="uitgever">Uitgever</option>
                    <option value="rating">Rating</option>
                    <option value="genre">Genre</option>
                    <option value="categorie">Categorie</option>
                </select>
              </div>
            
                
              

              <h6>filter op:</h6>
            
                          
              <label>Spelnaam:</label>
              <input type="text" name="spelnaam">
            
              <label>Prijs:</label>
              <div class="slidecontainer">
                <input type="range" name="prijsmin" min="0" max="100" value="0" class="slider" id="rangeMin">
                <input type="range" name="prijsmax" min="0" max="100" value="100" class="slider" id="rangeMax">
                <br>
                Min: <span id="rangeMinField"></span> Max: <span id="rangeMaxField"></span>
              </div>

              <label>Genre:</label>
              <div class="custom-select" style="width:200px;">
                <select name="genre">
                    <option value="0">alle</option>
                    <option value="3">coöperatief</option>
                    <option value="4">deckbuilding</option>
                    <option value="2">kaartspel</option>
                    <option value="6">strategisch</option>
                    <option value="1">worker placement</option>
                </select>
              </div>
            
              <label>Categorie:</label>
              <div class="custom-select" style="width:200px;">
                <select name="categorie">
                    <option value="0">alle</option>
                    <option value="4">kind</option>
                    <option value="2">familie</option>
                    <option value="3">expert</option>
                </select>
              </div>
              <input type="submit">
              
            </form>
            
                       
            </div>  <!-- end filter-->

        </div> <!-- end bigwrapper-->
    </body>
</html>





