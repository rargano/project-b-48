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

<p>Kelvin: <span id="Kel"></span></p>

<p>
  <label>โรเมอร์</label>
  <input id="Romur" type="number" placeholder="โรเมอร์" oninput="Romurc(this.value)" onchange="Romurc(this.value)">
</p>
<p>Romur: <span id="Rom"></span></p>


<script>
function temperatureConverter(num) {
  num = parseFloat(num);
  document.getElementById("Celcius").innerHTML=(num-32)/1.8;
}
function Kelvinc(num) {
  num = parseFloat(num);
  document.getElementById("Kel").innerHTML=num + 273;
}

function Romurc(num) {
  num = parseFloat(num);
  document.getElementById("Rom").innerHTML=num*0.8;
}

</script>

</body>
</html>
