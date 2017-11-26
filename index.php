<!DOCTYPE html>
<html>
<head>
	<title>Weight Converter</title>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">

</head>
<body>

	<div class="container">
		<div class="row">
			<div class="col-md-6 offset-md-3">
				<h1 class="display-4 text-center mb-3">Weight Converter</h1>
			</div>
		</div>
	

		<form class="form-group">
			<input id="input" type="number" class="form-control form-control-lg" placeholder="Enter Pounds">
		</form>

		<div class="buttons">
			<div id="lbsButton" class="col-4 float-left mb-3">
				<button id="lbsConvert" class="btn btn-secondary w-100">Pounds</button>
			</div>
			<div id="gButton" class="col-4 float-left mb-3">
				<button id="gConvert" class="btn btn-secondary w-100">Grams</button>
			</div>
			<div id="kgButton" class="col-4 float-left mb-3">
				<button id="kgConvert" class="btn btn-secondary w-100">Kilograms</button>
			</div>
			<div id="ozButton" class="col-4 float-left mb-3">
				<button id="ozConvert" class="btn btn-secondary w-100">Ounces</button>
			</div>
		</div>

		<div id="output">
			<div class="card card-primary mb-2">
				<div class="card-block">
					<h4 id="outputLabel1">Grams:</h4>
					<div id="Output1"></div>
				</div>
			</div>

			<div class="card card-success mb-2">
				<div class="card-block">
					<h4 id="outputLabel2">Kilograms:</h4>
					<div id="Output2"></div>
				</div>
			</div>

			<div class="card card-danger mb-2">
				<div class="card-block">
					<h4 id="outputLabel3">Ounces:</h4>
					<div id="Output3"></div>
				</div>
			</div>
		</div>

	</div>


	<script type="text/javascript">
		var landingPage = 0

		if(landingPage == 0) {
			
			document.getElementById('output').style.visibility = 'hidden';
			document.getElementById('lbsButton').style.display = 'none';

			document.getElementById('input').addEventListener('input', function(e) {
				let lbs = e.target.value;

				document.getElementById('output').style.visibility = 'visible';

				document.getElementById('Output1').innerHTML = lbs/0.0022046;
				document.getElementById('Output2').innerHTML = lbs/2.2046;
				document.getElementById('Output3').innerHTML = lbs*16;
			});

			landingPage++;
		}

		//POUNDS
		document.getElementById('lbsConvert').addEventListener('click', function() {

			//Clear input
			document.getElementById('input').value = "";

			//Hide Conversions
			document.getElementById('output').style.visibility = 'hidden';

			//Change ids
			document.getElementById('input').placeholder = 'Enter Pounds';

			//change labels
			document.getElementById('outputLabel1').innerHTML = "Grams:";
			document.getElementById('outputLabel2').innerHTML = "Kilorams:";
			document.getElementById('outputLabel3').innerHTML = "Ounces:";

			//Hide convert to grams button and show others
			document.getElementById('lbsButton').style.display = 'none';
			document.getElementById('gButton').style.display = 'block';
			document.getElementById('kgButton').style.display = 'block';
			document.getElementById('ozButton').style.display = 'block';
			
			//Hide Conversions untill input entered
			document.getElementById('input').addEventListener('input', function(e) {
				let lbs = e.target.value;

				document.getElementById('output').style.visibility = 'visible';

				document.getElementById('Output1').innerHTML = lbs/0.0022046;
				document.getElementById('Output2').innerHTML = lbs/2.2046;
				document.getElementById('Output3').innerHTML = lbs*16;

			});
		});

		//GRAMS
		document.getElementById('gConvert').addEventListener('click', function() {

			//Clear input
			document.getElementById('input').value = "";

			//Hide Conversions
			document.getElementById('output').style.visibility = 'hidden';

			//Change ids
			document.getElementById('input').placeholder = 'Enter Grams';

			//change labels
			document.getElementById('outputLabel1').innerHTML = "Pounds:";
			document.getElementById('outputLabel2').innerHTML = "Kilorams:";
			document.getElementById('outputLabel3').innerHTML = "Ounces:";

			//Hide convert to grams button and show others
			document.getElementById('lbsButton').style.display = 'block';
			document.getElementById('gButton').style.display = 'none';
			document.getElementById('kgButton').style.display = 'block';
			document.getElementById('ozButton').style.display = 'block';
			
			//Hide Conversions untill input entered
			document.getElementById('input').addEventListener('input', function(e) {
				let g = e.target.value;

				document.getElementById('output').style.visibility = 'visible';

				document.getElementById('Output1').innerHTML = g/453.592;
				document.getElementById('Output2').innerHTML = g/1000;
				document.getElementById('Output3').innerHTML = g/28.3495;

			});
		});

		//KILOGRAMS
		document.getElementById('kgConvert').addEventListener('click', function() {

			//Clear input
			document.getElementById('input').value = "";

			//Hide Conversions
			document.getElementById('output').style.visibility = 'hidden';

			//Change ids
			document.getElementById('input').placeholder = 'Enter Kilograms';

			//change labels
			document.getElementById('outputLabel1').innerHTML = "Pounds:";
			document.getElementById('outputLabel2').innerHTML = "Grams:";
			document.getElementById('outputLabel3').innerHTML = "Ounces:";

			//Hide convert to grams button and show others
			document.getElementById('lbsButton').style.display = 'block';
			document.getElementById('gButton').style.display = 'block';
			document.getElementById('kgButton').style.display = 'none';
			document.getElementById('ozButton').style.display = 'block';
			
			//Hide Conversions untill input entered
			document.getElementById('input').addEventListener('input', function(e) {
				let kg = e.target.value;

				document.getElementById('output').style.visibility = 'visible';

				document.getElementById('Output1').innerHTML = kg*2.20462;
				document.getElementById('Output2').innerHTML = kg*1000;
				document.getElementById('Output3').innerHTML = kg*35.274;

			});
		});

		//OUNCES
		document.getElementById('ozConvert').addEventListener('click', function() {

			//Clear input
			document.getElementById('input').value = "";

			//Hide Conversions
			document.getElementById('output').style.visibility = 'hidden';

			//Change ids
			document.getElementById('input').placeholder = 'Enter Ounces';

			//change labels
			document.getElementById('outputLabel1').innerHTML = "Pounds:";
			document.getElementById('outputLabel2').innerHTML = "Grams:";
			document.getElementById('outputLabel3').innerHTML = "Kilograms:";

			//Hide convert to grams button and show others
			document.getElementById('lbsButton').style.display = 'block';
			document.getElementById('gButton').style.display = 'block';
			document.getElementById('kgButton').style.display = 'block';
			document.getElementById('ozButton').style.display = 'none';
			
			//Hide Conversions untill input entered
			document.getElementById('input').addEventListener('input', function(e) {
				let oz = e.target.value;

				document.getElementById('output').style.visibility = 'visible';

				document.getElementById('Output1').innerHTML = oz/16;
				document.getElementById('Output2').innerHTML = oz*28.3495;
				document.getElementById('Output3').innerHTML = oz/35.274;

			});
		});



	</script>

</body>
</html>

<style type="text/css">
	body {
		margin-top: 70px;
		background: #333;
		color: white;
	}

	h1.text-center {
		margin-bottom: 5rem !important;
	}

	#lbsButton {
		display: none;
	}
</style>