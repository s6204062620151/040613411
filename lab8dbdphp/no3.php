<?php include "connect.php" ?>
<html>
<body>
    <?php
        $stmt = $pdo->prepare("SELECT * FROM member");
        $stmt->execute(); 
        while ($row=$stmt->fetch()) :       
        echo "ชื่อสมาชิก : " . $row["name"] . "<br>";
        echo "ที่อยู่ : " . $row["address"] . "<br>";
        echo "อีเมล : " . $row["email"] . "<br>";?>
        
    <img src='img/member_photo/<?=$row["name"]?>.jpg' width='100'><hr>
    <?php endwhile; ?>
</body>
</html>