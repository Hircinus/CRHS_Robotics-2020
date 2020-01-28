	</div>
	<footer>
		<div id="footrow" class="row justify-content-center">
			<div class="col-lg-6 col-md-6 col-sm-12 col-12">
				<h6>Learn about who we are</h6>
				<hr class="foot-div">
				<a class="link" href="/2020/about">About</a><br>
				<a class="link" href="/2020/crc">About the CRC Robotics</a><br>
				<a class="link" href="/2020/robot">About our robot</a>
			</div>
			<div class="col-lg-6 col-md-6 col-sm-12 col-12">
				<h6>You might wanna check out...</h6>
				<hr class="foot-div">
				<a class="link" target="_blank" href="http://www.crhs.rsb.qc.ca">CRHS web site <i class="fas fa-external-link-alt"></i></a><br>
				<a class="link" target="_blank" href="http://www.crhsrobotics.com/2019/home">CRHS Robotics web site (2019) <i class="fas fa-external-link-alt"></i></a><br>
				<a class="link" target="_blank" href="http://www.robo-crc.ca">CRC web site <i class="fas fa-external-link-alt"></i></a>
			</div>
		</div>
        <div class="col-12">
          <ul id="social-nav"class="nav justify-content-center align-items-middle">
             <li class="nav-item">
                <a id="social-link" title="Check out CRHS's Facebook page!" class="nav-link" href="https://www.facebook.com/CRHSROBOTICSOFFICIAL/" target="_blank"><i class="fab fa-facebook-f"></i></a>
             </li>
             <li class="nav-item">
               <a id="social-link" title="Check out CRHS's Instagram page!" class="nav-link" href="https://www.instagram.com/crhsrobotics/" target="_blank"><i class="fab fa-instagram"></i></a>
             </li>
             <li class="nav-item">
               <a id="social-link" title="Check out CRHS's YouTube page!" class="nav-link" href="https://www.youtube.com/channel/UCWMAQGH2H-f1ipbH2OWfZag" target="_blank"><i class="fab fa-youtube"></i></a>
             </li>
			  		<li class="nav-item">
           		<a id="social-link" title="Check out the source code for the site!" class="nav-link" href="https://github.com/Hircinus/CRHS_Robotics-2020" target="_blank"><i class="fab fa-github"></i></a>
            </li>
          </ul>
         </div>
      <p class="credits">Website design and development by <a href="https://github.com/Hircinus" class="link" target="_blank">Jacob Alfahad <i class="fas fa-external-link-alt"></i></a>.</p>
	</footer>
	<button onclick="backToTop()" title="Return to top" id="backtop"><i class="fas fa-caret-up"></i></button>
	<?php
	if(isset($links) == true) {
		$bar = '<div class="sidebar">';
		$rows = count($links);
		for($x = 0; $x < $rows; $x++) {
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
	</div>
	</body>
</html>
