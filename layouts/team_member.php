<div id="firstrow" class="row align-items-middle">
  <div class="col-lg-2 col-md-4 col-sm-11 col-11">
    <img src="/2020/member/assets/<?php echo $profileLink ?>" class="profile">
  </div>
  <div class="col-lg-10 col-md-8 col-sm-11 col-11">
    <h1><?php echo $member ?><span class="id"><?php echo $number ?></span></h1>
    <hr class="outer-divider">
    <h2 class="text-medium"><?php echo $team ?> &bull; <?php echo $years ?>
      <?php if($team != "Mentor") { echo "&bull; " . $grade; } else {} ?></h2>
    <p><?php echo $message ?></p>
  </div>
</div>
<div id="row" class="row">
  <div class="col-10">
    <h2 class="text-medium">Teammates</h2>
    <p>
    <?php
      if($team == 'Robot'){ echo '<a href="../team#Robot" class="link">Robot teammates</a>'; }
      elseif($team == 'Kiosk'){ echo '<a href="../team#Kiosk" class="link">Kiosk teammates</a>'; }
      elseif($team == 'Programming'){ echo '<a href="../team#Programming" class="link">Programming teammates</a>'; }
      elseif($team == 'Video'){ echo '<a href="../team#Video" class="link">Video teammates</a>'; }
      elseif($team == 'Web/journalism'){ echo '<a href="../team#Webjournalism" class="link">Web teammates</a>'; }
      elseif($team == 'Mentor'){ echo '<a href="../team#Mentors" class="link">Other mentors</a>'; }
    ?>
  </div>
</div>
