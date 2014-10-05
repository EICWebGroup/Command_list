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


###作成済みのテーブルにcolumnを追加する
#####`ALTER TABLE tbl_name ADD [COLUMN] column_definition;`  
例)　fruitにstatusを追加
```MySQL
mysql> ALTER TABLE fruit ADD status varchar(6);
Query OK, 0 rows affected (3.37 sec)
Records: 0  Duplicates: 0  Warnings: 0

mysql> desc fruit;
+-----------+------------+------+-----+---------+----------------+
| Field     | Type       | Null | Key | Default | Extra          |
+-----------+------------+------+-----+---------+----------------+
| id        | int(11)    | NO   | PRI | NULL    | auto_increment |
| fruitname | varchar(6) | YES  |     | NULL    |                |
| status    | varchar(6) | YES  |     | NULL    |                |
+-----------+------------+------+-----+---------+----------------+
3 rows in set (0.23 sec)
```

###作成済みのテーブルからcolumnを削除する
#####`ALTER TABLE tbl_name DROP COLUMN col_name;`


###レコードのデータ更新
UPDATEは既存のレコード(セット)で1つ以上のcolumnの内容を修正するときに使用する。次のテーブルを例に挙げる。  
例)
```MySQL
+----+-----------+--------+
| id | fruitname | status |
+----+-----------+--------+
|  1 | apple     | ripe   |
|  2 | orange    | rotten |
|  3 | grape     | ripe   |
|  4 | banana    | rotten |
+----+-----------+--------+
```

`UPDATE table_name SET column_name1="new_value1",column_name2="new_value2" [WHERE some_condition_is_true];`  
WHERE句は必ずしも必要ではないが、これがないとすべてのcolumnが更新されてしまう。  
例)
```MySQL
mysql> UPDATE fruit SET status = "ripe";
Query OK, 2 rows affected (0.10 sec)
Rows matched: 4  Changed: 2  Warnings: 0

mysql> select * from fruit;
+----+-----------+--------+
| id | fruitname | status |
+----+-----------+--------+
|  1 | apple     | ripe   |
|  2 | orange    | ripe   |
|  3 | grape     | ripe   |
|  4 | banana    | ripe   |
+----+-----------+--------+
4 rows in set (0.00 sec)
```

####条件付きのUPDATE
全てのcolumnではなく、特定のcolumnを更新したいときにはWHERE句を使う。  
例)　grapeの綴りが間違ってgrrapeになっていて、これを修正する
```MySQL
mysql> select * from fruit;
+----+-----------+--------+
| id | fruitname | status |
+----+-----------+--------+
|  1 | apple     | ripe   |
|  2 | orange    | ripe   |
|  3 | grrape    | ripe   |
|  4 | banana    | ripe   |
+----+-----------+--------+
4 rows in set (0.00 sec)

mysql> UPDATE fruit SET fruitname = "grape" WHERE fruitname="grrape";
Query OK, 1 row affected (0.13 sec)
Rows matched: 1  Changed: 1  Warnings: 0

mysql> select * from fruit;
+----+-----------+--------+
| id | fruitname | status |
+----+-----------+--------+
|  1 | apple     | ripe   |
|  2 | orange    | ripe   |
|  3 | grape     | ripe   |
|  4 | banana    | ripe   |
+----+-----------+--------+
4 rows in set (0.03 sec)
```


###REPLACEコマンドの使用
元のレコードと主キーが一致する新しいれ子レコードを入れ替えるときに使用する  
`REPLACE INTO table_name (column_list ) VALUES (column_values)`  
例)
```MySQL
mysql> select * from grocery_inventory;
+----+-------------------------+-------------------------+------------+---------+
| id | item_name               | item_desc               | item_price | curr_qty|
+----+-------------------------+-------------------------+------------+---------|
|  1 | Apples                  | Beautiful, ripe apples. |       0.25 |     1000|
|  2 | Bunches of Grapes       | Sheedless grapes        |       2.99 |      500|
|  3 | Bottled Water (6-pack)  | 500ml spring water.     |       2.29 |      250|
|  4 | Bottled Water (12-pack) | 500ml spring water.     |       4.49 |      500|
+----+-------------------------+-------------------------+------------+---------+
4 rows in set (0.00 sec)

mysql> REPLACE INTO grocery_inventory VALUES (1,"Granny Smith Apples","Sweet","0.50",1000);
Query OK, 2 rows affected (0.22 sec)

mysql> select * from grocery_inventory;
+----+-------------------------+---------------------+------------+----------+
| id | item_name               | item_desc           | item_price | curr_qty |
+----+-------------------------+---------------------+------------+----------+
|  1 | Granny Smith Apples     | Sweet               |        0.5 |     1000 |
|  2 | Bunches of Grapes       | Sheedless grapes    |       2.99 |      500 |
|  3 | Bottled Water (6-pack)  | 500ml spring water. |       2.29 |      250 |
|  4 | Bottled Water (12-pack) | 500ml spring water. |       4.49 |      500 |
+----+-------------------------+---------------------+------------+----------+
4 rows in set (0.00 sec)
```

