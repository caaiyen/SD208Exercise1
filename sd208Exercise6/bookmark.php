<?php
    session_start();
?>
<?php
    $bookmarks = (isset($_SESSION['bookm'])) ? $_SESSION['bookm'] : array();
    if(isset($_POST['add'])){

        array_push($bookmarks, [$_POST['bookmark'],$_POST['url']]);
        $_SESSION['bookm'] = $bookmarks;
       

    }

    if (isset($_POST['clear'])){
        $_SESSION['bookm']  = [];
    }
    if (isset($_POST['x'])){
        array_splice($_SESSION['bookm'], $_POST['id'],1);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="bookmark.php" method= "POST">
        <label for="bookmark">Bookmark</label>
        <input type="text" id="bookmark" name= "bookmark">
        <label for="url">URL</label>
        <input type="text" id="url" name="url">
        <button type="submit" name ="add">Add Bookmark</button>
        <input name="clear" type="submit" value="Clear All">

    </form>

    <?php if(isset($_SESSION['bookm'])):?>
        <?php for($id= 0; $id < count($_SESSION['bookm']); $id++):?>    
            <a target="blank" href="<?php echo $_SESSION['bookm'][$id][1]?>"><?php echo $_SESSION['bookm'][$id][0]?></a>
            <form  action="bookmark.php" method="POST">
                <input type="hidden" name ="id" value="<?php echo $id;?>">
                <input name="x" type="submit" value="x">
            </form> 
        <?php endfor?>
    <?php endif?>
</body>

</html>