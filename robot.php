<?php
$title = "About our robot - CRHS Robotics 2020";
$sidebar = TRUE;
$links = ["Conception", "Chassis", "Drive", "Extendable arm", "Rotational Arm"];
require 'layouts/header.php';
 ?>
 <a name="Conception"></a>
 <div id="row" class="row justify-content-center">
 	<div class="col-lg-8 col-md-10 col-sm-12 col-12">
    <h2>Robot conception</h2>
    <hr class="outer-divider">
    <p>
      Flip 2020 is a simple game designed around strategy. To be successful, teams will need a robot that:
      <ul>
        <li>Is mobile;</li>
        <li>Can extend up to 36&rdquo; past the edge of the game field;</li>
        <li>Can knock down the carriage on the arch actuator;</li>
        <li>Can launch the carriage from the bottom back over the top of the arch.</li>
      </ul>
      <strong>Meet: Fallax Rem!</strong>
    </p>
  </div>
  <div class="col-lg-4 col-md-2 col-sm-12 col-12">
     <img class="img-fluid lazy" src="assets/loading.gif" data-src="assets/robot.jpg">
  </div>
</div>
<a name="Chassis"></a>
<div id="row" class="row justify-content-center">
  <div class="col-lg-4 col-md-2 col-sm-12 col-12">
     <img class="img-fluid lazy" src="assets/loading.gif" data-src="assets/ae.jpg">
  </div>
 <div class="col-lg-8 col-md-10 col-sm-12 col-12">
   <h3>The Chassis</h3>
   <hr class="inner-divider">
   <p>
     A chassis constructed with 30 mm &times; 30 mm aluminum extrusion.
   </p>
 </div>
</div>
<a name="Drive"></a>
<div id="row" class="row justify-content-center">
 <div class="col-lg-8 col-md-10 col-sm-12 col-12">
   <h3>The drive system</h3>
   <hr class="inner-divider">
   <p>
     The drive system consists of two 4&rdquo; &times; 1 &frac14;&rdquo; Colson Wheels. The Colson wheels are constructed
     with a thermoplastic rubber tread and a polypropylene core making them light weight and durable while providing
     excellent traction. The Colson wheels are run by two 64:1 banebot motors and are balanced with castors.
   </p>
 </div>
 <div class="col-lg-4 col-md-2 col-sm-12 col-12">
    <img class="img-fluid lazy" src="assets/loading.gif" data-src="assets/drive_system.jpg">
 </div>
</div>
<a name="Extendable arm"></a>
<div id="row" class="row justify-content-center">
  <div class="col-lg-4 col-md-2 col-sm-12 col-12">
     <img class="img-fluid lazy" src="assets/loading.gif" data-src="assets/extendable_arm.jpg">
  </div>
 <div class="col-lg-8 col-md-10 col-sm-12 col-12">
   <h3>The extendable arm</h3>
   <hr class="inner-divider">
   <p>
     To attack the mushroom actuators, an arm was constructed out of aluminum extrusion that starts upright, but that can
     descend to over 36&rdquo; beyond the reach of the robot.
   </p>
 </div>
</div>
<a name="Rotational Arm"></a>
<div id="lastrow" class="row justify-content-center">
 <div class="col-lg-8 col-md-10 col-sm-12 col-12">
   <h3>The rotational arm</h3>
   <hr class="inner-divider">
   <p>
     To attack the carriage on the arch actuator an aluminum extrusion arm was attached to the 12Vdc Drive Electric worm
     gear Motor that can both knock the carriage down from the middle, as well as launch it back over the top.
   </p>
 </div>
 <div class="col-lg-4 col-md-2 col-sm-12 col-12">
    <img class="img-fluid lazy" src="assets/loading.gif" data-src="assets/rotational_arm.jpg">
 </div>
</div>
<?php
require 'layouts/footer.php';
?>
