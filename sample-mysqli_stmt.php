<?php
// sample-mysqli_stmt.php

require_once  "config.php";

try{
    //---------------
    //1. DB接続
    //---------------
    //mysqli(HOST , USER_NAME , PASSWORD , DB_NAME)の順番
    $db = new mysqli(DB_HOST , DB_USER , DB_PASS , DB_NAME);

    if( $db -> connect_error ){
        throw new Exception( "DB Connect Error" );
    }

    $db -> set_charset( "utf8" );
    $table = TB_PRODUCT;
    $sql = " SELECT * FROM {$table} WHERE code = ?";

    //SQLを実行するためのプリペアードステートメントの準備
    $stmt = $db -> prepare($sql);
    
    // ? (パラメータ)へ値をバインドする
    $productCode = "1903";
    $stmt -> bind_param( "s" , $productCode );


    //プリペアードステートメントのSQLを実行
    $stmt -> execute();

    //プリペアードステートメントの結果を取り出す
    $result = $stmt -> get_result();

    //プリペアードステートメントを閉じる
    $stmt -> close();

    $product = $result -> fetch_object();

    //DBを閉じる
    $db -> close();

    var_dump($product);

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
    <title>PHP1 - Temp</title>
</head>
<body>
    
</body>
</html>