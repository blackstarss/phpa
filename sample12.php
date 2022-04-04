<?php
date_default_timezone_set('Asia/Tokyo');
$time = date('G');
// 現在の時刻
?>
<?php if ($time < 13): ?>
<p>※営業時間外です</p>
<?php else: ?>
<p> ようこそ</p>
<?php endif ?>
