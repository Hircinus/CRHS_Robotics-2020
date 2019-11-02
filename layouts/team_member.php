<div id="firstrow" class="row">
  <div class="col-2">
    <div class="profile"></div>
  </div>
  <div class="col-10">
    <h1><?php echo $member ?></h1>
    <hr class="outer-divider">
    <h2 class="text-medium"><?php echo $team ?> &bull; <?php echo $years ?></h2>
    <p><?php echo $message ?></p>
  </div>
  <div class="col-12">
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
