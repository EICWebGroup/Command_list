##MySQL_Query


###MySQL_Queryの起動・終了
####ログイン
1. XAMPPの起動
3. 管理者権限でコマンドプロンプトを開く
3. mysql -u root -pを入力
4. パスワードは空白のまま

####ログアウト
* exitまたはquitを入力


###MySQLデータ型
####数値データ
* __TYNYINT__：サイズの小さい整数(符号付でもなしでも可)、最大4ケタの幅を指定できる、1バイト
* __SMALLINT__：サイズの小さい整数(符号付でもなしでも可)、最大5ケタの幅を指定できる、2バイト
* __INT__：通常サイズの整数(符号付でもなしでも可)、最大11ケタの幅を指定できる、3バイト
* __MEDIUMINT__：中程度のサイズの整数(符号付でもなしでも可)、最大9ケタの幅を指定できる、4バイト
* __BIGINT__：サイズの大きい整数(符号付でもなしでも可)、最大11ケタの幅を指定できる、8バイト
* __FLOAT(M,D)__：浮動小数点数(符号付)、最大11ケタの幅を指定できる、4or8バイト、表示桁数Mと小数点以下桁数Dを指定することもできる
* __DOUBLE(M,D)__：倍精度浮動小数点数(符号付)、最大53ケタの幅を指定できる、8バイト、表示桁数Mと小数点以下桁数Dを指定することもできる
* __DECIMAL(M,D)__：アンパック浮動小数点数(符号付)、表示桁数Mと小数点以下桁数Dを必ず指定する、NUMERICも同様

####日付と時刻型
* __DATE__：YYYY-MM-DD形式の日付、範囲は1000-01-01から9999-12-31、２月３０日など現実には存在しない日付も指定できるため、ユーザーが注意する必要がある
* __TIME__：HH:MM:SS形式の時刻
* __DATETIME__：日付YYYY-MM-DDと時刻HH:MM:SS形式の組み合わせ
* __TIMESTAMP__：1970年1月1日午前0時から2037年のある日時までのタイムスタンプ、規定の長さは14で、YYYYMMDDHHMMSSが保存される
* __YEAR(M)__：2桁または4桁形式で年が保存される、範囲は70~69(1970~2069)または1901~2155

####文字列型
* __CHAR(M)__：長さが1~255の固定長文字列、長さの定義は必須ではなく、規定値は1
* __VARCHAR(M)__：長さが1~255の可変長文字列、長さの定義は必須で
* __BLOB__：画像やほかのファイルタイプなど、大きなバイナリデータを保存するときに使用、長さを指定しない、大文字小文字が区別される
* __TEXT__：画像やほかのファイルタイプなど、大きなバイナリデータを保存するときに使用、長さを指定しない、大文字小文字が区別されない
* __TINYBLOB__：長さの最大が255文字のBLOB、長さを指定しない
* __TINYTEXT__：長さの最大が255文字のTEXT、長さを指定しない
* __MEDIUMBLOB__：長さの最大が16777215文字のBLOB、長さを指定しない
* __MEDIUMBLOB__：長さの最大が16777215文字のBLOB、長さを指定しない
* __LONGBLLOB__：さらに最大長さの大きいBLOB、、長さを指定しない
* __LONGTEXT__：さらに最大長さの大きいTEXT、、長さを指定しない
* __ENUM__：列挙型、選択対象の値を含むリストが生成され、保存時にはインデクスを利用する
* __SET__：ENUMMと同様リストとして定義されるが、値のインデクスとしてではなく、完全な値として保存される


###データベースの操作
####データべースの一覧を表示
#####`SHOW DATABASES;`

例)  
```MySQL
mysql> SHOW DATABASES;
+--------------------+
| Database           |
+--------------------+
| information_schema |
| cdcol              |
| first_mysql        |
| mysql              |
| performance_schema |
| phpmyadmin         |
| test               |
| webauth            |
+--------------------+
8 rows in set (0.00 sec)
```

####データベースの作成
#####`CREATE DATABASE database_name;`

####データべースの選択
#####`USE database_name;`

例)  
```MySQL
mysql> USE first_mysql;
Database changed
```  
成功すると`Database changed`と表示される。

####データベースの削除
#####`DROP DATABASE "DATABASE名";`


###テーブルの操作
####表の一覧を表示
#####`SHOW TABLES;`

