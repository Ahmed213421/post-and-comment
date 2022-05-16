<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php include 'connect.php';
        $model = new Model();
        $insert = $model->insert()

    ?>
    <form action="" method="get">
        name: <br>
        <input type="text" name="name"><br>
        title: <br>
        <input type="text" name="title"><br>
        <input type="submit" value="submit" name="sub">
    </form>
</body>
</html>