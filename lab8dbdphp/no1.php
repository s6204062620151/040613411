<?php include "connect.php" ?>
<html>
<head><meta charset="utf-8"></head>
<body>
    <table border='1'>
        <tr>
            <th>รหัสสินค้า</th>
            <th>ชื่อสินค้า</th>
            <th>รายละเอียดสินค้า</th>
            <th>ราคา</th>
        </tr>
        <?php
            $stmt = $pdo->prepare("SELECT * FROM product");
            $stmt->execute();
            while ($row=$stmt->fetch()) :
        ?>
        <tr>
            <th> <?=$row["pid"]?> </th>
            <th> <?=$row["pname"]?> </th>
            <th> <?=$row["pdetail"]?> </th>
            <th> <?=$row["price"]?> </th>
        </tr>
        <?php endwhile; ?>       
    </table>
</body>
</html>