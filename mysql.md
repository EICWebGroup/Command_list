#MySQL_Query

##���O�C��
* mysql���J��
* mysql -u root -p�����
* �p�X���[�h�͋󔒂̂܂�
##���O�A�E�g
* exit�܂���quit�����


##DATABASE
###�f�[�^�ׁ[�X�̈ꗗ��\��
* show databases;
###database�̍쐬
* create database "database��";
###�f�[�^�ׁ[�X�̑I��
* use "database��";
###�f�[�^�x�[�X�̍폜
* drop database "database��";


##TABLE
###�\�̈ꗗ��\��
* show tables;
###�e�[�u���̍쐬
* create table "table��"(
* ... 
* );
###�e�[�u�����̃J������\��
* desc "table��";
* describe "table��";
* show columns "table��"( from "database��");
* Field�F�t�B�[���h���AType�F�f�[�^�^�ANull�FNull�������邩�ǂ����AKey�F��L�[(Primary Key)�ADefault�F�����l�AExtra�F�I�[�g�C���N�������g�Ȃ�
###�e�[�u������\��
* show table status( from "database��")( like "wild cardS");

##record�\��
###�e�[�u���̑S�Ă̗v�f��\��
select * from "table��";
###table�̑S�Ă̗v�f�̂�����s�ڂ�\������
* select * from "table��" limit 1;
###table��th1��th2�Ƃ̍ŏ���1�s��\������
* select "�J������1","�J������2" from "table��" where "������";


##record�ύX
###�e�[�u���Ƀ��R�[�h�̃f�[�^�}��
* INSERT INTO "table��" ("�J������1"(,"�J������2", ... )) VALUES ("�l1"(,"�l2", ... ))(,("�l1'"(,"�l2'", ... )));
* insert into "table��" set "�J������1" = "�l1", "�J������" = "�l2";
###�f�[�^�X�V
* UPDATE �e�[�u���� SET �J������=`�l`[, �J������=`�l`, ... ] WHERE ������;
###�f�[�^�폜
* DELETE FROM �e�[�u���� [WHERE ������];

##�t�B�[���h�̓���ւ�
* select "�J������2","�J������1" from "table��";