例)  
```MySQL
mysql> SHOW TABLES;
+-----------------------+
| Tables_in_first_mysql |
+-----------------------+
| grocery_inventory     |
+-----------------------+
1 row in set (0.00 sec)
```

####テーブルの作成
#####`CREATE TABLE database_name.table_name(column_name column_type);`  (データベースに未接続時)  
#####`CREATE TABLE table_name(column_name column_type);`(データベースに接続時)  
database_name、table_name、column_nameは任意、column_typeはデータ型から選択する。  
column_name column_typeは「,」で区切ることで複数組を同時に指定できる。  

例)  
```MySQL
mysql> CREATE TABLE grocery_inventory(
    -> id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    -> item_name VARCHAR(50) NOT NULL,
    -> item_desc TEXT,
    -> item_price FLOAT NOT NULL,
    -> curr_qty INT NOT NULL
    -> );
Query OK, 0 rows affected (0.49 sec)
```

成功したときに`Query OK, 0 rows affected (0.49 sec)`などと表示される。上の例ではDESC table_nameなどを使えば下のようになるはずである。
```MySQL
+------------+-------------+------+-----+---------+----------------+  
| Field      | Type        | Null | Key | Default | Extra          |  
+------------+-------------+------+-----+---------+----------------+  
| id         | int(11)     | NO   | PRI | NULL    | auto_increment |  
| item_name  | varchar(50) | NO   |     | NULL    |                |  
| item_desc  | text        | YES  |     | NULL    |                |  
| item_price | float       | NO   |     | NULL    |                |  
| curr_qty   | int(11)     | NO   |     | NULL    |                |  
+------------+-------------+------+-----+---------+----------------+  
```  
Extraにauto_incrementを指定するとレコード挿入時に次に使用可能な番号がid_fieldに追加される。  
  
####テーブル内のカラムを表示
#####`DESC table_name`
#####`DESCRIBE table_name`
#####`SHOW COLUMNS table_name( FROM database_name)`  
などとすれば、tableのcolumnを参照できる。

例)
```MySQL
mysql> DESC grocery_inventory;
+------------+-------------+------+-----+---------+----------------+
| Field      | Type        | Null | Key | Default | Extra          |
+------------+-------------+------+-----+---------+----------------+
| id         | int(11)     | NO   | PRI | NULL    | auto_increment |
| item_name  | varchar(50) | NO   |     | NULL    |                |
| item_desc  | text        | YES  |     | NULL    |                |
| item_price | float       | NO   |     | NULL    |                |
| curr_qty   | int(11)     | NO   |     | NULL    |                |
+------------+-------------+------+-----+---------+----------------+
5 rows in set (0.02 sec)
```

* __Field__：フィールド名
* __Type__：データ型
* __Null__：Nullを許可するかどうか
* __Key__：主キー(Primary Key)
* __Default__：初期値
* __Extra__：オートインクリメントなど

####テーブルの削除
#####`DROP TABLE table_name;`


###テーブルのレコードを表示
#####`SELECT expressions_and_columns FROM table_name;`  
これに様々な条件を加えることで必要十分なレコードを見ることができる。例えば次の三つの構文は上の構文の後ろに付け加える。 
#####`ORDER BY some_coolumn [ASC | DESC]`  
#####`LIMIT offset, rows`
#####`WHERE some_condition_is_true` 

また、テーブルのすべての行列を見るときには「*」を用いる。  
#####`SELECT * FROM table_name;`  
例)
```MySQL
mysql> SELECT * FROM grocery_inventory;
+----+-------------------------+-------------------------+------------+---------+
| id | item_name               | item_desc               | item_price | curr_qty|
+----+-------------------------+-------------------------+------------+---------|
|  1 | Apples                  | Beautiful, ripe apples. |       0.25 |     1000|
|  2 | Bunches of Grapes       | Sheedless grapes        |       2.99 |      500|
|  3 | Bottled Water (6-pack)  | 500ml spring water.     |       2.29 |      250|
|  4 | Bottled Water (12-pack) | 500ml spring water.     |       4.49 |      500|
+----+-------------------------+-------------------------+------------+---------+
4 rows in set (0.12 sec)
```

特定のcolumnのみを見たいときは「*」の代わりにcolumn_nameを「,」で区切って指定する。  
例)
```MySQL
mysql> SELECT id,item_name,curr_qty FROM grocery_inventory;
+----+-------------------------+----------+
| id | item_name               | curr_qty |
+----+-------------------------+----------+
|  1 | Apples                  |     1000 |
|  2 | Bunches of Grapes       |      500 |
|  3 | Bottled Water (6-pack)  |      250 |
|  4 | Bottled Water (12-pack) |      500 |
+----+-------------------------+----------+
4 rows in set (0.09 sec)
```

