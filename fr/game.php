<?php
$title = "&Agrave; propos du jeu - CRHS Robotique 2020";
$sidebar = TRUE;
$links = ["Flip 2020", "Terrain de jeu", "Pi&egrave;ces de jeu", "Marquer des points"];
require 'layouts/header.php';
 ?>
<a name="Flip 2020"></a>
 <div id="row" class="row justify-content-center">
 	<div class="col-lg-8 col-md-10 col-sm-12 col-12">
    <h2>Flip 2020</h2>
    <hr class="outer-divider">
    <p>
      Les jeux de cette ann&eacute;e dans la Ligue Nationale CRC Robotiques vont d&eacute;montrer &agrave; tous les institutions athl&eacute;tiques mixte l&rsquo;opportunit&eacute; de montrer leurs athl&egrave;tes et tactiques.
      <br>
      Il aura deux &eacute;quipes, jaune et bleue, avec deux robots. Les joueurs de chaque &eacute;quipe changera pendant les manches.
    </p>
  </div>
  <div class="col-lg-4 col-md-2 col-sm-12 col-12">
    <a href="../file/Flip2020_FullRulebook_FR.pdf" target="_blank"><img src="../assets/loading.gif" data-src="../assets/flip_logo.jpg" class="img-fluid lazy"></a>
  </div>
</div>
<a name="Terrain de jeu"></a>
<div id="row" class="row justify-content-center">
 <div class="col-lg-11 col-md-11 col-sm-12 col-12">
   <h3>Terrain de jeu</h3>
   <hr class="inner-divider">
   <p>
     Cette ann&eacute;e, le terrain de jeu sera un rectangle &agrave; un niveau avec deux points de d&eacute;part pour chaque &eacute;quipe. Le terrain de jeu inclura deux arches et deux actuateurs champignons, situ&eacute;s &eacute;galement sur les c&ocirc;t&eacute;s oppos&eacute;s du terrain.
   </p>
 </div>
</div>
<div id="row" class="row justify-content-center">
 <div class="col-lg-8 col-md-10 col-sm-12 col-12">
   <img class="img-fluid lazy" src="../assets/loading.gif" data-src="../assets/playing_field.png">
 </div>
</div>
<a name="Pi&egrave;ces de jeu"></a>
<div id="row" class="row justify-content-center">
 <div class="col-lg-11 col-md-11 col-sm-12 col-12">
   <h3>Pi&egrave;ces de jeu</h3>
   <hr class="inner-divider">
   <p>
     La pi&egrave;ce de jeu (PJ) cette ann&eacute;e sera des sacs de f&egrave;ves. Il aura deux diff&eacute;rentes pi&egrave;ces de jeu, rouge et noire. Les PJ rouge tombent en jeu &agrave; un certain rythme durant la manche. Les PJ noire tombent en jeu chaque fois qu&rsquo;il y a un bonus activ&eacute;. Les robots ne peuvent pas toucher les PJ et il n&rsquo;y aura pas de limites de PJ sur le terrain de jeu pendant les manches. Les PJ seront sur un convoyeur &agrave; cha&icirc;ne qui bouge en direction d'une bo&icirc;te durant chaque p&eacute;riode de convoyeur. Le convoyeur de cha&icirc;ne changera de direction quand une &eacute;quipe d&eacute;clenche un actuateur ou la planche articul&eacute;e.
   </p>
 </div>
</div>
<div id="row" class="row justify-content-center">
 <div class="col-lg-8 col-md-10 col-sm-12 col-12">
   <img class="img-fluid lazy" src="../assets/loading.gif" data-src="../assets/conveyor.png">
 </div>
</div>
<a name="Marquer des points"></a>
<div id="lastrow" class="row justify-content-center">
 <div class="col-lg-11 col-md-11 col-sm-12 col-12">
   <h3>Marquer des points</h3>
   <hr class="inner-divider">
   <p>
     Les PJ sont plac&eacute;es sur le terrain de jeu par un distributeur. Les PJ rouge sont apport&eacute;es sur le milieu du convoyeur &agrave; cha&icirc;ne sur un rythme de 4 secondes. Les activations bonus arrivent juste quand un robot d&eacute;clenche leur planche articul&eacute;e, en r&eacute;sultat, la direction du convoyeur de cha&icirc;ne change vers la bo&icirc;te de l&rsquo;&eacute;quipe qui a d&eacute;clench&eacute; la planche articul&eacute;e. Une &eacute;quipe gagne un point chaque fois qu&rsquo;une PJ tombe dans leur bo&icirc;te.
     <br>
     <br>
     Les PJ rouge valent 20 points chaque et les PJ noire valent 200 points chaque. Les robots sont oblig&eacute;s &agrave; d&eacute;clencher au moins un actuateur chaque manche.
     Il y a 5 actuateurs diff&eacute;rent sur le terrain de jeu:
     <ul>
       <li>La balle encha&icirc;n&eacute;e augmente temporairement le rythme de production de PJ. <a href="../assets/ball_chain.png" class="link" target="_blank">Voir i&ccedil;i. <i class="fas fa-external-link-alt"></i></a></li>
       <li>Le champignon augmente temporairement la vitesse du convoyeur &agrave; cha&icirc;ne. Il y en a deux champignons. Alors si une &eacute;quipe d&eacute;clenche le champignon le plus loin de leur robot, le rythme du convoyeur augmentera plus que celle qui est plus proche. <a href="../assets/arch.png" class="link" target="_blank">Voir i&ccedil;i. <i class="fas fa-external-link-alt"></i></a></li>
       <li>L&rsquo;actuateur tornade arr&ecirc;te le convoyeur ou raccourcit le rythme des PJ. <a href="../assets/mushroom.png" class="link" target="_blank">Voir i&ccedil;i. <i class="fas fa-external-link-alt"></i></a></li>
       <li>La planche articul&eacute;e peut &ecirc;tre d&eacute;clench&eacute; une fois par chaque &eacute;quipe pour changer la direction du convoyeur &agrave; cha&icirc;ne. <a href="../assets/hindge.png" class="link" target="_blank">Voir i&ccedil;i. <i class="fas fa-external-link-alt"></i></a></li>
       <li>Il y aura des arches et une boule de m&eacute;tal y sera attach&eacute;e, pour recevoir une bonus, vous devez mettre la balle de c&ocirc;t&eacute;. Pour obtenir une autre bonus, vous devez amener le ballon de l'autre c&ocirc;t&eacute;. <a href="../assets/arch.png" class="link" target="_blank">Voir i&ccedil;i. <i class="fas fa-external-link-alt"></i></a></li>
     </ul>
     Chaque actionneur sera connect&eacute; &agrave; une lumi&egrave;re, qui s'allume en vert, lorsque vous pouvez utiliser cet actionneur.
     <br>
     <br>
     <em>Toutes les images sur cette page sont pris de captures d'&eacute;cran du
       <a href="https://www.youtube.com/watch?v=DIdrr1apLfY" class="link" target="_blank">vid&eacute;o YouTube Flip 2020 de CRC Robotique <i class="fas fa-external-link-alt"></i></a>.</em>
   </p>
 </div>
</div>
<?php
require 'layouts/footer.php';
?>
