<?php include "connect.php" ?>
<html>
<body>
    <?php
        $stmt = $pdo->prepare("SELECT * FROM member WHERE name = ?");
        $stmt->bindParam(1,$_GET["name"]);
        $stmt->execute(); 
        $row=$stmt->fetch()
    ?>
    <div>
        <div>
            <img src='img/member_photo/<?=$row["name"]?>.jpg' width='100'>
        </div>
        <div style="padding:15px">
            <h2><?=$row["name"]?></h2>
            ไอดีลูกค้า: <?=$row["username"]?><br> 
            รหัส: <?=$row["password"]?><br>
            ชื่อ: <?=$row["name"]?><br>
            ที่อยู่: <?=$row["address"]?><br>
            โทรศัพท์: <?=$row["mobile"]?><br>
            อีเมล: <?=$row["email"]?><br>
        </div>
    </div>
    
</body>
</html>