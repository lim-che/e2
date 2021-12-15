<?php

session_start();

if(isset($_SESSION['results'])){
    $results = $_SESSION['results'];
    $winner = $results['winner'];
    $play = $results['play'];
    $choice = $results['choice'];
    $give = $results['give'];


    // var_dump($winner);
    // var_dump($play);
    // var_dump($choice);

    $_SESSION['results'] = null;
}

require 'index-view.php';

?>