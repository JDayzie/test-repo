<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>game 2</title>
    <link rel="stylesheet" href="style-game-2.css">
</head>

<body>
    <div id="display">
        <table>
            <?php
                $a = range(1,15);
                // $a = array(1,2,3,4)
                shuffle(($a));
                $width = 4;
                $loop = $width * $width;
                echo "<tr>";
                for($i=0;$i<$loop;$i++){
                    if($i<$loop-1)echo "<td id=".($i+1).">".$a[$i]."</td>";
                    else echo "<td id=".($i+1)."></td>";
                    if(($i>0)and($i<$loop-1) and (($i+1)%4==0)) echo "</tr><tr>";
                    else if($i==$loop-1) echo "</tr>";
                }
            ?>
        </table>
    </div>
    <button id="shuffle">Shuffle</button>
    <button id="giveup">Give up!</button>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="game2.js"></script>
</body>

</html>