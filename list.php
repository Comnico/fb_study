<?php
// セッションを利用する
session_start();

// 未ログインの場合
if (empty($_SESSION['access_token'])) {
  // トップ画面へリダイレクト
  header('location: ' . '/index.php');
  exit();
}
?>
<p>ログイン中です</p>
<a href="logout.php">ログアウトする</a>
