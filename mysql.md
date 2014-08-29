##MySQL_Query


###MySQL_Query�̋N���E�I��
####���O�C��
1. XAMPP�̋N��
3. �Ǘ��Ҍ����ŃR�}���h�v�����v�g���J��
3. mysql -u root -p�����
4. �p�X���[�h�͋󔒂̂܂�

####���O�A�E�g
* exit�܂���quit�����


###MySQL�f�[�^�^
####���l�f�[�^
* __TYNYINT__�F�T�C�Y�̏���������(�����t�ł��Ȃ��ł���)�A�ő�4�P�^�̕����w��ł���A1�o�C�g
* __SMALLINT__�F�T�C�Y�̏���������(�����t�ł��Ȃ��ł���)�A�ő�5�P�^�̕����w��ł���A2�o�C�g
* __INT__�F�ʏ�T�C�Y�̐���(�����t�ł��Ȃ��ł���)�A�ő�11�P�^�̕����w��ł���A3�o�C�g
* __MEDIUMINT__�F�����x�̃T�C�Y�̐���(�����t�ł��Ȃ��ł���)�A�ő�9�P�^�̕����w��ł���A4�o�C�g
* __BIGINT__�F�T�C�Y�̑傫������(�����t�ł��Ȃ��ł���)�A�ő�11�P�^�̕����w��ł���A8�o�C�g
* __FLOAT(M,D)__�F���������_��(�����t)�A�ő�11�P�^�̕����w��ł���A4or8�o�C�g�A�\������M�Ə����_�ȉ�����D���w�肷�邱�Ƃ��ł���
* __DOUBLE(M,D)__�F�{���x���������_��(�����t)�A�ő�53�P�^�̕����w��ł���A8�o�C�g�A�\������M�Ə����_�ȉ�����D���w�肷�邱�Ƃ��ł���
* __DECIMAL(M,D)__�F�A���p�b�N���������_��(�����t)�A�\������M�Ə����_�ȉ�����D��K���w�肷��ANUMERIC�����l

####���t�Ǝ����^
* __DATE__�FYYYY-MM-DD�`���̓��t�A�͈͂�1000-01-01����9999-12-31�A�Q���R�O���Ȃǌ����ɂ͑��݂��Ȃ����t���w��ł��邽�߁A���[�U�[�����ӂ���K�v������
* __TIME__�FHH:MM:SS�`���̎���
* __DATETIME__�F���tYYYY-MM-DD�Ǝ���HH:MM:SS�`���̑g�ݍ��킹
* __TIMESTAMP__�F1970�N1��1���ߑO0������2037�N�̂�������܂ł̃^�C���X�^���v�A�K��̒�����14�ŁAYYYYMMDDHHMMSS���ۑ������
* __YEAR(M)__�F2���܂���4���`���ŔN���ۑ������A�͈͂�70~69(1970~2069)�܂���1901~2155

####������^
* __CHAR(M)__�F������1~255�̌Œ蒷������A�����̒�`�͕K�{�ł͂Ȃ��A�K��l��1
* __VARCHAR(M)__�F������1~255�̉ϒ�������A�����̒�`�͕K�{��
* __BLOB__�F�摜��ق��̃t�@�C���^�C�v�ȂǁA�傫�ȃo�C�i���f�[�^��ۑ�����Ƃ��Ɏg�p�A�������w�肵�Ȃ��A�啶������������ʂ����
* __TEXT__�F�摜��ق��̃t�@�C���^�C�v�ȂǁA�傫�ȃo�C�i���f�[�^��ۑ�����Ƃ��Ɏg�p�A�������w�肵�Ȃ��A�啶������������ʂ���Ȃ�
* __TINYBLOB__�F�����̍ő傪255������BLOB�A�������w�肵�Ȃ�
* __TINYTEXT__�F�����̍ő傪255������TEXT�A�������w�肵�Ȃ�
* __MEDIUMBLOB__�F�����̍ő傪16777215������BLOB�A�������w�肵�Ȃ�
* __MEDIUMBLOB__�F�����̍ő傪16777215������BLOB�A�������w�肵�Ȃ�
* __LONGBLLOB__�F����ɍő咷���̑傫��BLOB�A�A�������w�肵�Ȃ�
* __LONGTEXT__�F����ɍő咷���̑傫��TEXT�A�A�������w�肵�Ȃ�
* __ENUM__�F�񋓌^�A�I��Ώۂ̒l���܂ރ��X�g����������A�ۑ����ɂ̓C���f�N�X�𗘗p����
* __SET__�FENUMM�Ɠ��l���X�g�Ƃ��Ē�`����邪�A�l�̃C���f�N�X�Ƃ��Ăł͂Ȃ��A���S�Ȓl�Ƃ��ĕۑ������


###�f�[�^�x�[�X�̑���
####�f�[�^�ׁ[�X�̈ꗗ��\��
#####`SHOW DATABASES;`

��)  
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

####�f�[�^�x�[�X�̍쐬
#####`CREATE DATABASE database_name;`

####�f�[�^�ׁ[�X�̑I��
#####`USE database_name;`

��)  
```MySQL
mysql> USE first_mysql;
Database changed
```  
���������`Database changed`�ƕ\�������B

####�f�[�^�x�[�X�̍폜
#####`DROP DATABASE "DATABASE��";`


###�e�[�u���̑���
####�\�̈ꗗ��\��
#####`SHOW TABLES;`

��)  
```MySQL
mysql> SHOW TABLES;
+-----------------------+
| Tables_in_first_mysql |
+-----------------------+
| grocery_inventory     |
+-----------------------+
1 row in set (0.00 sec)
```

####�e�[�u���̍쐬
#####`CREATE TABLE database_name.table_name(column_name column_type);`  (�f�[�^�x�[�X�ɖ��ڑ���)  
#####`CREATE TABLE table_name(column_name column_type);`(�f�[�^�x�[�X�ɐڑ���)  
database_name�Atable_name�Acolumn_name�͔C�ӁAcolumn_type�̓f�[�^�^����I������B  
column_name column_type�́u,�v�ŋ�؂邱�Ƃŕ����g�𓯎��Ɏw��ł���B  

��)  
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

���������Ƃ���`Query OK, 0 rows affected (0.49 sec)`�Ȃǂƕ\�������B��̗�ł�DESC table_name�Ȃǂ��g���Ή��̂悤�ɂȂ�͂��ł���B
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
Extra��auto_increment���w�肷��ƃ��R�[�h�}�����Ɏ��Ɏg�p�\�Ȕԍ���id_field�ɒǉ������B  
  
####�e�[�u�����̃J������\��
#####`DESC table_name`
#####`DESCRIBE table_name`
#####`SHOW COLUMNS table_name( FROM database_name)`  
�ȂǂƂ���΁Atable��column���Q�Ƃł���B

��)
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

* __Field__�F�t�B�[���h��
* __Type__�F�f�[�^�^
* __Null__�FNull�������邩�ǂ���
* __Key__�F��L�[(Primary Key)
* __Default__�F�����l
* __Extra__�F�I�[�g�C���N�������g�Ȃ�

####�e�[�u���̍폜
#####`DROP TABLE table_name;`


###�e�[�u���̃��R�[�h��\��
#####`SELECT expressions_and_columns FROM table_name;`  
����ɗl�X�ȏ����������邱�ƂŕK�v�\���ȃ��R�[�h�����邱�Ƃ��ł���B�Ⴆ�Ύ��̎O�̍\���͏�̍\���̌��ɕt��������B 
#####`ORDER BY some_coolumn [ASC | DESC]`  
#####`LIMIT offset, rows`
#####`WHERE some_condition_is_true` 

�܂��A�e�[�u���̂��ׂĂ̍s�������Ƃ��ɂ́u*�v��p����B  
#####`SELECT * FROM table_name;`  
��)
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

�����column�݂̂��������Ƃ��́u*�v�̑����column_name���u,�v�ŋ�؂��Ďw�肷��B  
��)
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

####���בւ�
`ORDER BY some_coolumn [ASC | DESC]`���g���ΔC�ӂ̏�����row�����ւ��邱�Ƃ��ł���B  
����ł͏���(ASC)�Ń\�[�g����邪�ADESC��������΁A�~�����w��ł���B  
��)�@item_name�̉p�����ŏ���(ASC)�ɕ��בւ���
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
��)item_name�̉p�����ō~��(DESC)�ɕ��בւ���
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
���בւ��̊�Ƃ��ĕ�����field���g�����Ƃ��ł���B���̂Ƃ��̓\�[�g�̗D�揇�ʂ̍���������u,�v�ŋ�؂���Ďw�肷��΂悢�B

####���ʂ̐���
`LIMIT offset, rows`��p���邱�Ƃ�SELECT�N�G���̌��ʂ�����萔��record�݂̂�Ԃ����Ƃ��ł��A���̂Ƃ��J�n�ʒu(offset)��rows(�s�̐�)���w�肷��B  
�p�����[�^��1�����w�肵���Ƃ��͐擪���J�n�ʒu�ƂȂ�A�w�肵���p�����[�^��row�������B  
���ʂ�������Ȃ����Ƃ��͂���̌��ʃZ�b�g���\������邾���ŁAerror�ɂ͂Ȃ�Ȃ��B  
��)�@id�Aitem_name�Aqurr_qty��qurr_qty�̏���������2�܂ł�\������
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


###query�ł�WHERE�̎g�p
`WHERE some_condition_is_true` ��SELECT�\���Ȃǂœ���̏������w�肷��Ƃ��Ɏg���B�_�����Z�q(AND,OR)���r���Z�q(=,!,<,> etc)�ABETWEEN�ALIKE�ǂ��p������B  
��)�@curr_qty = 500�𖞂���row��\��
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

####BETWEEN���Z�q
`WHERE column_name BETWEEN min AND max`��column_name�̍ŏ��l(min)�ƍő�l(max)�̊Ԃ̌��ʂ���������B��������t�ɗL���B  
��)�@item_price��1.50����3.00�̃Z�b�g��\������
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

####LIKE���g�p�����������r
`WHERE column_name LIKE "wild_card")`�ŕ�������r���邱�Ƃ��ł���B�p�^�[���ƍ��̃��C���h�J�[�h�Ƃ��Ď���2���p������B  
* %�F�����̕����Ɉ�v
* _�F1���������Ɉ�v�@�@

��{�A��r�̂Ƃ��ɂ͑啶���Ə������͋�ʂ���Ȃ��BBINARY�L�[���[�h���g�p���ċ����I�ɑ啶������������ʂ��Ĕ�r���邱�Ƃ��ł���B  
��)�@item_name������A�Ŏn�܂�record��\��
```MySQL
mysql> SELECT * FROM grocery_inventory WHERE item_name LIKE "A%";
+----+-----------+-------------------------+------------+----------+
| id | item_name | item_desc               | item_price | curr_qty |
+----+-----------+-------------------------+------------+----------+
|  1 | Apples    | Beautiful, ripe apples. |       0.25 |     1000 |
+----+-----------+-------------------------+------------+----------+
1 row in set (0.03 sec)
```


###�����e�[�u������̑I��
SELECT�X�e�[�g�����g�ŕ����̃e�[�u������I���Q�Ƃł���B����fruit��color�Ƃ���2�̃e�[�u��������Aid����Ɍ������ĕ\�������Ƃ��l����B  
��)
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

�P���Ɂu,�v��2��table_name����؂���`SELECT * FROM fruit,color`�Ƃ���ƁA���߂�̂Ƃ͈قȂ錋�ʂ��\�������B  
��)
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

��������ID_FIELD�̈�v����fruitname��colorname�݂̂����o�����߂ɂ́AWHERE�\�����g����fruit��color��id����v����Ƃ����������w�肷��B�����ŕK�v�ȗ�����table�ɋ��ʂ���field�𐳂����w�肷��ɂ́A  
`table_name.field_name`  
�ƋL�q����΂悢�B  
��)
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

�������Aid���܂߂ĕ\������ہA�P��id�������邾���ł�error��f���o���B����͓������O��column��������table�Ɋ܂܂�A�B�������c�邽�߂ł���B  
��)
```MySQL
mysql> SELECT id,fruitname,colorname FROM fruit,color WHERE fruit.id=colorid;
ERROR 1052 (23000): Column 'id' in field list is ambiguous
```

�����ŁA`table_name.field_name` ��������x�l���Afruit.id�܂���color.id��p����΂悢�B  
��)
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

####JOIN�̎g�p
�e�[�u�����������ꂽ�����Q�Ƃ��Č��ʂ�\������B�l�X�Ȏ�ނ�JOIN�����邪�A�K���INNER JOIN�Ŗ����I�ɋL�q����Ȃ��B  
����������Ė�������Ƃ���WHERE�̂�����ON���g���A���̂悤�ȍ\���ɂȂ�B  
```
SELECT column_name1,column_name2 FROM table_name1 INNER JOIN table_name2 ON table_name1.field_name = table_name2.field_name;`
```
��)
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

���ɂ���{�I�ȋ�Ƃ���LEFT JOIN��RIGHT JOIN���g����B�����master_name��email��2�̃e�[�u�����g����������B  
��)
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

LEFT JOIN�̍\����INNER�Ɠ��l�A���̂悤�ɂȂ�B���̂Ƃ��ŏ��Ɏw�肵���e�[�u���̗v�f���ɍ��킹�Č�̃e�[�u���̗v�f�𒲐�����B����Ȃ��ꍇ�͋�̒l���\�������B  
```
SELECT column_name1,column_name2 FROM table_name1 LEFT JOIN table_name2 ON table_name1.field_name = table_name2.field_name;
```
��)
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

RIGHT JOIN�̍\����LEFT�Ɠ��l�A���̂悤�ɂȂ�B���̂Ƃ���Ɏw�肵���e�[�u���̗v�f���ɍ��킹�đO�̃e�[�u���̗v�f�𒲐�����B����Ȃ��ꍇ�͋�̒l���\�������B  
```
SELECT column_name1,column_name2 FROM table_name1 LEFT JOIN table_name2 ON table_name1.field_name = table_name2.field_name;
```
��)
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

####�T�u�N�G��
�ʂ�SQL�X�e�[�g�����g�Ɋ܂܂��SELECT�X�e�[�g�����g�̂��ƁB����ɂ�蕡�G��JOIN���K�v�Ȃ��Ȃ�A�v���O���~���O�ł̓��[�v���ŕ����̃N�G�����܂߂邱�Ƃ��s�v�ɂȂ�B
#####`SELECT expressions_and_columns FROM table_name WHERE somecolumn = (SUBQUERY);`  
����͂܂��AUPDATE��DELETE�X�e�[�g�����g�ɂ��g����B  
#####`UPDATE table_name SET somecolumn = "something" WHERE somecoolumn = (SUBQUERY);`  
#####`DELETE FROM table_name WHERE somecolumn = (SUBQUERY);`  
�T�u�N�G���͕K��()�Ŋ���B  
�Ⴆ�΁AIN��͏������܂Ƃ߂邱�Ƃ��ł��AOR�ŏ�����������B  
��)�@email�e�[�u���ɓo�^����Ă��郆�[�U�[��master_name�e�[�u������SELECT����
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


###record�ύX
####�e�[�u���Ƀ��R�[�h�̃f�[�^�}��
#####`INSERT INTO table_name (column_list) VALUES (column values);`
#####`INSERT INTO table_name SET column_list = column values;`
���2�̍\���͓��l�̈Ӗ������B  
column_name_value�ɕ�������g���Ƃ��́u'�v�܂��́u"�v�ł��̕�������͂ނ��Ƃɒ��ӂ��A��������Ɂu'�v��u"�v������Ƃ��͈͂�ł���̂Ɠ��������G�X�P�[�v����K�v������B

�����g�𓯎���insert����Ƃ��ɂ́A���̂悤�ɋL�q����B
```MySQL
INSERT INTO table_name (column_name1,column_name2...) VALUES (column_name1_value1,column_name1_value2, ... ),(column_name2_value1,column_name2_value2, ... )...)
```  
��)
```MySQL
mysql> INSERT INTO grocery_inventory (id,item_name,item_desc,item_price,curr_qty) VALUES ("1","Apples","Beautiful, ripe apples.","0.25",1000);
Query OK, 1 row affected (1.39 sec)
```

(column_list)�͕K�������K�v�ł͂Ȃ��Acolumn values�̏�����column list�̐��Ə��ԂɈ�v���Ă���Ώȗ����Ă��悢�B  
��)
```MySQL
mysql> INSERT INTO grocery_inventory VALUES ("2","Bunches of Grapes","Sheedlessgrapes","2.99",500);
Query OK, 1 row affected (0.08 sec)
```

�܂��Aid�쐬���ɁAAUTO_INCREMENT��ݒ肵�Ă����΁Acolumn_value��id���ȗ����邱�Ƃ��ł���B�������A���̂Ƃ���column_name�����ׂĖ������Ȃ��Ă͂Ȃ炸�A���̗�ł̓G���[�ƂȂ�B  
��)
```MySQL
mysql> INSERT INTO grocery_inventory VALUES ("Bottled Water (6-pack)","500ml spring water.","2.29",250);
ERROR 1136 (21S01): Column count doesn't match value count at row 1
```

�����ŁAID_FIELD��AUTO_INCREMENT����������ɂ́A2�̕��@������A1�ڂ�ID_FIELD���������ׂĂ�column_name�𖾎�����B  
��)
```MySQL
mysql> INSERT INTO grocery_inventory (item_name,item_desc,item_price,curr_qty) VALUES ("Bottled Water (6-pack)","500ml spring water.","2.29",250);
Query OK, 1 row affected (0.07 sec)
```

2�ڂ́A�S�Ă�column_name�𖾎����邪�AID_FIELD�ɑ΂��Ă�NULL�G���g�����w�肷��B�������邱�ƂŎ����I��NULL��ID�����͂����B
```MySQL
mysql> INSERT INTO grocery_inventory VALUES ("NULL","Bottled Water (12-pack)","500ml spring water.","4.49",500);
Query OK, 1 row affected, 1 warning (0.08 sec)
```

�ȏ�̈�A�̍�Ƃ��s���΁A���̂悤�ȃe�[�u����������B  
��)
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


###�f�[�^�X�V
* UPDATE �e�[�u���� SET �J������=`�l`[, �J������=`�l`, ... ] WHERE ������;


####�f�[�^�폜
* DELETE FROM �e�[�u���� [WHERE ������];


###database��PHP�̘A�g
```PHP
<?php
//MySQL�Ƃ̐ڑ��ɕK�v
$username = "root";
$password = "secret";
$host = "localhost";
$dbname = "sample";

 //MySQL�Ƃ̐ڑ�
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

 //fetch()��1�s���o���AfetchAll()�ł��ׂĂ����o�����Ƃ��ł���
 $data=$stmt->fetchAll();

 var_dump($data);
?>
```