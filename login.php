<?php
// Facebookの設定ファイルを読み込み
require 'vendor/autoload.php';
use Facebook\FacebookSession;
use Facebook\FacebookRequest;
use Facebook\GraphUser;
use Facebook\FacebookRequestException;
use Facebook\FacebookRedirectLoginHelper;

// セッションを利用する
session_start();

// FBへ接続してセッション取得
FacebookSession::setDefaultApplication('APP_ID','APP_SECRET');

// ログイン後のリダイレクトURLを設定
$helper = new FacebookRedirectLoginHelper('http://local.fbauth/login.php');

try {
    // FBログイン後ここに戻ってくるのでそのセッションを取得する
    $session = $helper->getSessionFromRedirect();
} catch (FacebookRequestException $e) {
    echo $e->getMessage();
    exit;
} catch (\Exception $e) {
    echo $e->getMessage();
    exit;
}

// FBログイン状態ならアクセストークンを取得
if (isset($session)) {
    // Sessionにトークン保存してログイン管理する
    $_SESSION['access_token'] = $session->getToken();
    // 一覧画面へリダイレクト
    header('location: ' . 'list.php');
    exit();
} else {
    // セッションが無い場合はログインURLを取得
    $fb_login_url = $helper->getLoginUrl();
    // FBログイン画面へリダイレクト
    header('location: ' . $fb_login_url);
    exit();
}
