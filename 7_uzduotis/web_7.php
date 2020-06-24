
<?php

echo '1<br>';

$color = 'black';

    if(!empty($_GET)){
        if ($_GET['color']==='1') $color = 'red';
    }
    $link1 = '<a href="/pirmas/web_7.php"> LINK 1 </a>';
    $link2 = '<a href="/pirmas/web_7.php?color=1&page=2"> LINK 2 </a>';

    echo "<div style=\"background-color:$color\">$link1 <br>$link2</div>";

echo '<br>2<br>';


$backgroundColor = '';

if(!empty($_GET)){
    if ($_GET['color'] !=='1') {
        $backgroundColor = $_GET['color'];
    }
}
$link1 = '<a href="/pirmas/web_7.php"> LINK </a>';

echo "<div style=\"background-color:$backgroundColor\">$link1</div>";


echo '<br>3<br>';

$color3 = 'grey';

if(!empty($_GET)){
    if ($_GET['color'] !=='1') {
        $color3 = $_GET['color'];
    }
}
?>
<form action="" method="get">
Color:<input type="text" name="color" id="">
<button type="submit">Send</button>
</form>

<?php
$link1 = '<a href="/pirmas/web_7.php"> First Link </a>';
echo "<div style=\"background-color:$color3\">$link1</div>";
 


