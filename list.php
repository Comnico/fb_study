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

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="list.css">
    <title>FB Study</title>
  </head>
  <body>
    <div class="header">
      <a class="logo" href="index.php" class="brand">FB Study</a>
      <a class="logout" href="logout.php">ログアウトする</a>
    </div>
    <div class="contents">
      <ul>
        <li class="fb-post">
          <div class="post-header">
            <img src="https://fbcdn-profile-a.akamaihd.net/hprofile-ak-xaf1/v/t1.0-1/p50x50/1779052_612208972192374_84058029_n.jpg?oh=ad4ab9ed62e3374e7c286fb778296f3f&oe=56341A59&__gda__=1442133044_4edb287f6c30d67a8d6fbcbf122c8f25">
            <div class="user-name" style="display:inline-block">
              <a href="#">古家 大</a>
              <p class="post-date">1時間前</p>
            </div>
          </div>
          <div class="post-content">
            <p class="content-body">良記事。iterm2は使ってみたい。</p>
            <a href="#"><img src="https://fbexternal-a.akamaihd.net/safe_image.php?d=AQDZmQwaMJjhBZip&w=487&h=255&url=http%3A%2F%2Fmae.chab.in%2Fwp-content%2Fuploads%2F2015%2F05%2Fatom.png&cfs=1&upscale=1"></a>
          </div>
        </li>
        <li class="fb-post">
          <div class="post-header">
            <img src="https://fbcdn-profile-a.akamaihd.net/hprofile-ak-xaf1/v/t1.0-1/p50x50/1779052_612208972192374_84058029_n.jpg?oh=ad4ab9ed62e3374e7c286fb778296f3f&oe=56341A59&__gda__=1442133044_4edb287f6c30d67a8d6fbcbf122c8f25">
            <div class="user-name" style="display:inline-block">
              <a href="#">古家 大</a>
              <p class="post-date">1時間前</p>
            </div>
          </div>
          <div class="post-content">
            <p class="content-body">良記事。iterm2は使ってみたい。</p>
            <a href="#"><img src="https://fbexternal-a.akamaihd.net/safe_image.php?d=AQDZmQwaMJjhBZip&w=487&h=255&url=http%3A%2F%2Fmae.chab.in%2Fwp-content%2Fuploads%2F2015%2F05%2Fatom.png&cfs=1&upscale=1"></a>
          </div>
        </li>
        <li class="fb-post">
          <div class="post-header">
            <img src="https://fbcdn-profile-a.akamaihd.net/hprofile-ak-xaf1/v/t1.0-1/p50x50/1779052_612208972192374_84058029_n.jpg?oh=ad4ab9ed62e3374e7c286fb778296f3f&oe=56341A59&__gda__=1442133044_4edb287f6c30d67a8d6fbcbf122c8f25">
            <div class="user-name" style="display:inline-block">
              <a href="#">古家 大</a>
              <p class="post-date">1時間前</p>
            </div>
          </div>
          <div class="post-content">
            <p class="content-body">良記事。iterm2は使ってみたい。</p>
            <a href="#"><img src="https://fbexternal-a.akamaihd.net/safe_image.php?d=AQDZmQwaMJjhBZip&w=487&h=255&url=http%3A%2F%2Fmae.chab.in%2Fwp-content%2Fuploads%2F2015%2F05%2Fatom.png&cfs=1&upscale=1"></a>
          </div>
        </li>
        <li class="fb-post">
          <div class="post-header">
            <img src="https://fbcdn-profile-a.akamaihd.net/hprofile-ak-xaf1/v/t1.0-1/p50x50/1779052_612208972192374_84058029_n.jpg?oh=ad4ab9ed62e3374e7c286fb778296f3f&oe=56341A59&__gda__=1442133044_4edb287f6c30d67a8d6fbcbf122c8f25">
            <div class="user-name" style="display:inline-block">
              <a href="#">古家 大</a>
              <p class="post-date">1時間前</p>
            </div>
          </div>
          <div class="post-content">
            <p class="content-body">良記事。iterm2は使ってみたい。</p>
            <a href="#"><img src="https://fbexternal-a.akamaihd.net/safe_image.php?d=AQDZmQwaMJjhBZip&w=487&h=255&url=http%3A%2F%2Fmae.chab.in%2Fwp-content%2Fuploads%2F2015%2F05%2Fatom.png&cfs=1&upscale=1"></a>
          </div>
        </li>
        <li class="fb-post">
          <div class="post-header">
            <img src="https://fbcdn-profile-a.akamaihd.net/hprofile-ak-xaf1/v/t1.0-1/p50x50/1779052_612208972192374_84058029_n.jpg?oh=ad4ab9ed62e3374e7c286fb778296f3f&oe=56341A59&__gda__=1442133044_4edb287f6c30d67a8d6fbcbf122c8f25">
            <div class="user-name" style="display:inline-block">
              <a href="#">古家 大</a>
              <p class="post-date">1時間前</p>
            </div>
          </div>
          <div class="post-content">
            <p class="content-body">良記事。iterm2は使ってみたい。</p>
            <a href="#"><img src="https://fbexternal-a.akamaihd.net/safe_image.php?d=AQDZmQwaMJjhBZip&w=487&h=255&url=http%3A%2F%2Fmae.chab.in%2Fwp-content%2Fuploads%2F2015%2F05%2Fatom.png&cfs=1&upscale=1"></a>
          </div>
        </li>
      </ul>
    </div>
  </body>
</html>

