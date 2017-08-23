<!DOCTYPE html>

<html>
	<head>
		<meta charset="utf-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<title>Ask a spider</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous"/>
	</head>
	<body>
		<div class="container">
			<h1>Ask a spider</h1>

			<canvas id="chart" width="200" height="200"></canvas>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.6.0/Chart.min.js" integrity="sha256-SiHXR50l06UwJvHhFY4e5vzwq75vEHH+8fFNpkXePr0=" crossorigin="anonymous"></script>
			<script>
			 var max = 7,
					 min = 0,
					 count = 140;
			 var ctx = document.getElementById("chart").getContext('2d');
			 var chart = new Chart(ctx, {
				 type: 'radar',
				 data: {
					 labels: (function() {
						 var labels = [];
						 for (var i = 0; i < count; i++) {
							 labels.push('q' + i);
						 }

						 return labels;
					 }()),
					 datasets: [{
						 label: 'Answer',
						 fill: false,
						 backgroundColor: 'red',
						 borderColor: 'blue',
						 pointRadius: 8,
             data: []
					 }]
				 },
				 options: {
					 scale: {
						 ticks: {
							 // display: false,
							 min: min,
							 max: max
						 }
					 }
				 }
			 });

			 var addData = function() {
				 if (chart.data.datasets[0].data.length < count) {
					 chart.data.datasets[0].data.push(Math.round(Math.random() * (max - min) + min));
					 setTimeout(addData, 100);
					 // chart.update(0); // No animation
					 chart.update();
				 }
			 };

			 addData();
			</script>
		</div>

		<script src="https://code.jquery.com/jquery.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
	</body>
</html>
