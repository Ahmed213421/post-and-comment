<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <h1>list of posts</h1>
        <?php
        include 'connect.php';
        $model = new Model();
        $rows = $model->fetch();
        $i = 0;
        foreach($rows as $row){
        ?>
            <ul>
                <li><?=$i++?></li>
                <li><a href="post.php?id=<?=$row['id']?>"> <?=$row['title']?></a></li>
            </ul>
<?php
        }
?>
    </div>
</body>
</html>