<html>
<body>

<form Method="post">
<br><br>
Enter any number:<input type="text" name="value"/><br><br>
<input type="submit" name="button" value="print table" />
 
</form>
<?php 
if(isset($_POST['button']))
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