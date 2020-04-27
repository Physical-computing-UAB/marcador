
 <?php

require './libs/marcador.php';


#cargamos el marcador actual
$marcador=carga_marcador();

// $lixo = $_POST["vacas1"];
// echo "VACAS1: "; echo " /$lixo/ ";
// $lixo = $_POST["vacas2"];
// echo "VACAS2: "; echo " /$lixo/ ";
// $lixo = $_POST["terneros1"];
// echo "terneros1: "; echo " /$lixo/ ";
//
// var_dump($marcador);

# marcador_input nos ha llamado. Actualizamos
# si nos han envia
if(strlen($_POST["vacas1"])) {
  $marcador["vacas1"]=$_POST["vacas1"];
}
if( strlen($_POST["vacas2"])) {
  $marcador["vacas2"]=$_POST["vacas2"];
}
if(strlen($_POST["terneros1"])) {
  $marcador["terneros1"]=$_POST["terneros1"];
}
if(strlen($_POST["terneros2"])) {
  $marcador["terneros2"]=$_POST["terneros2"];
}
if(strlen($_POST["piedras1"])) {
  $marcador["piedras1"]=$_POST["piedras1"];
}
if(strlen($_POST["piedras2"])) {
  $marcador["piedras2"]=$_POST["piedras2"];
}
if(strlen($_POST["grande"])) {
  $marcador["grande"]=$_POST["grande"];
}
if(strlen($_POST["chica"])) {
  $marcador["chica"]=$_POST["chica"];
}
if(strlen($_POST["pares"])) {
  $marcador["pares"]=$_POST["pares"];
}
if(strlen($_POST["juego"])) {
  $marcador["juego"]=$_POST["juego"];
}

#guardamos el marcador y redireccionamos al marcador_input
guarda_marcador($marcador);

// var_dump($marcador);

?>


<html lang="en" dir="ltr">
  <head>
     <meta http-equiv="refresh" content="0;url=marcador_display.php">
    <title></title>
  </head>
  <body>

  </body>
</html>>
