<?php
$code = $_POST['code'];
echo $code."<br />";
$a=123;
if($code==$a)
{
	header("Location: true.php");
	
}
else
{
	header("Location: false.php");
}
?>