# CMS-on-PHP-v2
The CMS version 2.

## Discription
このシステムは、情報研究部のホームページ ( http://www.irc.hira-tech.net/ ) に最適化されたCMS(Content Management System)です。
一般的なCMSに比べて、このホームページで必要だと思われる機能(チームごとの記事の配信等)を搭載しています。

## How to use
1. config.php, users.phpを設定する。
dirctory内に、config.php.default, users.php.defaultが存在するので、これをコピーして、新たに2つのファイルを配置し、データベースの情報と、ユーザー情報をsettingします。
---
2. DBの作成, テーブルの作成を行う。
データベース名は任意、テーブルの構造は、/sql/setup.sqlに記述してあるSQL文を読み込むことにより、作成が完了します。
---
3. Apache等のウェブサーバーに配置。
PHP, MySQLが使えるウェブサーバーにすべてのディレクトリをUploadすることにより、このシステムが使えるようになります。

### テーブルの作成の仕方
#### コマンドラインを使用する方法
1. Terminal(cmd)で、sql dicretocryまで移動(cd)
2. mysqlにログイン (mysql -u user_name -p)
3. DBをuse (use database_name)
4. ファイルより、SQLを実行 (source ./setup.sql)

#### phpMyAdmin等を使用する方法
setup.sql内に書いてあるSQL文をコピーして、作成したデータベースでSQL文を実行する。

---

## 通信仕様
### GET localhost/news/*
管理画面より、作成したnewsの一覧情報がjson形式でresponse.
使用したいサイトでAjaxなどでGETすると記事の一覧情報が得られる

#### Json Data format
    [
        {
            "id":"1",
            "news_id":"1",
            "title":"news_title",
            "content":"news_content",
            "author":"news_author", // author of news
            "team":"0", // team id
            "created":"1997-08-06",
            "images":"0",   // number of images
            "image_src1":"",
            "image_src2":"",
            "image_alt1":"",
            "image_alt2":"",
        },
        { ... },
        { ... }
    ]

### GET localhost/news/1 (1は記事のid)
管理画面より、作成したnewsの情報がjson形式でresponse.
使用したいサイトでAjaxなどでGETすると記事の情報が得られる

### POST localhost/news/
記事データの挿入.
これは、管理画面のformにデータを入力し、送信することで自動で行われる。

### Author
Taiki Fnit Watanabe (http://github.com/TaikiFnit)

### LICENCE
MIT