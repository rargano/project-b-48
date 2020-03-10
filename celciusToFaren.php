<html>
<title>แปลงอุณหภูมิจากฟาเรนไฮต์เป็นเซลเซียส</title>
<body>
<h2>แปลงอุณหภูมิจากเซลเซียสเป็นฟาเรนไฮต์</h2>
<p>
  <label>Celcius</label>
  <input id="Fahrenheit" type="number" placeholder="Celcius" oninput="temperatureConverter(this.value)" onchange="temperatureConverter(this.value)">
</p>
<p>Fahrenheit: <span id="Celcius"></span></p>
<script>
function temperatureConverter(num) {
  num = parseFloat(num);
  document.getElementById("Celcius").innerHTML=(num*1.8)+32;

</script>
</body>
</html>


