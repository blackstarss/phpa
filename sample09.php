<?php
date_default_timezone_set('Asia/Tokyo');

$time = strtotime('+1 day');
$day = date('n/j(D)', $time);
echo $day . '<br>';
// この３行を繰り返したい

for ($i = 0; $i<366; $i++):
// $++はインクリメント
  $time = strtotime("+ $i day");
  $day = date('n/j(D)', $time);
  echo $day . '<br>';
endfor

?>
