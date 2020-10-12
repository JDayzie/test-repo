<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $id=$_GET["id"];
    // $connect=0;
    // $stmt=mysqli_prepare($connect,"select * from table where id=?");
    
    // echo "<script>alert('test');</script>";
    // header("location:p1.php");
    if($id==1){//query from DB
        $name="hello"; 
    }else if($id==2){
        $name="John";
    }
    ?>
    <input type="text" value="<?=$name?>">
</body>
</html>