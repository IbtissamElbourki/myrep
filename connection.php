<?php

  $user='root';
  $pass='';
  $dsn='mysql:host=localhost;dbname=projet_bd';
  
  try{
  $dbn=new PDO($dsn,$user,$pass);
  
  }catch(PDOException $e){
  	die("Erreur :".$e->getMessage());
  }

?>