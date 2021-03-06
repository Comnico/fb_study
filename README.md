# fb_studyについて
このリポジトリではコムニコの新人エンジニア向けにPHPでFacebookアプリを作ります。

## ゴール
PHPでWebサービスのOAuth認証、APIリクエストを叩くWebサービスを自分で作れるようになるまでをゴールとしています。

## 目次
#### 1. ログイン画面をつくる
* 素のHTML/CSSでつくる

#### 2. FB認証機能をつくる
* PHP SDKを使ったFacebook OAuthの仕組みを学ぶ
* アクセストークンの取得方法を学ぶ

#### 3. 一覧画面をつくる
* 素のHTML/CSSでテーブルをつくる

#### 4. ログインユーザーの投稿を取得する
* REST APIについて
* Facebookのオブジェクトについて
* FacebookのGraph APIの使い方について
* JSONデータを配列にパースする

#### 5. ログインユーザーの投稿を取得してDBへ保存するプログラムを実装する
##### 5.1 ログイン時にログインユーザーのアクセストークンを取得する
* ヒント: Facebook PHP SDKの`getToken()`を利用する

##### 5.2 取得したアクセストークンをDBへ保存する
* DBに取得したアクセストークンとログインユーザーIDを保存する

##### 5.3 /user_id/feedの内容をアクセストークンを利用して取得する
* プログラム経由の場合、セッションが存在しないためアクセストークンからセッションを取得する
* ヒント: Facebook PHP SDKの`getSession`を利用する

##### 5.4. cronで実装したプログラムを10分毎に実行する
* 実装したプログラムを定期的に実行してDBへデータを保存する
* Heroku Schedulerを使うと指定したパスのPHPのプログラムを定期的に実行可能
 http://to-developer.com/blog/?p=1257

##### 5.5 DBから取得した投稿(Feed)の内容を一覧に表示する
* 画面アクセス時にFacebookリクエストするのではなく、DBからデータを取得するように修正する

#### 6. ロジックをクラスに分割する
* 実装したプログラムのロジックをクラスに分割し、処理単位にメソッドにする
* 分割したクラスをプログラムから呼び出すようにコードを修正する
* 参考URL: PHPのオブジェクト指向入門 | オブジェクト指向PHP.NET http://www.objective-php.net/mvc/model

#### 7. コード規約に沿ってリファクタリング
* PHPのスタンダードコーディング規約(PSR)に沿ってコードをリファクタリングする
* 参考URL: http://9ensan.com/blog/programming/php/php-psr-coding-standards/
* atomの場合は`linter-phpcs`をインストールするとPSR準拠のコードになっているか自動チェックしてくれる
