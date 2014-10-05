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


###�쐬�ς݂̃e�[�u����column��ǉ�����
#####`ALTER TABLE tbl_name ADD [COLUMN] column_definition;`  
��)�@fruit��status��ǉ�
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

###�쐬�ς݂̃e�[�u������column���폜����
#####`ALTER TABLE tbl_name DROP COLUMN col_name;`


###���R�[�h�̃f�[�^�X�V
UPDATE�͊����̃��R�[�h(�Z�b�g)��1�ȏ��column�̓��e���C������Ƃ��Ɏg�p����B���̃e�[�u�����ɋ�����B  
��)
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
WHERE��͕K�������K�v�ł͂Ȃ����A���ꂪ�Ȃ��Ƃ��ׂĂ�column���X�V����Ă��܂��B  
��)
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

####�����t����UPDATE
�S�Ă�column�ł͂Ȃ��A�����column���X�V�������Ƃ��ɂ�WHERE����g���B  
��)�@grape�̒Ԃ肪�Ԉ����grrape�ɂȂ��Ă��āA������C������
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


###REPLACE�R�}���h�̎g�p
���̃��R�[�h�Ǝ�L�[����v����V������q���R�[�h�����ւ���Ƃ��Ɏg�p����  
`REPLACE INTO table_name (column_list ) VALUES (column_values)`  
��)
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

������1�̃��R�[�h�����ύX���Ă��Ȃ��̂Ɂu2 rows affected�v�Ƃ���̂́A�͂��߂̃��R�[�h���폜������ɐV�������R�[�h��}������Ƃ����A2�̑�����s���Ă��邽�߂ł���B  


###DELETE�R�}���h�̎g�p
`DELETE FROM table_name [WHERE some_condition_is_true] [LIMIT rows]`  
DELETE�R�}���h�ł�column���w�肹���A�P�̂ł͂��ׂẴ��R�[�h���폜����B  
��)
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


####�����t����DELETE
WHERE�Ȃǂŏ������w�肷��ΔC�ӂ̃��R�[�h���폜����B  
��)
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

�܂��A�AORDER BY�ŏ����𐮗����Ă���ALIMIT�Ő������č폜���邱�Ƃ��ł���B  
��)�@�A�N�Z�X���ŐV�̃��R�[�h���폜
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


###MySQL�ł悭���p����镶����֐�
�e�[�u�����g�p�����ASELECT�X�e�[�g�����g�Ŋ֐��𗘗p���邱�Ƃ��ł���B
####�����ƘA���̊֐�
������Ɋ܂܂�镶�������J�E���g���邩�񂷂��ɂ�LENGTH(),OCTET_LENGTH(),CHAR_LENGTH(),CHARACTER_LENGTH()�Ȃǂ�����B  
��)
```MySQL
mysql> SELECT LENGTH("This is cool!");
+-------------------------+
| LENGTH("This is cool!") |
+-------------------------+
|                      13 |
+-------------------------+
1 row in set (0.20 sec)
```

2�ȏ�̕������A������ɂ�CONCAT()�֐���p����B  
��)
```MySQL
mysql> SELECT CONCAT("My","S","QL");
+-----------------------+
| CONCAT("My","S","QL") |
+-----------------------+
| MySQL                 |
+-----------------------+
1 row in set (0.05 sec)
```

�e�[�u�����w�肵��2�ȏ��column�������������̂�\���ł���B  
`SELECT CONCAT(column_name1,column_name2) FROM table_name`  
��)
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

�Ԃɋ�؂蕶��������Ƃ���CONCAT_WS()�֐����g���B  
`SELECT CONCAT_WS("words",column_name1,column_name2) FROM table_name`  
��)
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

AS���g�����ƂŌ��ʃt�B�[���h���w��ł��A�����Ȃ肪���Ȍ��ʃe�[�u���̕���Z���ł���B  
#####`SELECT CONCAT_WS("words",column_name1,column_name2) AS new_name FROM table_name`  
��)
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

####�g���~���O�ƃp�b�e�B���O�̊֐�
������̒[����󔒂��폜����֐�
#####`SELECT RTRIM(" string ")`(�E�[�̋󔒂��폜����)  
#####`SELECT LTRIM(" string ")`(���[�̋󔒂��폜����)  
��)
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

�폜�������������w�����č폜����֐�
#####`SELWET TRIM(LEADING "word" FROM "string")`(�擪����word���폜����)  
#####`SELWET TRIM(TRAILING "word" FROM "string")`(��������word���폜����)  
#####`SELWET TRIM("word" FROM "string")`(���[����word���폜����)  
��)
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

������Ɏw��̕�����ǉ�����֐�(������A������̒����A�����̏��Ɏw�肷��)
#####`SELECT RPAD("string",int,"word");`  
#####`SELECT LPAD("string",int,"word");`  
��)
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

####�ꏊ�ƈʒu�̊֐�
���̕�����̒����畔���������������̂ɗL���B  

�w�肵�����������񂪑Ώە�������ŏ��߂ďo������ʒu��Ԃ��֐��A�J�E���g��1����n�܂�A������Ȃ��ꍇ��0��Ԃ��Bstart�͕K�{�ł͂Ȃ����Astart�����O�ɕ��������񂪂����0��Ԃ��B  
#####`SELECT LOCATE("words","string",start);`  
��)
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

####����������̊֐�
�Ώە����񂩂畔��������𒊏o����֐�
#####`SELECT SUBSTRING("string",start,length)`  
��)
```MySQL
mysql> SELECT SUBSTRING("MySQL",2,3);
+------------------------+
| SUBSTRING("MySQL",2,3) |
+------------------------+
| ySQ                    |
+------------------------+
1 row in set (0.04 sec)
```