ここで1つのレコードしか変更していないのに「2 rows affected」とあるのは、はじめのレコードを削除した後に新しいレコードを挿入するという、2つの操作を行っているためである。  


###DELETEコマンドの使用
`DELETE FROM table_name [WHERE some_condition_is_true] [LIMIT rows]`  
DELETEコマンドではcolumnを指定せず、単体ではすべてのレコードを削除する。  
例)
```MySQL
mysql> SELECT * FROM fruit;
+----+-----------+--------+
| id | fruitname | status |
+----+-----------+--------+
|  1 | apple     | ripe   |
|  2 | orange    | rotten |
|  3 | grape     | ripe   |
|  4 | banana    | rotten |
+----+-----------+--------+
4 rows in set (0.00 sec)

mysql> DELETE FROM fruit;
Query OK, 4 rows affected (0.04 sec)

mysql> select * from fruit;
Empty set (0.00 sec)
```


####条件付きのDELETE
WHEREなどで条件を指定すれば任意のレコードを削除する。  
例)
```MySQL
mysql> SELECT * FROM fruit;
+----+-----------+--------+
| id | fruitname | status |
+----+-----------+--------+
|  1 | apple     | ripe   |
|  2 | orange    | rotten |
|  3 | grape     | ripe   |
|  4 | banana    | rotten |
+----+-----------+--------+
4 rows in set (0.00 sec)

mysql> DELETE FROM fruit WHERE status = "rotten";
Query OK, 2 rows affected (0.09 sec)

mysql> SELECT * FROM fruit;
+----+-----------+--------+
| id | fruitname | status |
+----+-----------+--------+
|  1 | apple     | ripe   |
|  3 | grape     | ripe   |
+----+-----------+--------+
2 rows in set (0.00 sec)
```

また、、ORDER BYで順序を整理してから、LIMITで制限して削除することもできる。  
例)　アクセスが最新のレコードを削除
```MySQL
mysql> select * from access_log;
+----+---------------------+----------+
| id | date_accessed       | username |
+----+---------------------+----------+
|  1 | 2012-01-06 06:09:13 | johndoe  |
|  2 | 2012-01-06 07:08:42 | janedoe  |
|  3 | 2012-01-06 09:03:19 | jsmith   |
|  4 | 2012-01-06 10:06:59 | mikew    |
+----+---------------------+----------+
4 rows in set (0.00 sec)

mysql> DELETE FROM access_log ORDER BY date_accessed DESC LIMIT 1;
Query OK, 1 row affected (0.13 sec)

mysql> select * from access_log;
+----+---------------------+----------+
| id | date_accessed       | username |
+----+---------------------+----------+
|  1 | 2012-01-06 06:09:13 | johndoe  |
|  2 | 2012-01-06 07:08:42 | janedoe  |
|  3 | 2012-01-06 09:03:19 | jsmith   |
+----+---------------------+----------+
3 rows in set (0.00 sec)
```


###MySQLでよく利用される文字列関数
テーブルを使用せず、SELECTステートメントで関数を利用することができる。
####長さと連結の関数
文字列に含まれる文字数をカウントするかんすうにはLENGTH(),OCTET_LENGTH(),CHAR_LENGTH(),CHARACTER_LENGTH()などがある。  
例)
```MySQL
mysql> SELECT LENGTH("This is cool!");
+-------------------------+
| LENGTH("This is cool!") |
+-------------------------+
|                      13 |
+-------------------------+
1 row in set (0.20 sec)
```

