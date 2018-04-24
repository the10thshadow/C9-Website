<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>Loan Payments Calculator</title>
    <meta name="description" content="Free online loan payment calculator and personal loan calculator, use our free tools to calculate your loan or finincing payments according to your interest rate, amount and term" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />
    <link type="text/css" href="css/bootstrapXP.css" rel="stylesheet" />
	<link type="text/css" href="css/mycss.css" rel="stylesheet" />
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,400,700" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<script>
		function CheckMobileNav () {
			var isMobile = false; //initiate as false
			var displayProperty = document.getElementById("navToggle").style.display;	
// device detection
			if(/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|ipad|iris|kindle|Android|Silk|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i.test(navigator.userAgent) 
    || /1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(navigator.userAgent.substr(0,4))) { 
    isMobile = true;
}
			if (isMobile == true){
				if (document.getElementById("navToggle").style.display == "" || document.getElementById("navToggle").style.display == null) {
					document.getElementById("navToggle").style.display = "none";
				}
			}	
		}
		
		function navToggle(x) {
    		x.classList.toggle("change");
			
			var displayProperty = document.getElementById("navToggle").style.display;
			var visibilityProperty = document.getElementById("navToggle").style.visibility;
			
			
			if (document.getElementById("navToggle").style.display === "none") {
				document.getElementById("navToggle").style.display = "block";
				document.getElementById("navToggle").style.visibility = "visible";
				document.getElementById("navToggle").style.transition = "visibility 1s ease 0";
				document.getElementById("navToggle").style.opacity = "1";
				document.getElementById("navToggle").style.transition = "opacity 1s ease 0";
			} else {
				document.getElementById("navToggle").style.display = "none";
				document.getElementById("navToggle").style.visibility = "hidden";
				document.getElementById("navToggle").style.transition = "visibility 1s ease 0";
				document.getElementById("navToggle").style.opacity = "0";
				document.getElementById("navToggle").style.transition = "opacity 1s ease 0";
			}
		}
	</script>
</head>

