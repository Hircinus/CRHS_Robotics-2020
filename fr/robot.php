<?php
$title = "&Agrave; propos de notre robot - CRHS Robotique 2020";
$sidebar = TRUE;
$links = ["Conception", "Ch&acirc;ssis", "Conduite", "Bras extensible", "Bras rotationnel"];
require 'layouts/header.php';
 ?>
 <a name="Conception"></a>
 <div id="row" class="row justify-content-center">
 	<div class="col-lg-8 col-md-10 col-sm-12 col-12">
    <h2>Conception du robot</h2>
    <hr class="outer-divider">
    <p>
      Flip 2020 est un jeu simple con&ccedil;u autour de la strat&eacute;gie. Pour r&eacute;ussir, les &eacute;quipes auront besoin d'un robot qui:
      <ul>
        <li>Est mobile;</li>
        <li>Peut s'&eacute;tendre jusqu'&agrave; 36&rdquo; au-del&agrave; du bord du terrain de jeu;</li>
        <li>Peut faire tomber le chariot sur l'actionneur d'arc;</li>
        <li>Peut lancer le chariot du bas de l'arc en haut.</li>
      </ul>
      <strong>Rencontrer: Fallax Rem!</strong>
    </p>
  </div>
  <div class="col-lg-4 col-md-2 col-sm-12 col-12">
     <img class="img-fluid lazy" src="../assets/loading.gif" data-src="../assets/robot.jpg">
  </div>
</div>
<a name="Ch&acirc;ssis"></a>
<div id="row" class="row justify-content-center">
  <div class="col-lg-4 col-md-2 col-sm-12 col-12">
     <img class="img-fluid lazy" src="../assets/loading.gif" data-src="../assets/ae.jpg">
  </div>
 <div class="col-lg-8 col-md-10 col-sm-12 col-12">
   <h3>Le Ch&acirc;ssis</h3>
   <hr class="inner-divider">
   <p>
     Un ch&acirc;ssis construit avec une extrusion d'aluminium de 30 mm &times; 30 mm.
   </p>
 </div>
</div>
<a name="Conduite"></a>
<div id="row" class="row justify-content-center">
 <div class="col-lg-8 col-md-10 col-sm-12 col-12">
   <h3>Le syst&egrave;me de conduite</h3>
   <hr class="inner-divider">
   <p>
     Le syst&egrave;me de conduite se compose de deux roues Colson 4&rdquo; &times; 1&frac14;&rdquo;. Les roues Colson sont construites
      avec une bande de roulement en caoutchouc thermoplastique et un noyau en polypropyl&egrave;ne les rendant l&eacute;gers et durables tout en offrant
      excellente traction. Les roues Colson sont g&eacute;r&eacute;es par deux moteurs banebot 64:1 et sont &eacute;quilibr&eacute;es avec des roulettes.
   </p>
 </div>
 <div class="col-lg-4 col-md-2 col-sm-12 col-12">
    <img class="img-fluid lazy" src="../assets/loading.gif" data-src="../assets/drive_system.jpg">
 </div>
</div>
<a name="Bras extensible"></a>
<div id="row" class="row justify-content-center">
  <div class="col-lg-4 col-md-2 col-sm-12 col-12">
     <img class="img-fluid lazy" src="../assets/loading.gif" data-src="../assets/extendable_arm.jpg">
  </div>
 <div class="col-lg-8 col-md-10 col-sm-12 col-12">
   <h3>Le bras extensible</h3>
   <hr class="inner-divider">
   <p>
     Pour attaquer les actionneurs &agrave; champignon, un bras a &eacute;t&eacute; construit en extrusion d'aluminium qui commence &agrave; la verticale, mais qui peut
     descendre &agrave; plus de 36&rdquo; au-del&agrave; de la port&eacute;e du robot.
   </p>
 </div>
</div>
<a name="Bras rotationnel"></a>
<div id="lastrow" class="row justify-content-center">
 <div class="col-lg-8 col-md-10 col-sm-12 col-12">
   <h3>Le bras rotationnel</h3>
   <hr class="inner-divider">
   <p>
     Pour attaquer le chariot sur l'actionneur d'arc, un bras d'extrusion en aluminium a
     &eacute;t&eacute; attach&eacute; au motor&eacute;ducteur &agrave; vis sans fin &eacute;lectrique 12Vdc qui peut
     &agrave; la fois faire tomber le chariot du milieu et le relancer en haut.
   </p>
 </div>
 <div class="col-lg-4 col-md-2 col-sm-12 col-12">
    <img class="img-fluid lazy" src="../assets/loading.gif" data-src="../assets/rotational_arm.jpg">
 </div>
</div>
<?php
require 'layouts/footer.php';
?>
