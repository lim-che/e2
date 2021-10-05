<?php

//dice digit
$dice = [1, 2, 3, 4, 5, 6];

//dice digit for player 1
$player1 = $dice[rand(0, 5)];

//dice digit for player2
$player2 = $dice[rand(0, 5)];

//decide winner
$winner = "";
if ($player1 > $player2){
    $winner = 'Player 1 Wins';
}elseif ($player1 < $player2){
    $winner = 'Player 2 Wins';
}else{
    $winner = "Tie";
}



require 'dice.php';