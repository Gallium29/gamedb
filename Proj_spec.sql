use gamedb;

#use this query to see which games each user bought
#drop view gamepurchasedby;
create view gamepurchasedby as 
select purchased.user_id, game.game_name
from game inner join purchased on game.game_id = purchased.game_id
order by purchased.user_id;

#use this query to see the sales of each game and in descending order( 
#the first row will be the best selling game).
#drop view gamecount;
create view gamecount as 
select game_name, count(user_id) as gc
from gamepurchasedby
group by game_name
order by gc desc;

#return all games that are above average users' rating
#drop view GameAboveAvg;
create view GameAboveAvg as
select X.game_id, avg(X.rating)
from Purchased as X
group by X.game_id
having avg(X.rating) > all(select avg(Y.rating)
							from Purchased as Y);
select game_name
from Game natural join GameAboveAvg;