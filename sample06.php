<?php
$sum = 100+1050+200;
echo $sum;

?>
<!-- 変数に入れるメリットは再利用ができること -->

<P>合計金額は、<?php echo $sum; ?>円です</P>
<!-- phpの開始タグがあることでhtmlに組み込む事ができる -->

<P>税込金額は、<?php echo $sum * 1.1; ?>円です</P>