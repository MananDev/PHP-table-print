<html>
<body>

<form Method="post">
<br><br>
Enter number:<input type="text" name="value"/><br><br>
<input type="submit" name="btn" value="print table" />
 
</form>
<?php 
if(isset($_POST['btn']))
{
$num=$_POST['value'];
for($i=1; $i<=10; $i++)  
{
$multiple = $i*$num;
echo "$num * $i = $multiple" ;   
echo '<br>';	 
}  
}
?>  
</body>
</html>