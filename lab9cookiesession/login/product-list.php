<?php
	include "connect.php";
    session_start();
    // ตรวจสอบว่ามีชื่อใน session หรือไม่ หากไม่มีให้ไปหน้า login อัตโนมัติ
    if (empty($_SESSION["username"]) ) { 
        header("location: login-form.php");
    }
?>

<html>
<head><meta charset="utf-8"></head>
<body>
<h1>รายการสั่งซื้อ</h1>
<?php
    $stmt = $pdo->prepare("SELECT * FROM orders WHERE username = '{$_SESSION[ "username" ]}'");
    $stmt->execute();

    while ($row = $stmt->fetch()) {
        echo "รหัสคำสั่งซื้อ: " . $row ["ord_id"] . "<br>";
        echo "ผู้สั่งซื้อ: " . $row ["username"] . "<br>";
        echo "วันที่ในการสั่ง: " . $row ["ord_date"] . "<br>";
        echo "สถานะ: " . $row ["status"] . "<br>";
        echo "<hr>\n";
    }
?>
<h3><a href="user-home.php">ย้อนกลับ</a></h3>
</body>
</html>