2つ以上の文字列を連結するにはCONCAT()関数を用いる。  
例)
```MySQL
mysql> SELECT CONCAT("My","S","QL");
+-----------------------+
| CONCAT("My","S","QL") |
+-----------------------+
| MySQL                 |
+-----------------------+
1 row in set (0.05 sec)
```

テーブルを指定して2つ以上のcolumnを結合したものを表示できる。  
`SELECT CONCAT(column_name1,column_name2) FROM table_name`  
例)
```MySQL
mysql> SELECT CONCAT (firstname ,lastname) FROM master_name;
+------------------------------+
| CONCAT (firstname ,lastname) |
+------------------------------+
| JohnSmith                    |
| JaneSmith                    |
| JimboJones                   |
| AndySmith                    |
| ChrisJones                   |
| AnnaBell                     |
| JimmyCarr                    |
| AlbertSmith                  |
| JohnDoe                      |
+------------------------------+
9 rows in set (0.03 sec)
```

間に区切り文字を入れるときはCONCAT_WS()関数を使う。  
`SELECT CONCAT_WS("words",column_name1,column_name2) FROM table_name`  
例)
```MySQL
mysql> SELECT CONCAT_WS(" ",firstname ,lastname) FROM master_name;
+-------------------------------------+
| CONCAT_WS (" ",firstname ,lastname) |
+-------------------------------------+
| John Smith                          |
| Jane Smith                          |
| Jimbo Jones                         |
| Andy Smith                          |
| Chris Jones                         |
| Anna Bell                           |
| Jimmy Carr                          |
| Albert Smith                        |
| John Doe                            |
+-------------------------------------+
9 rows in set (0.03 sec)
```

ASを使うことで結果フィールドを指定でき、長くなりがちな結果テーブルの幅を短くできる。  
#####`SELECT CONCAT_WS("words",column_name1,column_name2) AS new_name FROM table_name`  
例)
```MySQL
mysql> SELECT CONCAT_WS(" ",firstname ,lastname) AS fullname FROM master_name;
+--------------+
| fullname     |
+--------------+
| John Smith   |
| Jane Smith   |
| Jimbo Jones  |
| Andy Smith   |
| Chris Jones  |
| Anna Bell    |
| Jimmy Carr   |
| Albert Smith |
| John Doe     |
+--------------+
9 rows in set (0.00 sec)
```

####トリミングとパッティングの関数
文字列の端から空白を削除する関数
#####`SELECT RTRIM(" string ")`(右端の空白を削除する)  
#####`SELECT LTRIM(" string ")`(左端の空白を削除する)  
例)
```MySQL
mysql> SELECT RTRIM("   string   ");
+-----------------------+
| RTRIM("   string   ") |
+-----------------------+
|    string             |
+-----------------------+
1 row in set (1.63 sec)

mysql> SELECT LTRIM("   string   ");
+-----------------------+
| LTRIM("   string   ") |
+-----------------------+
| string                |
+-----------------------+
1 row in set (0.05 sec)
```

削除したい文字を指示して削除する関数
#####`SELWET TRIM(LEADING "word" FROM "string")`(先頭からwordを削除する)  
#####`SELWET TRIM(TRAILING "word" FROM "string")`(末尾からwordを削除する)  
#####`SELWET TRIM("word" FROM "string")`(両端からwordを削除する)  
例)
```MySQL
mysql> SELECT TRIM(LEADING "x" FROM "xxxstringxxx");
+---------------------------------------+
| TRIM(LEADING "x" FROM "xxxstringxxx") |
+---------------------------------------+
| stringxxx                             |
+---------------------------------------+
1 row in set (0.12 sec)

mysql> SELECT TRIM(TRAILING "x" FROM "xxxstringxxx");
+----------------------------------------+
| TRIM(TRAILING "x" FROM "xxxstringxxx") |
+----------------------------------------+
| xxxstring                              |
+----------------------------------------+
1 row in set (0.00 sec)

mysql> SELECT TRIM("x" FROM "xxxstringxxx");
+-------------------------------+
| TRIM("x" FROM "xxxstringxxx") |
+-------------------------------+
| string                        |
+-------------------------------+
1 row in set (0.00 sec)
```

