#MySQL_Query

##���O�C��
* XAMPP�̋N��
* mysql���J��
* mysql -u root -p�����
* �p�X���[�h�͋󔒂̂܂�
##���O�A�E�g
* exit�܂���quit�����

##MySQL�f�[�^�^
###���l�f�[�^
* INT�F�ʏ�T�C�Y�̐���(�����t�ł��Ȃ��ł���)�@�@
�ő�11�P�^�̕����w��ł���

##DATABASE
###�f�[�^�ׁ[�X�̈ꗗ��\��
* SHOW DATABASES;

###database�̍쐬
* CREATE DATABASE "DATABASE��";

###�f�[�^�ׁ[�X�̑I��
* USE "DATABASE��";

###�f�[�^�x�[�X�̍폜
* DROP DATABASE "DATABASE��";


##TABLE
###�\�̈ꗗ��\��
* SHOW TABLES;

###�e�[�u���̍쐬
* CREATE TABLE "TABLE��"(
  "�ϐ���" "�^��(���l)"
  ,,,
  );
  
###�e�[�u�����̃J������\��
* DESC "TABLE��";
* DESCRIBE "TABLE��";
* SHOW COLUMNS "TABLE��"( FROM "DATABASE��");
* Field�F�t�B�[���h���AType�F�f�[�^�^�ANull�FNull�������邩�ǂ����AKey�F��L�[(Primary Key)�ADefault�F�����l�AExtra�F�I�[�g�C���N�������g�Ȃ�

###�e�[�u������\��
* SHOW TABLE STATUS( FROM "DATABASE��")( LIKE "WILD CARDS");

##RECORD�\��
###�e�[�u���̑S�Ă̗v�f��\��
SELECT * FROM "TABLE��";

###table�̑S�Ă̗v�f�̂�����s�ڂ�\������
* SELECT * FROM "TABLE��" LIMIT 1;

###table��th1��th2�Ƃ̍ŏ���1�s��\������
* SELECT "�J������1","�J������2" FROM "table��" WHERE "������";


##record�ύX
###�e�[�u���Ƀ��R�[�h�̃f�[�^�}��
* INSERT INTO "TABLE��" ("�J������1"(,"�J������2", ... )) VALUES ("�l1"(,"�l2", ... ))(,("�l1'"(,"�l2'", ... )));
* insert into "TABLE��" set "�J������1" = "�l1", "�J������" = "�l2";

###�f�[�^�X�V
* UPDATE �e�[�u���� SET �J������=`�l`[, �J������=`�l`, ... ] WHERE ������;

###�f�[�^�폜
* DELETE FROM �e�[�u���� [WHERE ������];

##�t�B�[���h�̓���ւ�
* SELECT "�J������2","�J������1" FROM "table��";