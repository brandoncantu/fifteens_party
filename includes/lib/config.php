<?php
    $user = 'root';
    $password = '';
    $db = 'xvkaren';
    $host = '127.0.0.1';
    // $user = 'b14fa1a2e46d45';
    // $password = '116b8057';
    // $db = 'heroku_15cf40b5956ac06';
    // $host = 'us-cdbr-east-02.cleardb.com';

    $link = mysqli_connect($host, $user, $password, $db);
        if(!$link){
            die("Connection failed: " . mysqli_connect_error());
        }else{
            //echo "Connection succesfull!";
        }
?>