<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Mateo Guizado</title>
	<meta name="author" content="Mateo Guizado" />
	<meta name="description" content="Portafolio y hoja de vida, Mateo Guizado" />
	<meta name="keywords" content="Mateo,Guizado,maquetador web,web,inside,demo,css,css3" />
	<meta name="Resource-type" content="Document" />


	<link rel="stylesheet" type="text/css" href="jquery.fullPage.css" />
	<link rel="stylesheet" type="text/css" href="examples.css" />
	<link rel="stylesheet" type="text/css" href="main.css" />
	<link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Muli' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

	<!--[if IE]>
		<script type="text/javascript">
			 var console = { log: function() {} };
		</script>
	<![endif]-->

	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.9.1/jquery-ui.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
	<script type="text/javascript" src="jquery.fullPage.js"></script>
	<script type="text/javascript" src="examples.js"></script>
	<script type="text/javascript">
		$(document).ready(function() {
			$('#fullpage').fullpage({
				'css3': true,
				'sectionsColor': ['#F0F2F4', '#1F191A', '#1F191A', '#1F191A', '#1F191A', '#F0F2F4',],

				'afterLoad': function(anchorLink, index){
					if(index == 2){
						$('#sub1').addClass('has_subtitle');
					}
					if(index == 3){
						$('#sub2').addClass('has_subtitle');
					}
					if(index == 4){
						$('#sub3').addClass('has_subtitle');
					}
					if(index == 5){
						$('#sub4').addClass('has_subtitle');
					}
					if(index == 6){
						$('#sub5').addClass('has_subtitle');
					}
					// if(index == 1){
					// 	alert('123');
					// }
				},
				'onLeave': function(index, nextIndex, direction){
					// if (index == 2 && direction == 'up'){
					// 	$('#luna2').removeClass('luna-2');
					// }
					// else if(index == 3 && direction == 'down'){
					// 	$('#luna2').removeClass('luna-2');
					// }
				}
			});
		});
	</script>

</head>
<body>




<div id="fullpage">
	<div class="section" id="section0">
	<img src="imgs/luna.png" class="luna-active" id="luna">
		<img class="first_photo" id="mateo" src="imgs/mateo.jpg" alt="fullPage" />
		<h1 class="name"><span style="color: #1cdcde;">M</span>ateo <span style="color: #ee0e1e;">G</span>uizado</h1>
		<p>Front-end developer & teacher</p>
	</div>
	<div class="section" id="section1">
	<h1 class="internal_title"><span style="color: #1cdcde;">P</span>rofil<span style="color: #ee0e1e;">e</span></h1>
	<div id="sub1" style="width: 1px;"></div>
	<div class="container">
	<img src="imgs/gear.png" class="icon_section" id="">
	<p>And yes, that's me, a young front-end developer with a huge attraction to mobile devices, passionate about what he does, curious to discover and learn new development tools. I don´t know what else to put here, so please continue to see my skills :D</p>
	</div>
	</div>
	<div class="section" id="section2">
		<div class="intro">
			<h1 class="habilidades"><span style="color: #1cdcde;">S</span>kill<span style="color: #ee0e1e;">s</span></h1>
			<div id="sub2" style="width: 1px;"></div>

			<div class="slide" id="slide1">
				<div class="container">
					<div class="skills_items">
						<img src="img/html.png" class="img-responsive">
						<img src="img/css3.png" class="img-responsive">
						<img src="img/php.png" class="img-responsive">
						<img src="img/mysql.png" class="img-responsive">
					</div>
				</div>
			</div>
			<div class="slide" id="slide2">
				<div class="container">
					<div class="skills_items">
						<img src="img/jquery.png" class="img-responsive">
						<img src="img/angularjs.png" class="img-responsive">
						<img src="img/jquerymovile.png" class="img-responsive">
						<img src="img/ionic.png" class="img-responsive">
						<img src="img/phonegap.png" class="img-responsive">
						<img src="img/bootstrap.png" class="img-responsive">
					</div>
				</div>
			</div>
			<div class="slide" id="slide3">
				<div class="container">
					<div class="skills_items">
						<img src="img/wordpress.png" class="img-responsive">
						<img src="img/droupal.png" class="img-responsive">
						<img src="img/joomla.png" class="img-responsive">
					</div>
				</div>
			</div>
			<div class="slide" id="slide4">
				<div class="container">
					<div class="skills_items">
						<img src="img/photoshop.png" class="img-responsive">
						<img src="img/illustrator.png" class="img-responsive">
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="section" id="section3">
	<h1 class="internal_title"><span style="color: #1cdcde;">E</span>xperienc<span style="color: #ee0e1e;">e</span></h1>
	<div id="sub3" style="width: 1px;"></div>
	<div class="container">
		<div class="row">
			<div class="col-xs-6">
				<img src="img/eiso.png" class="img-responsive" style="margin: auto;">
				<h2>Frontend developer, web analyst, multimedial.</h2>
				<p>Website development starting from scratch or from templates, application development hybrid or web, coordinator web layout and structure 100% responsive, responsible for providing direct relationship with the customer trainings.</p>
				<i>2013 - 2016</i>
			</div>
			<div class="col-xs-6">
				<img src="img/cencac.png" class="img-responsive" style="margin: auto;">
				<h2>Teacher</h2>
				<p>Teaching sistems to young and old people.</p>
				<i>2015 - 2016</i>
			</div>
		</div>
	</div>
	</div>
	<div class="section" id="section4">
	<h1 class="internal_title"><span style="color: #1cdcde;">I</span>diom<span style="color: #ee0e1e;">s</span></h1>
	<div id="sub4" style="width: 1px;"></div>
	<div class="container">
		<div class="row">
			<div class="col-xs-6">
				<img src="img/es.png" class="img-responsive" style="margin: auto;">
				<h2>Native</h2>
			</div>
			<div class="col-xs-6">
				<img src="img/en.png" class="img-responsive" style="margin: auto;">
				<h2>B1 / Intermediate</h2>
			</div>
		</div>
	</div>
	</div>
	<div class="section" id="section5">
	<h1 class="internal_title"><span style="color: #1cdcde;">C</span>ontac<span style="color: #ee0e1e;">t</span></h1>
	<div id="sub5" style="width: 1px;"></div>
	<div class="container">
		<h2>Cali / Colombia</h2>
		<p style="color: #1CDCDE; font-size: 24px; font-weight: bold; text-shadow: 0 0 5px;">Mateogp763@gmail.com</p>
		<p style="color: #EE0E1E; font-size: 24px; font-weight: bold; text-shadow: 0 0 5px;">301 700 1979</p>
	</div>
	</div>
</div>

</body>
<script type="text/javascript">
	$(document).ready(function() {
	var movementStrength = 25;
	var height = movementStrength / $(window).height();
	var width = movementStrength / $(window).width();
	$("#section0").mousemove(function(e){
	var pageX = e.pageX - ($(window).width() / 2);
	var pageY = e.pageY - ($(window).height() / 2);
	var newvalueX = width * pageX * -1 - 137;
	var newvalueY = height * pageY * -1 - 80;
	$('#section0').css("background-position", newvalueX+"px     "+newvalueY+"px");
	});
	});
</script>
</html>
