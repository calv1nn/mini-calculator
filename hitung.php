<?php

$angka1 = $_POST['angka1'];
$angka2 = $_POST['angka2'];
$operator = $_POST['operator'];

if ($operator == '+')
	{
		$hasil = $angka1+$angka2;
	}
if ($operator == '-')
	{
		$hasil = $angka1-$angka2;
	}
if ($operator == 'x')
	{
		$hasil = $angka1*$angka2;
	}

if ($operator == '/')
	{
		$hasil = $angka1/$angka2;	
	}

header ("location:index.php?hasil=$hasil");

?>
