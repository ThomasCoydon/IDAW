<?php
$style = 'style1';
if(isset($_GET['css'])) {
$style = $_GET['css'];
}
setcookie("css", $style);
echo $_SESSION['login'];
echo'
<html>
    <head>
        <title>Style</title>
        <link rel="stylesheet" href='.$style.'.css type="text/css" media="screen" charset="utf-8" />
    </head>
    <form id="style_form" action="style.php" method="GET">
    <select name="css">
    <option value="style1">style1</option>
    <option value="style2">style2</option>
    </select>
    <input type="submit" value="Appliquer" />
    </form>
</html>'
?>