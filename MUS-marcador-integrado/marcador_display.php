<?php

require './libs/marcador.php';

$marcador = carga_marcador();
// var_dump($marcador);



$vacas1 = $marcador["vacas1"];
$vacas2 = $marcador["vacas2"];
$terneros1 = $marcador["terneros1"];
$terneros2 = $marcador["terneros2"];
$piedras1 = $marcador["piedras1"];
$piedras2 = $marcador["piedras2"];
$grande = $marcador["grande"];
$chica = $marcador["chica"];
$pares = $marcador["pares"];
$juego = $marcador["juego"];


 ?>




<html>
<body>
    <head>
      <meta http-equiv="refresh" content="7" />
    </head>
 <?php
// require './libs/baraja.php';
// require './libs/marcador.php';

?>


<form>

      <label for="equipo1">Equipo 1: </label>
          V: <input type="text" id="v1" name="vacas1" size="1" maxlength="1" value="<?php echo @$vacas1;?>">
          T: <input type="text" id="t1" name="terneros1" size="1" maxlength="1" value="<?php echo @$terneros1;?>">
          <br>
      <label for="equipo2">Equipo 2: </label>
          V: <input type="text" id="v2" name="vacas2" size="1" maxlength="1" value="<?php echo @$vacas2;?>">
          T: <input type="text" id="t2" name="terneros2" size="1" maxlength="1" value="<?php echo @$terneros2;?>">
          <br>

  <hr>
    <label for="equipo1">Equipo 1 </label> Piedras: <input type="text" id="p1" name="piedras1" size="2" maxlength="2" value="<?php echo @$piedras1;?>"> <br>
    <label for="equipo2">Equipo 2 </label> Piedras: <input type="text" id="p2" name="piedras2" size="2" maxlength="2" value="<?php echo @$piedras2;?>">
<hr>


      <label for="lgrande">Grande: </label>   <input type="text" id="tgrabde" name="grande" size="2" maxlength="2" value="<?php echo @$grande;?>">  </br>
      <label for="lgrande">Chica : </label>    <input type="text" id="tchica"  name="chica"  size="2" maxlength="2" value="<?php echo @$chica;?>"> </br>
      <label for="lpares" >Pares : </label>      <input type="text" id="tpares"  name="pares"  size="2" maxlength="2" value="<?php echo @$pares;?>"> </br>
      <label for="ljuego" >Juego : </label>      <input type="text" id="tjuego"  name="juego"  size="2" maxlength="2" value="<?php echo @$juego;?>"> </br>

  <hr>  <hr>

  </form>






  <form action="marcador_record.php" method="post">
    <!-- <label for="equipo1"><?php echo @$jugadores_names[0];?> & <?php echo @$jugadores_names[2];?></label> vs.
    <label for="equipo2"><?php echo @$jugadores_names[1];?> & <?php echo @$jugadores_names[3];?></label><br> -->
    <label for="equipo1">Equipo 1: </label>
        V: <input type="text" id="v1" name="vacas1" size="1" maxlength="1" >
        T: <input type="text" id="t1" name="terneros1" size="1" maxlength="1" >  <br>
    <label for="equipo2">Equipo 2: </label>
        V: <input type="text" id="v2" name="vacas2" size="1" maxlength="1" value="">
        T: <input type="text" id="t2" name="terneros2" size="1" maxlength="1" value="">


    <hr>  <hr>

        <label for="piedras1">Piedras 1: </label>   <input type="text" id="tpiedras1" name="piedras1" size="2" maxlength="2" value="">
        <label for="piedras2">Piedras 2: </label>   <input type="text" id="tpiedras2" name="piedras2" size="2" maxlength="2" value="">
    <hr>
        <label for="lgrande">Grande: </label>   <input type="text" id="tgrabde" name="grande" size="2" maxlength="2" value="">
        <label for="lgrande">Chica : </label>    <input type="text" id="tchica"  name="chica"  size="2" maxlength="2" value="">
        <label for="lpares" >Pares : </label>      <input type="text" id="tpares"  name="pares"  size="2" maxlength="2" value="">
        <label for="ljuego" >Juego : </label>      <input type="text" id="tjuego"  name="juego"  size="2" maxlength="2" value="">

    <hr>  <hr>
      <input type="submit" value="Dale!">
  </form>



  <form action="marcador_nueva_mano.php">
      <input type="submit" value="Nueva Mano!">
  </form>


















</body>
</html>
