<div id="firstrow" class="row align-items-middle">
  <div class="col-2">
    <img src="assets/<?php echo $profileLink ?>" class="profile">
  </div>
  <div class="col-10">
    <h1><?php echo $member ?></h1>
    <hr class="outer-divider">
    <h2 class="text-medium"><?php echo $team ?> &bull; <?php echo $years ?> &bull; <?php echo $grade ?></h2>
    <p><?php echo $message ?></p>
  </div>
</div>
<div id="row" class="row">
  <div class="col-10">
    <h2 class="text-medium">Teammates</h2>
    <p>
    <?php
    if($team == 'Robot'){ echo 'Robot teammates'; }
    if($team == 'Kiosk'){ echo 'Kiosk teammates'; }
    if($team == 'Programming'){ echo 'Programming teammates'; }
    if($team == 'Web'){ echo 'Web teammates'; }
    if($team == 'Journalism'){ echo 'Journalism teammates'; }
    if($team == 'Mentor'){ echo 'Mentor teammates'; }
    ?>
  </div>
</div>
