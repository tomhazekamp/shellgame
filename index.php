<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>shell-game</title>
    <meta name="description" content="My template">

    <!-- style -->

</head>
<body>
<?php
include 'class-ball.php';
include 'class-cup.php';
include 'class-player.php';

$colorBall = new Ball('red');
echo $colorBall->getBallColor();

$setNamePlayer = new Player('tom', 100);
$arrayIndex = $setNamePlayer->getPlayer();
print_r ($arrayIndex);

?>

<!-- scripts -->

</body>
</html>
