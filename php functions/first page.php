<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="secondpage," method="POST">
        <label>Name</label><br>
        <input type="text" name="sname"><br><br>
        <label>password</label><br>
        <input type="password" name="pass" id=""><br><br>
        <input type="submit" value="submit" name="save">
    </form>
    <!-- <?php echo $_SERVER['PHP_SELF']?> -->

    <?php  
        if(isset($_POST['save']))
        {
            echo "Name is :".$_POST['sname']." ".$_POST['pass'];

        }
    
    ?>
</body>
</html>