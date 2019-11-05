<!doctype html>
	<html>
		<head>
			<meta charset="utf-8" />
			<title>Le titre de la page</title>
			<script type="text/jscript" src="jquery-3.3.1.min.js"></script>
		</head>
<body>
	<!--<div >
	<form id="lesEntrees" action="cible.php?nom=''" method="post">
		Nom : <input type="text" name="input0" /><br/><br/>
		<input type="hidden" name="nbreInput" id="champNombreInput" value="1"/>
		<button type="submit" id="buttonEnreg">Enregistrer</button>
	</form>
	
	
	</div>
	<button id="btn">add</button>
	-->
		<p style="background-color:green;">This is the firt paragraph</p>
		<p style="background-color: red;"> The second paragraph</p>
		<p style="background-color: yellow;">The last one</p>
		<button id="btn">click here</button>
	<script>
		$(document).ready(function(){
			$('#btn').click(function(){
				$('p').css("background-color":"red","width":"10cm");
			});
		});
	
	
	
	
	
	
	
	/*	var inputCounter = 1;
		$(document).ready(function(){
			$('#btn').click(function(){
				var le = 1;
				$('#lesEntrees').append(' Nom : <input type="text" name="input'+inputCounter+'"/><br/><br/>');
				
				inputCounter++;
				$("#champNombreInput").val(inputCounter);
				
			});
		
		});*/
	</script>
</body>
</html>