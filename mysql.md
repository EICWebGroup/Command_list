#mysql クエリ

* tableのth1とth2との最初の1行を表示する

 select "th1","th2" from "table" where 条件式

* tableの全ての要素のうち一行目を表示する

  select * from "table" limit 1

* 表の一覧を表示

  show tables

* データべースの一覧を表示

 show databases

* データ挿入

 INSERT INTO テーブル名 (カラム名1[,カラム名2, ... ]) VALUES (値1[,値2, ... ]);

* データ更新

 UPDATE テーブル名 SET カラム名=`値`[, カラム名=`値`, ... ] WHERE 条件式;

* データ削除

 DELETE FROM テーブル名 [WHERE 条件式];