文字列に指定の文字を追加する関数(文字列、文字列の長さ、文字の順に指定する)
#####`SELECT RPAD("string",int,"word");`  
#####`SELECT LPAD("string",int,"word");`  
例)
```MySQL
mysql> SELECT RPAD("string",10,"x");
+-----------------------+
| RPAD("string",10,"x") |
+-----------------------+
| stringxxxx            |
+-----------------------+
1 row in set (0.00 sec)

mysql> SELECT LPAD("string",10,"x");
+-----------------------+
| LPAD("string",10,"x") |
+-----------------------+
| xxxxstring            |
+-----------------------+
1 row in set (0.00 sec)
```

####場所と位置の関数
他の文字列の中から部分文字列を見つけるのに有効。  

指定した部分文字列が対象文字列内で初めて出現する位置を返す関数、カウントは1から始まり、見つからない場合は0を返す。startは必須ではないが、startよりも前に部分文字列があると0を返す。  
#####`SELECT LOCATE("words","string",start);`  
例)
```MySQL
mysql> SELECT LOCATE("needle","haystackneedlehaystack");
+-------------------------------------------+
| LOCATE("needle","haystackneedlehaystack") |
+-------------------------------------------+
|                                         9 |
+-------------------------------------------+
1 row in set (0.04 sec)

mysql> SELECT LOCATE("needle","haystackneedlehaystack",8);
+---------------------------------------------+
| LOCATE("needle","haystackneedlehaystack",8) |
+---------------------------------------------+
|                                           9 |
+---------------------------------------------+
1 row in set (0.00 sec)

mysql> SELECT LOCATE("needle","haystackneedlehaystack",10);
+----------------------------------------------+
| LOCATE("needle","haystackneedlehaystack",10) |
+----------------------------------------------+
|                                            0 |
+----------------------------------------------+
1 row in set (0.00 sec)
```

####部分文字列の関数
対象文字列から部分文字列を抽出する関数
#####`SELECT SUBSTRING("string",start,length)`  
例)
```MySQL
mysql> SELECT SUBSTRING("MySQL",2,3);
+------------------------+
| SUBSTRING("MySQL",2,3) |
+------------------------+
| ySQ                    |
+------------------------+
1 row in set (0.04 sec)
```

文字列の橋の文字列を抽出する関数
#####`SELECT LEFT("string",length)`(文字列の左端から取り出す)  
#####`SELECT RIGHT("string",length))`(文字列の左端から取り出す)  
例)
```MySQL
mysql> SELECT LEFT("MySQL",2);
+-----------------+
| LEFT("MySQL",2) |
+-----------------+
| My              |
+-----------------+
1 row in set (0.00 sec)

mysql> SELECT RIGHT("MySQL",2);
+------------------+
| RIGHT("MySQL",2) |
+------------------+
| QL               |
+------------------+
1 row in set (0.00 sec)
```

####文字列変更の関数
文字列の大文字小文字を変換する関数
#####`SELECTLUCASE("string")`(大文字を小文字に変換する)  
#####`SELECT UCASE("string")`(小文字を大文字に変換する)  
例)
```MySQL
mysql> SELECT LCASE("MySQL");
+----------------+
| LCASE("MySQL") |
+----------------+
| mysql          |
+----------------+
1 row in set (0.00 sec)

mysql> SELECT UCASE("MySQL");
+----------------+
| UCASE("MySQL") |
+----------------+
| MYSQL          |
+----------------+
1 row in set (0.04 sec)
```

テーブルのcolumnを指定するときは引用符を使用しないことに注意  
例)
```MySQL
mysql> SELECT UCASE(lastname) FROM master_name;
+-----------------+
| UCASE(lastname) |
+-----------------+
| SMITH           |
| SMITH           |
| JONES           |
| SMITH           |
| JONES           |
| BELL            |
| CARR            |
| SMITH           |
| DOE             |
+-----------------+
9 rows in set (0.96 sec)
```

指定した文字列を指定回数だけ繰り返す関数
#####`SELECT REPEAT("string",times)`  
例)
```MySQL
mysql> SELECT REPEAT("bowwow",4);
+--------------------------+
| REPEAT("bowwow",4)       |
+--------------------------+
| bowwowbowwowbowwowbowwow |
+--------------------------+
1 row in set (0.00 sec)
```

ある文字列内(string)の指定した文字列(word1)をずべて別の文字列(word2)で置き換える関数
#####`SELECT REPLACE("string","word1","word2")`  
例)
```MySQL
mysql> SELECT REPLACE("bowwowbowwowbowwowbowwow","wow","WOW");
+-------------------------------------------------+
| REPLACE("bowwowbowwowbowwowbowwow","wow","WOW") |
+-------------------------------------------------+
| bowWOWbowWOWbowWOWbowWOW                        |
+-------------------------------------------------+
1 row in set (0.00 sec)
```


