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

/*(i). What Is The SQL Query Used To Fetch Alternate Records From A Table?*/

select * from employee where id%2=0; /* event records */
select * from employee where id%2=1; /* odd records*/

/* 8(ii). What Is The SQL Query Used To Fetch The Common Records From Two Tables? */
select employee.name,department.name
from employee
INNER JOIN department ON employee.did=department.id;

/* 9(i). What Is The SQL Query Used To Find Duplicate Rows In Table? */
select name,count(*) as total
from employee
group by email
having count(email)>1;

/* 9(ii). What Is The SQL Query Used To Remove The Duplicate Rows In Table?*/
Delete e1 
from employee e1,employee e2
where e1.email < e2.email and e1.email=e2.email;

/* 10. What Is The SQL Query Used To Find The nth Record From A Table*/
select * 
from employee 
limit 0,1;

select * 
from employee 
limit 1 offset 10;

/*What Is The SQL Query Used To Find The First 5 Records From A Table?
    by default behivor asc order 
*/
select * 
from employee
order by id limit 5;

/*11(ii). What Is The SQL Query Used To Find The Last 5 Records From A Table?*/

SELECT * from employee where id >(SELECT count(*) from employee)-5;
/*2. What Is The SQL Query Used To Find The First Or Last Record From A Table?*/
/*To Find First Record:- */
select * from employee limit 1;
select * from employee where id=(select min(id) from employee)

/*To Find Last Record: */
select * from employee order by id desc limit 1;
select * from employee id=(select max(id) from employee)

/* 12 What Is The SQL Query Used To Find The Distinct Records Without Using Distinct Keyword? */
select distinct(salary) from employee;

/* 13. What Is The SQL Query Used To Find The Distinct Records Without Using Distinct Keyword?
*/
    /*1. USING GROUP BY*/
    select * from employee group by salary;
    select * from employee group by id;

    /*2. USING SET UNION OPERATOR*/
    select * from employee
    union 
    select * from employee

/*14. What Is The SQL Query Used To Find The Maximum Salary Of Each Department?*/

select department.name,max(employee.salary)
from employee
right join department on employee.did=department.id
group by department.id;

/*15. How Will You Change The Datatype Of A Column? 15. What Is The SQL Query Used To Find The
Department-Wise Count Of Employees Sorted By Department’s Count In Ascending Order?*/

SELECT department.name,COUNT(employee.did) as dept 
from employee 
right join department on employee.did=department.id 
GROUP by employee.did 
order by dept;

/*16. How Will You Change The Datatype Of A Column?*/
alter table employee
modify column name varchar(50);


ALTER TABLE `emp1` ADD PRIMARY KEY(`id`);