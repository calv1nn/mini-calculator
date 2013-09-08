<html>

<head>
<title>Perhitungan</title>
<div id=1>Ini perhitungan</div>

</head>

<body>

<form name="form1" method="POST" action="hitung.php">
<input name="angka1" type="text">
<input name="angka2" type="text">
<select name="operator" id="operator">
	<option>+</option>
	<option>-</option>
	<option>x</option>
	<option>/</option>
</select>

<input type="submit" name="submit" value="hitung"/>

hasil: <input name="hasil" type="text" readonly="true" value="<?php if (isset($_GET['hasil'])) echo $_GET['hasil']?> "/>
</form>

</body>

</html>