������̋��̕�����𒊏o����֐�
#####`SELECT LEFT("string",length)`(������̍��[������o��)  
#####`SELECT RIGHT("string",length))`(������̍��[������o��)  
��)
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

####������ύX�̊֐�
������̑啶����������ϊ�����֐�
#####`SELECTLUCASE("string")`(�啶�����������ɕϊ�����)  
#####`SELECT UCASE("string")`(��������啶���ɕϊ�����)  
��)
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

�e�[�u����column���w�肷��Ƃ��͈��p�����g�p���Ȃ����Ƃɒ���  
��)
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

�w�肵����������w��񐔂����J��Ԃ��֐�
#####`SELECT REPEAT("string",times)`  
��)
```MySQL
mysql> SELECT REPEAT("bowwow",4);
+--------------------------+
| REPEAT("bowwow",4)       |
+--------------------------+
| bowwowbowwowbowwowbowwow |
+--------------------------+
1 row in set (0.00 sec)
```

���镶�����(string)�̎w�肵��������(word1)�����ׂĕʂ̕�����(word2)�Œu��������֐�
#####`SELECT REPLACE("string","word1","word2")`  
��)
```MySQL
mysql> SELECT REPLACE("bowwowbowwowbowwowbowwow","wow","WOW");
+-------------------------------------------------+
| REPLACE("bowwowbowwowbowwowbowwow","wow","WOW") |
+-------------------------------------------------+
| bowWOWbowWOWbowWOWbowWOW                        |
+-------------------------------------------------+
1 row in set (0.00 sec)
```


###MySQL�ł̓��t�֐��Ǝ����֐��̎g�p
####���t�̎g�p
���t�̗j���C���f�N�X��Ԃ��֐�
DAYOFWEEK()�֐��̏T�̊J�n���͓��j���ŁA�ʒu��1�A�ŏI���͓y�j���ŁA�ʒu��7�ƂȂ�B  
#####`SELECT DAYOFWEEK("YYYY-MM-DD")`  
WEEKDAY()�֐��̏T�̊J�n���͌��j���ŁA�ʒu��0�A�ŏI���͓��j���ŁA�ʒu��6�ƂȂ�B  
#####`SELECT WEEKDAY("YYYY-MM-DD")`  
��)
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

