<!DOCTYPE html>
<html>
	<head>
		<title>Boostrap</title>
		<meta charse="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1"/>
		<link rel="stylesheet" href="bootstrap.min.css" />
		<style>
			.navbar{
				margin-bottom:0;
				border-radius:0;
			}
			.row.content{
				height:540px;
				
			}
			.sidenav{
				padding-top: 20px;
				background-color:#f1f1f1;
				height:100%;
				
			}
			footer{
				background-color:#555;
				color:white;
				padding:15px;
			}
			@media screen and(max-width:767px){
				-sidenav{
					height:auto;
					padding:15px;
					
				}
				.row.content{
					height:auto;
				}
			}
		</style>
	</head>
	<body>
		
		<nav class="navbar navbar-inverse">
			<div class="container-fluid">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-toggle="#myNavbar">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="#">Logo</a>
				</div>
				<div class="collapse navbar-collapse" id="myNavbar">
					<ul class="nav navbar-nav">
						<li class="active">
							<a href="#">Home</a>
						</li>
						<li class="active">
							<a href="#">About</a>
						</li>
						<li class="active">
							<a href="#">Projects</a>
						</li>
						<li class="active">
							<a href="#">Contact</a>
						</li>
					</ul>
					<ul class="nav navbar-nav navbar-right">
						<li>
							<a href="#"><span class="glyphincon glyphicon-log-in"></span>Login</a>
						</li>
					</ul>
				</div>
			</div>
		</nav>
		<div class="container-fluid text-center">
			<div class="col-sm-2 ">
				art IV focuses on that subject. You see how to measure lengths,
areas, distances, and volumes; as well as how t
				<p> <a href="#"> Link</a> </p>
				<p> <a href="#"> Link</a> </p>
				<p> <a href="#"> Link</a> </p>
			</div>
			<div class="col-sm-8 text-left">
				<h1>Welcome</h1>
				<p> GIS does its most powerful work when analyzing the patterns that you iden-
tify, and Part IV focuses on that subject. You see how to measure lengths,
areas, distances, and volumes; as well as how to work with networks, such
as highways and streets. I explain both topographic and non-topographic
surfaces, how to analyze rivers and determine where water will flow during
flooding, and how to determine places that an observer can and can’t see
from a certain point. I even show you how to combine maps and use a power-
ful map analysis language called map algebra.
1. Define how and where to best gather, acquire, or sample the data.
Defining how and where to collect data involves decisions about
whether you want to use existing GIS data or maps, collect field data,
perform a census, take polls, interpret aerial photographs, take GPS
readings, or use satellites that provide images of the Earth. Deciding
what type of data you want to collect requires some specific idea of your
data needs and how you can best meet those needs.
2. Collect, or sample, data directly or indirectly by using sensors.
The process of collecting depends on your choice of data. The variety
of input comes with many possible questions regarding location, scale,
sampling schemes, instruments, projections, datums (see Chapter 2),
and time. A good collecting methodology, combined with good instru-
mentation, can have a huge impact on the quality of analysis that your
GIS can perform.
3. Transform the data into a form the computer can recognize.
Having good data doesn’t help your GIS if you can’t get it into the com-
puter. If you’re lucky, the data you need are already in a format that
your GIS can use. Otherwise, the process of moving analog or non-
GIS-compatible data into the computer can be a major part of the GIS
operation — both in terms of time and money. You may need to change
some data from hard copy to digital forms; you may need to convert
some from uncategorized to categorized data (for example, aerial photo
interpretation); and you may need to attach coordinates to digital data
so that you can find them in your digital maps.</p>
		<hr />
		<h3>Test</h3>
		<p> Lorem ipsum....</p>
		</div>
		<div class="col-sm-2 sidenav">
			<div class="well">
				<p> ADS</p>
				1. Define how and where to best gather, acquire, or sample the data.
Defining how and where to collect data involves decisions about
whether you want to use existing GIS data or maps, collect field data,
perform a census, take polls, interpret aerial photographs, take GPS
readings, or use satelli
			</div>
		</div>
		</div>
		<footer class="container-fluid text-center">
			<p>Footer Text</p>
		</footer>
		
		
		
		
		
		
		
		
		
		
		
		
		
		<script type="text/javascript" src="jquery-3.3.1.min.js"></script>
		<script type="text/javascript" src="bootstrap.min.js"></script>
	</body>
</html>