###MySQLでの日付関数と時刻関数の使用
####日付の使用
日付の曜日インデクスを返す関数
DAYOFWEEK()関数の週の開始日は日曜日で、位置は1、最終日は土曜日で、位置は7となる。  
#####`SELECT DAYOFWEEK("YYYY-MM-DD")`  
WEEKDAY()関数の週の開始日は月曜日で、位置は0、最終日は日曜日で、位置は6となる。  
#####`SELECT WEEKDAY("YYYY-MM-DD")`  
例)
```MySQL
mysql> SELECT DAYOFWEEK("2012-01-09");
+-------------------------+
| DAYOFWEEK("2012-01-09") |
+-------------------------+
|                       2 |
+-------------------------+
1 row in set (0.00 sec)

mysql> SELECT WEEKDAY("2012-01-09");
+-----------------------+
| WEEKDAY("2012-01-09") |
+-----------------------+
|                     0 |
+-----------------------+
1 row in set (0.10 sec)
```

DAYOFMONTH()やDAYOFYEAR()も同様にそれぞれの日付を返す。  
#####`SELECT DAYOFMONTH("YYYY-MM-DD")`  
#####`SELECT DAYOFYEAR("YYYY-MM-DD")`  
例)
```MySQL
mysql> SELECT DAYOFMONTH("2012-02-09");
+--------------------------+
| DAYOFMONTH("2012-02-09") |
+--------------------------+
|                        9 |
+--------------------------+
1 row in set (0.05 sec)

mysql> SELECT DAYOFYEAR("2012-02-09");
+-------------------------+
| DAYOFYEAR("2012-02-09") |
+-------------------------+
|                      40 |
+-------------------------+
1 row in set (0.00 sec)
```

指定した日付の曜日名を返す関数
#####`SELECT DAYNAME("YYYY-MM-DD")`  
例)
```MySQL
mysql> SELECT DAYNAME("2012-01-09");
+-----------------------+
| DAYNAME("2012-01-09") |
+-----------------------+
| Monday                |
+-----------------------+
1 row in set (0.03 sec)
```

####月及び年の使用
指定した日付の月を返す関数  
#####`SELECT MONTH("YYYY-MM-DD")`  
日付の月の名前を返す関数
#####`SELECT MONTHNAME("YYYY-MM-DD")`  
例)
```MySQL
mysql> SELECT MONTH("2012-01-09"),MONTHNAME("2012-01-09");
+---------------------+-------------------------+
| MONTH("2012-01-09") | MONTHNAME("2012-01-09") |
+---------------------+-------------------------+
|                   1 | January                 |
+---------------------+-------------------------+
1 row in set (0.00 sec)
```

テーブルに対してmONTHNAME()関数を使うと正しく処理されても、同じ月名が繰り返すことがある。このときDISTINCTを使うと繰り返しを排除できる。  
例)
```MySQL
mysql> SELECT * FROM access_log;
+----+---------------------+----------+
| id | date_accessed       | username |
+----+---------------------+----------+
|  1 | 2012-01-06 06:09:13 | johndoe  |
|  2 | 2012-01-06 07:08:42 | janedoe  |
|  3 | 2012-01-06 09:03:19 | jsmith   |
+----+---------------------+----------+
3 rows in set (0.03 sec)

mysql> SELECT MONTHNAME(date_accessed) FROM access_log;
+--------------------------+
| MONTHNAME(date_accessed) |
+--------------------------+
| January                  |
| January                  |
| January                  |
+--------------------------+
3 rows in set (0.00 sec)

mysql> SELECT DISTINCT MONTHNAME(date_accessed) FROM access_log;
+--------------------------+
| MONTHNAME(date_accessed) |
+--------------------------+
| January                  |
+--------------------------+
1 row in set (0.07 sec)
```

年を返す関数
#####`SELECT YEAR("YYYY-MM-DD")`  
例)
```MySQL
mysql> SELECT DISTINCT YEAR(date_accessed) FROM access_log;
+---------------------+
| YEAR(date_accessed) |
+---------------------+
|                2012 |
+---------------------+
1 row in set (0.03 sec)
```

