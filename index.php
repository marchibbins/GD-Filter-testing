<!DOCTYPE html>
<html lang="en-US">
<head>
	<meta charset="utf-8"/>
	<title>PHP GD Filter testing</title>
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script>
	<script type="text/javascript">
		$(function() {
			$('#thumbnails a').click(function() {
				$('#preview img').attr({'src': $('img', this).attr('src'), 'class': 'image' + $(this).index()});
				return false;
			});

			$('[type=radio]').click(function() {
				var image = $('#preview img').attr('class');
				if ($('p').length == 0) $('.read').after('<p>Processing...</p>');
				
				$('#preview img').load(function() {
					$('p').remove();
				}).attr('src', 'process.php?image=' + image + '&filter=' + $(this).val());
			});
		});
	</script>
	<style type="text/css">
		body {
			font-family: Arial, sans-serif;
			font-size: 75%;
			width: 950px;
			text-align: center;
			margin: 0 auto;
		}
		
		h1 {
			text-align: left;
			font-weight: normal;
			margin: 0.5em 0;
		}
		
		a, img {
			border: none;
			outline: none;
		}
		
		legend {
			text-align: left;
		}
		
		fieldset {
			padding-bottom: 20px;
		}
		
		.read {
			display: block;
			margin-top: 5px;
			text-align: left;
		}

		
	</style>
</head>
<body>
	<h1>PHP GD Filter testing</h1>
	<div id="thumbnails">
		<a href="#"><img src="images/coffee.jpg" height="84"/></a>
		<a href="#"><img src="images/bicycle.jpg" height="84"/></a>
		<a href="#"><img src="images/lady.jpg" height="84"/></a>
		<a href="#"><img src="images/dusk.jpg" height="84"/></a>
		<a href="#"><img src="images/dog.jpg" height="84"/></a>
		<a href="#"><img src="images/hero.jpg" height="84"/></a>
		<a href="#"><img src="images/guitar.jpg" height="84"/></a>
	</div>
	<div id="preview">
		<img src="images/coffee.jpg" class="image0"/>
	</div>
	<div id="filters">
		<form>
			<fieldset>
				<legend>Filter</legend>
				<input type="radio" name="filter" id="none" value="antique"/>
					<label for="none">Antique</label>
				<input type="radio" name="filter" id="none" value="blackwhite"/>
					<label for="none">Black &amp; White</label>
				<input type="radio" name="filter" id="none" value="boost"/>
					<label for="none">Boost</label>
				<input type="radio" name="filter" id="none" value="sepia"/>
					<label for="none">Sepia</label>
				<input type="radio" name="filter" id="none" value="blur"/>
					<label for="none">Blur</label>
				<input type="radio" name="filter" id="none" value="dreamy"/>
					<label for="none">Dreamy</label>
				<input type="radio" name="filter" id="none" value="velvet"/>
					<label for="none">Blue Velvet</label>
				<input type="radio" name="filter" id="none" value="chrome"/>
					<label for="none">Chrome</label>
				<input type="radio" name="filter" id="none" value="lift"/>
					<label for="none">Lift</label>
				<input type="radio" name="filter" id="none" value="canvas"/>
					<label for="none">Canvas</label>
				<input type="radio" name="filter" id="none" value="vintage"/>
					<label for="none">Vintage</label>
				<input type="radio" name="filter" id="none" value="monopin"/>
					<label for="none">Monopin</label>
			</fieldset>
		</form>
	</div>
	<a href="http://blog.marchibbins.com/2011/03/08/hip-to-be-square/" class="read">Read more</a>
</body>
</html>