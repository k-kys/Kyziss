create database qlxe;
use qlxe;
create table xe(
	maxe int not null auto_increment,
    tenxe nvarchar(255),
    dongia float,
    mota text,
    namsx year,
    constraint pk_maxe primary key (maxe)
);
select * from xe;
insert into xe(tenxe, dongia, mota, namsx) values ('Honda Winner', 55000000, 'Đây là mô tả của xe Winner', '2019');
select * from xe where tenxe like '%honda%';