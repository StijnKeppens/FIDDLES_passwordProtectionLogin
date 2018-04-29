<?php

  $DBhost = "fufanu.be.mysql";
  $DBuser = "fufanu_be";
  $DBpass = "uJt4JZgP";
  $DBname = "fufanu_be";
  
  $DBcon = new MySQLi($DBhost,$DBuser,$DBpass,$DBname);
    
     if ($DBcon->connect_errno) {
         die("ERROR : -> ".$DBcon->connect_error);
     }