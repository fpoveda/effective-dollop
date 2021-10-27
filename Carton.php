<?php
include_once 'Fila.php';
include_once 'Numero.php';


class Carton{
   const numRow = 3;
   const numCol = 9;
   const numNumeros = 15;
   
   
   public function __construct(){
       while (self::comprobarFilas($row1, $row2, $row3)){
           //generar row1
           $row1 = new Fila();
           //generar row2
           $row2 = new Fila();
           //generar row3
           $row3 = new Fila();
       }
   }
   
   
   private static function comprobarFilas($row1, $row2, $row3 ){
       
       
   }
   
   
   
   public function generarCarton(numRow,numCol){
      for($i=0;$i<count($numRow);$i++){
         echo "<tr>";
         for($j)
      }
   }
   
}