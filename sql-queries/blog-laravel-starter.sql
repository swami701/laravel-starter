select * from tasks;
select * from users;	
-- delete from users;
select * from posts;
select month(created_at) month, year(created_at) year, count(*) count from posts group by month, year;	
select * from comments;