<body onLoad="CheckMobileNav ()">
	<!-- Main Container of the page -->
	<div class="container col-12 centeredPCent">		
		<!-- Main container for the header and Nav -->
		<div class="col-12 centeredPCent">
			<header class="col-12">
				<div class="col-12">
					<div class="col-3 padding10">
						<div class="logo col-3 floatLeft">
							<img class="logo" src="img/svg/filler-img.svg" alt="" />
						</div>
						<span class="floatLeft logo-name desktop">Loan Payment<br>Calculator</span>
					</div>
					<div class="lang-BTN desktop floatRight">
						<div>
							<select>
								<option>EN</option>
								<option>FR</option>
								<option>ES</option>
							</select>
						</div>
					</div>
					<div class="mob-nav-icon tablet mobile" onclick="navToggle(this)">
						<div class="bar1"></div>
						<div class="bar2"></div>
						<div class="bar3"></div>
					</div>
				</div>
				<div class="col-12">
					<nav class="mainNav clearFloat col-12 col-mob-12">
						<ul class="container col-9 col-mob-12" id="navToggle">
							<li class="tablet mobile reset-container col-mob-12">
								<a class="span-link col-mob-4" href="#EN">EN</a>
								<a class="span-link col-mob-4" href="#FR">FR</a>
								<a class="span-link col-mob-4" href="#ES">ES</a>
							</li>
							<li><a href="#">Morgages</a></li>
							<li><a href="#">Education Loans</a></li>
							<li><a href="#">Bank Rates</a></li>
							<li><a href="#">Credit Cards</a></li>
							<li><a href="#">Personal Loans</a></li>
							<li><a href="#">Car Loans</a></li>
							<li><a href="#">Business Loans</a></li>
							<li><a href="#">Equipement Loans</a></li>
							<li><a href="#">Blog</a></li>
						</ul>
					</nav>
				</div>
			</header>
		</div>
	</div>
		<div class="fullContainer cont-mob col-12">
			<div class="col-12">
			<h2 class="centered titleText">Title of the page/which calculator</h2>
			</div>
		</div>
	<div>
		<div class="container col-12 centeredPCent cont-top-fix">
		<!-- Content part of the page -->
		<!-- first part of the page -->
		<div class="container col-12">
			<!-- First ad goes here -->
			<div class="col-4 floatLeft">
				<div class="ad1 desktop tablet">
				<p>Ad1 - Half page</p>
				<p class="desktop">Desktop</p>
				<p class="tablet">Tablet</p>
				<p class="mobile">Mobile</p>
			</div>
			</div>
			<!-- Calc or landing page stuff goes here -->
			<div class="col-12">
				<!-- title --> 
				<div class="floatLeft col-8 col-tab-10 col-mob-12">
					<div class="col-12 col-tab-10 col-mob-12">
						<h2>Generic Loan Calculator</h2>
					</div>
				<!-- Calc Content -->
				<div class="container col-10 floatLeft borderCalc col-tab-10 col-mob-12">
					<form class="col-12 col-tab-10 col-mob-12 centeredPCent">
					<div class="col-10 centered container col-tab-10 col-mob-12">
						<label class="col-4">Loan Ammount: </label>
						<input class="col-6" type="number" value="" placeholder="$0.00">
					</div>
					<div class="col-10 centered container col-tab-10 col-mob-12">
					<label class="col-4">Term: </label>
						<input class="col-4" type="number" value="" placeholder="25">
						<select class="col-2">
							<option>Years</option>
							<option>Months</option>
						</select>
					</div>
					<div class="col-10 centered container col-tab-10 col-mob-12">
						<label class="col-4">Interest: </label>
						<input class="col-6" type="text" value="" placeholder="12%">
					</div>
					<div class="col-10 centered container col-tab-10 col-mob-12">	
						<label class="col-4">Downpayment: </label>
						<input class="col-6" type="text" value="" placeholder="$1000">
					</div>
					<div class="col-10 centered container col-tab-10 col-mob-12">
						<label class="col-4">Loan Start Date: </label>
						<input class="col-6" type="date" value="">
					</div>
					<div class="col-10 centered container col-tab-10 col-mob-12">
						<button class="col-5" type="submit">Compute</button>
						<button class="col-5" type="reset">Reset</button>
					</div>
					</form>
				</div>
				</div>
			</div>
			<div class="container col-12 col-tab-12 col-mob-12 clearFloat">
					<h3 class="centered">About</h3>
					<p class="col-10 centeredPCent">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
				</div>
				<div class="container col-12 clearFloat">
					<div class="ad3 desktop tablet centered">
						<p>Ad3 - banner</p>
					</div>
				</div>
			<div class="container col-12">
				<h3>Subscribe for more.</h3>
				<form class="container col-12">
					<div class="container col-12">
						<label>Name: </label>
						<input type="text" placeholder="Name">
					</div>
					<div class="container col-12">
					<label>Email: </label>
					<input type="email" placeholder="johndoe@host.com">
					</div>
					<div class="container col-12">
					<label>Province: </label>
					<select>
						<option>Alberta</option>
						<option>British Columbia</option>
						<option>Manitoba</option>
						<option>New Brunswick</option>
						<option>Newfoundland - Labrador</option>
						<option>Nova Scotia</option>
						<option>Ontario</option>
						<option>Prince-Edward-Island</option>
						<option>Quebec</option>
						<option>Saskachewan</option>
					</select>
					</div>
					<div class="container con-12">
					<button type="submit">*insert beep sound*</button>
					</div>
				</form>
			</div>
					
			</div>
			<div class="container desktop clearFloat col-12">
				<div class="ad2 desktop clearFloat">
					<p>Ad2 - Rectangle box</p>
				</div>
			</div>
		<!-- Article content part of the page -->
		<div class="container col-12">
			<div class="container col-12 clearFloat">
				<div class="col-12">
					<div class="col-2 col-mob-12 col-tab-6 floatLeft">
						<img src="img/svg/filler-img.svg" alt="">
					</div>
					<p class="col-mob-12 col-tab-6 floatLeft">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
				</div>
			</div>
			<div class="container col-12 clearFloat">
				<div class="col-12">
					<div class="col-2 col-mob-12 col-tab-6 floatLeft">
						<img src="img/svg/filler-img.svg" alt="">
					</div>
					<p class="col-mob-12 col-tab-6 floatLeft">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
				</div>
			</div>
			<div class="container col-12 clearFloat">
				<div class="col-12">
					<div class="col-2 col-mob-12 col-tab-6 floatLeft">
						<img src="img/svg/filler-img.svg" alt="">
					</div>
					<p class="col-mob-12 col-tab-6 floatLeft">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
				</div>
			</div>
		</div>
			<div class="container col-12">
				<div class="ad2 tablet clearFloat">
					<p>Ad2 - Banner</p>
				</div>
			</div>
			<!--
			
			
			<div class="col-12 clearFloat">
			<div class="col-3 floatLeft">
				<div class="col-12">
					<img class="imgArticle col-12 centered" src="img/svg/filler-img.svg" alt="">
					<p class="textArticle">Nunc leo lacus, vulputate id laoreet at, fringilla et dolor. Vivamus molestie ante non lorem.</p>
				</div>
			</div>
			<div class="col-3 floatLeft">
				<div class="col-12">
					<img class="imgArticle col-12 centered" src="img/svg/filler-img.svg" alt="">
					<p class="textArticle">Nunc leo lacus, vulputate id laoreet at, fringilla et dolor. Vivamus molestie ante non lorem.</p>
				</div>
			</div>
			<div class="col-3 floatLeft padded">
				<div class="col-12">
					<img class="imgArticle col-12 centered" src="img/svg/filler-img.svg" alt="">
					<p class="textArticle">Nunc leo lacus, vulputate id laoreet at, fringilla et dolor. Vivamus molestie ante non lorem.</p>
				</div>
			</div>
			<div class="col-3 floatLeft padded">
				<div class="col-12">
					<img class="imgArticle col-12 centered" src="img/svg/filler-img.svg" alt="">
					<p class="textArticle">Nunc leo lacus, vulputate id laoreet at, fringilla et dolor. Vivamus molestie ante non lorem.</p>
				</div>
			</div>
		</div>

-->

		<!-- Footer part of the page -->
		<div>
			<footer class="clearFloat centered">
				<p>some random footer text nwdonciowdnioncdwion ©2018</p>
			</footer>
		</div>
	</div>
	</div>
	
	
</body>
</html>
