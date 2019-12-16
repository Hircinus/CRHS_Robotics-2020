	</div>
	<footer>
		<div id="footrow" class="row justify-content-center">
			<div class="col-lg-4 col-md-6 col-sm-12 col-12">
				<h6>A little more</h6>
				<hr class="foot-div">
				<a class="link" href="about">About</a><br>
				<a class="link" href="message_from_me">Message from the webmaster</a>
			</div>
			<div class="col-lg-4 col-md-6 col-sm-12 col-12">
				<h6>Useful resources</h6>
				<hr class="foot-div">
				<a class="link" target="_blank" href="disclaimer">Disclaimer <i class="fas fa-external-link-alt"></i></a><br>
				<a class="link" target="_blank" href="sitemap">Sitemap <i class="fas fa-external-link-alt"></i></a>
			</div>
			<div class="col-lg-4 col-md-6 col-sm-12 col-12">
				<h6>Other cool stuff</h6>
				<hr class="foot-div">
				<a class="link" target="_blank" href="http://www.crhs.rsb.qc.ca">CRHS web site <i class="fas fa-external-link-alt"></i></a><br>
				<a class="link" target="_blank" href="http://www.crhsrobotics.com/2019">CRHS Robotics web site (2019) <i class="fas fa-external-link-alt"></i></a>
				<a class="link" target="_blank" href="http://www.robo-crc.ca">CRC web site <i class="fas fa-external-link-alt"></i></a>
			</div>
		</div>
		<div id="footrow" class="row justify-content-center">
			<div class="col-lg-4 col-md-6 col-sm-12 col-12">
				<h6>Nerdy stuff</h6>
				<hr class="foot-div">
            	<a class="link" href="humans.txt" target="_blank">humans.txt <i class="fas fa-external-link-alt"></i></a>
			</div>
			<div class="col-lg-4 col-md-6 col-sm-12 col-12">
				<h6>Nerdy stuff</h6>
				<hr class="foot-div">
            	<a class="link" href="humans.txt" target="_blank">humans.txt <i class="fas fa-external-link-alt"></i></a>
			</div>
			<div class="col-lg-4 col-md-6 col-sm-12 col-12">
				<h6>Nerdy stuff</h6>
				<hr class="foot-div">
            	<a class="link" href="humans.txt" target="_blank">humans.txt <i class="fas fa-external-link-alt"></i></a>
			</div>
        <div class="col-12">
          <ul id="social-nav"class="nav justify-content-center align-items-middle">
             <li class="nav-item">
                <a id="social-link" title="Check out CRHS's Facebook page!" class="nav-link" href="https://www.facebook.com/CRHSROBOTICSOFFICIAL/" target="_blank"><i class="fab fa-facebook-f"></i></a>
             </li>
             <li class="nav-item">
               <a id="social-link" title="Check out CRHS's Instagram page!" class="nav-link" href="https://www.instagram.com/crhsrobotics2k20/" target="_blank"><i class="fab fa-instagram"></i></a>
             </li>
             <li class="nav-item">
               <a id="social-link" title="Check out CRHS's YouTube page!" class="nav-link" href="https://www.youtube.com/channel/UCWMAQGH2H-f1ipbH2OWfZag" target="_blank"><i class="fab fa-youtube"></i></a>
             </li>
						 <li class="nav-item">
 							 <a id="social-link" title="Check out the CRHS robotics subreddit!" class="nav-link" href="https://www.reddit.com/r/CRHSrobotics/" target="_blank"><i class="fab fa-reddit-alien"></i></a>
 						</li>
			  		<li class="nav-item">
           		<a id="social-link" title="Check out the source code for the site!" class="nav-link" href="https://github.com/Hircinus/CRHS_Robotics-2020" target="_blank"><i class="fab fa-github"></i></a>
            </li>
			   		<li class="nav-item">
            	<a id="social-link" title="Check out some of my creations on CodePen!" class="nav-link" href="https://codepen.io/hircinus/posts/published/" target="_blank"><i class="fab fa-codepen"></i></a>
            </li>
          </ul>
         </div>
		</div>
      <button id="darkbutton" title="Turn on dark mode" onclick="darktheme()"><i class="fas fa-moon"></i></button>
      <button id="lightbutton" title="Turn on light mode" onclick="lighttheme()"><i class="fas fa-lightbulb"></i></button>
      <p class="credits"><em>Website design and development by Jacob Alfahad.</em></p>
	</footer>
	<?php
	if($sidebar == true) {
		$bar = '<div class="sidebar">';
		$rows = count($links);
		for($x = 0; $x <= $rows; $x++) {
			$link = $links[$x];
			$bar .= '<a class="link" href="#' . $link . '">' . $link . '</a>';
			if($x < $rows) {
				$bar .= '<br>';
			}
		}
		$sidebar_output = $bar . '</div>';
		echo $sidebar_output;
	}
	?>
	<button onclick="backToTop()" title="Return to top" id="backtop"><i class="fas fa-caret-up"></i></button>
	</div>
	</body>
</html>
