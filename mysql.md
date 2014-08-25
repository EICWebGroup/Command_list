#MySQL_Query

##ログイン
* mysqlを開く
* mysql -u root -pを入力
* パスワードは空白のまま
##ログアウト
* exitまたはquitを入力


##DATABASE
###データべースの一覧を表示
* show databases;
###databaseの作成
* create database "database名";
###データべースの選択
* use "database名";
###データベースの削除
* drop database "database名";


##TABLE
###表の一覧を表示
* show tables;
###テーブルの作成
* create table "table名"(
* ... 
* );
###テーブル内のカラムを表示
* desc "table名";
* describe "table名";
* show columns "table名"( from "database名");
* Field：フィールド名、Type：データ型、Null：Nullを許可するかどうか、Key：主キー(Primary Key)、Default：初期値、Extra：オートインクリメントなど
###テーブル情報を表示
* show table status( from "database名")( like "wild cardS");

##record表示
###テーブルの全ての要素を表示
select * from "table名";
###tableの全ての要素のうち一行目を表示する
* select * from "table名" limit 1;
###tableのth1とth2との最初の1行を表示する
* select "カラム名1","カラム名2" from "table名" where "条件式";


##record変更
###テーブルにレコードのデータ挿入
* INSERT INTO "table名" ("カラム名1"(,"カラム名2", ... )) VALUES ("値1"(,"値2", ... ))(,("値1'"(,"値2'", ... )));
* insert into "table名" set "カラム名1" = "値1", "カラム名" = "値2";
###データ更新
* UPDATE テーブル名 SET カラム名=`値`[, カラム名=`値`, ... ] WHERE 条件式;
###データ削除
* DELETE FROM テーブル名 [WHERE 条件式];

##フィールドの入れ替え
* select "カラム名2","カラム名1" from "table名";