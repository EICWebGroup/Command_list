##MySQL_Query
###MySQL_Queryの起動・終了
####ログイン
1. XAMPPの起動
2. mysqlを開く
3. mysql -u root -pを入力
4. パスワードは空白のまま

####ログアウト
* exitまたはquitを入力

###MySQLデータ型
####数値データ
* TYNYINT：サイズの小さい整数(符号付でもなしでも可)、最大4ケタの幅を指定できる、1バイト
* SMALLINT：サイズの小さい整数(符号付でもなしでも可)、最大5ケタの幅を指定できる、2バイト
* INT：通常サイズの整数(符号付でもなしでも可)、最大11ケタの幅を指定できる、3バイト
* MEDIUMINT：中程度のサイズの整数(符号付でもなしでも可)、最大9ケタの幅を指定できる、4バイト
* BIGINT：サイズの大きい整数(符号付でもなしでも可)、最大11ケタの幅を指定できる、8バイト

* FLOAT(M,D)：浮動小数点数(符号付)、最大11ケタの幅を指定できる、4or8バイト、表示桁数Mと小数点以下桁数Dを指定することもできる
* DOUBLE(M,D)：倍精度浮動小数点数(符号付)、最大53ケタの幅を指定できる、8バイト、表示桁数Mと小数点以下桁数Dを指定することもできる
* DECIMAL(M,D)：アンパック浮動小数点数(符号付)、表示桁数Mと小数点以下桁数Dを必ず指定する、NUMERICも同様

####日付と時刻型
* DATE：YYYY-MM-DD形式の日付、範囲は1000-01-01から9999-12-31、２月３０日など現実には存在しない日付も指定できるため、ユーザーが注意する必要がある
* TIME：HH:MM:SS形式の時刻
* DATETIME：日付YYYY-MM-DDと時刻HH:MM:SS形式の組み合わせ
* TIMESTAMP：1970年1月1日午前0時から2037年のある日時までのタイムスタンプ、規定の長さは14で、YYYYMMDDHHMMSSが保存される
* YEAR(M)：2桁または4桁形式で年が保存される、範囲は70~69(1970~2069)または1901~2155

####文字列型
* CHAR(M)：長さが1~255の固定長文字列、長さの定義は必須ではなく、規定値は1
* VARCHAR(M)：長さが1~255の可変長文字列、長さの定義は必須で
* BLOB：画像やほかのファイルタイプなど、大きなバイナリデータを保存するときに使用、長さを指定しない、大文字小文字が区別される
* TEXT：画像やほかのファイルタイプなど、大きなバイナリデータを保存するときに使用、長さを指定しない、大文字小文字が区別されない
* TINYBLOB：長さの最大が255文字のBLOB、長さを指定しない
* TINYTEXT：長さの最大が255文字のTEXT、長さを指定しない
* MEDIUMBLOB：長さの最大が16777215文字のBLOB、長さを指定しない
* MEDIUMBLOB：長さの最大が16777215文字のBLOB、長さを指定しない
* LONGBLLOB：さらに最大長さの大きいBLOB、、長さを指定しない
* LONGTEXT：さらに最大長さの大きいTEXT、、長さを指定しない
* ENUM：列挙型、選択対象の値を含むリストが生成され、保存時にはインデクスを利用する
* SET：ENUMMと同様リストとして定義されるが、値のインデクスとしてではなく、完全な値として保存される

###データベースの操作
####データべースの一覧を表示
`* SHOW DATABASES;`

####データベースの作成
* CREATE DATABASE "DATABASE名";

####データべースの選択
* USE "DATABASE名";

####データベースの削除
* DROP DATABASE "DATABASE名";


###テーブルの操作
####表の一覧を表示
* SHOW TABLES;

####テーブルの作成
* CREATE TABLE table_name(column_name column_type);
  
####テーブル内のカラムを表示
* DESC "TABLE名";
* DESCRIBE "TABLE名";
* SHOW COLUMNS "TABLE名"( FROM "DATABASE名");
* Field：フィールド名、Type：データ型、Null：Nullを許可するかどうか、Key：主キー(Primary Key)、Default：初期値、Extra：オートインクリメントなど

####テーブル情報を表示
* SHOW TABLE STATUS( FROM "DATABASE名")( LIKE "WILD CARDS");

###RECORD表示
####テーブルの全ての要素を表示
SELECT * FROM "TABLE名";

####tableの全ての要素のうち一行目を表示する
* SELECT * FROM "TABLE名" LIMIT 1;

####tableのth1とth2との最初の1行を表示する
* SELECT "カラム名1","カラム名2" FROM "table名" WHERE "条件式";


###record変更
####テーブルにレコードのデータ挿入
* INSERT INTO "TABLE名" ("カラム名1"(,"カラム名2", ... )) VALUES ("値1"(,"値2", ... ))(,("値1'"(,"値2'", ... )));
* insert into "TABLE名" set "カラム名1" = "値1", "カラム名" = "値2";

####データ更新
* UPDATE テーブル名 SET カラム名=`値`[, カラム名=`値`, ... ] WHERE 条件式;

####データ削除
* DELETE FROM テーブル名 [WHERE 条件式];

####フィールドの入れ替え
* SELECT "カラム名2","カラム名1" FROM "table名";