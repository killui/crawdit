<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8"></meta>
	<title><?php echo $title; ?></title>

<!-- Style -->
<link rel="stylesheet" type="text/css" href="<?php echo WEBROOT;?>ressources/css/reset.css">
<link rel="stylesheet/less" type="text/css" href="<?php echo WEBROOT;?>ressources/css/style.less">

<!-- Script -->
<script src="<?php echo WEBROOT;?>ressources/js/jquery-1.10.2.min.js" type="text/javascript"></script>
<script src="<?php echo WEBROOT;?>ressources/js/less.js" type="text/javascript"></script>
<script src="<?php echo WEBROOT;?>ressources/js/modernizr.js" type="text/javascript"></script>
<script src="<?php echo WEBROOT;?>ressources/js/scrollTo.js" type="text/javascript"></script>
<script src="<?php echo WEBROOT;?>ressources/js/function.js" type="text/javascript"></script>

<!-- Google Analytics Content Experiment code -
<script>function utmx_section(){}function utmx(){}(function(){var
k='78870240-0',d=document,l=d.location,c=d.cookie;
if(l.search.indexOf('utm_expid='+k)>0)return;
function f(n){if(c){var i=c.indexOf(n+'=');if(i>-1){var j=c.
indexOf(';',i);return escape(c.substring(i+n.length+1,j<0?c.
length:j))}}}var x=f('__utmx'),xx=f('__utmxx'),h=l.hash;d.write(
'<sc'+'ript src="'+'http'+(l.protocol=='https:'?'s://ssl':
'://www')+'.google-analytics.com/ga_exp.js?'+'utmxkey='+k+
'&utmx='+(x?x:'')+'&utmxx='+(xx?xx:'')+'&utmxtime='+new Date().
valueOf()+(h?'&utmxhash='+escape(h.substr(1)):'')+
'" type="text/javascript" charset="utf-8"><\/sc'+'ript>')})();
</script><script>utmx('url','A/B');</script>
<!-- End of Google Analytics Content Experiment code -->
</head>
<body>

<header>
	<div class="container-960">
		

		<nav>
			<div class="logo"><a href="<?php echo WEBROOT;?>"><img src="<?php echo WEBROOT;?>ressources/images/logo.png" alt="Crawdit"></a></div>
			<ul>
				<li><a href="project-list.html"><strong>Browse</strong><br/>projects</a></li>
				<li><a href="fail.html"><strong>Meet</strong><br/>freelancers</a></li>
				<li><a href="fail.html"><strong>Start</strong><br/>your project</a></li>
			</ul>
			<div>
				<form id="search-bar" >
					<input type="search" placeholder="Comedy, Drama ..."/>
				</form>
			</div>
			<div id="connect-btn">
				
					<img src="<?php echo WEBROOT;?>ressources/images/connect.png">
				
			</div>
		
		</nav>

	</div>
	<div class="signin-container">

		<div class="signin">
			<div class="container-960">
			<div class="account f-left">
				<h4>Already have an account?</h4>
				<form id="login-form" action="<?php echo WEBROOT;?>login/<?php echo $page; ?>" method="post">
					<input type="email" placeholder="Email" name="email" required/>
					<input type="password" placeholder="Password" name="password" required/>
					<button type="submit" onclick="formSubmit()" >Log in</button>
				</form>
				<!-- <a href="#">Log in</a> -->
			</div>
			<div class="sign f-right">
				<h4>If not, sign up now!</h4>
				<!-- <img src="ressources/images/sign-in.png" alt="sign-in"/> -->
				<a href="#" class="classic-sign">Sign in</a>
				<a href="#" class="fb-sign">Log in with Facebook</a>
				<!-- <img src="ressources/images/facebooklog.png" alt="facebook-connect"> -->
			</div>
			</div>
		</div>
	</div>
</header>