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
		<form onsubmit="Calculate ()">
<input class="calcInput" type="number" placeholder="Amount" id="amount" name="amount">
<input class="calcInput" type="number" placeholder="Annual Interest" id="apr" name="apr">
<input class="calcInput" type="number" placeholder="Repayment period (Years)" id="years" name="years">
<input class="calcInput" type="number" placeholder="Zipcode (to find lenders)" id="zipcode" name="zipcode"><br><br><br>
<label class="calcInput" id="payment" name="payment">Approximate Payments</label><br><br><br>
<label class="calcInput" id="total" name="total">Total Payment</label><br><br><br>
<label class="calcInput" id="totalinterest" name="totalinterest">Total Interest to pay</label><br>
<button class="buttonInput" type="submit">Try</button>
</form>

		<canvas id="graph" width="500px" height="300px"></canvas>
<script>
		function Calculate() {
		  //Look up the input and output elements in the document
		  var amount = document.getElementById("amount");
		  var apr = document.getElementById("apr");
		  var years = document.getElementById("years");
		  var zipcode = document.getElementById("zipcode");
		  var payment = document.getElementById("payment");
		  var total = document.getElementById("total");
		  var totalinterest = document.getElementById("totalinterest");

		// Get the user's input from the input elements.
		// Convert interest from a percentage to a decimal, and convert from
		// an annual rate to a monthly rate. Convert payment period in years
		// to the number of monthly payments.
		var amnt = parseFloat(amount.value);
		var interest = parseFloat(apr.value) / 100 / 12;
		var payments = parseFloat(years.value) * 12;

		// compute the monthly payment figure
		var x = Math.pow(1 + interest, payments); //Math.pow computes powers
		var monthly = (amnt*x*interest)/(x-1);

		// If the result is a finite number, the user's input was good and
		// we have meaningful results to display
		if (isFinite(monthly)){
		  // Fill in the output fields, rounding to 2 decimal places
		  payment.innerHTML = monthly.toFixed(2);
		  total.innerHTML = (monthly * payments).toFixed(2);
		  totalinterest.innerHTML = ((monthly*payments)-amnt).toFixed(2);

		// Save the user's input so we can restore it the next time they visit
		 save(amount.value, apr.value, years.value, zipcode.value);
		 }
		 else {
		 // Result was Not-a-Number or infinite, which means the input was
		 // incomplete or invalid. Clear any previously displayed output.
		 payment.innerHTML = ""; // Erase the content of these elements
		 total.innerHTML = ""
		 totalinterest.innerHTML = "";
		 chart(); // With no arguments, clears the chart
		 }
		}
		// Save the user's input as properties of the localStorage object. Those
		// properties will still be there when the user visits in the future
		// This storage feature will not work in some browsers (Firefox, e.g.) if you
		// run the example from a local file:// URL. It does work over HTTP, however.
		function save(amount, apr, years, zipcode) {
		 if (window.localStorage) { // Only do this if the browser supports it
		 localStorage.loan_amount = amount;
		 localStorage.loan_apr = apr;
		 localStorage.loan_years = years;
		 localStorage.loan_zipcode = zipcode;
		 }
		}
		// Automatically attempt to restore input fields when the document first loads.
		window.onload = function() {
		 // If the browser supports localStorage and we have some stored data
		 if (window.localStorage && localStorage.loan_amount) {
		 document.getElementById("amount").value = localStorage.loan_amount;
		 document.getElementById("apr").value = localStorage.loan_apr;
		 document.getElementById("years").value = localStorage.loan_years;
		 document.getElementById("zipcode").value = localStorage.loan_zipcode;
		 }
		};

		// Chart monthly loan balance, interest and equity in an HTML <canvas> element.
		// If called with no arguments then just erase any previously drawn chart.
		function chart(principal, interest, monthly, payments) {
		 var graph = document.getElementById("graph"); // Get the <canvas> tag
		 graph.width = graph.width; // Magic to clear and reset the canvas element
		 // If we're called with no arguments, or if this browser does not support
		 // graphics in a <canvas> element, then just return now.
		 if (arguments.length == 0 || !graph.getContext) return;
		 // Get the "context" object for the <canvas> that defines the drawing API
		 var g = graph.getContext("2d"); // All drawing is done with this object
		 var width = graph.width, height = graph.height; // Get canvas size
		 // These functions convert payment numbers and dollar amounts to pixels
		 function paymentToX(n) { return n * width/payments; }
		 function amountToY(a) { return height-(a * height/(monthly*payments*1.05));}
		 // Payments are a straight line from (0,0) to (payments, monthly*payments)
		 g.moveTo(paymentToX(0), amountToY(0)); // Start at lower left
		 g.lineTo(paymentToX(payments), // Draw to upper right
		 amountToY(monthly*payments));

		 g.lineTo(paymentToX(payments), amountToY(0)); // Down to lower right
		 g.closePath(); // And back to start
		 g.fillStyle = "#f88"; // Light red
		 g.fill(); // Fill the triangle
		 g.font = "bold 12px sans-serif"; // Define a font
		 g.fillText("Total Interest Payments", 20,20); // Draw text in legend
		 // Cumulative equity is non-linear and trickier to chart
		 var equity = 0;
		 g.beginPath(); // Begin a new shape
		 g.moveTo(paymentToX(0), amountToY(0)); // starting at lower-left
		 for(var p = 1; p <= payments; p++) {
		 // For each payment, figure out how much is interest
		 var thisMonthsInterest = (principal-equity)*interest;
		 equity += (monthly - thisMonthsInterest); // The rest goes to equity
		 g.lineTo(paymentToX(p),amountToY(equity)); // Line to this point
		 }
		 g.lineTo(paymentToX(payments), amountToY(0)); // Line back to X axis
		 g.closePath(); // And back to start point
		 g.fillStyle = "green"; // Now use green paint
		 g.fill(); // And fill area under curve
		 g.fillText("Total Equity", 20,35); // Label it in green
		 // Loop again, as above, but chart loan balance as a thick black line
		 var bal = principal;
		 g.beginPath();
		 g.moveTo(paymentToX(0),amountToY(bal));
		 for(var p = 1; p <= payments; p++) {
		 var thisMonthsInterest = bal*interest;
		 bal -= (monthly - thisMonthsInterest); // The rest goes to equity
		 g.lineTo(paymentToX(p),amountToY(bal)); // Draw line to this point
		 }
		 g.lineWidth = 3; // Use a thick line
		 g.stroke(); // Draw the balance curve
		 g.fillStyle = "black"; // Switch to black text
		 g.fillText("Loan Balance", 20,50); // Legend entry
		 // Now make yearly tick marks and year numbers on X axis
		 g.textAlign="center"; // Center text over ticks
		 var y = amountToY(0); // Y coordinate of X axis
		 for(var year=1; year*12 <= payments; year++) { // For each year
		 var x = paymentToX(year*12); // Compute tick position
		 g.fillRect(x-0.5,y-3,1,3); // Draw the tick
		 if (year == 1) g.fillText("Year", x, y-5); // Label the axis
		 if (year % 5 == 0 && year*12 !== payments) // Number every 5 years
		 g.fillText(String(year), x, y-5);
		 }
		 // Mark payment amounts along the right edge
		 g.textAlign = "right"; // Right-justify text
		 g.textBaseline = "middle"; // Center it vertically
		 var ticks = [monthly*payments, principal]; // The two points we'll mark
		 var rightEdge = paymentToX(payments); // X coordinate of Y axis
		 for(var i = 0; i < ticks.length; i++) { // For each of the 2 points
		 var y = amountToY(ticks[i]); // Compute Y position of tick

		   g.fillRect(rightEdge-3, y-0.5, 3,1); // Draw the tick mark
		 g.fillText(String(ticks[i].toFixed(0)), // And label it.
		 rightEdge-5, y);
		 }
		}


		</script>
</body>
</html>
