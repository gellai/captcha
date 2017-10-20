<?php include 'GellaiCaptcha.php'; ?>

<!DOCTYPE html>
    <header></header>
    <body>
        <p><img src=GellaiCaptcha.php?mode=raw&length=10&lColor=d40000&tColor=d40000&bColor=d09898 /></p>
        <?php $param = array('length' => 8); ?>
        
        <p><?php echo $gCaptcha->getCaptcha($param); ?></p>
    </body>
</html>
