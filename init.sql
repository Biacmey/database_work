create table people(
id int primary key auto_increment,
name varchar(20),
description varchar(255),
picture varchar(1000)
);

insert into people(name, description, picture) values("hj", "Hsu, HJ", "https://img.moegirl.org/common/thumb/a/aa/%E6%BF%91%E6%88%B7%E5%9B%BE%E5%9B%BE%E5%A6%AELive2D.jpg/280px-%E6%BF%91%E6%88%B7%E5%9B%BE%E5%9B%BE%E5%A6%AELive2D.jpg");
insert into people(name, description, picture) values("help", "Hung, Help", "https://img.moegirl.org/common/thumb/a/aa/%E6%BF%91%E6%88%B7%E5%9B%BE%E5%9B%BE%E5%A6%AELive2D.jpg/280px-%E6%BF%91%E6%88%B7%E5%9B%BE%E5%9B%BE%E5%A6%AELive2D.jpg");
insert into people(name, description, picture) values("desire", "Chen, Desire", "https://img.moegirl.org/common/thumb/a/aa/%E6%BF%91%E6%88%B7%E5%9B%BE%E5%9B%BE%E5%A6%AELive2D.jpg/280px-%E6%BF%91%E6%88%B7%E5%9B%BE%E5%9B%BE%E5%A6%AELive2D.jpg");
insert into people(name, description, picture) values("broken", "Yang, Broken One", "https://img.moegirl.org/common/thumb/a/aa/%E6%BF%91%E6%88%B7%E5%9B%BE%E5%9B%BE%E5%A6%AELive2D.jpg/280px-%E6%BF%91%E6%88%B7%E5%9B%BE%E5%9B%BE%E5%A6%AELive2D.jpg");

select * from people;