<?php
    $servername = "localhost";
    $username = "root";
    $password = "";

    @$polacz = mysqli_connect($servername, $username, $password);

    if (!$polacz){
        die("<span style='color: white;'>Połączenie z serwerem MySQL nieudane! <br> kod błędu: ".mysqli_connect_errno()."</span>");
    }
?>