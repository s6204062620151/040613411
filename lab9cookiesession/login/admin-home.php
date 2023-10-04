<?php
	include "connect.php";
    session_start();
    // ตรวจสอบว่ามีชื่อใน session หรือไม่ หากไม่มีให้ไปหน้า login อัตโนมัติ
    if (empty($_SESSION["username"]) ) { 
        header("location: login-form.php");
    }
?>
<html>
<body>
<h1>สวัสดี ADMIN: <?=$_SESSION["fullname"]?></h1>
หากต้องการออกจากระบบโปรดคลิก <a href='logout.php'>ออกจากระบบ</a>
<h1>รายการสั่งซื้อ</h1>
<?php
    $stmt = $pdo->prepare("SELECT username,COUNT(ord_id) FROM orders GROUP BY username");
    $stmt->execute();

    while ($row = $stmt->fetch()) {
        echo "ไอดีผู้ใช้: " . $row ["username"] . "<br>";
        echo "จำนวนคำสั่งซื้อ: " . $row ["COUNT(ord_id)"] . "<br>";
        echo "<a href='product-list-admin.php? . $row['username'] . '>แสดงรายการคำสั่งซื้อ</a>";
        echo "<hr>\n";
    }
?>

</body>
</html>
