<!doctype html>
<html lang="en">
	<head>
	<meta charset="utf-8" />
	<title>Loan Payments Calculator - Mortgage Calculator</title>
	<meta name="description" content="Free online loan payment calculator and personal loan calculator, use our free tools to calculate your loan or finincing payments according to your interest rate, amount and term" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />
	<link type="text/css" href="css/bootstrapXP.css" rel="stylesheet" />
	<link type="text/css" href="css/mycss-v2.css" rel="stylesheet" />
	<!-- <link type="text/css" href="css/mycss-v2.css" rel="stylesheet" /> -->
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,400,700" rel="stylesheet">
	<!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.min.js"></script>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">
</head>

	<body>
    <canvas id="myChart" width="150" height="150"></canvas>
    <script>
        var myChartJs = document.getElementById("myChart").getContext("2d");

        var statsChart = new Chart(myChartJs, {
          type:'pie',
          data: {
            labels:["Interest", "Payment"],
            datasets: [{
              data:[3,13],
              backgroundColor: [
                '#ff7041',
                '#377CB5'
              ],
              borderColor: [
								'#ff7041',
                '#377CB5'
              ],
              borderWidth: 1
            }]
          },
          options: {
            scales: {
              yAxes: [{
                ticks: {
                  beginAtZero:true
                }
              }]
            }
          }
        })
    </script>

		<canvas id="myChartStats" width="150" height="150"></canvas>
    <script>
        var myChartJs = document.getElementById("myChartStats").getContext("2d");
				var nbrTimeArr = [1,2,3,4,5,6,7,8,9,10];
				var count = 0;

				var nbrTimeFrame = <?php $nbrTime = 25; echo "{$nbrTime}"; ?>;
				//while (count < nbrTimeFrame) {
					//nbrTimeArr.fill (count,count,count);
					//count = count + 1;
				//}


        var statsChart = new Chart(myChartJs, {
          type:'line',
          data: {
            labels: nbrTimeArr,
            datasets: [{
              data: nbrTimeArr,
              backgroundColor: [
                '#ff7041',
                '#377CB5'
              ],
              borderColor: [
								'#ff7041',
                '#377CB5'
              ],
              borderWidth: 1
            }]
          },
          options: {
            scales: {
              yAxes: [{
                ticks: {
                  beginAtZero:true
                }
              }]
            }
          }
        })
    </script>
</body>
</html>
