<?php
//sample-mysqli.php

//1.DB接続
//mysqli(HOST , USER_NAME , PASSWORD , DB_NAME)の順番
$db = new mysqli("localhost" , "tuemori" , "eccMyAdmin" , "tuemori");

try {

    //DBへの接続をチェック
    if( $db -> connect_error ){
        throw new Exception( "DB Connect Error" );
    }
}
catch(Exception $error){
    print $error -> getMessage();
}

?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP1 - DB</title>
</head>
<body>
    <h1>PHPでデータベースを扱う</h1>
</body>
</html>