select * from tasks;
select * from users;	
-- delete from users;
select * from posts;
select monthname(created_at) month, year(created_at) year, count(*) published from posts group by year, month;	
select * from comments;