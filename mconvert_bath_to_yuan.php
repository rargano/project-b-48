<html>
<title>Thai Bath To Yuan</title>
<body>
<h3>Thai Bath To Yuan</h3>
<label>Thai Bath</label>
<input id="thb" oninput="ConvertToYuan(this.value)" onchange="ConvertToYuan(this.value)">
<label>= Yuan: </label><span id="yuan"></span>

<script>
function ConvertToYuan(num){
    var str = 'Yuan';
    document.getElementById("yuan").innerHTML = num * 0.22;

}
</script>
</body>
</html>