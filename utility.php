<?php

//utility.php
//汎用的な関数を定義

//htmlspecialchars
function h( $str ="" ){
    return htmlspecialchars( $str , ENT_QUOTES );
}


//セクションデータを参照する
function old($key){
    if(session_status() === PHP_SESSION_NONE){  
        session_start();

    }
    return(!empty($_SESSION[$key])) ? $_SESSION[$key]:"";
}


// リダイレクトを行う関数
function redirect( $location ){
    header("location:{$location}");
    exit;
}