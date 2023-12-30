/* 1)What Is The SQL Query Used To Create A Table With Same Structure Of Another Table? */

CREATE TABLE emp
select * from employee where 1=2;

/*2)What Is The SQL Query Used To Create A Table With Same Structure With Data Of Another Table */

create table emp1
select * from employee;

/*3) What Is The SQL Query Used To Find The 2nd / 3rd / nth Highest Salary */
    /*1. USING SUB-QUERY:*/

    select max(salary) from employee
    where salary >(select max(salary) from employee where salary > 
                (select max(salary) from employee ));

    /*2 USING LIMIT:*/
    select name,salary 
    from employee order by salary desc 1,1;

    /*3 USING LIMIT-OFFSET:*/
    select name,salary 
    from employee order by salary desc limit 1 offset 2;

/*4 write is the sql query same records 2 highest salary in employee table */
select name,salary
from employee e1
where (1)=(select count(distinct(e2.salary)) from employee e2 where e2.salary>e1.salary);

/* or */
select name,salary
from employee 
where salary=(select max(salary) from employee where salary > 
            (select max(salary) from employee));

/*5) 5. What Is The SQL Query Used To Find All Employees Who Also Hold The Managerial Position?
        5.1 Find All Employees Who Also Hold The Managerial Position
*/
        select id,name
        from empdept
        where id in (select manager_id from empdept);
    /* 5.2 Find All Employees Who Also Hold The not a Managerial Position*/
        select id,name
        from empdept
        where id not in(select manager_id from empdept);

/*6 What Is The SQL Query Used To Find The Names Of The Employees That Begin With ‘A’?*/
select name from empdept where name like 's%' or name like 'r%';

/*7 What Is The SQL Query Used To Display The Current Date?*/ 

select now(); /* 2023-12-30 18:58:15 */

select current_date(); /* 2023-12-30*/

select date(now()); /* 2023-12-30 */

select date(current_timestamp()); /* 2023-12-30*/