DAYOFMONTH()��DAYOFYEAR()�����l�ɂ��ꂼ��̓��t��Ԃ��B  
#####`SELECT DAYOFMONTH("YYYY-MM-DD")`  
#####`SELECT DAYOFYEAR("YYYY-MM-DD")`  
��)
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

�w�肵�����t�̗j������Ԃ��֐�
#####`SELECT DAYNAME("YYYY-MM-DD")`  
��)
```MySQL
mysql> SELECT DAYNAME("2012-01-09");
+-----------------------+
| DAYNAME("2012-01-09") |
+-----------------------+
| Monday                |
+-----------------------+
1 row in set (0.03 sec)
```

####���y�єN�̎g�p
�w�肵�����t�̌���Ԃ��֐�  
#####`SELECT MONTH("YYYY-MM-DD")`  
���t�̌��̖��O��Ԃ��֐�
#####`SELECT MONTHNAME("YYYY-MM-DD")`  
��)
```MySQL
mysql> SELECT MONTH("2012-01-09"),MONTHNAME("2012-01-09");
+---------------------+-------------------------+
| MONTH("2012-01-09") | MONTHNAME("2012-01-09") |
+---------------------+-------------------------+
|                   1 | January                 |
+---------------------+-------------------------+
1 row in set (0.00 sec)
```

�e�[�u���ɑ΂���mONTHNAME()�֐����g���Ɛ�������������Ă��A�����������J��Ԃ����Ƃ�����B���̂Ƃ�DISTINCT���g���ƌJ��Ԃ���r���ł���B  
��)
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

�N��Ԃ��֐�
#####`SELECT YEAR("YYYY-MM-DD")`  
��)
```MySQL
mysql> SELECT DISTINCT YEAR(date_accessed) FROM access_log;
+---------------------+
| YEAR(date_accessed) |
+---------------------+
|                2012 |
+---------------------+
1 row in set (0.03 sec)
```

####�T�̎g�p
�T�̈����ɂ͒��ӂ��K�v�ł���B  
1��1������ŏ��̓y�j���܂ł�0�T�ڂƂ��āA12�����ł��傤�ǏT���I���Ȃ�������A�B�̊J�n�̗j�����قȂ����肷��ƏT�̐����ϓ����邩�炾�B  
�Ⴆ�΁A2001�N12��31���͓��j���������B���̂Ƃ�2001�N12��31���܂ł�52�T�ڂŁA2002�N1��1��5���܂ł�0�T�ځA6������1�T�ڂ��J�n����B  
#####`SELECT WEEK(YYYY-MM-DD,start);`  
��)
```MySQL
mysql> SELECT WEEK("2001-12-30");	mysql> SELECT WEEK("2002-1-1");		mysql> SELECT WEEK("2002-1-6");
+--------------------+				+------------------+				+------------------+
| WEEK("2001-12-30") |				| WEEK("2002-1-1") |				| WEEK("2002-1-6") |
+--------------------+				+------------------+				+------------------+
|                 52 |				|                0 |				|                1 |
+--------------------+				+------------------+				+------------------+
1 row in set (0.00 sec)				1 row in set (0.00 sec)				1 row in set (0.00 sec)
```

2�Ԗڂ̈������w�肷�邱�ƂŁA�T�̊J�n�̗j����ύX�ł���B�w�肪�Ȃ����0�Ɠ������j���ƂȂ�B  
��)
```MySQL
mysql> SELECT WEEK("2001-12-31",1);
+----------------------+
| WEEK("2001-12-31",1) |
+----------------------+
|                   53 |
+----------------------+
1 row in set (0.00 sec)
```

