<!DOCTYPE HTML>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
	<title> System kontroli pomieszczenia</title>
	<link href="style.css" rel="stylesheet" type="text/css" />
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
</head>

<body>
<div id=container>
	
	<div id=logo>
		Ambient temperature
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
		<!--interial temperature monitor-->
		<div id=monitor1>
			Interial temperature monitor
		</div>
		
		<div id=monitor1>
			Interial humidity monitor
		</div>
		<!--outdoor humidity monitor-->
		<div id=monitor2>
			outdoor humidity monitor
		</div>
		<!--outdoor temperature widget-->	
		<div style="clear: both" id=widget>
			<a class="weatherwidget-io" href="https://forecast7.com/pl/50d2918d67/gliwice/" data-label_1="GLIWICE" data-label_2="Pogoda na najbliższy tydzień" data-theme="original" >GLIWICE Pogoda na najbliższy tydzień</a>
				<script>
					!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src='https://weatherwidget.io/js/widget.min.js';fjs.parentNode.insertBefore(js,fjs);}}(document,'script','weatherwidget-io-js');
				</script>
		</div><br />
		<BUTTON onClick="parent.location.href='main.php'">
				Main page
		</BUTTON>
	</div>
</div>
</body>

</html>