<html>
<title>แปลงเงิน</title>
<body>

<h2>Function แปลงอุณหภูมิ</h2>


<!-- toon-->
<label>ใส่ค่าเงิน บาท</label>
<input id="inpTH" type="text" oninput="THtoJP(this.value)" onchange="THtoJP(this.value)">
<p>TH to JP: <span id="THtoJP"></span></p>

<label>ใส่ค่าเงิน เยน</label>
<input id="inJP" type="text" oninput="JPtoTH(this.value)" onchange="JPtoTH(this.value)">
<p>JP to TH: <span id="JPtoTH"></span></p>
<script>


function THtoJP(num){
  c = parseFloat(num);
  document.getElementById("THtoJP").innerHTML = (num)/0.29;
  
}
function JPtoTH(num){
  c = parseFloat(num);
  document.getElementById("JPtoTH").innerHTML = (num)*0.29;
  
}

<label>Input Bath</label>
<input id="inpC" type="text" oninput="Cto(this.value)" onchange="Cto(this.value)">
<p>Bath to Dollar: <span id="ctof"></span></p>


<script>
function Cto(num){
  c = parseFloat(num);
  document.getElementById("ctof").innerHTML = c*0.32;
}
</script>
</body>
</html>
