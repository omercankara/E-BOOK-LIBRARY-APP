<?php
      try{
          $baglanti = new PDO("mysql:host=localhost; dbname=kutuphane; charset=utf8","root","");
         
        
      } catch(Exception  $e){
                echo $e->getMessage();
      }
?>