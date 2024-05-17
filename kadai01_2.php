<?php
// kadai01_2.php

//外部ファイルの読み込み
require_once "utility.php";
require_once "kadai01_resource.php";


//POST Data
var_dump( $_POST );

$requestData = $_POST;


//全角・半角のかな変換
if( !empty($requestData["kana"]) ){
  $requestData["kana"] = mb_convert_kana($requestData["kana"], "KVs");
}

//行頭・行末のホワイトスペースを削除
if( !empty($requestData["name"]) ){
  $requestData["name"] = mb_convert_kana($requestData["name"]);
}


// var_dump($requestData);

//学科とコース名の抽出
// foreach( $school["departments"] as $department ){
//   if( $department["id"] == $requestData["department"] ){
//     $requestData["department"] = $department["name"];
//   }
//   // var_dump($department);
//   foreach( $department["courses"] as $course ){
//     if( $course["id"] == $requestData["course"] ){
//       $requestData["course"] = $course["name"];
//     }
//   }
// }


foreach( $school["departments"] as $department ){
    if( $department["id"] == $requestData["department"] ){
      $requestData["department"] = $department["name"];

      $temp = "";
      foreach( $department["courses"] as $course ){
        if( $course["id"] == $requestData["course"] ){
          $temp = $course["name"];
        }
      }

      // $department["course"] = ( $temp !== "" ) ? $temp : "コースが間違っています";
      if( $temp !== ""){
        $requestData["course"] = $temp;
      }
      else{
        $requestData["course"] = "コースの選択が間違っています";
      }
    }
  }
  




?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- link -->
  <link href="css/style.css" rel="stylesheet">

  <!-- script -->
  <script src="https://cdn.tailwindcss.com"></script>
  <title>php1 - kadai01_2</title>
</head>
<body class="bg-slate-50">
<div class="wrapper w-screen h-screen box-border">

<header class="bg-teal-500">
  <div class="container mx-auto px-2 py-5">
    <h1 class="text-l text-white mb-6">サーバーサイドスクリプト演習１</h1>
    <h2 class="text-white text-3xl">formの復習</h2>
  </div><!--/.container-->
</header>

<main>
  <div class="container w-full h-full mx-auto px-2 py-20">

    <div class="flex flex-col lg:flex-row mb-20">
      <div class="lg:w-6/12 lg:mr-10">
        <div class="lg:flex mb-10">
          <div class="lg:w-1/2 mb-10 lg:mr-5 lg:mb-0">
            <label class="block" for="department">学科</label>
            <p class="text-md p-1.5 border-2 border-gray-200 focus:border-green-200 rounded-md">
              <?= $requestData["department"] ?>
            </p>
          </div>

          <div class="lg:w-1/2">
            <label class="block" for="course">コース</label>
            <p class="text-md p-1.5 border-2 border-gray-200 focus:border-green-200 rounded-md">
            <?= $requestData["course"] ?>

            </p>
          </div>
        </div>

        <div class="mb-10">
          <label class="block" for="name">名前</label>
          <p class="w-full text-md p-2 border-2 border-gray-200 focus:border-green-200 rounded-md"><?= h($requestData["name"]) ?></p>
        </div>

        <div class="mb-10 lg:mb-0">
          <label class="block" for="kana">フリガナ</label>
          <p class="w-full text-md p-2 border-2 border-gray-200 focus:border-green-200 rounded-md"><?= h($requestData["kana"]) ?></p>
        </div>
      </div>



      <div class="lg:w-6/12 flex flex-col items-stretch">
        <label class="w-full" for="freeword">備考</label>
        <p class="w-full text-md p-2 border-2 border-gray-200 focus:border-green-200 rounded-md"><?= nl2br(h($requestData["note"]),false) ?></p>
      </div>

    </div>

    <div class="flex justify-end">
      <a href="kadai01_1.php" class="block w-40 h-10 text-white text-center leading-10 bg-gray-500 mr-10 hover:bg-gray-400 rounded-md">入力に戻る</a>
      <a href="#" class="block w-40 h-10 text-white text-center leading-10 bg-pink-600 hover:bg-pink-500 rounded-md">送信する</a>
    </div>

  </div><!--/.container-->
</main>

</div><!--/.wrapper-->
</body>
</html>