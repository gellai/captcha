<?php include 'classes/GellaiCaptcha.php'; ?>

<!DOCTYPE html>
    <header></header>
    <body>
        <p><img src=classes/GellaiCaptcha.php?mode=raw&length=10&lColor=d40000 /></p>
        <?php $param = array('length' => 8); ?>
        
        <p><?php echo $gCaptcha->getCaptcha($param); ?></p>
    </body>
</html>
