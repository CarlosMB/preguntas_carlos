<?php

    //Llama conexión a BD.
    $db_name= "phpstormpreguntas";
    $db_server="localhost";
    $db_user="root";
    $db_pass="";
    $db_connection = mysql_connect($db_server,$db_user,$db_pass) or die ("Error al conectar");
    mysql_select_db($db_name, $db_connection) or die ("La BD no existe");
    mysql_query("SET NAMES utf8");