<?php
// クライアント側のクッキーを削除
if (isset($_COOKIE["PHPSESSID"])) {
    setcookie("PHPSESSID", '', time() - 1800, '/');
}

// サーバー側に保存しているセッションの値を廃棄
session_destroy();

// トップ画面へリダイレクト
header('location: ' . 'index.php');
exit();