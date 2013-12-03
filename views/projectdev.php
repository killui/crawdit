<div class="cine-mode"></div>
<div class="popup-mode"></div>

<section class="info-proj">
	
	<div class="container-960">

		<h2><?php echo $projects->project_name; ?></h2>

		<ul>
			<li>
				<span class="first">Creator</span>
				<span><?php echo $projects->user_name.' '.$projects->user_surname; ?></span>
			</li>
			<li>
				<span class="first">Date</span>
				<span><?php echo date("d/m/Y", strtotime($projects->project_creation_date)); ?></span>
			</li>
			<li>
				<span class="first">Genre</span>
				<span><?php echo ucfirst($genres->genre_name); ?></span>
			</li>
			<li>
				<span class="first">Location</span>
				<span><?php echo ucfirst($projects->region_region); ?></span>
			</li>
		</ul>


		
		<div class="video-proj">
			<video poster="<?php echo WEBROOT;?>/ressources/images/cover.jpg">
			
			</video>

			<a href="#" class="play">Play video</a>

			<a href="#" class="hide-cine-mode">Back to normal mode</a>

			
		</div>
		
	</div>
</section>

<section id="needed">

	<div class="container-960">

		<div id="finance" class="need f-left">

			<a href="#" class="btn-red back_project">
				<div class="btn-background-hover"></div>
				<div class="link-cta"><p>Back this project</p></div>
				
			</a>

			<ul id="number">
				<li><span>$5678</span> Pledged</li>
				<li><span>$<?php echo number_format($projects->project_target, 0, ',', ','); ?></span> Goal</li>
				<li><span><?php echo $projects->project_total_backers; ?></span> Backers</li>
				<?php
				$today = time();
				$date = strtotime($projects->project_deadline);
				$dif = $date - $today;
				if($dif < 60) { $display_dif = $dif.' Seconds left'; }
				if(($dif > 60)&&($dif < 3600)) { $dif_min = round($dif / 60); $display_dif = $dif_min.' Minutes left'; }
				if(($dif > 3600)&&($dif < 86400)) { $dif_heu = round($dif / 60 / 60); $display_dif = $dif_heu.' Hours left'; }
				if($dif > 86400) { $dif_jour = round($dif / 60 / 60 / 24); $display_dif = $dif_jour.' Days left'; }
				?>
                <li><span><?php echo $display_dif; ?></span></li>
			</ul>

			

		</div>
			
		<div id="human" class="need f-right">
			
			
			<a href="#" class="btn-blue">
				<div class="btn-background-hover"></div>
				<div class="link-cta"><p>Back this project</p></div>
				
			</a>

			<ul id="jobs">
				<li class="job"> Cameraman <span>0/1</span></li>
				<li class="job"> Scenarist <span><i class="icon check"></i></span></li>
				<li class="job"> Actor <span>1/3</span></li>
				<li class="job"> Musician <span><i class="icon check"></i></span></li>
				<li class="job"> Screenwriter <span>0/1</span></li>
				<li class="job"> Editor <span><i class="icon check"></i></span></li>
				<li class="job"> Animator <span><i class="icon check"></i></span></li>
				<li class="job"> Unit Manager <span>0/1</span></li>
				<li class="job"> Coordinator <span>0/1</span></li>
				<li class="job"> Animator <span><i class="icon check"></i></span></li>
				<li class="job"> Unit Manager <span>0/1</span></li>
				<li class="job"> Coordinator <span>0/1</span></li>
			</ul>
			<span class="more-jobs"><i class="icon arrow-down"></i></span>
			
		</div>

		<div class="clear"></div>

</section>

