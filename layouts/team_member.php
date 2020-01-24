<div id="firstrow" class="row align-items-middle">
  <div class="col-2">
    <img src="/crhsrobotics2020/member/assets/<?php echo $profileLink ?>" class="profile">
  </div>
  <div class="col-10">
    <h1><?php echo $member ?><span class="id"><?php echo $number ?></span></h1>
    <hr class="outer-divider">
    <h2 class="text-medium"><?php echo $role ?></h2>
    <h2 class="text-medium"><?php echo $team ?> &bull; <?php echo $years ?> &bull; <?php echo $grade ?></h2>
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
    elseif($team == 'Web/journalism'){ echo '<a href="../team#Web" class="link">Web teammates</a>'; }
    elseif($team == 'Mentor'){ echo 'Mentor teammates'; }
    ?>
  </div>
</div>