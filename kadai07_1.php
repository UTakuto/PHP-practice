<?php



?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- link -->
  <link href="asset/styles/style.css" rel="stylesheet">

  <!-- script -->
  <script src="https://cdn.tailwindcss.com"></script>
  <title>php1 - kadai07_1</title>
</head>
<body class="bg-slate-50">
<div class="wrapper box-border">

<header class="bg-teal-500">
  <div class="container mx-auto px-2 py-5">
    <h1 class="text-l text-white mb-6"><a href="#">サーバーサイドスクリプト演習１</a></h1>
    <h2 class="text-3xl text-white">データベース処理</h2>
  </div><!--/.container-->
</header>

<main>
  <div class="container w-full h-full mx-auto px-2 py-20">

    <h3 class="text-xl border-b-2 border-teal-400 pb-2 mb-10">商品の詳細</h3>

    <div class="flex flex-col sm:flex-row justify-end mb-10">
      <a href="#" class="text-white text-center leading-10 bg-gray-600 px-10 hover:bg-gray-500 rounded-md">一覧へ戻る</a>
      <a href="#" class="text-white text-center leading-10 bg-red-700 px-10 px-10 mx-5 hover:bg-red-600 rounded-md">削除する</a>
      <!--kadai10_1-->
      <!--
        <form action="" method="" class="w-full sm:w-fit">
        <input type="hidden" name="_method" value="DELETE">
        <input type="hidden" name="product_no" value="">
        <button type="submit" class="w-full sm:w-fit text-white text-center leading-10 bg-red-700 px-10 px-10 mx-0 sm:mx-5 my-2 sm:my-0 hover:bg-red-600 rounded-md">削除する</button>
      </form>
      -->
      <!--/kadai09_1-->
      <a href="#" class="text-white text-center leading-10 bg-pink-600 px-10 hover:bg-pink-500 rounded-md">編集する</a>
    </div>

    
    <div class="product-wrap px-5 py-10 shadow-md">
      <h4 class="font-bold mb-5">商品情報</h4>
      <div class="flex flex-col md:flex-row">
        <div class="flex-grow mr-0 md:mr-10 mb-5 md:mb-0">
          <div class="mb-5">
            <div class="w-6/12">
              <p class="text-gray-500 text-left uppercase tracking-wider">code</p>
              <p class="px-2 py-2 border rounded-md">商品のコード</p>
            </div>
          </div>

          <div class="flex justify-between mb-5">
            <div class="flex-grow mr-10">
              <p class="text-gray-500 text-left uppercase tracking-wider">category</p>
              <p class="bg-white px-2 py-2 border  rounded-md">商品のカテゴリー名</p>
            </div>
            <div class="w-4/12">
              <p class="text-gray-500 text-left uppercase tracking-wider">price</p>
              <p class="bg-white px-2 py-2 border  rounded-md">商品の料金</p>
            </div>
          </div>

          <div>
            <p class="text-gray-500 text-left uppercase tracking-wider">name</p>
            <p class="bg-white text-lg px-2 py-2 border  rounded-md">商品の名前</p>
          </div>
        </div>

        <div class="flex flex-col items-stretch flex-grow">
          <p class="text-gray-500 text-left uppercase tracking-wider">description</p>
          <p class="flex-grow h-32 md:h-max text-lg px-2 bg-gray-100 py-2 border rounded-md"></p>
        </div>
      </div>

    </div><!--/.product-wrap-->
    
      <!-- エラーメッセージ -->
      <p class="text-xl">エラーメッセーの表示</p>
    

  </div><!--/.container-->
</main>

</div><!--/.wrapper-->
</body>
</html>