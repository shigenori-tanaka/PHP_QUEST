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
            if($damege > 16){
                echo "{$_GET["player"]}が{$_GET["attack"]}!!";
                echo "<br>";
                echo "{$_GET["enemy"]}に{$damege}のダメージ！";
                echo "{$_GET["enemy"]}を倒した！";
            }else{
                echo "{$_GET["player"]}が{$_GET["attack"]}!!";
                echo "<br>";
                echo "{$_GET["enemy"]}に{$damege}のダメージ！";
            }
        }
        
        if($_GET["attack"] == "武器で攻撃"){
            $damege = rand(0,6);
            if($damege == 0 or $damege == 1){
                echo "ミス！{$_GET["player"]}はダメージを与えられない！";
            }else{
            echo "{$_GET["player"]}が{$_GET["attack"]}!!";
            echo "<br>";
            echo "{$_GET["enemy"]}に{$damege}のダメージ！";
            }
        }

        
    ?>
    
  
  </body>
</html>