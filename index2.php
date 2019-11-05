<!DOCTYPE html>
<html>
	<head>
		<title>Boostrap</title>
		<meta charse="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1"/>
		<link rel="stylesheet" href="dist/css/bootstrap.min.css" />
		
	</head>
	<body>
		<div class="well" style="background-color: #101010" data-spy="affix" data-offset-top="197">
			<div class="row">
				<div class="col-sm-2" >
					<img src="image/IMG-20171201-WA0032.jpg" width="50" height="50" class="img-circle" />
					</div>
					<div class="col-sm-2">
						
					</div>
					<div class="col-sm-2" >
						Mardi
					</div>
					<div class="col-sm-2" >
						Mercredi
					</div>
					<div class="col-sm-2" >
						Jeudi
					</div>
					<div class="col-sm-2">
						<form>
			<div class="input-group">
				<input type="text" class="form-control" placeholder="Search" />
				<div class="input-group-btn">
					<button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
				</div>
			</div>
		</form>
					</div>
			</div>
			</div>
		
<div class="container-fuid"></div>
<div class="row">
	<div class="col-sm-4" style="background-color: lavender">
		<h2>Basic Table</h2>
		<table class="table table-hover">
			<thead>
				<tr>
					<th>Firstname</th>
					<th>Lastname</th>
					<th>Email</th>
				</tr>
			</thead>
			<tbody>
				<tr class="danger">
					<td>John</td>
					<td>Doe</td>
					<td>pangemito@com</td>
				</tr>
				<tr class="info">
					<td>Mary</td>
					<td>Pie</td>
					<td>mary@example.com</td>
				</tr>
			</tbody>
		</table>
	<form action="#">
		<div class="form-group">
			<label for="email">Email address : </label>
			<input type="email" placeholder="Enter email" class="form-control" id="email" />
				<label for="email">Password : </label>
			<input placeholder="Enter password" type="email" class="form-control" id="email" />
			<div class="checkbox">
				<label><input type="checkbox" />Remember me</label>
			</div>
			<button type="submit" class="btn btn-success">Submit</button>
		</div>
	</form>	
		
	</div>
	<div class="col-sm-4" style="background-color: lavenderblush">
		<img src="image/IMG-20171201-WA0032.jpg" class="img-responsive"class="img-circle" />
		Qu'est-ce que l'instanciation ? C'est le fait de créer une instance (ç-à-d un objet) d'un type class ou struct.
C'est donc le fait de créer une nouvelle variable objet. Un type classe décrit ce qu'ont en commun tous les objets
qui seront générés, ç-à-d leurs caractéristiques communes. Un objet est donc une instance particulière d'un
ensemble potentiellement infini d'objets ayant des traits communs : mêmes méthodes et mêmes attributs. En
revanche les objets n'ont pas tous le même état (les attributs n'ont pas tous les mêmes valeurs !)
Dans l'exemple précédent, p3 et p4 désignent deux instances (deux objets) de la classe PointC . Les deux objets
ont les mêmes attributs et les mêmes méthodes (les mêmes caractéristiques). Mais ils n'ont pas le même état.
3.3. Types valeurs / Types référence
En C#, selon le type d'une variable / d'un objet (rappelons qu'un objet n'est rien d'autre qu'une variable
structurée), l'allocation de mémoire est différent. L'allocation d'une variable n'est donc pas le simple fait du
programmeur (comme en C où l'on choisit ce que l'on met dans la pile (par défaut) et ce que l'on met dans le tas
(allocation dyamique par des fonctions spécifiques)).
En C#, selon le type d'une variable, celle-ci est réservée soit dans la pile soit dans le tas (mémoire allouée
dynamiquement). On distingue deux catégories de types : les types “valeur” et les types “référence”.
	</div>
	<div class="col-sm-4" style="background-color: white">
	<div class="panel-groud">
	<div class="panel panel-success">
		<div class="panel-heading"> Panel with panel-primary</div>
		<div class="panel-body"> Panel with panel-primary</div>
	</div>
	<div class="panel panel-info">
		<div class="panel-heading"> Panel with panel-primary</div>
		<div class="panel-body"> Panel with panel-primary</div>
	</div>
	<div class="panel panel-danger">
		<div class="panel-heading"> Panel with panel-primary</div>
		<div class="panel-body"> Panel with panel-primary</div>
	</div>
	
	<input type="file" id="input" />
	<img id="btn12" src="image/IMG-20171201-WA0032.jpg" class="img-responsive"/>
	<script type="text/javascript" src="jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="bootstrap.min.js"></script>
		
	<script type="text/javascript">
		$(document).ready(function(){
			$("#btn12").click(function(){
				$("#input").toggle();
			});
		});
		
	</script>
		</div>	
		
	</body>
</html>