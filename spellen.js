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

window.onload = function () {


var sliderMin = document.getElementById("rangeMin");
var outputMin = document.getElementById("rangeMinField");
outputMin.innerHTML = sliderMin.value;

sliderMin.oninput = function() {
  outputMin.innerHTML = this.value;
}

var sliderMax = document.getElementById("rangeMax");
var outputMax = document.getElementById("rangeMaxField");
outputMax.innerHTML = sliderMax.value;

sliderMax.oninput = function() {
  outputMax.innerHTML = this.value;
}


}