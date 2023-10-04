<html>
<body>
<?php
    if(empty($_COOKIE["lang"])){
        setcookie("lang",$_GET["language"],time()+10);
    }
    if (!isset($_COOKIE["lang"])) {
        setcookie("lang",$_GET["language"],time()+10);
    }
?>
<a href="http://localhost/040613411/lab9cookiesession/select.php?language=en">en</a>
<a href="http://localhost/040613411/lab9cookiesession/select.php?language=th">th</a>
</body>
</html>