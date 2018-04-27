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
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">
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
<div class="fullContainer">
		<div>
		<header>
				<div class="container"> 
				<!-- Logo goes here -->
				<div class="col-12">
						<div class="col-4"> <a href="index.html"><img alt="" class="logo col-1 floatLeft" src="img/svg/logo.svg" />
						<div class="col-6 floatLeft"> <span class="logo-name">Loan Payment</span> <span class="logo-name-sec">Calculator</span> </div></a>
					</div>
						<div class="col-1 floatRight">
						<div class="dropdown"> <span><img class="imgLang" src="img/UK_Flag.png" alt=""></span>
								<div class="dropdown-content">
								<div><img class="imgLang" src="img/UK_Flag.png" alt=""></div>
								<div><img class="imgLang" src="img/Flag_of_France.png" alt=""></div>
							</div>
							</div>
					</div>
					</div>
			</div>
			</header>
	</div>
		<div class="fullContainer navBackground clearFloat">
		<div>
				<div class="container">
				<nav class="mainNav"> 
						<!-- Nav goes here -->
						<ul>
						<li><a href="calc-page.html">Mortgage</a></li>
						<li><a href="calc-page.html">School Loans</a></li>
						<li><a href="calc-page.html">Bank Rates</a></li>
						<li><a href="calc-page.html">Credit Cards</a></li>
						<li><a href="calc-page.html">Personal Loans</a></li>
						<li><a href="calc-page.html">Car Loans</a></li>
						<li><a href="calc-page.html">Business Loans</a></li>
						<li><a href="calc-page.html">Equipement Loans</a></li>
						<li><a href="blog.html">Blog</a></li>
					</ul>
					</nav>
			</div>
			</div>
	</div>
		<div class="fullContainer">
		<div class="fullContainerCalcMortgage"> 
				<!-- Banner background image one goes here -->
				<div class="container bannerTextBG">
				<h2 class="bannerText">Mortgage Loan Calculator</h2>
			</div>
			</div>
	</div>
		<div class="container col-12">
		<div class="col-3 floatLeft">
				<div class="ad1"></div>
			</div>
		<div class="col-8 floatRight">
		<div class="col-12 floatRight calcForm">
		<form class="calcContainer">
				<div>
				<div class="col-12 floatLeft">
						<div class="col-3 floatLeft">
						<label class="calcLabel col-12">Loan Amount</label>
					</div>
						<div class="col-7 floatLeft">
						<input class="calcInput col-12 inputFix" type="number" id="hAmmount" name="hAmmount" placeholder="0.00$">
					</div>
					</div>
				<div class="col-12 floatLeft">
						<div class="col-3 floatLeft">
						<label class="calcLabel col-12">Term</label>
					</div>
						<div class="col-5 floatLeft">
						<input class="calcInput col-12 inputFix" type="number" id="hTerm" name="hTerm" placeholder="25">
					</div>
						<div class="col-2 floatLeft">
						<div class="calcDropdown">
						<select class="col-12" id="radiusDropdown">
						<div>
						<option value="Y">Years</option>
						</div>
						<div>
						<option value="Months">Months</option>
						</div>
					</select>
					</div>
			</div>
				</div>
				<div class="col-12 floatLeft">
				<div class="col-3 floatLeft">
						<label class="calcLabel col-12">Interest</label>
					</div>
				<div class="col-7 floatLeft">
						<input class="calcInput col-12 inputFix" type="number" id="hInterest" name="hInterest" placeholder="3.5%">
					</div>
			</div>
				<div class="col-12 floatLeft">
				<div class="col-3 floatLeft">
						<label class="calcLabel col-12">Down Payment</label>
					</div>
				<div class="col-7 floatLeft">
						<input class="calcInput col-12 inputFix" type="number" id="hDownPay" name="hDownPay" placeholder="1000.00$">
					</div>
			</div>
				<div class="col-12 floatLeft">
				<div class="col-5 inline-fix">
						<input type="text" class="calcInput col-12 calcSubInput" id="hName" name="hName" placeholder="Name">
					</div>
				<div class="col-5 inline-fix">
						<input type="email" class="calcInput col-12 calcSubInput" id="hEmail" name="hEmail" placeholder="Email">
					</div>
			</div>
				<div class="col-12 floatLeft">
				<div class="col-10 calcSub">
						<input type="checkbox" id="hSubscribe" name="hSubscribe" checked>
						<label class="blueText">Send results to my email and receive other special related offers and promotions.</label>
					</div>
			</div>
				<div class="col-12 floatLeft">
				<div class="col-5 floatLeft">
						<button type="submit" class="buttonInput calcButtonSubmit col-12" id="hSubmit" name="hSubmit">Compute</button>
					</div>
				<div class="col-5 floatLeft">
						<button type="reset" class="calcButtonReset col-12" id="hReset" name="hReset">Reset</button>
					</div>
			</div>
				</div>
			</form>
	</div>
		<div class="paddingTop15">
			<h2 class="aboutTextHead paddingTop15">What You Need to Know About Mortgages</h2>
			<p class="aboutText">
				Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
			</p>
			<span><button class="buttonInput calcButtonSubmit readMoreBTN" type="button">Read More...</button></span></div>
	</div>
</div>
<div class="container col-12">
		<div class="col-3">
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
	<div class="container col-12 clearFloat">
		<div class="centered">
			<h2 class="aboutTextHead">Learn Tips and Tricks on Managing Your Loans</h2>
			<p class="subHeadText">	Our Blog provides the best articles for you to learn tips and tricks on managing your loans.</p>
			<p class="subHeadText">So be sure to always check back!</p>
		</div>
	</div>
	<div class="container col-12 clearFloat">
		<div class="col-8 floatLeft"> <!-- spanned inside div -->
                <div class="col-12 articleDiv clearFloat">
					<div class="col-4 floatLeft paddingTop15">
						<img class="articleImg" src="img/finances.jpg" alt="">
					</div>
                	<div class="col-7 floatLeft articleText">
                  	  <h3 class="articleHead">How to setup a loan Calendar</h3>
                    	<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer...</p>
                    	<button class="articleButton"><span>Read more</span></button>
                	</div>
				</div>
				<div class="col-12 articleDiv clearFloat">
					<div class="col-4 floatLeft paddingTop15">
						<img class="articleImg" src="img/pencil-work.jpg" alt="">
					</div>
                	<div class="col-7 floatLeft articleText">
                    	<h3 class="articleHead">Learn to maximize your loans</h3>
                    	<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer...</p>
                    	<button class="articleButton"><span>Read more</span></button>
                	</div>
				</div>
				<div class="col-12 articleDiv clearFloat">
					<div class="col-4 floatLeft paddingTop15">
						<img class="articleImg" src="img/pencil-work.jpg" alt="">
					</div>
                	<div class="col-7 floatLeft articleText">
                    	<h3 class="articleHead">Learn to maximize your loans</h3>
                    	<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer...</p>
                    	<button class="articleButton"><span>Read more</span></button>
                	</div>
				</div>
            </div>
		<div class="ad1 col-4 floatRight"><!-- half page ad goes here--></div>
	</div>
<div class="clearFloat">
		<footer class="centered">
		<p>© 2018 LoanPaymentsCalculator.com<br>
				Terms and Conditions | Privacy Policy | Accessibility</p>
	</footer>
	</div>
</div>
</body>
</html>
