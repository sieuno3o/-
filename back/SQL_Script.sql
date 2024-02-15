create database 1st_project;

show databases;

use 1st_project;

#팀원정보 테이블 생성
create table member_info(id int(2), name varchar(100), mbti varchar(100));

#팀원별 방명록 테이블 생성
create table register(id int not null auto_increment,  visitor_name varchar(100), comment varchar(100), primary key(id));

#마리아db 한글세팅 조회
SELECT schema_name, default_character_set_name FROM information_schema.schemata;

#한글입력 가능하게끔 db 세팅변경
#아래의 링크 참조
#https://bskyvision.com/entry/MariaDB-%ED%95%9C%EA%B8%80-%EB%8D%B0%EC%9D%B4%ED%84%B0-%EC%82%BD%EC%9E%85-%EA%B0%80%EB%8A%A5%ED%95%98%EA%B2%8C-%EB%8D%B0%EC%9D%B4%ED%84%B0%EB%B2%A0%EC%9D%B4%EC%8A%A4-%EC%83%9D%EC%84%B1%ED%95%98%EA%B8%B0
alter database 1st_project default character set utf8;
ALTER TABLE member_info CONVERT TO CHARACTER SET utf8;
ALTER TABLE register CONVERT TO CHARACTER SET utf8;

#팀원별 정보입력
insert into member_info values (1, '김시은', 'ISTP');
insert into member_info values (2, '류종현', 'INTP');
insert into member_info values (3, '김예은', 'ISTJ');
insert into member_info values (4, '지효상', 'ENTP');

#방명록 샘플 입력
insert into register values (1, '아무개', '잘보고갑니다 화이팅');
insert into register values (2, '홍길동', '굿잡!');
insert into register values (3, '1', '2');

select * from register;