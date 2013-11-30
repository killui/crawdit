<?php
<header>
	<div class="container-960">
		

		<nav>
			<div class="logo"><a href="index.html"><img src="ressources/images/logo.png" alt="Crawdit"></a></div>
			<ul>
				<li><a href="project-list.html"><strong>Browse</strong><br/>projects</a></li>
				<li><a href="fail.html"><strong>Meet</strong><br/>freelancers</a></li>
				<li><a href="fail.html"><strong>Start</strong><br/>your project</a></li>
			</ul>
			<div>
				<form id="search-bar">
					<input type="search" placeholder="Comedy, Drama ..."/>
				</form>
			</div>
			<div id="connect-btn">
				
					<img src="ressources/images/connect.png">
				
			</div>
		
		</nav>

	</div>
	<div class="signin-container">

		<div class="signin">
			<div class="container-960">
			<div class="account f-left">
				<h4>Already have an account?</h4>
				<form id="search-bar">
					<input type="text" placeholder="Email" required/>
					<input type="password" placeholder="Password" required/>
					<button type="submit" onclick="formSubmit()" >Log in</button>
				</form>
				//<a href="#">Log in</a> -->
			</div>
			<div class="sign f-right">
				<h4>If not, sign up now!</h4>
				//<!-- <img src="ressources/images/sign-in.png" alt="sign-in"/> -->
				<a href="#" class="classic-sign">Sign in</a>
				<a href="#" class="fb-sign">Log in with Facebook</a>
				//<!-- <img src="ressources/images/facebooklog.png" alt="facebook-connect"> -->
			</div>
			</div>
		</div>
	</div>
</header>
?>