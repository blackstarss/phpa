<?php 
$news = file_get_contents('data/news/.txt');
//ファイルの読み込み
echo $news;

// <!-- ファイルの追記 -->
$news = $news . "<br>追加のニュー";
$success = file_put_contents('data/news.txt', $news);

// <!-- readfile('data/news.txt'); -->
?>