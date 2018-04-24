<!DOCTYPE HTML>
<html lang="en">
<head>
	<meta charset="utf-8"/>
	<title>Loan Payments Calculator | Car / Auto Finincing Calculator | Mortgage Calculator</title>
	<meta name="description" content="Free online loan payment calculator and personal loan calculator, use our free tools to calculate your loan or finincing payments according to your interest rate, amount and term"/>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />
	<link href="/css/bootstrapXP.css" type="text/css" rel="stylesheet"/>
	<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,400,700" rel="stylesheet">
	<link type="text/css" href="//maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" />
</head>
<!--  WEB DEVELOPMENT BY:
                                                   `.      `.
                                                   .%s/.`./ss
                                                   .dd%%syyys
                                                  `-%%%%%%%ys`
                                                `:+s%%yyyy%%%yo:`
                                             `:+ssssyyyyyyy%%%%%yo-`
                                           `:+sssooooyyyyyy%%%%%%%%%y+-`
                                        `-+sssoooooooyyyyy%%%%%%%%%%%%%y+-`
                                       osssooooooooooosyy%%%%%%%%%%%%%%%%%y/
                                       %%ysooooooooosss+:-+y%%%%%%%%%%%%%%ds
                                       %%%yyysooossso:`     -+y%%%%%%%%%%%%o
                                       %%%yyyy%yyo:`           -o%%%%%yyy%%o
                                       %%%%%%%%%%%o:`         `:ossyyyyyy%%o
                                       %%%%%%%%%%%%%%o-    `:+sssoooossyy%%o
                                       %d%%%%%%%%%%%%%%y+:+sssoooooooooosy%o
                                       /y%%%%%%%%%%%%%%%%%%ysoooooooooosss+-
                                         .+y%%%%%%%%%%%%%%%%%%oooooosss+:`
                                           `-+y%%%%%%%%%%%%%%%ooosss+:`
                                              `-+y%%%%%%%%%%%%sss+:`
                                                 `-oy%%%%%%%%%o:.
                                                    .y%%%%%%%y`
                                                    `yyysoyddy
                                                    `s/-` .:sy
                                                    `       `


:::-      -::: `::.     -:- .::`      -::::::::::`::- .:::`     .:::.   `-::::::`.::::::-`   .::`    -::`     `syo    +ys` oyyyys+.
hddd/    /dddd`-dd+     ydy +dd:      /+++ydh++++.ddy +dddy`   `hddd/ .sdho+++++`:ddoo+oyds. odd:   /ddds      .dMd.`yMd.  hMm//sMM/
hd+hd-  .hd+dd`-dd+     ydy +dd:          sdh    .ddy +dyodo   sdohd/`hdd-...... :dd.    sdy odd:  :dd:ydo       oMNmMs    hMm  -MMs
hd:-dh``yd/:dd`-dd+     ydy +dd:          sdh    .ddy +dy`yd/ +dy`hd/.dddsssssss.:dd.    /dd`odd: .hdo.-hd+      -NMMm.    hMMmNMms`
hd: /dsodo :dd`.ddy.   -hds :ddo`         sdh    .ddy +dy .hh/dh` hd/ sdd/`      :dd.   .yds odd:.hdysssshd/    +MN/+MN+   hMm..`
hh:  shhy` -hh` .+shhhhys+`  :syhyyyyo    ohy    `hhy +hs  :hhh-  yh/  :syhhhhhh-:hhhhhhhy+` ohh:yhy`    :hh: `yMm.  -mMh` hMm
                                                                                                              `..`    `..` ...
WEB DEVELOPMENT BY: Multimedia Solutions and Consulting
http://www.multimediaxp.com

YOU FOUND ME!
jobs %at% multimediaxp.com
-->
<body>
  <header>
    <h1>Loan Payments Calculator</h1>
  </header>
  <section>
    <p><input type="text" id="amount" placeholder="Amount" /></p>
  	<p><input type="text" id="down" placeholder="Down Payment" /></p>
  	<p><input type="text" id="interest" placeholder="Interest" /></p>
  	<p><input type="text" id="amortization" placeholder="Amortization (years)" /></p>
  	<select id="type">
  		<option value="12">Monthly</option>
  		<option value="24">Semi-Monthly</option>
  		<option value="26">Bi-weekly</option>
  	</select>
  	<button>Calculate</button>
  	<p id="results"></p>
  </section>
  <script>


  		$('button').click(function(){

        var amount = parseFloat($('#amount').val());
        var down = parseFloat($('#down').val());
        var rate = parseFloat($('#interest').val());
        var type = parseFloat($('#type').val());
        var amortization = parseFloat($('#amortization').val());
        var payments = amortization*type;

        $.ajax({
          url:'/ajax/calc.php',
          type:'POST',
          data:{
            amount:amount,
            down:down,
            rate:rate,
            type:type,
            amortization:amortization,
            payments:payments
          },success:function(response){
            $('#results').html(response);
          }
        })

      });
      </script>
</body>
</html>
