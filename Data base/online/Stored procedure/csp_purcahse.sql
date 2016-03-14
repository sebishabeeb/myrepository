delimiter //
create procedure csp_purchase(fk_product_id int,fk_int_login_id int,amtt int,qua int)
begin
declare a int default 0;
declare b int default 0;
declare amount int;
start transaction;

set amount=amtt*qua;
insert into tbl_purchase(fk_int_productid,fk_int_login_id,amount,quantity,dat_of_purchase)values(fk_product_id,fk_int_login_id,amount,qua,curdate());
set a=last_insert_id();
update tbl_stock set stock=stock-qua where fk_int_product_id=fk_product_id;
set b=last_insert_id();
if (a>0&&b>0) then
    commit;
    else 
    rollback;
    end if;

    end//