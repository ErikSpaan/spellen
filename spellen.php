<!DOCTYPE html>
<html>
    <head>
        <title>MySQL PHP</title>        
        <link rel="stylesheet" type="text/css" media="screen" href="spellen.css" />
        <script src="spellen.js"></script>
    </head>

    <body>
        <div class="debug bigwrapper">
            <div class="debug flex-window-content">
                <?php include "db_getdata_filter_sorteren.php"; ?>
            </div>  <!-- end flex -->

            <div class="debug head-title">
              <div class="container-hamburger" onclick="myFunction(this)">
                <div class="bar1"></div>
                <div class="bar2"></div>
                <div class="bar3"></div>
              </div>
              Spel Fun
            </div>  <!-- end title-->


            <!-- DIV filter -->
            <div class="debug head-filter">
              <form action="spellen.php" method="GET">
               <br>
               <br>
               <br>
                         
              <label class="filter-text">Sorteren type:</label>
              <div class="custom-select" style="width:200px;">
                <select  id="soflow-color" name="sorteertype">
                    <option value="ASC">Oplopend</option>
                    <option value="DESC">Aflopend</option>
                  
                </select>
              </div>
                          
              <label class="filter-text">Sorteren op:</label>
              <div class="custom-select" style="width:200px;">
                <select  id="soflow-color" name="sorteren">
                    <option value="spelnaam">Spelnaam</option>
                    <option value="prijs">Prijs</option>
                    <option value="uitgever">Uitgever</option>
                    <option value="rating">Rating</option>
                    <option value="genre">Genre</option>
                    <option value="categorie">Categorie</option>
                </select>
              </div>
                     
              

              <h6>filter op:</h6>
            
                          
              <label class="filter-text">Spelnaam:</label>
              <input class="form-text-field" type="text" name="spelnaam">
            
              <label class="filter-text">Prijs:</label>
              <div class="slidecontainer">
                <input class="slider" type="range" name="prijsmin" min="0" max="100" value="0" class="slider" id="rangeMin">
                <input class="slider" type="range" name="prijsmax" min="0" max="100" value="100" class="slider" id="rangeMax">
                <br>
                <div class="filter-text-small">min: <span id="rangeMinField"></span><span class="filter-text-right">max: <span id="rangeMaxField"></span></span></div>
              </div>

              <label class="filter-text">Genre:</label>
              <div class="custom-select" style="width:200px;">
                <select id="soflow-color" name="genre">
                    <option value="0">alle</option>
                    <option value="3">coöperatief</option>
                    <option value="4">deckbuilding</option>
                    <option value="2">kaartspel</option>
                    <option value="6">strategisch</option>
                    <option value="1">worker placement</option>
                </select>
              </div>
            
              <label class="filter-text">Categorie:</label>
              <div class="custom-select" style="width:200px;">
                <select id="soflow-color" name="categorie">
                    <option value="0">alle</option>
                    <option value="4">kind</option>
                    <option value="2">familie</option>
                    <option value="3">expert</option>
                </select>
              </div>

              <label class="filter-text">Uitgever:</label>
              
                <select id="soflow-color" name="uitgever">
                    <option value="0">alle</option>
                    <option value="1">999 games</option>
                    <option value="3">Quined games</option>
                    <option value="4">White Goblin Games</option>
                    <option value="7">Goliath</option>
                    <option value="8">Asmodee</option>
                    <option value="9">Smart Games</option>
                </select>
              

              <input class="button" type="submit">
              <input class="button extra-margin" type="reset">
              
            </form>
            
                       
            </div>  <!-- end filter-->

        </div> <!-- end bigwrapper-->

        
        <!-- The Modal -->
        <div id="myModal" class="modal">
                <span class="close" onclick="closeModal()">×</span>
                <img class="modal-content" id="expandedImg">
                <div class="caption" id="imgtext"></div>
        </div>

        <!-- The Modal message -->
        <div id="myModal-message" class="modal-message">
                <span class="close" onclick="closeModal_message()">×</span>
                <div class="message" id="message1"></div>

        </div>
    </body>
</html>






