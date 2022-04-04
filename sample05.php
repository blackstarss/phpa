<?php
$today = new DateTime();
// $todayはオブジェクト
// $から始まるのは"変数"
$today->setTimezone(new DateTimeZone('Asia/Tokyo'));
// setTimezoneはメソッド
echo "現在は、" . $today->format('G時 i分 s秒') . 'です';
