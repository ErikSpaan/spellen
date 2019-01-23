console.log("main.js gorillapower");

function sorterenPrijs() {
    var filter = document.getElementById("filter");
    console.log('test:',filter);
    filter.innerHTML = '<?php include "db_getdata_prijs.php"; ?>';
    console.log('test2:',filter.innerHTML);
    alert(filter.innerHTML);

}

function sorterenNaam() {
    var filter = document.getElementById("filter");
//    filter.innerHTML = '<?php include "db_getdata_naam.php"; ?>';
    filter.innerHTML = 'hallo';

}