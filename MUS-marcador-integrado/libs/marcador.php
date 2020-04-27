<?php


$marcador_folder          = './marcador/'; # the vars folder
$filename_marcador       = 'marcador.var';


function nuevo_marcador(){
  $file=$GLOBALS['marcador_folder'].$GLOBALS['filename_marcador'];
  # Si no existe lo creo (la primera vez)
  if (!file_exists($file)) {
      if (!mkdir($GLOBALS['marcador_folder'], 0777, true)) {
          die('Failed to create folders marcador...');
      }
    }
  # inicializa_mazo
  inicializa_marcador();

}

function inicializa_marcador(){
    $marcador = array(
      "vacas1"        => 0,
      "vacas2"        => 0,
      "terneros1"     => 0,
      "terneros2"     => 0,
      "piedras1"      => 0,
      "piedras2"      => 0,
      "grande"        => 0,
      "chica"         => 0,
      "pares"         => 0,
      "juego"         => 0,
    );

guarda_marcador($marcador);
}


function marcador_nueva_mano(){

  $marcador = carga_marcador();
  $marcador["grande"] = 0;
  $marcador["chica"]  = 0;
  $marcador["pares"]  = 0;
  $marcador["juego"]  = 0;
  $marcador["piedras1"]  = 0;
  $marcador["piedras2"]  = 0;


guarda_marcador($marcador);
}


function guarda_marcador($marcador){
      $file=$GLOBALS['marcador_folder'].$GLOBALS['filename_marcador'];
      $content = serialize($marcador);
      file_put_contents($file, $content);
}


function carga_marcador(){
    $file=$GLOBALS['marcador_folder'].$GLOBALS['filename_marcador'];
    $marcador = unserialize(file_get_contents($file));
    while(!$marcador){
      echo "ALTOOOOO!!! PROBLEMA AL CARGAR el marcador";
      sleep(0.4);
      $marcador = unserialize(file_get_contents($file));
    }
    return $marcador;
}







 ?>
