<?php

require_once "utility.php";

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
  header('Location: kadai03_1.php');
  exit;
}

$requestData = $_POST;

//セッションの開始
session_start();

// var_dump($_SESSION);
// print session_id();


$comment = "";
if(!empty ($_POST["comment"])){
  $comment = $_POST["comment"];
  $_SESSION["comment"] = $comment;
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
  <title>php1 - kadai03_2</title>
</head>
<body class="bg-slate-50">
<div class="wrapper w-screen h-screen box-border">

<header class="bg-teal-500">
  <div class="container mx-auto px-2 py-5">
    <h1 class="text-l text-white mb-6">サーバーサイドスクリプト演習１</h1>
    <h2 class="text-white text-3xl">セッション</h2>
  </div><!--/.container-->
</header>

<main>
  <div class="container w-full h-full mx-auto px-2 py-20">

    <div class="mb-20">
      <div class="mb-10">
        <label class="block">ID</label>
        <p class="w-full text-md p-2 border-2 border-gray-200 focus:border-green-200 rounded-md"><?= print session_id() ?></p>
      </div>

      <div>
        <label class="block">コメント</label>
        <p class="w-full text-md p-2 border-2 border-gray-200 focus:border-green-200 rounded-md outline-none resize-none"><?= nl2br(h($requestData["comment"]),false) ?></p>
      </div>
    </div>

    <div class="flex justify-end">
      <a href="kadai03_1.php" class="block w-40 h-10 text-white text-center leading-10 bg-gray-500 hover:bg-gray-400 rounded-md">入力に戻る</a>
    </div>

  </div><!--/.container-->
</main>

</div><!--/.wrapper-->
</body>
</html>