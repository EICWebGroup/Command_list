##MySQL_Query
###MySQL_Query�̋N���E�I��
####���O�C��
1. XAMPP�̋N��
2. mysql���J��
3. mysql -u root -p�����
4. �p�X���[�h�͋󔒂̂܂�

####���O�A�E�g
* exit�܂���quit�����

###MySQL�f�[�^�^
####���l�f�[�^
* TYNYINT�F�T�C�Y�̏���������(�����t�ł��Ȃ��ł���)�A�ő�4�P�^�̕����w��ł���A1�o�C�g
* SMALLINT�F�T�C�Y�̏���������(�����t�ł��Ȃ��ł���)�A�ő�5�P�^�̕����w��ł���A2�o�C�g
* INT�F�ʏ�T�C�Y�̐���(�����t�ł��Ȃ��ł���)�A�ő�11�P�^�̕����w��ł���A3�o�C�g
* MEDIUMINT�F�����x�̃T�C�Y�̐���(�����t�ł��Ȃ��ł���)�A�ő�9�P�^�̕����w��ł���A4�o�C�g
* BIGINT�F�T�C�Y�̑傫������(�����t�ł��Ȃ��ł���)�A�ő�11�P�^�̕����w��ł���A8�o�C�g

* FLOAT(M,D)�F���������_��(�����t)�A�ő�11�P�^�̕����w��ł���A4or8�o�C�g�A�\������M�Ə����_�ȉ�����D���w�肷�邱�Ƃ��ł���
* DOUBLE(M,D)�F�{���x���������_��(�����t)�A�ő�53�P�^�̕����w��ł���A8�o�C�g�A�\������M�Ə����_�ȉ�����D���w�肷�邱�Ƃ��ł���
* DECIMAL(M,D)�F�A���p�b�N���������_��(�����t)�A�\������M�Ə����_�ȉ�����D��K���w�肷��ANUMERIC�����l

####���t�Ǝ����^
* DATE�FYYYY-MM-DD�`���̓��t�A�͈͂�1000-01-01����9999-12-31�A�Q���R�O���Ȃǌ����ɂ͑��݂��Ȃ����t���w��ł��邽�߁A���[�U�[�����ӂ���K�v������
* TIME�FHH:MM:SS�`���̎���
* DATETIME�F���tYYYY-MM-DD�Ǝ���HH:MM:SS�`���̑g�ݍ��킹
* TIMESTAMP�F1970�N1��1���ߑO0������2037�N�̂�������܂ł̃^�C���X�^���v�A�K��̒�����14�ŁAYYYYMMDDHHMMSS���ۑ������
* YEAR(M)�F2���܂���4���`���ŔN���ۑ������A�͈͂�70~69(1970~2069)�܂���1901~2155

####������^
* CHAR(M)�F������1~255�̌Œ蒷������A�����̒�`�͕K�{�ł͂Ȃ��A�K��l��1
* VARCHAR(M)�F������1~255�̉ϒ�������A�����̒�`�͕K�{��
* BLOB�F�摜��ق��̃t�@�C���^�C�v�ȂǁA�傫�ȃo�C�i���f�[�^��ۑ�����Ƃ��Ɏg�p�A�������w�肵�Ȃ��A�啶������������ʂ����
* TEXT�F�摜��ق��̃t�@�C���^�C�v�ȂǁA�傫�ȃo�C�i���f�[�^��ۑ�����Ƃ��Ɏg�p�A�������w�肵�Ȃ��A�啶������������ʂ���Ȃ�
* TINYBLOB�F�����̍ő傪255������BLOB�A�������w�肵�Ȃ�
* TINYTEXT�F�����̍ő傪255������TEXT�A�������w�肵�Ȃ�
* MEDIUMBLOB�F�����̍ő傪16777215������BLOB�A�������w�肵�Ȃ�
* MEDIUMBLOB�F�����̍ő傪16777215������BLOB�A�������w�肵�Ȃ�
* LONGBLLOB�F����ɍő咷���̑傫��BLOB�A�A�������w�肵�Ȃ�
* LONGTEXT�F����ɍő咷���̑傫��TEXT�A�A�������w�肵�Ȃ�
* ENUM�F�񋓌^�A�I��Ώۂ̒l���܂ރ��X�g����������A�ۑ����ɂ̓C���f�N�X�𗘗p����
* SET�FENUMM�Ɠ��l���X�g�Ƃ��Ē�`����邪�A�l�̃C���f�N�X�Ƃ��Ăł͂Ȃ��A���S�Ȓl�Ƃ��ĕۑ������

###�f�[�^�x�[�X�̑���
####�f�[�^�ׁ[�X�̈ꗗ��\��
`* SHOW DATABASES;`

####�f�[�^�x�[�X�̍쐬
* CREATE DATABASE "DATABASE��";

####�f�[�^�ׁ[�X�̑I��
* USE "DATABASE��";

####�f�[�^�x�[�X�̍폜
* DROP DATABASE "DATABASE��";


###�e�[�u���̑���
####�\�̈ꗗ��\��
* SHOW TABLES;

####�e�[�u���̍쐬
* CREATE TABLE table_name(column_name column_type);
  
####�e�[�u�����̃J������\��
* DESC "TABLE��";
* DESCRIBE "TABLE��";
* SHOW COLUMNS "TABLE��"( FROM "DATABASE��");
* Field�F�t�B�[���h���AType�F�f�[�^�^�ANull�FNull�������邩�ǂ����AKey�F��L�[(Primary Key)�ADefault�F�����l�AExtra�F�I�[�g�C���N�������g�Ȃ�

####�e�[�u������\��
* SHOW TABLE STATUS( FROM "DATABASE��")( LIKE "WILD CARDS");

###RECORD�\��
####�e�[�u���̑S�Ă̗v�f��\��
SELECT * FROM "TABLE��";

####table�̑S�Ă̗v�f�̂�����s�ڂ�\������
* SELECT * FROM "TABLE��" LIMIT 1;

####table��th1��th2�Ƃ̍ŏ���1�s��\������
* SELECT "�J������1","�J������2" FROM "table��" WHERE "������";


###record�ύX
####�e�[�u���Ƀ��R�[�h�̃f�[�^�}��
* INSERT INTO "TABLE��" ("�J������1"(,"�J������2", ... )) VALUES ("�l1"(,"�l2", ... ))(,("�l1'"(,"�l2'", ... )));
* insert into "TABLE��" set "�J������1" = "�l1", "�J������" = "�l2";

####�f�[�^�X�V
* UPDATE �e�[�u���� SET �J������=`�l`[, �J������=`�l`, ... ] WHERE ������;

####�f�[�^�폜
* DELETE FROM �e�[�u���� [WHERE ������];

####�t�B�[���h�̓���ւ�
* SELECT "�J������2","�J������1" FROM "table��";