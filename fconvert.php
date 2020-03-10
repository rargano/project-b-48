<html>
<title>แปลงอุณหภูมิจากฟาเรนไฮต์เป็นเซลเซียส</title>
<body>

<h2>แปลงอุณหภูมิ</h2>

<p>
  <label>ฟาเรนไฮต์</label>
  <input id="Fahrenheit" type="number" placeholder="ฟาเรนไฮต์" oninput="temperatureConverter(this.value)" onchange="temperatureConverter(this.value)">
</p>
<p>Celcius: <span id="Celcius"></span></p>

  <input id="Kelvin" type="number" placeholder="kelvin" oninput="Kelvinc(this.value)" onchange="Kelvinc(this.value)">

<p>Kelvin: <span id="Kelvin"></span></p>
<!-- Man -->
<label>Input Celcius</label>
<input id="inpC" type="text" oninput="Cto(this.value)" onchange="Cto(this.value)">
<p>C to F: <span id="ctof"></span></p>
<p>C to K: <span id="ctok"></span></p>
<p>C to R: <span id="ctor"></span></p>


<p>
  <label>โรเมอร์</label>
  <input id="Romur" type="number" placeholder="โรเมอร์" oninput="Romurc(this.value)" onchange="Romurc(this.value)">
</p>
<p>Romur: <span id="Romur"></span></p>


<script>

function temperatureConverter(num) {
  num = parseFloat(num);
  document.getElementById("Celcius").innerHTML=(num-32)/1.8;
}
function Kelvinc(num) {
  num = parseFloat(num);
  document.getElementById("Kelvin").innerHTML=num + 273;
}

//Man
function Cto(num){
  c = parseFloat(num);
  document.getElementById("ctof").innerHTML = (18.*c) +32;
  document.getElementById("ctok").innerHTML = c +273.15; 
  document.getElementById("ctor").innerHTML = c*0.8;
}
function Romurc(num) {
  num = parseFloat(num);
  document.getElementById("Romur").innerHTML=num*0.8;
}

</script>

</body>
</html>