####並べ替え
`ORDER BY some_coolumn [ASC | DESC]`を使えば任意の条件でrowを入れ替えることができる。  
既定では昇順(ASC)でソートされるが、DESCを加えれば、降順を指定できる。  
例)　item_nameの英数字で昇順(ASC)に並べ替える
```MySQL
mysql> SELECT id, item_name, curr_qty FROM grocery_inventory ORDER BY item_name;
+----+-------------------------+----------+
| id | item_name               | curr_qty |
+----+-------------------------+----------+
|  1 | Apples                  |     1000 |
|  4 | Bottled Water (12-pack) |      500 |
|  3 | Bottled Water (6-pack)  |      250 |
|  2 | Bunches of Grapes       |      500 |
+----+-------------------------+----------+
4 rows in set (0.09 sec)
```
例)item_nameの英数字で降順(DESC)に並べ替える
```MySQL
mysql> SELECT id, item_name, curr_qty FROM grocery_inventory ORDER BY item_name DESC;
+----+-------------------------+----------+
| id | item_name               | curr_qty |
+----+-------------------------+----------+
|  2 | Bunches of Grapes       |      500 |
|  3 | Bottled Water (6-pack)  |      250 |
|  4 | Bottled Water (12-pack) |      500 |
|  1 | Apples                  |     1000 |
+----+-------------------------+----------+
4 rows in set (0.04 sec)
```
並べ替えの基準として複数のfieldを使うこともできる。そのときはソートの優先順位の高い方から「,」で区切りって指定すればよい。

####結果の制限
`LIMIT offset, rows`を用いることでSELECTクエリの結果から特定数のrecordのみを返すことができ、このとき開始位置(offset)とrows(行の数)を指定する。  
パラメータを1つだけ指定したときは先頭が開始位置となり、指定したパラメータはrowをさす。  
結果が見つからなったときはからの結果セットが表示されるだけで、errorにはならない。  
例)　id、item_name、qurr_qtyをqurr_qtyの小さい順に2つまでを表示する
```MySQL
mysql> SELECT id, item_name, curr_qty FROM grocery_inventory ORDER BY curr_qty LIMIT 2;
+----+-------------------------+----------+
| id | item_name               | curr_qty |
+----+-------------------------+----------+
|  3 | Bottled Water (6-pack)  |      250 |
|  4 | Bottled Water (12-pack) |      500 |
+----+-------------------------+----------+
2 rows in set (0.04 sec)
```


###queryでのWHEREの使用
`WHERE some_condition_is_true` はSELECT構文などで特定の条件を指定するときに使う。論理演算子(AND,OR)や比較演算子(=,!,<,> etc)、BETWEEN、LIKEどが用いられる。  
例)　curr_qty = 500を満たすrowを表示
```MySQL
mysql> SELECT * FROM grocery_inventory WHERE curr_qty = 500;
+----+-------------------------+---------------------+------------+----------+
| id | item_name               | item_desc           | item_price | curr_qty |
+----+-------------------------+---------------------+------------+----------+
|  2 | Bunches of Grapes       | Sheedless grapes    |       2.99 |      500 |
|  4 | Bottled Water (12-pack) | 500ml spring water. |       4.49 |      500 |
+----+-------------------------+---------------------+------------+----------+
2 rows in set (0.14 sec)
```

####BETWEEN演算子
`WHERE column_name BETWEEN min AND max`でcolumn_nameの最小値(min)と最大値(max)の間の結果を検索する。整数や日付に有効。  
例)　item_priceが1.50から3.00のセットを表示する
```MySQL
mysql> SELECT * FROM grocery_inventory WHERE item_price BETWEEN 1.50 AND 3.00;
+----+------------------------+---------------------+------------+----------+
| id | item_name              | item_desc           | item_price | curr_qty |
+----+------------------------+---------------------+------------+----------+
|  2 | Bunches of Grapes      | Sheedless grapes    |       2.99 |      500 |
|  3 | Bottled Water (6-pack) | 500ml spring water. |       2.29 |      250 |
+----+------------------------+---------------------+------------+----------+
2 rows in set (0.08 sec)
```

