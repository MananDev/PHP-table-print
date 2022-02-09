<html>
<body>
<script language= "javascript">
         $num = prompt ("please input 1st Number")
</script>
<?php 
for($i=1; $i<=10; $i++)  
{
$multiple = $i*$num;
echo "$num * $i = $multiple" ;   
echo '<br>';	 
}  
?>  
</body>
</html>