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
* __TIME：HH__:MM:SS形式の時刻
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
`SHOW DATABASES;`

例)  
```MySQL
mysql> show databases;
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
* CREATE DATABASE "DATABASE名";

####データべースの選択
`USE "DATABASE名";`

例)  
```MySQL
mysql> use first_mysql;
Database changed
```  
成功すると`Database changed`と表示される。

####データベースの削除
* DROP DATABASE "DATABASE名";


###テーブルの操作
####表の一覧を表示
`SHOW TABLES;`

例)  
```MySQL
mysql> show tables;
+-----------------------+
| Tables_in_first_mysql |
+-----------------------+
| grocery_inventory     |
+-----------------------+
1 row in set (0.00 sec)
```

####テーブルの作成
* データベースに未接続時  
  `CREATE TABLE database_name.table_name(column_name column_type);`  
* データベースに接続時  
  `CREATE TABLE table_name(column_name column_type);`  

database_name、table_name、column_nameは任意、column_typeはデータ型から選択する。  
column_name column_typeは「,」で区切ることで複数組を同時に指定できる。  

例)  
```MySQL
mysql> create table grocery_inventory(
    -> id int not null primary key auto_increment,
    -> item_name varchar(50) not null,
    -> item_desc text,
    -> item_price float not null,
    -> curr_qty int not null
    -> );
Query OK, 0 rows affected (0.49 sec)
```  
成功したときに`Query OK, 0 rows affected (0.49 sec)`などと表示される。  
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
* DESC "TABLE名";
* DESCRIBE "TABLE名";
* SHOW COLUMNS "TABLE名"( FROM "DATABASE名");
* Field：フィールド名、Type：データ型、Null：Nullを許可するかどうか、Key：主キー(Primary Key)、Default：初期値、Extra：オートインクリメントなど

####テーブル情報を表示
* SHOW TABLE STATUS( FROM "DATABASE名")( LIKE "WILD CARDS");

####データベースの削除
`DROP TABLE table_name;`


###RECORD表示
####テーブルの全ての要素を表示
SELECT * FROM "TABLE名";

####tableの全ての要素のうち一行目を表示する
* SELECT * FROM "TABLE名" LIMIT 1;

####tableのth1とth2との最初の1行を表示する
* SELECT "カラム名1","カラム名2" FROM "table名" WHERE "条件式";


###record変更
####テーブルにレコードのデータ挿入
`INSERT INTO table_name (column_list) VALUES (column values);`  
column_name_valueに文字列を使うときは「'」または「"」でその文字列を囲むことに注意すし、文字列内に「'」や「"」があるときは囲んでいるのと同じ方はエスケープする必要がある。  
次の構文も同様の意味。  
`INSERT INTO table_name SET column_list = column values;`

複数組を同時にinsertするときには、次のように記述する。
```
INSERT INTO table_name (column_name1,column_name2...) VALUES (column_name1_value1,column_name1_value2, ... ),(column_name2_value1,column_name2_value2, ... )...)
```  

####データ更新
* UPDATE テーブル名 SET カラム名=`値`[, カラム名=`値`, ... ] WHERE 条件式;

####データ削除
* DELETE FROM テーブル名 [WHERE 条件式];

####フィールドの入れ替え
* SELECT "カラム名2","カラム名1" FROM "table名";