<?php
// 記入時間の取得
$name = $_POST['name'];
$birthPlace = $_POST['birthPlace'];
$RiceWine = $_POST['RiceWine'];

$time = date('Y/m/d H:i:s');

// 開く、書き込む、閉じる！の流れ。
// ファイルオープン
$file = fopen('data/data.txt', 'a');

//ファイルに書き込み
fwrite($file, $time . $name . $namePlace . $RiceWine . "\n");
//  . "\n"　改行してデータを書き込む

//ファイルに保存
fclose($file);

?>


<html>

<head>
    <meta charset="utf-8">
    <title>File書き込み</title>
</head>

<body>

    <h1>書き込みしました。</h1>
    <h2>./data/data.txt を確認しましょう！</h2>

    <ul>
        <li><a href="read.php">確認する</a></li>
        <li><a href="input.php">戻る</a></li>
    </ul>
</body>

</html>
