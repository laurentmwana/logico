<?php

require dirname(__DIR__) . DIRECTORY_SEPARATOR . 'function.php';
if(isset($_POST['convertir'])){

   $danger = [];

   if(empty($_POST['number']) || empty($_POST['langage'])){

      $danger['vide'] = "Ceux deux champs ne devraient pas etre vide ";

   }  else{


      // tableaux des verifications 
      // Tableau de la methode n°1 (binaire)

      $oneMethode = [
         'bindec',
         'binoct',
         'binhex'
      ];

      // Tableau de la methode n°2 (decimal)

      $twoMethode = [
         'decbin',
         'decoct',
         'dechex'
      ];

      // Tableau de la methode n°3 (octal)

      $threeMethode = [
         'octbin',
         'octdec',
         'octhex',
      ];


      // Tableau  de la methode n°4 (hexadecimal)

      $fourMethode = [
         'hexbin',
         'hexdec',
         'hexoct'
      ];

      // methode n° 1 (Binaire)
      if(!preg_match('/^[0-1.]+$/' , trim($_POST['number'])) && in_array($_POST['langage'] , $oneMethode) ){

         $danger['binaire'] = "En binaire on a que deux valeurs 0 et 1  pas {$_POST['number']}";
      } 

      // methode n° 2 (décimal)
      if(!preg_match('/^[0-9.]+$/' ,trim($_POST['number'])) && in_array($_POST['langage'] , $twoMethode)){

         $danger['decimal'] = "En décimal  tout le chiffre sont autorisées sauf les lettres {$_POST['number']}";
      } 


      // methode n°3 (octal)
      if(!preg_match('/^[0-7.]+$/' , trim($_POST['number'])) && in_array($_POST['langage'] , $threeMethode)){

         $danger['octal'] = "En octal on a que sept valeurs numerique  0 à 7   pas {$_POST['number']}";
      } 

      

      // methode n° 4 (hexadecimal)
      if(!preg_match('/^[A-Fa-f0-9.]+$/' , trim($_POST['number'])) && in_array($_POST['langage'] , $fourMethode)){

         $danger['hexadecimal'] = "En hexadécimal 0 à 9 et A à F qui sont autorisées pas {$_POST['number']}";
      } 
   }


   if(empty($danger) && !empty($_POST)){

      $nombre = $_POST['number'];
      
      // à present on a tout verifié et o peut maintenant commencé la conversion 
      // conversion de la methode n° 1.1 (binaire en decimal)

      if($_POST['langage'] === $oneMethode[0]){
         $bindec = bindec($nombre);
         
         if($bindec == true){
            $success['binaire-decimal'] = "Valeur en (binaire) $nombre convertit en (decimal) , le resultat donne : $bindec"; 
         }
      }

      // conversion de la methode n° 1.2 (binaire en octal)
      if($_POST['langage'] === $oneMethode[1]){
         $binoct = decoct(bindec($nombre));

         if($binoct == true){
            $success['binaire-octal'] = "Valeur en (binaire) {$nombre} convertit en (octal) , le resultat donne : {$binoct}";
         }
      }

      // conversion de la methode n° 1.3 (binaire en hexadecimal)
      if($_POST['langage'] === $oneMethode[2]){
         $binhex = dechex(bindec($nombre));

         if($binhex == true){
            $success['binaire-hexadecimal'] = "Valeur en (binaire) {$nombre} convertit en (hexadécimal) , le resultat donne : {$binhex}";
         }
      }

      // fin de la premiere methode

      // conversion de la methode n° 2.1 (decimal-binaire)

      if($_POST['langage'] === $twoMethode[0]){
         $decbin = decbin($nombre);

         if($decbin == true){
            $success['decimal-binaire'] = "Valeur en (décimal) {$nombre} convertit en (binaire) , le resultat donne : {$decbin}";
         }
      }


      // conversion de la methode n° 2.2 (decimal-octal)
      if($_POST['langage'] === $twoMethode[1]){
         $decoct = decoct($nombre);

         if($decoct == true){
            $success['decimal-octal'] = "Valeur en (décimal) {$nombre} convertit en (octal) , le resultat donne : {$decoct}";
         }
      }

      // conversion de la methode n° 2.3 (decimal-hexadecimal)
      if($_POST['langage'] === $twoMethode[2]){
         $dechex = dechex($nombre);

         if($dechex == true){
            $success['decimal-hexadecimal'] = "Valeur en (décimal) {$nombre} convertit en (hexadecimal) , le resultat donne : {$dechex}";
         }
      }


      // conversion de la methode n° 3.1 (octal-binaire)
      if($_POST['langage'] === $threeMethode[0]){
         $octbin = decbin(octdec($nombre));

         if($octbin == true){
            $success['octal-binaire'] = "Valeur en (octal) {$nombre} convertit en (binaire) , le resultat donne : {$octbin}";
         }
      }

      //conversion de la methode n° 3.2 (octal-decimal)
      if($_POST['langage'] === $threeMethode[1]){
         $octdec = octdec($nombre);

         if($octdec == true){
            $success['octal-decimal'] = "Valeur en (octal) {$nombre} convertit en (décimal) , le resultat donne : {$octdec}";
         }
      }

      //conversion de la methode n° 3.3 (octal-hexadécimal)
      if($_POST['langage'] === $threeMethode[2]){
         $octhex = dechex(octdec($nombre)); 

         if($octhex == true){
            $success['octal-hexadecimal'] = "Valeur en (octal) {$nombre} convertit en (hexadécimal) , le resultat donne : {$octhex}";
         }
      }


      //conversion de la methode n° 4.1 (hexadecimal-binaire)
      if($_POST['langage'] === $fourMethode[0]){
         $hexbin = decbin(hexdec($nombre)); 

         if($hexbin == true){
            $success['octal-hexadecimal'] = "Valeur en (hexadecimal) {$nombre} convertit en (binaire) , le resultat donne : {$hexbin}";
         }
      }



      //conversion de la methode n° 4.2 (hexadécimal-decimal)
      if($_POST['langage'] === $fourMethode[1]){
         $hexdec = hexdec($nombre);

         if($hexdec == true){
            $success['hexadecimal-binaire'] = "Valeur en (hexadécimal) {$nombre} convertit en (decimal) , le resultat donne : {$hexdec}";
         }
      }



      //conversion de la methode n° 4.3 (hexadécimal - octal)
      if($_POST['langage'] === $fourMethode[2]){
         $hexoct = decoct(hexdec($nombre)); 

         if($hexoct == true){
            $success['hexadecimal-octal'] = "Valeur en (hexadécimal) {$nombre} convertit en (octal) , le resultat donne : {$hexoct}";
         }
      }  
     
   }



}