####週の使用
週の扱いには注意が必要である。  
1月1日から最初の土曜日までを0週目として、12月末でちょうど週が終わらなかったり、州の開始の曜日が異なったりすると週の数が変動するからだ。  
例えば、2001年12月31日は日曜日だった。このとき2001年12月31日までが52週目で、2002年1月1日5日までが0週目、6日から1週目が開始する。  
#####`SELECT WEEK(YYYY-MM-DD,start);`  
例)
```MySQL
mysql> SELECT WEEK("2001-12-30");	mysql> SELECT WEEK("2002-1-1");		mysql> SELECT WEEK("2002-1-6");
+--------------------+				+------------------+				+------------------+
| WEEK("2001-12-30") |				| WEEK("2002-1-1") |				| WEEK("2002-1-6") |
+--------------------+				+------------------+				+------------------+
|                 52 |				|                0 |				|                1 |
+--------------------+				+------------------+				+------------------+
1 row in set (0.00 sec)				1 row in set (0.00 sec)				1 row in set (0.00 sec)
```

2番目の引数を指定することで、週の開始の曜日を変更できる。指定がなければ0と同じ日曜日となる。  
例)
```MySQL
mysql> SELECT WEEK("2001-12-31",1);
+----------------------+
| WEEK("2001-12-31",1) |
+----------------------+
|                   53 |
+----------------------+
1 row in set (0.00 sec)
```

####時間、分、秒の使用
時刻表記から時間、分、秒を取り出す関数が用意されている。また、例のようにAS句を使って一つのテーブルにまとめることができる。  
#####`SELECT HOUR("YYYY-MM-DD HH:MM:SS);`  
#####`SELECT MINUTE("YYYY-MM-DD HH:MM:SS);`  
#####`SELECT SECOND("YYYY-MM-DD HH:MM:SS);`  
例)
```MySQL
mysql> SELECT HOUR("2001-12-31 07:27:49") AS hour,
    -> MINUTE("2001-12-31 07:27:49") AS minute,
    -> SECOND("2001-12-31 07:27:49") AS second;
+------+--------+--------+
| hour | minute | second |
+------+--------+--------+
|    7 |     27 |     49 |
+------+--------+--------+
1 row in set (0.03 sec)
```

`CONCAT_WS()`を利用して取得した時、分、秒をつなぎ合わせ、任意の時刻表示を表現できる。  
例)
```MySQL
mysql> SELECT CONCAT_WS(":",HOUR("2012-01-09 07:27:49"),MINUTE("2012-01-09 07:27:49")) AS sample_time;
+-------------+
| sample_time |
+-------------+
| 7:27        |
+-------------+
1 row in set (0.17 sec)
```

###MySQLでの日付と時刻のフォーマット
#####`DATE_FORMAT(date,format);`  
この関数は結果の表示方法を厳密に指定するオプションを使用してdate、datetimeまたはtimestampフィールドを文字列にフォーマットする。  

DATE_FORMAT()の文字列フォーマットオプション
* %M：月の名前(January～December)
* %b：略式の月名(Jan～Dec)
* %m：桁埋めされた月(01～12)
* %c：月(1～12)
* %W：曜日の名前(Sunday～Saturday)
* %a：略式の曜日名(Sun～Sat)
* %D：英語のサフィックス月の日付(first,second,third)
* %d：桁埋めされた月単位の日(00～31)
* %e：月単位の日(0～31)
* %j：桁埋めされた年単位の日(001～366)
* %Y：4桁の年
* %y：2桁の年
* %X：日曜日を最初の日とする場合の週に使用する4桁の年。%Vと組み合わせて使用する。
* %x：月曜日を最初の日とする場合の週に使用する4桁の年。%vと組み合わせて使用する。
* %w：曜日(0=Sunday～6=Saturday)
* %U：日曜日を最初の日とする場合の週(0～53)
* %u：月曜日を最初の日とする場合の週(0～53)
* %V：日曜日を最初の日とする場合の週(0～53)%Xと組み合わせて使用する。
* %v：月曜日を最初の日とする場合の週(0～53)%xと組み合わせて使用する。
* %H：桁埋めされた時(00～23)
* %k：時(0～23)
* %h：桁埋めされた時(01～12)
* %l：時(1～12)
* %i：桁埋めされた分(00～59)
* %S：桁埋めされた秒(00～59)
* %s：桁埋めされた秒(00～59)
* %r：12時間表示の時刻(hh:mm:ss[AP]M)
* %T：24時間表示の時刻(hh:mm:ss)
* %p：AMまたはPM