####LIKEを使用した文字列比較
`WHERE column_name LIKE "wild_card")`で文字列を比較することができる。パターン照合のワイルドカードとして次の2つが用いられる。  
* %：複数の文字に一致
* _：1文字だけに一致　　

基本、比較のときには大文字と小文字は区別されない。BINARYキーワードを使用して強制的に大文字小文字を区別して比較することができる。  
例)　item_nameが文字Aで始まるrecordを表示
```MySQL
mysql> SELECT * FROM grocery_inventory WHERE item_name LIKE "A%";
+----+-----------+-------------------------+------------+----------+
| id | item_name | item_desc               | item_price | curr_qty |
+----+-----------+-------------------------+------------+----------+
|  1 | Apples    | Beautiful, ripe apples. |       0.25 |     1000 |
+----+-----------+-------------------------+------------+----------+
1 row in set (0.03 sec)
```


###複数テーブルからの選択
SELECTステートメントで複数のテーブルから選択参照できる。仮にfruitとcolorという2つのテーブルがあり、idを基準に結合して表示すことを考える。  
例)
```MySQL
+----+-----------+		+----+-----------+		+----+-----------+-----------+
| id | fruitname |		| id | colorname |		| id | fruitname | colorname |
+----+-----------+		+----+-----------+		+----+-----------+-----------+
|  1 | apple     |		|  1 | red       |		|  1 | apple     | red       |
|  2 | orange    |	+	|  2 | orange    |	=	|  2 | orange    | orange    |
|  3 | grape     |		|  3 | purple    |		|  3 | grape     | purple    |
|  4 | banana    |		|  4 | yellow    |		|  4 | banana    | yellow    |
+----+-----------+		+----+-----------+		+----+-----------+-----------+
```

単純に「,」で2つのtable_nameを区切って`SELECT * FROM fruit,color`とすると、求めるのとは異なる結果が表示される。  
例)
```MySQL
mysql> SELECT * FROM fruit,color;
+----+-----------+----+-----------+
| id | fruitname | id | colorname |
+----+-----------+----+-----------+
|  1 | apple     |  1 | red       |
|  2 | orange    |  1 | red       |
|  3 | grape     |  1 | red       |
|  4 | banana    |  1 | red       |
|  1 | apple     |  2 | orange    |
|  2 | orange    |  2 | orange    |
|  3 | grape     |  2 | orange    |
|  4 | banana    |  2 | orange    |
|  1 | apple     |  3 | purple    |
|  2 | orange    |  3 | purple    |
|  3 | grape     |  3 | purple    |
|  4 | banana    |  3 | purple    |
|  1 | apple     |  4 | yellow    |
|  2 | orange    |  4 | yellow    |
|  3 | grape     |  4 | yellow    |
|  4 | banana    |  4 | yellow    |
+----+-----------+----+-----------+
16 rows in set (0.04 sec)
```

ここからID_FIELDの一致するfruitnameとcolornameのみを取り出すためには、WHERE構文を使ってfruitとcolorのidが一致するという条件を指定する。ここで必要な両方のtableに共通するfieldを正しく指定するには、  
`table_name.field_name`  
と記述すればよい。  
例)
```MySQL
mysql> SELECT fruitname,colorname FROM fruit,color WHERE fruit.id=color.id;
+-----------+-----------+
| fruitname | colorname |
+-----------+-----------+
| apple     | red       |
| orange    | orange    |
| grape     | purple    |
| banana    | yellow    |
+-----------+-----------+
4 rows in set (0.06 sec)
```

しかし、idも含めて表示する際、単にidを加えるだけではerrorを吐き出す。これは同じ名前のcolumnが両方のtableに含まれ、曖昧性が残るためである。  
例)
```MySQL
mysql> SELECT id,fruitname,colorname FROM fruit,color WHERE fruit.id=colorid;
ERROR 1052 (23000): Column 'id' in field list is ambiguous
```

そこで、`table_name.field_name` をもう一度考え、fruit.idまたはcolor.idを用いればよい。  
例)
```MySQL
mysql> SELECT fruit.id,fruitname,colorname FROM fruit,color WHERE fruit.id=color.id;
+----+-----------+-----------+
| id | fruitname | colorname |
+----+-----------+-----------+
|  1 | apple     | red       |
|  2 | orange    | orange    |
|  3 | grape     | purple    |
|  4 | banana    | yellow    |
+----+-----------+-----------+
4 rows in set (0.00 sec)
```

