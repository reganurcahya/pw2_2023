<?php

   /*
       Variable Sistem
     Variable built in PHP (variable yang sudah ada di php)
   */
    echo $_SERVER["DOCUMENT_ROOT"];
    echo '<br><br>';

    /* 
    Variable User
    Variable yang dibuat oleh user
*/
    $name = 'Rul';
    $age = 15;
    $weight = 50.5;

    $name= 'Rega';

    echo "Nama saya adalah $name";


    /*
      Variable konstan
      variable yang tidak bisa diubah nilainya
	  1. Menggunakan define | define('fruit', "Apel");
	  2. Menggunakan const  | const fruit = "Apel";
    */
    echo '<br><br>';
    define("SITE_NAME", "Elena");
    echo SITE_NAME;
?>  