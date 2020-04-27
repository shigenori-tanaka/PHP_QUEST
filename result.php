<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>PHP_QUEST</title>
        <link rel="stylesheet" href="stylesheet.css">
    </head>
  <body>
    <?php 
        if($_GET["attack"] == "魔法で攻撃") {
            $damege = rand(15,20);
            echo "魔法で攻撃！";
            echo "<br>";
            echo "{$_GET["enemy"]}に{$damege}のダメージ！";
        }
    ?>
    
  
  </body>
</html>