####JOINの使用
テーブルが結合された順を参照して結果を表示する。様々な種類のJOINがあるが、規定はINNER JOINで明示的に記述されない。  
これをあえて明示するときはWHEREのかわりにONを使い、次のような構文になる。  
```
SELECT column_name1,column_name2 FROM table_name1 INNER JOIN table_name2 ON table_name1.field_name = table_name2.field_name;`
```
例)
```MySQL
mysql> SELECT fruitname,colorname FROM fruit INNER JOIN color ON fruit.id=color.id;
+-----------+-----------+
| fruitname | colorname |
+-----------+-----------+
| apple     | red       |
| orange    | orange    |
| grape     | purple    |
| banana    | yellow    |
+-----------+-----------+
4 rows in set (0.00 sec)
```

他にも基本的な句としてLEFT JOINやRIGHT JOINが使われる。これをmaster_nameとemailの2つのテーブルを使い説明する。  
例)
```MySQL
+---------+-----------+----------+		+---------+-------------------+
| name_id | firstname | lastname |		| name_id | email             |
+---------+-----------+----------+		+---------+-------------------+
|       1 | John      | Smith    |		|       2 | jsmith@jsmith.com |
|       2 | Jane      | Smith    |		|       6 | annabell@aol.com  |
|       3 | Jimbo     | Jones    |		|       9 | jdoe@yahoo.com    |
|       4 | Andy      | Smith    |		+---------+-------------------+
|       5 | Chris     | Jones    |
|       6 | Anna      | Bell     |
|       7 | Jimmy     | Carr     |
|       8 | Albert    | Smith    |
|       9 | John      | Doe      |
+---------+-----------+----------+
```

LEFT JOINの構文はINNERと同様、次のようになる。このとき最初に指定したテーブルの要素数に合わせて後のテーブルの要素を調整する。足りない場合は空の値が表示される。  
```
SELECT column_name1,column_name2 FROM table_name1 LEFT JOIN table_name2 ON table_name1.field_name = table_name2.field_name;
```
例)
```MySQL
mysql> SELECT firstname,lastname,email FROM master_name LEFT JOIN email ON master_name.name_id = email.name_id;
+-----------+----------+-------------------+
| firstname | lastname | email             |
+-----------+----------+-------------------+
| John      | Smith    | NULL              |
| Jane      | Smith    | jsmith@jsmith.com |
| Jimbo     | Jones    | NULL              |
| Andy      | Smith    | NULL              |
| Chris     | Jones    | NULL              |
| Anna      | Bell     | annabell@aol.com  |
| Jimmy     | Carr     | NULL              |
| Albert    | Smith    | NULL              |
| John      | Doe      | jdoe@yahoo.com    |
+-----------+----------+-------------------+
9 rows in set (0.00 sec)
```

RIGHT JOINの構文はLEFTと同様、次のようになる。このとき後に指定したテーブルの要素数に合わせて前のテーブルの要素を調整する。足りない場合は空の値が表示される。  
```
SELECT column_name1,column_name2 FROM table_name1 LEFT JOIN table_name2 ON table_name1.field_name = table_name2.field_name;
```
例)
```MySQL
mysql> SELECT firstname,lastname,email FROM master_name RIGHT JOIN email ON master_name.name_id = email.name_id;
+-----------+----------+-------------------+
| firstname | lastname | email             |
+-----------+----------+-------------------+
| Jane      | Smith    | jsmith@jsmith.com |
| Anna      | Bell     | annabell@aol.com  |
| John      | Doe      | jdoe@yahoo.com    |
+-----------+----------+-------------------+
3 rows in set (0.05 sec)
```

####サブクエリ
別のSQLステートメントに含まれるSELECTステートメントのこと。これにより複雑なJOINが必要なくなり、プログラミングではループ内で複数のクエリを含めることが不要になる。
#####`SELECT expressions_and_columns FROM table_name WHERE somecolumn = (SUBQUERY);`  
これはまた、UPDATEやDELETEステートメントにも使われる。  
#####`UPDATE table_name SET somecolumn = "something" WHERE somecoolumn = (SUBQUERY);`  
#####`DELETE FROM table_name WHERE somecolumn = (SUBQUERY);`  
サブクエリは必ず()で括る。  
例えば、IN句は条件をまとめることができ、ORで書き換えられる。  
例)　emailテーブルに登録されているユーザーをmaster_nameテーブルからSELECTする
```
mysql> SELECT firstname,lastname FROM master_name WHERE name_id IN (SELECT name_id FROM email);
+-----------+----------+
| firstname | lastname |
+-----------+----------+
| Jane      | Smith    |
| Anna      | Bell     |
| John      | Doe      |
+-----------+----------+
3 rows in set (0.00 sec)
```


###record変更
####テーブルにレコードのデータ挿入
#####`INSERT INTO table_name (column_list) VALUES (column values);`
#####`INSERT INTO table_name SET column_list = column values;`
上の2つの構文は同様の意味をもつ。  
column_name_valueに文字列を使うときは「'」または「"」でその文字列を囲むことに注意し、文字列内に「'」や「"」があるときは囲んでいるのと同じ方をエスケープする必要がある。

複数組を同時にinsertするときには、次のように記述する。
```MySQL
INSERT INTO table_name (column_name1,column_name2...) VALUES (column_name1_value1,column_name1_value2, ... ),(column_name2_value1,column_name2_value2, ... )...)
```  
例)
```MySQL
mysql> INSERT INTO grocery_inventory (id,item_name,item_desc,item_price,curr_qty) VALUES ("1","Apples","Beautiful, ripe apples.","0.25",1000);
Query OK, 1 row affected (1.39 sec)
```

(column_list)は必ずしも必要ではなく、column valuesの順序がcolumn listの数と順番に一致していれば省略してもよい。  
例)
```MySQL
mysql> INSERT INTO grocery_inventory VALUES ("2","Bunches of Grapes","Sheedlessgrapes","2.99",500);
Query OK, 1 row affected (0.08 sec)
```

また、id作成時に、AUTO_INCREMENTを設定しておけば、column_valueでidを省略することができる。ただし、このときはcolumn_nameをすべて明示しなくてはならず、次の例ではエラーとなる。  
例)
```MySQL
mysql> INSERT INTO grocery_inventory VALUES ("Bottled Water (6-pack)","500ml spring water.","2.29",250);
ERROR 1136 (21S01): Column count doesn't match value count at row 1
```

そこで、ID_FIELDのAUTO_INCREMENTを処理するには、2つの方法があり、1つ目はID_FIELDを除くすべてのcolumn_nameを明示する。  
例)
```MySQL
mysql> INSERT INTO grocery_inventory (item_name,item_desc,item_price,curr_qty) VALUES ("Bottled Water (6-pack)","500ml spring water.","2.29",250);
Query OK, 1 row affected (0.07 sec)
```

2つ目は、全てのcolumn_nameを明示するが、ID_FIELDに対してはNULLエントリを指定する。こうすることで自動的にNULLにIDが入力される。
```MySQL
mysql> INSERT INTO grocery_inventory VALUES ("NULL","Bottled Water (12-pack)","500ml spring water.","4.49",500);
Query OK, 1 row affected, 1 warning (0.08 sec)
```

以上の一連の作業を行えば、次のようなテーブルが得られる。  
例)
```MySQL
+----+-------------------------+-------------------------+------------+---------+
| id | item_name               | item_desc               | item_price | curr_qty|
+----+-------------------------+-------------------------+------------+---------|
|  1 | Apples                  | Beautiful, ripe apples. |       0.25 |     1000|
|  2 | Bunches of Grapes       | Sheedless grapes        |       2.99 |      500|
|  3 | Bottled Water (6-pack)  | 500ml spring water.     |       2.29 |      250|
|  4 | Bottled Water (12-pack) | 500ml spring water.     |       4.49 |      500|
+----+-------------------------+-------------------------+------------+---------+
```


###データ更新
* UPDATE テーブル名 SET カラム名=`値`[, カラム名=`値`, ... ] WHERE 条件式;


####データ削除
* DELETE FROM テーブル名 [WHERE 条件式];


###databaseとPHPの連携
```PHP
<?php
//MySQLとの接続に必要
$username = "root";
$password = "secret";
$host = "localhost";
$dbname = "sample";

 //MySQLとの接続
 try{
	$db = new PDO("mysql:host={$host};dbname={$dbname};charset=utf8", $username, $password);
}
catch(PDOException $ex)
{
	die("Failed to connect to the database: " . $ex->getMessage());
}

$q = "SELECT * FROM samples";
try{
	$stmt = $db->prepare($q);
	$stmt->execute();
}catch(PDOExption $ex){
	die("Failed to connect to the database: " . $ex->getMessage());
}

 //fetch()で1行取り出し、fetchAll()ですべてを取り出すことができる
 $data=$stmt->fetchAll();

 var_dump($data);
?>
```