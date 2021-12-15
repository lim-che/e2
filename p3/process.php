<?php

session_start();
//rock = 0, paper = 1, scissors = 2
$give = ['Rock', 'Paper', 'Scissors'];
$choice = $_POST['choice'];
$play = rand(0, 2);

if ($choice == $play){
    $winner = 'tie';
}elseif($choice + 1 == $play or $choice - 2 == $play){
    $winner = 'lost';
}else{
    $winner = 'win';
}
// var_dump($winner);
// var_dump($choice);
// var_dump($play);
// var_dump($winner);

$_SESSION['results'] = [
    'winner' => $winner,
    'play' => $play,
    'choice' => $choice,
    'give' => $give
];

header('Location: index.php');


?>