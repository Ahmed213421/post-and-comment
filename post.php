<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 
    include 'connect.php';
    $model = new Model();
    $id = $_REQUEST['id'];
    $row = $model->fetch_single($id);
?>  

<h1>post</h1>
<?php 
    echo $row['name'];
    echo "<br>";
    echo $row['title'];
?>
<br><br><br>
add comment 

<?php
        $model = new Model();
        $insert = $model->addcomment()
        

?>
<form action="" method="get">
    <input type="text" placeholder="enter your name" name="name"><br>
    <input type="hidden" name="id" value="<?=$row['id']?>">
    <input type="text" placeholder="enter your description" name="description"><br>
    <button type="submit" name="sub">add</button>
</form>

<?php 
    $model = new Model();
    $id = $_REQUEST['id'];
    $rows = $model->fetch_comment($id);


?>
<br>
<br>
<h1>comments</h1>

<?php 
if($rows>0){
    
    foreach($rows as $comment){ 
        echo $comment['name'];
        echo "<br>";
        echo $comment['description'];
        echo "<br>";
        echo "<br>";
        echo "<br>";
    }
}else{
    echo 'empty';
}
?>
</body>
</html>