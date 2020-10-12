<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
</head>

<body>
    <form action="" method="post">
        <input type="text" placeholder="test" name="inp">
        <input type="submit" value="submit">
    </form>
</body>
<?php
    if(isset($_POST["inp"])){
        echo $_POST["inp"];
    }
?>

</html>