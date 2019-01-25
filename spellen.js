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

window.onkeydown = function (event) {
  //on escape key
  var modal = document.getElementById('myModal');
  if (event.keyCode == 27) {
      modal.style.display = "none";
  }
}

}


function myFunction(x) {
  x.classList.toggle("change");
}



function GetInfoFromDatabase(url, outputData) {
  var xhttp;
  xhttp=new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
        outputData(this);
    }
  };
  xhttp.open("GET", url, true);
  xhttp.send();
}





function popupWindow(id) {
  
GetInfoFromDatabase("details.php?spel_ID="+id, showData);
console.log('test');

 //alert(id);
 //var xhttp;
 //xhttp = new XMLHttpRequest();
 //xhttp.open("GET", "details.php?"+id, true);
 //xhttp.send();  
  
 
  /*expandImg.src = image_context.src;
  //kopieer alt tekst naar modal
  imgText.innerHTML = image_context.alt;
  //zet id in afbeeldings id
  afbeeldingsid = image_context.id;
  //show the modal in beeld
  modal.style.display = "block";
  //bewaar de huidige id in de session storage
  sessionStorage.setItem("afbeeldingsid", afbeeldingsid);
  */
}


function showData(data) {
  console.log(data.responseText.replace(/[\n\r]+/g, ''));
  var data = data.responseText.replace(/[\n\r]+/g, '');
  
  var modal = document.getElementById('myModal');

  //show the modal in beeld
  modal.style.display = "block";
  modal.innerHTML = data;
 
  
  
} 

function closeModal() {
  var modal = document.getElementById('myModal');
  modal.style.display = "none";
}

function closeModal_message() {
  var modal_message = document.getElementById('myModal-message');
  modal_message.style.display = "none";

}
