<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .test{
            background-color: salmon;
        }
    </style>
</head>

<body>
    <form action="test2.php" method="post">
        <input type="text" name="msg" disabled>
        <input type="submit" value="submit">
    </form>
    <button class="aa" type="button">test</button>
    <button class="aa" type="button">test</button>

    <ul>
        <li>1</li>
        <li>2</li>
        <li>3</li>
        <li>4</li>
        <li>5</li>
        <li>6</li>
        <li>7</li>
    </ul>

    <!-- <p><?= $message ?></p> -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script type="text/javascript">
        $('ul').click(function(event){
            // if(event.target.textContent == 1){
            //     console.log(event.target.textContent)
            //     // console.log($("li:last"));
            //     let x= $('li:last');
            //     console.log(x.)
            // }
            $('ul').append("text");
        })
    </script>
</body>

</html>