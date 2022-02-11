<?php
if(isset($_POST['sub'])){
	$num1=$_POST['n1'];
	$num2=$_POST['n2'];
	$operation=$_POST['sub'];
	if($operation=="+")
		$res=$num1+$num2;
	else if($operation=="-")
		$res=$num1-$num2;
	else if($operation=="x")
		$res=$num1*$num2;
	else if($operation=="/")
		$res=$num1/$num2;
}?>
<html>
<head>
	 <title> php Calculator</title>
</head>
<body>
<div class="container">
<form method="post" action="">
<h1>Calculator Using PHP</h1>
<br>
First Number:<input name="n1" value="">
<br>
Second Number:<input name="n2" value="">
<br>
<input type="submit" name="sub" value="+">
<input type="submit" name="sub" value="-">
<input type="submit" name="sub" value="x">
<input type="submit" name="sub" value="/">
<br>
<br>Result: <input type='text' value="<?php echo $res; ?>"><br>
</form>
	</div>
</body>
</html>