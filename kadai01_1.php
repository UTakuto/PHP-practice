<?php
// kadai01_1.php

//外部ファイルの読み込み
require_once "kadai01_resource.php";

//学科データ
// $departments = [
//   0 => "高度情報処理研究" ,
//   1 => "マルチメディア研究" ,
//   2 => "マルチメディア",
// ];

//コースデータ
// $courses =[
//   "IT開発エキスパート",
//   "IT開発研究",
//   "Webデザイン",
//   "システムエンジニア",
// ]

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

  <title>php1 - kadai01_1</title>
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

    <form action="kadai01_2.php" method="POST" novalidate>
      <div class="flex flex-col lg:flex-row mb-20">
        <div class="lg:w-6/12 lg:mr-10">
          <div class="lg:flex mb-10">
            <div class="lg:w-1/2 mb-10 lg:mr-5 lg:mb-0">
              <label class="block" for="department">学科</label>
              <select name="department" id="department" class="w-full text-lg p-2 border-2 border-gray-200 focus:border-green-200 rounded-lg outline-none">
              
              <?php foreach( $school["departments"] as $department ) : ?>
                <option value="<?= $department[ "id" ] ?>"><?= $department[ "name" ] ?></option>
              <?php endforeach ?>
              
              </select>
            </div>

            <div class="lg:w-1/2">
              <label class="block" for="course">コース</label>
              <select name="course" id="course" class="w-full text-lg p-2 border-2 border-gray-200 focus:border-green-200 rounded-lg outline-none">
              
                <?php foreach( $school["departments"] as  $department ) : ?>
                  <?= var_dump($department) ?>
                  <!--var_dump は console.logとほぼ一緒 -->
                  <?php foreach( $department["courses"] as $course ) : ?>

                    <option class="p-6" value="<?= $course[ "id" ] ?>">
                      <?=$course[ "name"] ?> <?= $department["annual"] ?>年制
                    </option>

                  <?php endforeach ?>
                <?php endforeach ?>
              
              </select>
            </div>
          </div>

          <div class="mb-10">
            <label class="block" for="name">名前<em class="text-red-600 text-sm not-italic p-0.5 ml-3">必須</em></label>
            <input type="text" name="name" id="name" class="text-lg w-full p-2 border-2 border-gray-200 focus:border-green-200 rounded-lg outline-none" placeholder="ECC 太郎" required>
          </div>

          <div class="mb-10 lg:mb-0">
            <label class="block" for="kana">フリガナ<em class="text-red-600 text-sm not-italic ml-3">必須</em></label>
            <input type="text" name="kana" id="kana" class="text-lg w-full p-2 border-2 border-gray-200 focus:border-green-200 rounded-lg outline-none" placeholder="イーシーシー タロウ" required>
          </div>
        </div>



        <div class="lg:w-6/12 flex flex-col items-stretch">
          <label class="w-full" for="note">備考</label>
          <textarea name="note" id="note" class="w-full flex-1 text-lg p-2 border-2 border-gray-200 focus:border-green-200 rounded-lg outline-none resize-none"></textarea>
        </div>

      </div>

      <div class="flex justify-end">
          <button type="submit" class="w-40 h-10 text-white text-lg bg-pink-600 hover:bg-pink-500 rounded-lg">入力内容の確認</button>
      </div>
    </form>

  </div><!--/.container-->
</main>

</div><!--/.wrapper-->
</body>
</html>