例)
```MySQL
mysql> SELECT DATE_FORMAT("2012-01-09 02:03:00","%h:%i") AS sample_time;
+-------------+
| sample_time |
+-------------+
| 02:03       |
+-------------+
1 row in set (0.11 sec)
```

NOW()関数を使えば現在時刻を表示することができる。  
例)
```MySQL
mysql> SELECT DATE_FORMAT(NOW(),"%W the %D of %M,%Y around %l o\'clock %p") AS s
ample_time;
+--------------------------------------------------------+
| sample_time                                            |
+--------------------------------------------------------+
| Thursday the 4th of September,2014 around 2 o'clock PM |
+--------------------------------------------------------+
1 row in set (0.17 sec)
```

###MySQLでの日付計算
日付計算はPHPスクリプトよりMySQLで計算する方が効率的で、DATE_ADD()関数とDATE_SUB()関数は、開始日と間隔を指定して結果を返す。  
#####`DATE_ADD(date,INTERVAL value_type)`  
#####`DATE_SUB(date,INTERVAL value_type)`  

日付計算の値とタイプ  
* 秒：SECOND
* 分：MINUTE
* 時：HOUR
* 日：DAY
* 月：MONTH
* 年：YEAR
* 「分：秒」：MINUTE_SECOND
* 「時：分」：HOUR_MINUTE
* 「日時」：DAY_HOUR
* 「年-月」：YEAR_MONTH
* 「時：分：秒」：HOUR_SECOND
* 「日時：分」：DAY_MINUTE
* 「日時：分：秒」：DAY_SECOND

例)　現在の日付に21日を加算した日時を求める
```MySQL
mysql> SELECT DATE_ADD(NOW(),INTERVAL 21 DAY);		mysql> SELECT DATE_SUB(NOW(),INTERVAL 21 DAY);
+---------------------------------+					+---------------------------------+
| DATE_ADD(NOW(),INTERVAL 21 DAY) |					| DATE_SUB(NOW(),INTERVAL 21 DAY) |
+---------------------------------+					+---------------------------------+
| 2014-09-25 14:53:26             |					| 2014-08-14 14:54:12             |
+---------------------------------+					+---------------------------------+
1 row in set (0.04 sec)								1 row in set (0.00 sec)
```

これらの関数にdate値を指定すると、自・分・秒に関する式を使うとき以外はdate値が返され、使うときはdatetime値になる。  
例)
```MySQL
mysql> SELECT DATE_ADD("2012-12-31",INTERVAL 1 DAY);
+---------------------------------------+
| DATE_ADD("2012-12-31",INTERVAL 1 DAY) |
+---------------------------------------+
| 2013-01-01                            |
+---------------------------------------+
1 row in set (0.00 sec)

mysql> SELECT DATE_ADD("2012-12-31",INTERVAL 1 HOUR);
+----------------------------------------+
| DATE_ADD("2012-12-31",INTERVAL 1 HOUR) |
+----------------------------------------+
| 2012-12-31 01:00:00                    |
+----------------------------------------+
1 row in set (0.00 sec)
```

DATE_ADD()関数とDATE_SUB()関数のかわりに+と-演算子を使用しても日付計算を実行できる。  
例)
```MySQL
mysql> SELECT "2012-12-31" + INTERVAL 1 DAY;
+-------------------------------+
| "2012-12-31" + INTERVAL 1 DAY |
+-------------------------------+
| 2013-01-01                    |
+-------------------------------+
1 row in set (0.02 sec)
```

####特殊な関数と変換機能
CURDATE()関数とCURRENT_DATE()関数は同義で、それぞれ現在の日付をYYYY-MM-DDの形で返す。  
例)
```MySQL
mysql> SELECT CURDATE();
+------------+
| CURDATE()  |
+------------+
| 2014-09-04 |
+------------+
1 row in set (0.00 sec)

mysql> SELECT CURRENT_DATE();
+----------------+
| CURRENT_DATE() |
+----------------+
| 2014-09-04     |
+----------------+
1 row in set (0.00 sec)
```

