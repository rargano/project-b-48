﻿<html>
<title>แปลงอุณหภูมิจากฟาเรนไฮต์เป็นเซลเซียส</title>
<body>

<h2>แปลงอุณหภูมิจากฟาเรนไฮต์เป็นเซลเซียส</h2>

<p>
  <label>ฟาเรนไฮต์</label>
  <input id="Fahrenheit" type="number" placeholder="ฟาเรนไฮต์" oninput="temperatureConverter(this.value)" onchange="temperatureConverter(this.value)">
</p>
<p>Celcius: <span id="Celcius"></span></p>

  <input id="Kelvin" type="number" placeholder="kelvin" oninput="Kelvinc(this.value)" onchange="Kelvinc(this.value)">

<p>Kelvin: <span id="Kelvin"></span></p>
<!-- Man -->
<label>Input Celcius</label>
<input id="inpC" type="text">
<label id="ctof"></label>
<label id="ctok"></label>
<label id="ctor"></label>


<script>

function temperatureConverter(num) {
  num = parseFloat(num);
  document.getElementById("Celcius").innerHTML=(num-32)/1.8;
}
function Kelvinc(num) {
  num = parseFloat(num);
  document.getElementById("Kelvin").innerHTML=num*274.15;
}

//Man
function Cto(num){
  c = parseFloar(num);
  document.getElementById("ctof").innerHTML = (18.*num) +32;
  document.getElementById("ctok").innerHTML = num +273.15; 
  document.getElementById("ctor").innerHTML = num*0.8;

}

</script>

</body>
</html>
