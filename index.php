<html>
<body>

<?php
$num=$_POST['value'];
for($i=1; $i<=10; $i++)   
{
$multiple = $i*$num;
echo "$num * $i = $multiple" ;   
echo '<br>';	 
}  
?> 
 
</body>
</html>