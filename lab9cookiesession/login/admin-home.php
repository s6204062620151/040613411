<?php session_start(); ?>

<html>
<body>
<h1>สวัสดี ADMIN: <?=$_SESSION["fullname"]?></h1>
หากต้องการออกจากระบบโปรดคลิก <a href='logout.php'>ออกจากระบบ</a>
<h1>รายการสั่งซื้อ</h1>
<?php
    $stmt = $pdo->prepare("SELECT username,COUNT(ord_id) as order_amount FROM orders GROUP BY username");
    $stmt->execute();

    while ($row = $stmt->fetch()) {
        echo "ไอดีผู้ใช้: " . $row ["username"] . "<br>";
        echo "จำนวนคำสั่งซื้อ: " . $row ["ord_id"] . "<br>";
        echo "<hr>\n";
    }
?>
</body>
</html>
