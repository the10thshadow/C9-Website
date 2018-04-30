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

	<script>
		function Calculate () {
			//inputs
			var amount = document.getElementById("amount");
			var rate = document.getElementById("apr");
			var term = document.getElementById("years");
			//labels & outputs
			var payment = document.getElementById("payment");
			var total = document.getElementById("total");
			var totalinterest = document.getElementById("totalinterest");

			//internal vars
			var amntTotal = parseFloat(amount.value);
			var interest = parseFloat(apr.value);
			var payments = parseFloat(years.value);

			//Math monthly payment
			var x = Math.pow(1 + interest, payments);
			var monthly = (amnt*x*interest)/(x-1);
			if (isFinite(monthly)) {
				//output vars and calculations
				payment.innerHTML = monthly.toFixed(2);
				total.innerHTML = (monthly*payments).toFixed(2);
				totalinterest.innerHTML = ((monthly*payments)-amnt).toFixed(2);
			} else {
				payment.innerHTML = "";
				total.innerHTML = "";
				totalinterest.innerHTML = "";
				chart();
			}
		}
		function chart (amntTotal, interest, monthly, payments) {
			var equity = 0;
			for (var p = 1; p<= payments; p++) {
				var thisMonthsInterest = (amntTotal - equity)*interest;
				equity += (monthly - thisMonthsInterest);
			}
			var bal = amntTotal;
			for(var p = 1; p <= payments; p++) {
				var thisMonthsInterest = bal*interest;
				bar -= (monthly - thisMonthsInterest);
			}
		}
	</script>
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
		<form>
<input class="calcInput" type="number" placeholder="Amount" id="amount" name="amount" onChange="Calculate ()">
<input class="calcInput" type="number" placeholder="Annual Interest" id="apr" name="apr" onChange="Calculate ()">
<input class="calcInput" type="number" placeholder="Repayment period (Years)" id="years" name="years" onChange="Calculate ()">
<input class="calcInput" type="number" placeholder="Zipcode (to find lenders)" id="zipcode" name="zipcode"><br><br><br>
<label class="calcInput" id="payment" name="payment">Approximate Payments</label>
<label class="calcInput">Approximate Payments</label><br><br><br>
<label class="calcInput" id="total" name="total">Total Payment</label>
<label class="calcInput">Total Payment</label><br><br><br>
<label class="calcInput" id="totalinterest" name="totalinterest">Total Interest to pay</label>
<label class="calcInput">Total Interest to pay</label><br>
<button class="buttonInput" type="button" onClick="Calculate ()">Try</button>
</form>
		<canvas id="graph" width="500px" height="300px"></canvas>
</body>
</html>
