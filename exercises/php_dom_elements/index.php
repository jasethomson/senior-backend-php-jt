<?php
$now = date('Y-m-d H:i:s');
?>

<h1>
  Current Date/Time: <?php print($now) ?>
</h1>

<?php
  for( $i = 0; $i++ < 10; ){
    ?>
    <div><?= $i ?></div>
    <?php
  }
?>
