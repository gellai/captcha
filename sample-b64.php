<?php 
include_once('GellaiCaptcha.php'); 

$param = array(
            'mode'	 => "b64",
            'length' => 5,
            'type'	 => "gif",
            'tColor' => "646464",
            'bColor' => "F0F0F0",
            'lColor' => "949494" ); 
?>

<!DOCTYPE html>
    <header></header>
    <body>
        <h1>Base64 Mode</h1>
        <p><?php echo $gCaptcha->getCaptcha($param); ?></p>
    </body>
</html>