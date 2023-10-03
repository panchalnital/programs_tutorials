/* update the table if male =>female and female=> male*/
update gender_table set name=case
    when name='male' then 'female' else 'male' end;

/*find 2nd and 3rd highest salary*/

select emp_salary from employee order by emp_salary desc limit 1,1;

select max(emp_salary)as e_salary from employee not in (select max(emp_salary) from employee);

select max(emp_salary)as e_salary from employee <> (select max(emp_salary) from employee);

select max(emp_salary)as e_salary from employee < (select max(emp_salary) from employee)

/*find 3rd highest salary*/

select emp_salary from employee order by emp_salary desc 2,1;

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

select emp_name,employee_list.emp_email_id from employee_list
inner join (select emp_email_id from employee_list 
            group by emp_email_id having count(emp_name)>1)temp on
            employee_list.emp_email_id=temp.emp_email_id;

/*Find the number of employees in each department - mysql*/

select count(*) as count,dept.name
from employee
inner join dept on employee.dept_no=dept.dept_no
group by dept.name

