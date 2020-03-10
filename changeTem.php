<html>
<title>แปลงอุณหภูมิจากฟาเรนไฮต์เป็นเซลเซียส</title>
<body>

<h2>แปลงอุณหภูมิจากฟาเรนไฮต์เป็นเซลเซียส</h2>

<p>
  <label>ฟาเรนไฮต์</label>
  <input id="Fahrenheit" type="number" placeholder="ฟาเรนไฮต์" oninput="temperatureConverter(this.value)" onchange="temperatureConverter(this.value)">
</p>
<p>Celcius: <span id="Celcius"></span></p>

<script>
function temperatureConverter(num) {
  num = parseFloat(num);
  document.getElementById("Celcius").innerHTML=(num-32)/1.8;
}
</script>

</body>
</html>
