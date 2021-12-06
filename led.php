<!DOCTYPE HTML>
<html lang="pl">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
	<title> System kontroli pomieszczenia</title>
	<link href="style.css" rel="stylesheet" type="text/css" />
</head>


<body>
	<div id=container>

		<div id=logo>
			LED Panel
		</div>
<div id=logo3>
	<?php
	echo date('d.m.Y');
	?>
	</div>
	<div id=logo2> 
	
	<div id="czas"></div>
<script type="text/javascript">
function getTime() 
{
    return (new Date()).toLocaleTimeString();
}
document.getElementById('czas').innerHTML = getTime();
 
setInterval(function() {
 
    document.getElementById('czas').innerHTML = getTime();
     
}, 1000);
</script>
	</div>
		<div id=content>
			<!--LED Panel-->
			<BUTTON>
				ON/OFF switch
			</BUTTON><br/>
			<BUTTON>
				Rise brightness
			</BUTTON><br/>
			<BUTTON>
				Reduce brightness
			</BUTTON><br/>
			<BUTTON onClick="parent.location.href='main.php'">
				Main page
			</BUTTON>
		</div>
	</div>
</body>

</html>