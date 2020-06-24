<?php
if(!empty($_GET)) {
    if($_GET['file'] = blue.php){
        header('Location: blue.php');
        exit;
    }
}

?>

<a style="background-color:red; width: 100%; height: 100vh" href="red.php?file=blue.php">BLUE</a>