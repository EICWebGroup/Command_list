#MySQL_Query

##ログイン
* XAMPPの起動
* mysqlを開く
* mysql -u root -pを入力
* パスワードは空白のまま
##ログアウト
* exitまたはquitを入力

##MySQLデータ型
###数値データ
* INT：通常サイズの整数(符号付でもなしでも可)　　
最大11ケタの幅を指定できる

##DATABASE
###データべースの一覧を表示
* SHOW DATABASES;

###databaseの作成
* CREATE DATABASE "DATABASE名";

###データべースの選択
* USE "DATABASE名";

###データベースの削除
* DROP DATABASE "DATABASE名";


##TABLE
###表の一覧を表示
* SHOW TABLES;

###テーブルの作成
* CREATE TABLE "TABLE名"(
  "変数名" "型名(数値)"
  ,,,
  );
  
###テーブル内のカラムを表示
* DESC "TABLE名";
* DESCRIBE "TABLE名";
* SHOW COLUMNS "TABLE名"( FROM "DATABASE名");
* Field：フィールド名、Type：データ型、Null：Nullを許可するかどうか、Key：主キー(Primary Key)、Default：初期値、Extra：オートインクリメントなど

###テーブル情報を表示
* SHOW TABLE STATUS( FROM "DATABASE名")( LIKE "WILD CARDS");

##RECORD表示
###テーブルの全ての要素を表示
SELECT * FROM "TABLE名";

###tableの全ての要素のうち一行目を表示する
* SELECT * FROM "TABLE名" LIMIT 1;

###tableのth1とth2との最初の1行を表示する
* SELECT "カラム名1","カラム名2" FROM "table名" WHERE "条件式";


##record変更
###テーブルにレコードのデータ挿入
* INSERT INTO "TABLE名" ("カラム名1"(,"カラム名2", ... )) VALUES ("値1"(,"値2", ... ))(,("値1'"(,"値2'", ... )));
* insert into "TABLE名" set "カラム名1" = "値1", "カラム名" = "値2";

###データ更新
* UPDATE テーブル名 SET カラム名=`値`[, カラム名=`値`, ... ] WHERE 条件式;

###データ削除
* DELETE FROM テーブル名 [WHERE 条件式];

##フィールドの入れ替え
* SELECT "カラム名2","カラム名1" FROM "table名";