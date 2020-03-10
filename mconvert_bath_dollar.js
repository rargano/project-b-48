<html>
<title>แปลงค่าเงิน</title>
<body>

<h2>แปลงค่าเงิน</h2>


<!-- Man -->
<label>Input Bath</label>
<input id="inpC" type="text" oninput="Cto(this.value)" onchange="Cto(this.value)">
<p>Bath to Dollar: <span id="ctof"></span></p>


<script>
function Cto(num){
  c = parseFloat(num);
  document.getElementById("ctof").innerHTML = c*0.32;
}
function Romurc(num) {
  num = parseFloat(num);
  document.getElementById("Rom").innerHTML=num*0.8;
}
</script>
</body>
</html>
