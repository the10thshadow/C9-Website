<?php
/*V 6.0 Feb 20th 2017
	- New analytics ajax system
V 5.1 December 30th 2015
	-DB Conection is always closed straight from the view, no need to close in footer
V 5.0 September 07 2015
	- New Session structure for Shopping carts and sites with sessions in _session_settings.php
/*V. August 12 2015
 - New Stats Tracking
 */
include_once('_settings.php');
startSession();

//Preview in Developer Mode
if(isset($dev) && $dev==true){
	$_SESSION['dev'] = true;
	$_SESSION['rc'] = true;
	header('location: '.str_replace("?dev=true","",$thisURL));
}
//Prevent Right Click
if(isset($RC) && $RC==true){
	$_SESSION['rc'] = true;
	header('location: '.str_replace("?RC=true","",$thisURL));
}
if($under_construction && !isset($_SESSION['dev'])){
	if(file_exists($theme_path.'_splash.php')){
		include_once($theme_path.'_splash.php');
	}else{
		include_once('_splash.php');
	}
}else{

	if(!in_array($thisPage,$no_headers)){
		include_once($theme_path.'_header.php');
		include_once($theme_path.$thisPage.".php");
		//Tracking 
		if(isset($thisPage)){
		?>
		<script>
		$(window).on("load", function() {
			// weave your magic here.
			$.ajax({
				url:'/ajax/analytics.php',
				type:'POST',
				data:{
					pageid:'<?php echo $thisPage; ?>',
					trackpage:'<?php echo $request; ?>',
					ln:'<?php echo LANG; ?>'
				},
				success:function(response){
					console.log(response);
				}
			});					
		});
		</script>
		<script>
			$(document).ready(function(){
				//Fixes for Font Awesome Upgrade 4 -> 5
				// C
				$('.fa-comments-o').removeClass('fa').addClass('fas').addClass('fa-comments').removeClass('fa-comments-o');//comments
				$('.fa-connectdevelop').removeClass('fa').addClass('fab'); //connect develop
				// F
				$('.fa-facebook').removeClass('fa').addClass('fab'); //facebook
				$('.fa-facebook-f').removeClass('fa').addClass('fab'); //facebook
				$('.fa-facebook-square').removeClass('fa').addClass('fab'); //facebook
				//G
				$('.fa-file-text-o').removeClass('fa').addClass('far').addClass('fa-file-alt').removeClass('fa-file-text-o'); //file
				$('.fa-google-plus').removeClass('fa').addClass('fab'); //Google
				// I
				$('.fa-instagram').removeClass('fa').addClass('fab'); //instagram
				// L
				$('.fa-lightbulb-o').removeClass('fa').addClass('far').addClass('fa-lightbulb').removeClass('fa-lightbulb-o'); //light bulb
				$('.fa-linkedin').removeClass('fa').addClass('fab'); //Linked In
				// P
				$('.fa-paypal').removeClass('fa').addClass('fab'); //paypal
				$('.fa-pencil-square-o').removeClass('fa').addClass('far').addClass('fa-edit').removeClass('fa-pencil-square-o'); //edit
				$('.fa-picture-o').removeClass('fa').addClass('far').addClass('fa-image').removeClass('fa-picture-o'); //picture / image
				$('.fa-pinterest-p').removeClass('fa').addClass('fab'); //Pinterest
				// R
				$('.fa-refresh').removeClass('fa').addClass('fas').addClass('fa-sync').removeClass('fa-refresh'); //refresh - captchaXP
				// T
				$('.fa-trash-o').removeClass('fa').addClass('far').addClass('fa-trash-alt').removeClass('fa-trash-o');//trash
				$('.fa-twitter').removeClass('fa').addClass('fab'); //twitter
				$('.fa-twitter-square').removeClass('fa').addClass('fab'); //twitter
				// V
				$('.fa-video-camera').removeClass('fa').addClass('fas').addClass('fa-video').removeClass('fa-video-camera'); //video camera
				
			});
		</script>

		<div class="fullContainer">
		<div class="fullContainerCalcMortgage">
				<!-- Banner background image one goes here -->
				<div class="container bannerTextBG">
				<h2 class="bannerText">Mortgage Loan Calculator<br>Summary Results</h2>
			</div>
			</div>
	</div>
		<div class="container col-12">
		<div class="col-3 desktop tablet floatLeft">
				<div class="ad1"></div>
			</div>
		<div class="col-8 col-mob-12 floatRight">
		<div class="col-12 floatRight ">
			<!-- Content goes here -->
			<div class="col-6 col-tab-8 col-mob-12 clearFloat floatLeft inline-fix tabPieFix">
			<canvas id="myChart" height="400"></canvas>
			<script>
		    	var myChartJs = document.getElementById("myChart").getContext("2d");
					var amount = <?php $amount = $_GET["hAmmount"]; echo $amount;?>;
					var interest = 12000;

					var statsChart = new Chart(myChartJs, {
						type:'pie',
						data: {
							labels:["Your Interest", "Your Payment"],
							datasets: [{
								label:"# of votes",
								data:[interest, amount],
								backgroundColor: [
									'#ff7041',
									'#337CB5'
								],
								borderColor: [
									'#ff7041',
									'#337CB5'
								],
								borderWidth: 1
							}]
						},
						options: {
							scales: {
								yAxes: [{
									ticks: {display:false},
									gridLines: {display:false}
								}],
								xAxes: [{
									ticks: {display:false},
									gridLines: {display:false}
								}]
						}
					}
					})

			</script>
		</div>
		<div class="col-5 col-tab-8 col-mob-12 floatRight inline-fix">
			<div class="calcForm">
				<div class="textResult">
					<h2 class="centered">Pie Chart Results</h2>
				</div>
				<div>
					<p>
						Lorem nusquam sensibus ei mei, vis te convenire efficiendi definitiones. Eum vidisse mnesarchum ne, at usu animal docendi fabellas, at error erant mei. His errem fabulas percipit ne. Errem primis appellantur ne mei, in utamur inimicus pri. Ne usu scripserit ullamcorper, et solet euismod eruditi usu, an brute elaboraret pro.
					</p>
				</div>
			</div>
		</div>


			<div class="col-tab-12 col-mob-12 tabLineFix">
			<canvas id="myChartLine" class="chartjs" height="168"></canvas>
			<script>
		    	var myChartJs = document.getElementById("myChartLine").getContext("2d");
					var amount = <?php $amount = $_GET["hAmmount"]; echo $amount;?>;
					var interest = 12000;
					var monthly;
					var interestRate;
					var interestMonthly;
					var termPeriod = <?php $term = $_GET[""]; echo $term;?>
					var months[] = ["January", "Febuary", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
					

					var statsChart = new Chart(myChartJs, {
						type:'line',
						data: {
							labels:["January", "Febuary", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"],
							datasets: [{
								label:["Your Total Balance"],
								data:[amount,45000,41000,35000,31000,27000,23000,19000,16000,12000,4500,0],
								"fill": false,
								borderColor: [
									'#337CB5'
								],
								backgroundColor:[
									'#337CB5'
								],
								borderWidth: 1,
							}, {
								label:["Total Interest Paid"],
								data:[1200, 2500, 8000, 12000, 15000, 19500, 22000, 26000, 31000, 36000,48000],
								type:'line',
								"fill": false,
								borderColor: [
									'#ff7041'
								],
								backgroundColor:[
									'#ff7041'
								],
								borderWidth: 1
							}, {
								label:["Interest to Pay off"],
								data:[43000,41000,35000,31000,26000,22000,19000,15000,12000,8000,0,0],
								type:'line',
								"fill": false,
								borderColor: [
									'green'
								],
								backgroundColor:[
									'green'
								],
								borderWidth: 1
							}]
						},
						options: {
							scales: {
								yAxes: [{
									ticks: {display:true},
									gridLines: {display:false}
								}],
								xAxes: [{
									ticks: {display:true},
									gridLines: {display:false}
								}]
						}
					}
					})

			</script>
		</div>
			<div class="centered clearFloat">
				<h2 class="centered">Detailed Summary</h2>
			</div>
			<div class="gridForm col-12 col-tab-12 clearFloat">
				<div class="gridTitles centered col-12 col-mob-12">
					<p class="col-2 col-mob-4 desktop tablet mobile inline-fix">Installments</p>
					<p class="col-2 desktop tablet centered inline-fix">Prev. Balance</p>
					<p class="col-2 col-mob-4 desktop tablet mobile centered inline-fix">Interest</p>
					<p class="col-2 desktop tablet centered inline-fix">Payment</p>
					<p class="col-2 desktop tablet centered inline-fix">New Balance</p>
					<p class="col-2 col-mob-4 desktop tablet mobile centered inline-fix">Cummulative Interest</p>
				</div>
				<div class="gridText centered col-12">
					<p class="col-2 col-mob-4 desktop tablet mobile inline-fix">1.</p>
					<p class="col-2 desktop tablet centered inline-fix">$50000.00</p>
					<p class="col-2 col-mob-4 desktop tablet mobile centered inline-fix">$130.00</p>
					<p class="col-2 desktop tablet centered inline-fix">$2479.41</p>
					<p class="col-2 desktop tablet centered inline-fix">$45000.00</p>
					<p class="col-2 col-mob-4 desktop tablet mobile centered inline-fix">$1470.00</p>
				</div>
				<div class="gridText centered col-12">
					<p class="col-2 col-mob-4 desktop tablet mobile inline-fix">2.</p>
					<p class="col-2 desktop tablet centered inline-fix">$50000.00</p>
					<p class="col-2 col-mob-4 desktop tablet mobile centered inline-fix">$130.00</p>
					<p class="col-2 desktop tablet centered inline-fix">$2479.41</p>
					<p class="col-2 desktop tablet centered inline-fix">$45000.00</p>
					<p class="col-2 col-mob-4 desktop tablet mobile centered inline-fix">$1470.00</p>
				</div>
				<div class="gridText centered col-12">
					<p class="col-2 col-mob-4 desktop tablet mobile inline-fix">3.</p>
					<p class="col-2 desktop tablet centered inline-fix">$50000.00</p>
					<p class="col-2 col-mob-4 desktop tablet mobile centered inline-fix">$130.00</p>
					<p class="col-2 desktop tablet centered inline-fix">$2479.41</p>
					<p class="col-2 desktop tablet centered inline-fix">$45000.00</p>
					<p class="col-2 col-mob-4 desktop tablet mobile centered inline-fix">$1470.00</p>
				</div>
				<div class="gridText centered col-12">
					<p class="col-2 col-mob-4 desktop tablet mobile inline-fix">4.</p>
					<p class="col-2 desktop tablet centered inline-fix">$50000.00</p>
					<p class="col-2 col-mob-4 desktop tablet mobile centered inline-fix">$130.00</p>
					<p class="col-2 desktop tablet centered inline-fix">$2479.41</p>
					<p class="col-2 desktop tablet centered inline-fix">$45000.00</p>
					<p class="col-2 col-mob-4 desktop tablet mobile centered inline-fix">$1470.00</p>
				</div>
				<div class="gridText centered col-12">
					<p class="col-2 col-mob-4 desktop tablet mobile inline-fix">5.</p>
					<p class="col-2 desktop tablet centered inline-fix">$50000.00</p>
					<p class="col-2 col-mob-4 desktop tablet mobile centered inline-fix">$130.00</p>
					<p class="col-2 desktop tablet centered inline-fix">$2479.41</p>
					<p class="col-2 desktop tablet centered inline-fix">$45000.00</p>
					<p class="col-2 col-mob-4 desktop tablet mobile centered inline-fix">$1470.00</p>
				</div>
				<div class="gridText centered col-12">
					<p class="col-2 col-mob-4 desktop tablet mobile inline-fix">6.</p>
					<p class="col-2 desktop tablet centered inline-fix">$50000.00</p>
					<p class="col-2 col-mob-4 desktop tablet mobile centered inline-fix">$130.00</p>
					<p class="col-2 desktop tablet centered inline-fix">$2479.41</p>
					<p class="col-2 desktop tablet centered inline-fix">$45000.00</p>
					<p class="col-2 col-mob-4 desktop tablet mobile centered inline-fix">$1470.00</p>
				</div>
			</div>
			<div class="col-12 centered">
				<div class="gridButton"><buttom class="buttonInput showMoreBTN" type="button"><span>Show More</span></bottom></div>
			</div>
		</div>
		<div class="paddingTop15 col-mob-11">
			<h2 class="aboutTextHead paddingTop15">What You Need to Know About Mortgages</h2>
			<p class="aboutText">
				Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
			</p>
			<span><button class="buttonInput calcButtonSubmit readMoreBTN" type="button">Read More...</button></span>
		</div>
	</div>
</div>
<div class="container col-12">
		<div class="col-3 col-mob-12">
		<form class="floatLeft">
				<div class="subForm">
				<div class="formHeadText">
						<h3 class="orangeText centered">Join our mailing list</h3>
					</div>
				<div class="miniSub">
						<input class="calcInput calcSubInput col-10" type="text" id="hSubName" name="hSubName" placeholder="Name">
					</div>
				<div class="miniSub">
						<input class="calcInput calcSubInput col-10" type="email" id="hSubEmail" name="hSubEmail" placeholder="Email">
					</div>
				<div class="miniSub">
						<button class="buttonInput calcButtonSubmit col-10" type="submit">Sign up</button>
					</div>
				<div class="finePrint">
						<p>By submitting your email address, you acknowledge and agree to our Terms of Use and Privacy Policy, Contact us for more information.</p>
						<p style="font-style: italic">You can unsubscribe at any time</p>
					</div>
			</div>
			</form>
	</div>
	</div>
	<div class="container col-12 clearFloat">
		<div class="ad3Borders col-9 centered">
			<div class="ad3 centered"></div>
		</div>
	</div>
	<div class="container col-12 col-tab-12 clearFloat">
		<div class="centered">
			<h2 class="aboutTextHead">Learn Tips and Tricks on Managing Your Loans</h2>
			<p class="subHeadText">	Our Blog provides the best articles for you to learn tips and tricks on managing your loans.</p>
			<p class="subHeadText">So be sure to always check back!</p>
		</div>
	</div>
	<div class="container col-12 col-tab-12 clearFloat">
		<div class="col-8 col-tab-12 floatLeft"> <!-- spanned inside div -->
                <div class="col-12 articleDiv clearFloat">
					<div class="col-4 col-tab-4 col-mob-12 floatLeft paddingTop15">
						<img class="articleImg" src="img/finances.jpg" alt="">
					</div>
                	<div class="col-7 col-tab-7 col-mob-11 floatLeft articleText">
                  	  <h3 class="articleHead">How to setup a loan Calendar</h3>
                    	<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer...</p>
                    	<button class="articleButton"><span>Read more</span></button>
                	</div>
				</div>
				<div class="col-12 articleDiv clearFloat">
					<div class="col-4 col-tab-4 col-mob-12 floatLeft paddingTop15">
						<img class="articleImg" src="img/pencil-work.jpg" alt="">
					</div>
                	<div class="col-7 col-tab-7 col-mob-11 floatLeft articleText">
                    	<h3 class="articleHead">Learn to maximize your loans</h3>
                    	<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer...</p>
                    	<button class="articleButton"><span>Read more</span></button>
                	</div>
				</div>
				<div class="col-12 articleDiv clearFloat">
					<div class="col-4 col-mob-12 floatLeft paddingTop15">
						<img class="articleImg" src="img/pencil-work.jpg" alt="">
					</div>
                	<div class="col-7 col-mob-11 floatLeft articleText">
                    	<h3 class="articleHead">Learn to maximize your loans</h3>
                    	<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer...</p>
                    	<button class="articleButton"><span>Read more</span></button>
                	</div>
				</div>
            </div>
		<div class="ad1 col-4 desktop floatRight"><!-- half page ad goes here--></div>
	</div>
		<?php }
		include_once($theme_path.'_footer.php');
		

		$endMem = round(memory_get_usage()/1024,2);
		$pickMem = round(memory_get_peak_usage()/1024,2);
		echo "
		<!--
		Referral: ".$_SESSION["origURL"]."
		BUILT WITH ROUNDPLUG copyright 2008-".date("Y")." Multimedia Solutions and Consulting
		www.multimediaxp.com
		Country Code Provided by Cloudflare: $country_code";
		if($ipLocation != null){
		echo "
		IP Geolocation ".$_SERVER['REMOTE_ADDR'].": ".$ipLocation->getCountry()." ".$ipLocation->getRegion()." ".$ipLocation->getCity();
		}
		echo "
		User Info:
			- OS: $os $osversion
			- Browser: $browser_name V. $browser_version
		Server Performance:
			-	Initial Memory Usage: $initMem Mb
			-	Final Memory Usage: $endMem Mb,
			-	Memory used in this process: ".($endMem-$initMem)." Mb,
			-	Pick Memory Use: $pickMem Mb
		-->";

	}else{
		include_once($theme_path.$thisPage.".php");
	}
	
}
if($hasDatabase){
	$connection->close();
	if(isset($pl_db_username)){
		if($centrisDB->is_connected()){
			$centrisDB->close();
		}
	}
}
 ?>