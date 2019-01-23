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
                <?php include "db_getdata_prijs.php"; ?>
            </div>  <!-- end flex -->
            <div class="debug head-title">
                Spellen
            </div>  <!-- end title-->
            <div class="debug head-filter">
            filter op:<br>
            <a href="spellen_sort_prijs.php">prijs</a>
            <a href="spellen_sort_naam.php">merknaam</a>
            <a href="">categorie</a>
            <a href="">genre</a><br>
            <br>
            sorteer op:<br>
            <a href="">naam</a>
            <a href="">prijs</a>
            
            
            </div>  <!-- end filter-->

        </div> <!-- end bigwrapper-->
    </body>
</html>
