<html>
<head>
<title></title>

<style>
tr:nth-child(even){
	background-color:blue;
}
tr:nth-child(odd){
	background-color:red;
}
</style>

</head>

<body>
<h1 align=center>Multiplication Table</h1>

<table align=center border width=400px height=400px>

<?php

for($i = 1; $i <= 10; ++$i) {
	echo('<tr>');
	
	for($j = 1; $j <= 10; ++$j){
		echo('<td>', $i * $j , '</td>');
	}
	
	echo('</tr>');
}

?>

</table>

</body>

</html>