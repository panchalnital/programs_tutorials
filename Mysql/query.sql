// https://qamayankgupta.medium.com/scenario-based-sql-interview-questions-with-answer-f87d9f69fdbf
/* update the table if male =>female and female=> male*/
update gender_table set name=case
    when name='male' then 'female' else 'male' end;

update employee set gender=case
when gender='f' then 'm' else 'f' end;

/*find 2nd and 3rd highest salary*/

select emp_salary from employee order by emp_salary desc limit 1,1;

select max(emp_salary)as e_salary from employee not in (select max(emp_salary) from employee);

select max(emp_salary)as e_salary from employee <> (select max(emp_salary) from employee);

select max(emp_salary)as e_salary from employee < (select max(emp_salary) from employee)

select * from employee 
where salary=(select max(salary) from employee where salary < 
            (select max(salary) from employee where salary < 
            (select max(salary) from employee)));

/*find 3rd highest salary*/

select emp_salary from employee order by emp_salary desc limit 2,1;

/*Arrange sequences*/
select
from
where
group by
having
order by desc/asc
limit

/* find the employee name same and salary grather then status active salary */
select emp_name,emp_salary,emp_status from employee
where emp_status=1 group by emp_name having count(emp_name)>1 order by emp_id;

/* remove duplicate recorde in mysql */

delete e1 from employee e1, employee e2 where e1.emp_id < e2.emp_id and e1.emp_email_id=e2.emp_email_id;

/* fetch duplicate recored the mysql */
select name,email from employee GROUP by email having count(email)>1;
/*or*/
select name, count(email) as cnt from employee group by email having cnt>1;
/*or*/
select email, count(1) as cnt from employee grup by 1 having cnt>1;


select emp_name,employee_list.emp_email_id from employee_list
inner join (select emp_email_id from employee_list 
            group by emp_email_id having count(emp_name)>1)temp on
            employee_list.emp_email_id=temp.emp_email_id;

/*Find the number of employees in each department - mysql*/

select count(*) as count,dept.name
from employee
inner join dept on employee.dept_no=dept.dept_no
group by dept.name

/* substring replace abc*/

update users set name=replace(name,'gupta','abc');
update custome set name='afasf' where id='1';

select name,salary from employee where salary in((select max(salary) from employee) ,
(select min(salary) from employee))


/*
To add a column in a table, use the following syntax:
*/
ALTER TABLE Customers
ADD Email varchar(255);
Alter table employee add column did int;
alter table employee add column is_status ENUM('0','1') default '0';

/*
To delete a column in a table, use the following syntax (notice that some database systems don't allow deleting a column):
*/

ALTER TABLE Customers
DROP COLUMN Email;

/*
MODIFY COLUMN column_name datatype;
ALTER TABLE - MODIFY COLUMN
*/

ALTER TABLE Customers
MODIFY COLUMN Email varchar(255);

/**
    change the colum name 
    rename the column name
*/
ALTER TABLE employee
change is_status gender varchar(50);

/*=================================================*/
-- Suggested testing environment: 
-- https://www.db-fiddle.com/ with MySQL version set to 8

-- Example case create statement:
create table department(
id int primary key,
name varchar(50)
);

insert into department(id,name)
values(1,'it'),
      (2,'developer'),
      (3,'hr'),
      (4,'support staff');


CREATE TABLE reservations (
    id INTEGER NOT NULL PRIMARY KEY,
    apartmentName VARCHAR(50) NOT NULL,
    dateFrom DATE NOT NULL,
    dateTo DATE NOT NULL
);

INSERT INTO reservations (id, apartmentName, dateFrom, dateTo) VALUES 
                         (0, 'Tree Avenue', '2020-09-22', '2020-09-24'), 
                         (1, 'Tree Avenue', '2020-09-18', '2020-09-19'),
                         (2, 'Street Avenue', '2020-10-25', '2020-10-28'),
                         (3, 'Street Avenue', '2020-10-31', '2020-11-01');
						 
-- Your code goes here

-- Expected output (in any order):
-- apartmentName     daysReserved
-----------------------------------------------------
-- Tree Avenue        3
-- Street Avenue      4 

SELECT
    apartmentName,
    DATEDIFF(MAX(dateTo), MIN(dateFrom))-3 AS daysReserved
FROM
    reservations
GROUP BY
    apartmentName;
	
/* out put 
Street Avenue	4
Tree Avenue	3 */

select apartmentName,
	datediff(max(dateTo),min(daterom))-3 as cnt
from reservations
group by apartmentName;

/* find the record is not null and null value in query*/
/*not null*/
select name 
from employee
where phone<>''; 

/*null*/
select name 
from employee
where phone=''; 