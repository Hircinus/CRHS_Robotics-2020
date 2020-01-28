<div id="firstrow" class="row align-items-middle">
  <div class="col-lg-2 col-md-4 col-sm-11 col-11">
    <img src="/2020/member/assets/<?php echo $profileLink ?>" class="profile">
  </div>
  <div class="col-lg-10 col-md-8 col-sm-11 col-11">
    <h1><?php echo $member ?><span class="id"><?php echo $number ?></span></h1>
    <hr class="outer-divider">
    <h2 class="text-medium"><?php echo $team ?> &bull; <?php echo $years ?> <?php if($team != "Mentor") { echo "&bull; " . $grade; } else {} ?></h2>
    <p><?php echo $message ?></p>
  </div>
</div>
<div id="row" class="row">
  <div class="col-10">
    <h2 class="text-medium">Co&eacute;quipiers</h2>
    <p>
    <?php
      if($team == 'Robot'){ echo '<a href="/2020/fr/team#Robot" class="link">Co&eacute;quipiers robot</a>'; }
      elseif($team == 'Kiosque'){ echo '<a href="/2020/fr/team#Kiosque" class="link">Co&eacute;quipiers kiosque</a>'; }
      elseif($team == 'Programmation'){ echo '<a href="/2020/fr/team#Programmation" class="link">Co&eacute;quipiers programmation</a>'; }
      elseif($team == 'Vid&eacute;o'){ echo '<a href="/2020/fr/team#Vid&eacute;o" class="link">Co&eacute;quipiers vid&eacute;o</a>'; }
      elseif($team == 'Web/journalisme'){ echo '<a href="/2020/fr/team#Webjournalisme" class="link">Co&eacute;quipiers web</a>'; }
      elseif($team == 'Mentor'){ echo '<a href="/2020/fr/team#Mentors" class="link">Autres mentors</a>'; }
    ?>
  </div>
</div>