<section class="desc-proj container-960">

	<div id="onglets">
		<a href="#" class="onglet active"> Project description </a>
		<a href="#" class="onglet"> Comments (53)</a>
		<a href="#" class="onglet"> Updates </a>
	</div>
	
	<div id="perks" class="f-right">
		<h3>Perks</h3>
	</div>

	<article>

		<div class="update">
			<p><strong>Quick update : </strong>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed fermentum ligula dignissim imperdiet consectetur.</p>
		</div>
		
		<h6>Let me introduce myself</h6>

		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed fermentum ligula dignissim imperdiet consectetur. Nullam eu erat vitae quam lacinia aliquam in viverra enim. Aliquam dictum viverra mauris, mollis ultricies libero accumsan sit amet. Quisque aliquam dui purus, at commodo purus porta sed. Phasellus nunc tortor, fringilla non pulvinar et, interdum a ipsum. Aliquam in mi eu sapien laoreet porta. Nunc malesuada pharetra venenatis. Morbi est leo, tempor at adipiscing euismod, dictum id elit. Vivamus feugiat enim diam, sit amet ultricies nunc venenatis in.</p>

		<h6>What about my project?</h6>

		<p>Quisque malesuada elementum scelerisque. Aliquam consectetur erat vitae quam tristique, eget pretium magna dapibus. Suspendisse dapibus risus eget risus venenatis, a suscipit orci malesuada. Curabitur orci erat, tristique eu lorem non, ullamcorper consectetur orci. Etiam nec facilisis nisl. Integer id eros fermentum, vestibulum orci ac, dapibus dui. Duis sodales consequat massa, quis feugiat purus. Vivamus condimentum dolor sed urna fringilla, quis fringilla diam lacinia. Praesent quam ante, tincidunt at ligula eu, dictum mattis quam. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Ut convallis sit amet sapien id vestibulum. Curabitur justo nunc, adipiscing sed euismod vel, sagittis sed leo. Nulla consectetur vestibulum elit. Suspendisse mattis ut enim sed tincidunt. In suscipit tristique nibh at sagittis. Suspendisse venenatis, est sit amet elementum condimentum, lectus urna placerat nunc, id auctor augue risus ac lacus.</p>

		<img src="<?php echo WEBROOT;?>/ressources/images/cover.jpg" alt="image">

		<h6>More about Frankenweenie</h6>

		<p>Maecenas sit amet bibendum nulla, eget convallis metus. Sed malesuada adipiscing ipsum nec viverra. Curabitur luctus eros sed iaculis egestas. Proin et dui sagittis, fringilla libero at, varius metus. Donec justo dolor, tristique non rutrum ut, adipiscing id sapien. Curabitur fringilla sit amet mauris ut pretium. Sed consectetur metus sit amet nulla porta, sed faucibus mauris laoreet. Praesent auctor lacus augue, sed auctor ante hendrerit sit amet. Sed sit amet nisl ornare, adipiscing augue sit amet, tincidunt lorem. Morbi fermentum, massa sit amet consectetur venenatis, elit odio suscipit justo, quis aliquam metus arcu eget purus. Donec condimentum purus elementum tellus mollis fermentum a nec libero. Quisque nec varius turpis. Vestibulum porttitor fringilla est, eget vestibulum dolor fringilla nec.</p>

		<div class="share">
			<h5>Share the love about this project :</h5>
			<div class="api "><img src="<?php echo WEBROOT;?>/ressources/images/fb.png" alt="facebook" class="small" /></div>
			<div class="api"><img src="<?php echo WEBROOT;?>/ressources/images/tw.png" alt="twitter" class="small"/></div>
			<div class="api"><img src="<?php echo WEBROOT;?>/ressources/images/rd.png" alt="reddit" class="small"/></div>
		</div>

	</article>

	<aside >
		
		<form class="pre-select">
			<?php
            foreach($perks as $perk)
  			{
			?>
            <div class="perk">
				<span class="amount">$<?php echo number_format($perk["perks_money"], 0, ',', ','); ?></span>
				<span class="gift"><?php echo $perk["perks_reward"]; ?></span>
			</div>
            <?php
			}
			?>
		</form>
	</aside>

	<div class="clear"></div>


</section>

<!-- POPUP-->
<div class="popups">
	
	<div class="popup">

		<!-- STEP -->
		<div class="steps">
			<span class="trait-step"></span>
			<div class="step active">
				<span><i class="icon ellipse"></i></span>
				<p >Amount & Perks</p>
			</div>
			<div class="step unactive">
				<span><i class="icon ellipse"></i></span>
				<p>Payement Information</p>
			</div>
			<div class="step unactive">
				<span><i class="icon ellipse"></i></span>
				<p>Thank you!</p>
			</div>

			<div class="close f-right"><i class="icon close"></i></div>

			<div class="clear"></div>
		</div>
		
	</div>

</div>

</div>