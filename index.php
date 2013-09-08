<html>

<head>
<title>Perhitungan</title>
<div style="margin:10">Perhitungan sederhana </div>

</head>

<body>

<table>
<form name="form1" method="POST" action="hitung.php">


<td>
<input name="angka1" type="text">
</td>


<td>
<select name="operator" id="operator">
	<option>+</option>
	<option>-</option>
	<option>x</option>
	<option>/</option>
</select>
</td>

<td>
<input name="angka2" type="text">
</td>

<td>
<input type="submit" name="submit" value="hitung"/>
</td>

<td>
hasil: <input name="hasil" type="text" readonly="true" value="<?php if (isset($_GET['hasil'])) echo $_GET['hasil'] ?> "/>
</td>

</form>

</table>

</body>

</html>
