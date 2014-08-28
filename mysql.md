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
* __TIME�FHH__:MM:SS�`���̎���
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
`SHOW DATABASES;`

��)  
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

####�f�[�^�x�[�X�̍쐬
* CREATE DATABASE "DATABASE��";

####�f�[�^�ׁ[�X�̑I��
`USE "DATABASE��";`

��)  
```MySQL
mysql> use first_mysql;
Database changed
```  
���������`Database changed`�ƕ\�������B

####�f�[�^�x�[�X�̍폜
* DROP DATABASE "DATABASE��";


###�e�[�u���̑���
####�\�̈ꗗ��\��
`SHOW TABLES;`

��)  
```MySQL
mysql> show tables;
+-----------------------+
| Tables_in_first_mysql |
+-----------------------+
| grocery_inventory     |
+-----------------------+
1 row in set (0.00 sec)
```

####�e�[�u���̍쐬
* �f�[�^�x�[�X�ɖ��ڑ���  
  `CREATE TABLE database_name.table_name(column_name column_type);`  
* �f�[�^�x�[�X�ɐڑ���  
  `CREATE TABLE table_name(column_name column_type);`  

database_name�Atable_name�Acolumn_name�͔C�ӁAcolumn_type�̓f�[�^�^����I������B  
column_name column_type�́u,�v�ŋ�؂邱�Ƃŕ����g�𓯎��Ɏw��ł���B  

��)  
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
���������Ƃ���`Query OK, 0 rows affected (0.49 sec)`�Ȃǂƕ\�������B  
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
* DESC "TABLE��";
* DESCRIBE "TABLE��";
* SHOW COLUMNS "TABLE��"( FROM "DATABASE��");
* Field�F�t�B�[���h���AType�F�f�[�^�^�ANull�FNull�������邩�ǂ����AKey�F��L�[(Primary Key)�ADefault�F�����l�AExtra�F�I�[�g�C���N�������g�Ȃ�

####�e�[�u������\��
* SHOW TABLE STATUS( FROM "DATABASE��")( LIKE "WILD CARDS");

####�f�[�^�x�[�X�̍폜
`DROP TABLE table_name;`


###RECORD�\��
####�e�[�u���̑S�Ă̗v�f��\��
SELECT * FROM "TABLE��";

####table�̑S�Ă̗v�f�̂�����s�ڂ�\������
* SELECT * FROM "TABLE��" LIMIT 1;

####table��th1��th2�Ƃ̍ŏ���1�s��\������
* SELECT "�J������1","�J������2" FROM "table��" WHERE "������";


###record�ύX
####�e�[�u���Ƀ��R�[�h�̃f�[�^�}��
`INSERT INTO table_name (column_list) VALUES (column values);`  
column_name_value�ɕ�������g���Ƃ��́u'�v�܂��́u"�v�ł��̕�������͂ނ��Ƃɒ��ӂ����A��������Ɂu'�v��u"�v������Ƃ��͈͂�ł���̂Ɠ������̓G�X�P�[�v����K�v������B  
���̍\�������l�̈Ӗ��B  
`INSERT INTO table_name SET column_list = column values;`

�����g�𓯎���insert����Ƃ��ɂ́A���̂悤�ɋL�q����B
```
INSERT INTO table_name (column_name1,column_name2...) VALUES (column_name1_value1,column_name1_value2, ... ),(column_name2_value1,column_name2_value2, ... )...)
```  

####�f�[�^�X�V
* UPDATE �e�[�u���� SET �J������=`�l`[, �J������=`�l`, ... ] WHERE ������;

####�f�[�^�폜
* DELETE FROM �e�[�u���� [WHERE ������];

####�t�B�[���h�̓���ւ�
* SELECT "�J������2","�J������1" FROM "table��";