####���ԁA���A�b�̎g�p
�����\�L���玞�ԁA���A�b�����o���֐����p�ӂ���Ă���B�܂��A��̂悤��AS����g���Ĉ�̃e�[�u���ɂ܂Ƃ߂邱�Ƃ��ł���B  
#####`SELECT HOUR("YYYY-MM-DD HH:MM:SS);`  
#####`SELECT MINUTE("YYYY-MM-DD HH:MM:SS);`  
#####`SELECT SECOND("YYYY-MM-DD HH:MM:SS);`  
��)
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

`CONCAT_WS()`�𗘗p���Ď擾�������A���A�b���Ȃ����킹�A�C�ӂ̎����\����\���ł���B  
��)
```MySQL
mysql> SELECT CONCAT_WS(":",HOUR("2012-01-09 07:27:49"),MINUTE("2012-01-09 07:27:49")) AS sample_time;
+-------------+
| sample_time |
+-------------+
| 7:27        |
+-------------+
1 row in set (0.17 sec)
```

###MySQL�ł̓��t�Ǝ����̃t�H�[�}�b�g
#####`DATE_FORMAT(date,format);`  
���̊֐��͌��ʂ̕\�����@�������Ɏw�肷��I�v�V�������g�p����date�Adatetime�܂���timestamp�t�B�[���h�𕶎���Ƀt�H�[�}�b�g����B  

DATE_FORMAT()�̕�����t�H�[�}�b�g�I�v�V����
* %M�F���̖��O(January�`December)
* %b�F�����̌���(Jan�`Dec)
* %m�F�����߂��ꂽ��(01�`12)
* %c�F��(1�`12)
* %W�F�j���̖��O(Sunday�`Saturday)
* %a�F�����̗j����(Sun�`Sat)
* %D�F�p��̃T�t�B�b�N�X���̓��t(first,second,third)
* %d�F�����߂��ꂽ���P�ʂ̓�(00�`31)
* %e�F���P�ʂ̓�(0�`31)
* %j�F�����߂��ꂽ�N�P�ʂ̓�(001�`366)
* %Y�F4���̔N
* %y�F2���̔N
* %X�F���j�����ŏ��̓��Ƃ���ꍇ�̏T�Ɏg�p����4���̔N�B%V�Ƒg�ݍ��킹�Ďg�p����B
* %x�F���j�����ŏ��̓��Ƃ���ꍇ�̏T�Ɏg�p����4���̔N�B%v�Ƒg�ݍ��킹�Ďg�p����B
* %w�F�j��(0=Sunday�`6=Saturday)
* %U�F���j�����ŏ��̓��Ƃ���ꍇ�̏T(0�`53)
* %u�F���j�����ŏ��̓��Ƃ���ꍇ�̏T(0�`53)
* %V�F���j�����ŏ��̓��Ƃ���ꍇ�̏T(0�`53)%X�Ƒg�ݍ��킹�Ďg�p����B
* %v�F���j�����ŏ��̓��Ƃ���ꍇ�̏T(0�`53)%x�Ƒg�ݍ��킹�Ďg�p����B
* %H�F�����߂��ꂽ��(00�`23)
* %k�F��(0�`23)
* %h�F�����߂��ꂽ��(01�`12)
* %l�F��(1�`12)
* %i�F�����߂��ꂽ��(00�`59)
* %S�F�����߂��ꂽ�b(00�`59)
* %s�F�����߂��ꂽ�b(00�`59)
* %r�F12���ԕ\���̎���(hh:mm:ss[AP]M)
* %T�F24���ԕ\���̎���(hh:mm:ss)
* %p�FAM�܂���PM

��)
```MySQL
mysql> SELECT DATE_FORMAT("2012-01-09 02:03:00","%h:%i") AS sample_time;
+-------------+
| sample_time |
+-------------+
| 02:03       |
+-------------+
1 row in set (0.11 sec)
```

NOW()�֐����g���Ό��ݎ�����\�����邱�Ƃ��ł���B  
��)
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

###MySQL�ł̓��t�v�Z
���t�v�Z��PHP�X�N���v�g���MySQL�Ōv�Z������������I�ŁADATE_ADD()�֐���DATE_SUB()�֐��́A�J�n���ƊԊu���w�肵�Č��ʂ�Ԃ��B  
#####`DATE_ADD(date,INTERVAL value_type)`  
#####`DATE_SUB(date,INTERVAL value_type)`  

���t�v�Z�̒l�ƃ^�C�v  
* �b�FSECOND
* ���FMINUTE
* ���FHOUR
* ���FDAY
* ���FMONTH
* �N�FYEAR
* �u���F�b�v�FMINUTE_SECOND
* �u���F���v�FHOUR_MINUTE
* �u�����v�FDAY_HOUR
* �u�N-���v�FYEAR_MONTH
* �u���F���F�b�v�FHOUR_SECOND
* �u�����F���v�FDAY_MINUTE
* �u�����F���F�b�v�FDAY_SECOND

��)�@���݂̓��t��21�������Z�������������߂�
```MySQL
mysql> SELECT DATE_ADD(NOW(),INTERVAL 21 DAY);		mysql> SELECT DATE_SUB(NOW(),INTERVAL 21 DAY);
+---------------------------------+					+---------------------------------+
| DATE_ADD(NOW(),INTERVAL 21 DAY) |					| DATE_SUB(NOW(),INTERVAL 21 DAY) |
+---------------------------------+					+---------------------------------+
| 2014-09-25 14:53:26             |					| 2014-08-14 14:54:12             |
+---------------------------------+					+---------------------------------+
1 row in set (0.04 sec)								1 row in set (0.00 sec)
```

�����̊֐���date�l���w�肷��ƁA���E���E�b�Ɋւ��鎮���g���Ƃ��ȊO��date�l���Ԃ���A�g���Ƃ���datetime�l�ɂȂ�B  
��)
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

DATE_ADD()�֐���DATE_SUB()�֐��̂�����+��-���Z�q���g�p���Ă����t�v�Z�����s�ł���B  
��)
```MySQL
mysql> SELECT "2012-12-31" + INTERVAL 1 DAY;
+-------------------------------+
| "2012-12-31" + INTERVAL 1 DAY |
+-------------------------------+
| 2013-01-01                    |
+-------------------------------+
1 row in set (0.02 sec)
```

####����Ȋ֐��ƕϊ��@�\
CURDATE()�֐���CURRENT_DATE()�֐��͓��`�ŁA���ꂼ�ꌻ�݂̓��t��YYYY-MM-DD�̌`�ŕԂ��B  
��)
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

���l��CURTIME()�֐���CURRENT_TIME()�֐��͂Ƃ��Ɍ��ݎ�����HH:MM:SS�`���ŕԂ��B  
��)
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

NOW()�֐��ASYSDATE()�֐��ACURRENT_TIMESTAMP()�֐��͊��S��datetime�`��YYYY-MM-DD HH:MM:SS�Œl��Ԃ��B  
��)
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
���̊֐���UNIX�^�C���X�^���v�`��(�G�|�b�N����̕b���܂���1970�N1��1���ߑO0������̌o�ߕb��)�œ��t��Ԃ��B�w�肵�Ȃ���Ό��ݎ����ƂȂ�B  
��)
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
UNIX�^�C���X�^���v�����S��datetime�`���ɕϊ�����B  
��)
```MySQL
mysql> SELECT FROM_UNIXTIME("126025200");
+----------------------------+
| FROM_UNIXTIME("126025200") |
+----------------------------+
| 1973-12-30 00:00:00.000000 |
+----------------------------+
1 row in set (0.05 sec)
```


###table�̌���
`SELECT table_name1.column_name1,table_name2.column_name2 FROM table_name1 INNER JOIN table_name2 ON table_name1.column_name1 = table_name2.column_name2`  
��)
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