<?php
if(!empty($_GET)) {
    if($_GET['file'] = red.php){
        header('Location: red.php');
        exit;
    }
}

?>

<a style="background-color:blue; width: 100%; height: 100vh" href="blue.php?file=red.php">RED</a>