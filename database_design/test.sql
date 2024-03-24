select * from account;

select * from movie;
delete from movie;
                     
select * from customer;
delete from customer;

select * from discount;
delete from discount;

select * from room;
delete from room;

select * from seat;
delete from seat;

select * from slot;
delete from slot;

select * from ticket;
delete from ticket;

select * from bill;
delete from bill;

select * from monthlyrevenue;
delete from monthlyrevenue;

select * from yearlyrevenue;
delete from yearlyrevenue;

insert into ticket values ('TK0011','MV0001','SL0001','R001',100,'ST0001','vip','BI0001',null);
insert into ticket values ('TK0011','MV0001','SL0001','R001',100,'ST0012','vip','BI0011',null);

update ticket
set tk_available = 0
where tk_id =  'TK0011';

insert into ticket values ('TK0012','MV0001','SL0001','R001',100,'ST0012','vip','BI0012',null);

update ticket
set tk_available = 0
where tk_id =  'TK0001';

select * from customer;

update ticket
set tk_available = 0
where tk_id =  'TK0001';

select * from customer;

