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
