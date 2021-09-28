<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style/styles.css" type="text/css">
<title>Dice Roller</title>
</head>
<body>

<main class="container">
<h1>Random Dice Roller</h1>
<br>

<form class="form-group" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    



    <!-- <br> -->
<div class="input-container">
    <div class="input">
    <label for="dice-num">Number of Rolls</label>
    <br>
    <input class="item" type="number" name="dice-num" max="6" min="1" required value="1">
</div>
    
<div class="input">
<label for="dice-sides">Number of sides</label>
<br>
    <select class="item" name="dice-sides" id="diceSides" required>
        <option value="6">6</option>
        <option value="8">8</option>
        <option value="10">10</option>
        <option value="12">12</option>
        
    </select>
</div>

    <div class="submitBtn">
    <button class="item" type="submit" name="dice-roll-btn" value="Roll the dice">Roll the dice</button>
</div>
<div class="resetBtn">
    <button class="reset" type="reset" onclick="reloadPage()" <?php if(!isset($_POST['dice-roll-btn'])) {echo "disabled";} ?>>Reset</button>
</div>


</form>
<div class="result-container">
<?php

    if (isset($_POST["dice-roll-btn"])) {
        $diceNum = $_POST["dice-num"];
        $diceSides = $_POST["dice-sides"];

        $diceArray = array();
        for ($i = 0; $i < $diceNum; $i++) {
            array_push($diceArray,rand(1, $diceSides));

        }
            ?>


        <?php 

        for($i=0 ;$i<$diceNum;$i++){
            ?>
            <p class="result"> <?php echo $diceArray[$i] ?> </p>

        <?php 
        }

        ?>
            
</div>
</main>


        <?php
        

      
    };

    ?>
<script src="js/script.js"></script>
</body>
</html>