同様にCURTIME()関数とCURRENT_TIME()関数はともに現在時刻をHH:MM:SS形式で返す。  
例)
```MySQL
mysql> SELECT CURTIME();
+-----------+
| CURTIME() |
+-----------+
| 15:05:33  |
+-----------+
1 row in set (0.00 sec)

mysql> SELECT CURRENT_TIME();
+----------------+
| CURRENT_TIME() |
+----------------+
| 15:05:40       |
+----------------+
1 row in set (0.00 sec)
```

NOW()関数、SYSDATE()関数、CURRENT_TIMESTAMP()関数は完全なdatetime形式YYYY-MM-DD HH:MM:SSで値を返す。  
例)
```MySQL
mysql> SELECT NOW(),SYSDATE(),CURRENT_TIMESTAMP();
+---------------------+---------------------+---------------------+
| NOW()               | SYSDATE()           | CURRENT_TIMESTAMP() |
+---------------------+---------------------+---------------------+
| 2014-09-04 15:08:11 | 2014-09-04 15:08:11 | 2014-09-04 15:08:11 |
+---------------------+---------------------+---------------------+
1 row in set (0.00 sec)
```

#####`UNIX_TIMESTAMP("YYYY-MM-DD")`  
この関数はUNIXタイムスタンプ形式(エポックからの秒数または1970年1月1日午前0時からの経過秒数)で日付を返す。指定しなければ現在時刻となる。  
例)
```MySQL
mysql> SELECT UNIX_TIMESTAMP();
+------------------+
| UNIX_TIMESTAMP() |
+------------------+
|       1409811107 |
+------------------+
1 row in set (0.17 sec)

mysql> SELECT UNIX_TIMESTAMP("1973-12-30");
+------------------------------+
| UNIX_TIMESTAMP("1973-12-30") |
+------------------------------+
|                    126025200 |
+------------------------------+
1 row in set (0.01 sec)
```

#####`SELECT FROM_UNIXTIME("second")`  
UNIXタイムスタンプを完全なdatetime形式に変換する。  
例)
```MySQL
mysql> SELECT FROM_UNIXTIME("126025200");
+----------------------------+
| FROM_UNIXTIME("126025200") |
+----------------------------+
| 1973-12-30 00:00:00.000000 |
+----------------------------+
1 row in set (0.05 sec)
```


###tableの結合
`SELECT table_name1.column_name1,table_name2.column_name2 FROM table_name1 INNER JOIN table_name2 ON table_name1.column_name1 = table_name2.column_name2`  
例)
```MySQL
mysql> SELECT * FROM snippet_table INNER JOIN tag_table ON snippet_table.tags_id = tag_table.id;
+----+--------------------------------------------+-------------------------------------+---------+---------------------+---------------------+----+------------+---------------------+---------------------+
| id | title                                      | content                             | tags_id | created_at          | updated_at          | id | name       | created_at          | updated_at          |
+----+--------------------------------------------+-------------------------------------+---------+---------------------+---------------------+----+------------+---------------------+---------------------+
|  1 | reset.css                                  |                                     |       1 | 0000-00-00 00:00:00 | 0000-00-00 00:00:00 |  1 | CSS        | 0000-00-00 00:00:00 | 0000-00-00 00:00:00 |
|  2 | Resized done action in javascript          | resizedDoneAction...                |       2 | 0000-00-00 00:00:00 | 0000-00-00 00:00:00 |  2 | javascript | 0000-00-00 00:00:00 | 0000-00-00 00:00:00 |
|  4 | prompt confirm dialog when closing window  | var handler = function (event) {... |       2 | 2014-09-16 07:51:50 | 2014-09-16 07:51:50 |  2 | javascript | 0000-00-00 00:00:00 | 0000-00-00 00:00:00 |
|  3 | get current time in string                 | include time ...                    |       3 | 2014-09-13 00:45:20 | 2014-09-16 07:52:51 |  3 | C          | 0000-00-00 00:00:00 | 0000-00-00 00:00:00 |
|  5 |  get current time in string                | struct tm *ptr;...                  |       3 | 2014-09-16 07:54:58 | 2014-09-16 17:16:56 |  3 | C          | 0000-00-00 00:00:00 | 0000-00-00 00:00:00 |
+----+--------------------------------------------+-------------------------------------+---------+---------------------+---------------------+----+------------+---------------------+---------------------+
5 rows in set (0.00 sec)
```	


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