<!doctype html>
<html lang='en'>

<head>
    <title>Project 1 - Toss dice</title>
    <meta charset='utf-8'>
    <link href=data:, rel=icon>
</head>

<body>
    <h1>Project 1 - Toss dice</h1>

    <h2>Mechanics</h2>
    <ul>
        <li>Player 1 and Player 2 tossed a dice</li>
        <li>A dice is randomly tossed, and each player received a number</li>
        <li>Whoever tossed a larger number is the winner.</li>
        <li>Otherwise, a tie.</li>
    </ul>

    <h2>Results</h2>

    <ul>
        <li>Player 1 tossed <?php echo $player1 ?></li>
        <li>Player 2 tossed <?php echo $player2 ?></li>
        <li>The result is: <?php echo $winner ?></li>
    </ul>
</body>