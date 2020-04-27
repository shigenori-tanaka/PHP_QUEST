<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>PHP_QUEST</title>
        <link rel="stylesheet" href="stylesheet.css">
    </head>
  <body>
    <?php 
      $enemies = ["スライム", "ゴブリン"] ;
      foreach($enemies as $enemy){
        echo "{$enemy} <br>";
      }
      echo "が現れた！";

      $players = ["たろう", "次郎", "JOHN"];
      $attacks = ["武器で攻撃", "魔法で攻撃"];
    ?>


    <form action="result.php" method="get">
      <label for="player">誰で闘う？</label>
      <select name="player">
        <?php foreach($players as $player): ?>
          <option value="<?php echo $player ?>"><?php echo $player ?></option>
        <?php endforeach ?>
      </select>
      <?php echo "<br>" ?>

      <label for="enemy">どの敵を攻撃する？</label>
      <select name="enemy">
        <?php foreach($enemies as $enemy): ?>
          <option value="<?php echo $enemy?>"><?php echo $enemy?></option>
        <?php endforeach ?>
      </select>
      <?php echo "<br>";?>

      <label for="attack">攻撃方法</label>
      <select name="attack">
        <?php foreach($attacks as $attack): ?>
          <option value="<?php echo $attack ?>"><?php echo $attack ?></option>
        <?php endforeach ?>
      </select>
      <p><input type="submit" value="戦闘開始"></p>
    </form>
    <form action="result2.php" method="get">
      <input type="submit" value="にげる">
    </form>

  
  </body>
</html>