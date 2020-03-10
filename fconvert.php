<html>
<title>แปลงอุณหภูมิจากฟาเรนไฮต์เป็นเซลเซียส</title>
<body>

<h2>Function แปลงอุณหภูมิ</h2>


<!-- Man -->
<label>Input Celcius</label>
<input id="inpC" type="text" oninput="Cto(this.value)" onchange="Cto(this.value)">
<p>C to F: <span id="ctof"></span></p>
<p>C to K: <span id="ctok"></span></p>
<p>C to R: <span id="ctor"></span></p>

<script>
function temperatureConverter(num) {
  num = parseFloat(num);
  document.getElementById("Celcius").innerHTML=(num-32)/1.8;
}
function Kelvinc(num) {
  num = parseFloat(num);
  document.getElementById("Kel").innerHTML=num + 273;
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
  document.getElementById("Rom").innerHTML=num*0.8;
}
</script>
</body>
</html>
