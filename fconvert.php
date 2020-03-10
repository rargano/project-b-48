<html>
<title>แปลงอุณหภูมิจากฟาเรนไฮต์เป็นเซลเซียส</title>
<body>

<h2>แปลงอุณหภูมิ</h2>


<!-- Man -->
<label>Input C</label>
<input id="inpC" type="text" oninput="Cto(this.value)" onchange="Cto(this.value)">
<p>C to F: <span id="ctof"></span></p>
<p>C to K: <span id="ctok"></span></p>
<p>C to R: <span id="ctor"></span></p>

<label>Input K</label>
<input id="inpK" type="text" oninput="Kto(this.value)" onchange="Kto(this.value)">
<p>K to F: <span id="ktof"></span></p>
<p>K to C: <span id="ktoc"></span></p>
<p>K to R: <span id="ktor"></span></p>

<label>Input R</label>
<input id="inpR" type="text" oninput="Rto(this.value)" onchange="Rto(this.value)">
<p>R to F: <span id="rtof"></span></p>
<p>R to C: <span id="rtoc"></span></p>
<p>R to K: <span id="rtok"></span></p>

<label>Input F</label>
<input id="inpF" type="text" oninput="Rto(this.value)" onchange="Rto(this.value)">
<p>F to K: <span id="ftok"></span></p>
<p>F to C: <span id="ftoc"></span></p>
<p>F to R: <span id="ftor"></span></p>



<script>

//Man
function Cto(num){
  c = parseFloat(num);
  document.getElementById("ctof").innerHTML = (18.*c) +32;
  document.getElementById("ctok").innerHTML = c +273.15; 
  document.getElementById("ctor").innerHTML = c*0.8;
}
function Cto(num){
  c = parseFloat(num);
  document.getElementById("ktof").innerHTML = c * 1.8 - 459.67;
  document.getElementById("ktoc").innerHTML = c / 27; 
  document.getElementById("ktor").innerHTML = (c - 273.15)* 0.52500;
}
function Cto(num){
  c = parseFloat(num);
  document.getElementById("rtof").innerHTML = (c - 7.5)* 3.4286;
  document.getElementById("rtoc").innerHTML = c * 1.25; 
  document.getElementById("rtok").innerHTML = (c -7.5)/0.52500;
}
function Cto(num){
  c = parseFloat(num);
  document.getElementById("ftok").innerHTML = (c +459.67)/1.8;
  document.getElementById("ftoc").innerHTML = (c-32)*5/9 
  document.getElementById("ftor").innerHTML = (c -32)*0.29167;
}


</script>

</body>
</html>
