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
                <?php include "db_getdata.php"; ?>
            </div>  <!-- end flex -->

            <div class="debug head-title">
                Spellen
            </div>  <!-- end title-->

            <div class="debug head-filter">
            Sorteer op:<br>
            <a href="spellen_sort_prijs.php">prijs</a>
            <a href="spellen_sort_naam.php">merknaam</a>
            <a href="spellen_sort_rating">rating</a>
            <a href="">genre</a><br>
            <br>
            filter op:<br>
            <a href="">naam</a>
            <a href="">prijs</a>
            <a href="">genre</a>
            
            <form action="spellen_filter_categorie.php" method="GET">
              <div class="custom-select" style="width:200px;">
                
                <select name="categorie">
                    <option value="1">kind</option>
                    <option value="2">familie</option>
                    <option value="3">expert</option>
                </select>
                <input type="submit">
              </div>
            <form>
            <br>
            
            
            </div>  <!-- end filter-->

        </div> <!-- end bigwrapper-->
    </body>
</html>





