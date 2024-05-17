<?php
// temp.php

//セッションの開始
session_start();

//セッションへのアクセス
//$_SESSION はスーパーグローバル変数（配列）
var_dump($_SESSION);

$_SESSION["timestamp"] = date("YmdHis");


//セッション ID
print session_id();

?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP1 - セッション</title>
</head>
<body>

    <h1>セッションを扱う</h1>
    
</body>
</html>