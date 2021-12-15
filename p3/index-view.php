<!DOCTYPE html>
<html lang="en">

<head>
    <title>Project 3 --- Rock, Paper, Scissors</title>
    <meta charset="utf-8" />
    <link href="data:" , rel="icon" />
</head>

<body>
    <h1>Project2 --- Rock, Paper, Scissors</h1>
    <h2>Instruction</h2>
    <h3>
    <div>Choose one option below, Rock, Paper, or Scissors</div>
    <div>Your opponent will do the samething</div>
    <div>Rock wins Scissors, Paper wins Rocks, and Scissors wins Rock, otherwise a Tie.</div></h3><br>
    <form method="POST" action="process.php">
        <!-- ... -->
        <input type="radio" id="rock" name="choice" value=0
            <?php echo (!isset($choice) or $choice == 0) ? 'checked' : '' ?> /><label for="rock">Rock</label>
        <input type="radio" id="paper" name="choice" value=1
            <?php echo (isset($choice) and $choice == 1) ? 'checked' : '' ?> /><label for=" paper">Paper</label>
        <input type="radio" id="scissors" name="choice" value=2
            <?php echo (isset($choice) and $choice == 2) ? 'checked' : '' ?> /><label for="scissors">Scissors</label>
        <button type='submit'>Play</button>
        </form>

        <?php if(isset($results)){?> <h2>Results</h2>
        Your opponent has a <?php echo $give[$play]; ?>.---

        <?php if($winner == 'win'){?>
        You Won!
        <?php } elseif($winner == 'lost'){?>
        You lost, please try again.
        <?php } else{ ?>
        Tie! please try again.
        <?php } ?>

        <?php } ?>
</body>

</html>
