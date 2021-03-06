<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8"></meta>
	<title>Donnation</title>

<!-- Style -->
<link rel="stylesheet" type="text/css" href="ressources/css/reset.css">
<link rel="stylesheet/less" type="text/css" href="ressources/css/style.less">

<!-- Script -->
<script src="ressources/js/jquery-1.10.2.min.js" type="text/javascript"></script>
<script src="ressources/js/less.js" type="text/javascript"></script>
<script src="ressources/js/modernizr.js" type="text/javascript"></script>
<script src="ressources/js/scrollTo.js" type="text/javascript"></script>
<script src="ressources/js/function.js" type="text/javascript"></script>

</head>
<body >



<header>
	<div class="container-960">
		

		<nav>
			<div class="logo"><a href="index.html"><img src="ressources/images/logo.png" alt="Crawdit"></a></div>
			<ul>
				<li><a href="#"><strong>Browse</strong><br/>projects</a></li>
				<li><a href="#"><strong>Start</strong><br/>your project</a></li>
				<li><a href="#"><strong>Get in touch</strong><br/>with freelancer</a></li>
			</ul>
			<div>
				<form id="search-bar">
					<input type="search" placeholder="Comedy, Drama ..."/>
				</form>
			</div>
			<div>
				<a href="#" id="connect">
					<img src="ressources/images/connect.png">
				</a>
			</div>
		
		</nav>
	</div>

</header>

<section class="proj-don">
	<div class="container-960">

		<h2>Frankenweenie</h2>
		

		<div class="progress-bar-don" >
			<div class="avancement"></div>
			<div class="don"></div>
		</div>

		<div class="form-don">
			<form id="form-donate" method="post" action="remerciement">
				<label>$</label>
				<input type="text" placeholder="1" class="input-don" id="input-don" name="crawd"/>
			</form>
			<div class="info-don">
				<ul>
					<li>1.Minimum donnation is $1.</li>
					<li>2.Donations are based on a principle of pledge. The amount on the left will be charged only if the project reach 100% of its objectives. Otherwise, the amount of your donation won’t be debited from your account.</li>
				</ul>
			</div>
		</div>

		<div class="choose-perk">
			<h4 class="f-left">Please select a perk :</h4>

			<a href="#" class="btn-red f-right donate">Donate</a>

			<div class="clear"></div>

			<div class="perks-big">
				<form>
					<div class="choice">
						<span>No perk</span>
						<span>I don't want any perk.</span>
						<div class="radio">
							<input type="radio" />
							<label></label>
						</div>
					</div>

					<div class="choice">
						<span>$5</span>
						<span>I don't want any perk.</span>
						<div class="radio">
							<input type="radio" />
							<label></label>
						</div>
					</div>

					<div class="choice">
						<span>$20</span>
						<span>I don't want any perk.</span>
						<div class="radio">
							<input type="radio" />
							<label></label>
						</div>
					</div>
					<div class="choice">
						<span>$50</span>
						<span>I don't want any perk.</span>
						<div class="radio">
							<input type="radio" />
							<label></label>
						</div>
					</div>

					<div class="choice">
						<span>$100</span>
						<span>I don't want any perk.</span>
						<div class="radio">
							<input type="radio" />
							<label></label>
						</div>
					</div>
					<div class="choice">
						<span>$250</span>
						<span>I don't want any perk.</span>
						<div class="radio">
							<input type="radio" />
							<label></label>
						</div>
					</div>
					<div class="choice">
						<span>$1000</span>
						<span>I don't want any perk.</span>
						<div class="radio">
							<input type="radio" />
							<label></label>
						</div>
					</div>
				</form>


			</div>

			<a href="#" class="btn-red f-right donate">Donate</a>

		</div>

	</div>
</section>

<footer>
	
	<div class="container-960">
	
		<ul>
			<h6>Genres</h6>
			<li><a href="#">Action</a></li>
			<li><a href="#">Adventure</a></li>
			<li><a href="#">Drama</a></li>
			<li><a href="#">Comedy</a></li>
			<li><a href="#">Animation</a></li>
			<li><a href="#">Science-fiction</a></li>
			<li><a href="#">Horror</a></li>
			<li><a href="#">Nature</a></li>
		</ul>

		<ul>
			<h6>Crawd.it</h6>
			<li><a href="#">What's Crawd.it?</a></li>
			<li><a href="#">How does it work?</a></li>
			<li><a href="#">Who are we?</a></li>
			<li><a href="#">Press</a></li>
			
		</ul>

		<ul>
			<h6>Help</h6>
			<li><a href="#">F.A.Q</a></li>
			<li><a href="#">Support</a></li>
			<li><a href="#">Contact</a></li>
			<li><a href="#">Ressources</a></li>
			
		</ul>

		<ul>
			<h6>Note</h6>
			
		</ul>


	</div>

</footer>
<script type="text/javascript">

var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-45578759-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

<script type="text/javascript" src="ressources/js/don.js"></script>
</body>
</html>