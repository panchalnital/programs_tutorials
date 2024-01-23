/*The CREATE INDEX command is used to create indexes in tables (allows duplicate values).

Indexes are used to retrieve data from the database very fast. The users cannot see the indexes, they are just used to speed up searches/queries.

The following SQL creates an index named "idx_lastname" on the "LastName" column in the "Persons" table:
*/
CREATE INDEX idx_pname
ON Persons (LastName, FirstName);

/* eg.*/
create index tran_data
on transction(transction_id);

mysql
ALTER TABLE table_name
DROP INDEX index_name;

Sql 
DROP INDEX table_name.index_name;


/* clusterd index :Clustered indexes define the way records are physically sorted in a database table. A clustered index is very similar to the table of contents of a book. In the table of contents, you can see how the book has been physically sorted*/

CREATE CLUSTERED INDEX <index_name>
ON <table_name>(<column_name> ASC/DESC)

CREATE CLUSTERED INDEX IX_tblBook_Price
ON Books(price ASC)

/* nocluster index : A non-clustered index is an index that doesn’t physically sort the database records. Rather, a non-clustered index is stored at a separate location from the actual database table. It is the non-clustered index which is actually similar to an index of a book. A book index is stored at a separate location, while the actual content of the book is separately located.*/

CREATE NONCLUSTERED INDEX IX_tblBook_Name
ON Books(name ASC)



/*about full-text search in SQL Server:
SELECT * FROM CONTAINSTABLE(articles, title, 'machine learning')

*/

/*MySQL indexing has several advantages and disadvantages: 

Pros 
    ->Performance Indexes can improve performance when searching, sorting, grouping, and maintaining unique columns.
    ->Speed Indexes can speed up WHERE conditional queries and sorting with ORDER BY clauses.
    ->Uniqueness Indexes can enforce value uniqueness.

Cons 
    ->Disk space Indexes can increase disk space.
    ->Data modification Indexes can slow down INSERT, UPDATE, and DELETE queries.
    ->Clustered index Updating records in the clustered index can be slower.
Indexes are used to retrieve data from a database faster. However, updating a table with indexes takes longer than updating a table without indexes

type of index
    unique index
*/
create unique index salary on emp(emp_id);

/*  composite index */
create index depsalary on emp(DEPT,SALARY);

/* Function based index */
create index fidx on emp(UPPER(name));

/* Bitmap index*/

/* databse in which table are create index */
select * from user_indexes where table_name='emp';
/*column */
select * from user_id_column where table_name='emp';

/* In MySQL, a "trigger" is a database object that is associated with a table and automatically fires (or activates) in response to specific events, such as INSERT, UPDATE, DELETE, or other data manipulation actions. Triggers are often used to enforce data integrity rules, auditing, or performing specific actions when certain events occur in the database.

Here's a basic example of how to create a MySQL trigger:

```sql*/
CREATE TRIGGER trigger_name
    [BEFORE | AFTER] [INSERT | UPDATE | DELETE] ON table_name
    FOR EACH ROW
    BEGIN
        -- Trigger code here
    END;
/*```

Let's break down this example:

- `trigger_name` is the name you give to your trigger.
- `BEFORE` or `AFTER` specifies when the trigger should be fired, either before or after the specified event.
- `INSERT`, `UPDATE`, or `DELETE` specifies the type of event that triggers the action.
- `table_name` is the name of the table on which the trigger is defined.
- `FOR EACH ROW` indicates that the trigger will operate on each row affected by the event.

Inside the `BEGIN` and `END` block, you write the SQL statements that define what the trigger should do when it is activated. For example, you might update another table, log information, or enforce data constraints.

Here's a simple example of a trigger that logs information before an INSERT operation:

```sql*/
DELIMITER //
CREATE TRIGGER log_insert_before
    BEFORE INSERT ON your_table
    FOR EACH ROW
BEGIN
    INSERT INTO log_table (event_type, event_description)
    VALUES ('INSERT', 'A new record is being inserted.');
END;
/*//
DELIMITER ;
```

This trigger will insert a log entry into `log_table` before each INSERT operation on `your_table`.

Please replace `trigger_name`, `table_name`, and customize the trigger's action as per your specific requirements. Additionally, make sure to be cautious when using triggers as they can impact database performance and data consistency if not used carefully.*/



DELIMITER
create trigger updateID
    before insert on employee
    for each row
begin 
    insert into employee(fname,lname)
    values('rahul','patel')
end
delimiter;

/*
MySQL triggers have several advantages and disadvantages. 

Here are some advantages of MySQL triggers: 
    •	Automation
    Triggers can automatically execute predefined actions in response to data changes or events. This can reduce the need for manual intervention.
    •	Database management
    Triggers can automate actions like updating or inserting data in one table based on changes made to another table. This can save time and reduce the risk of human error.
    •	Data integrity
    Triggers can provide another way to check the integrity of data. They can also force security approvals on tables in the database.
    •	Error handling
    Triggers can handle errors from the database layer.

Here are some disadvantages of MySQL triggers: 
    •	Invisibility: Triggers are invoked and executed invisibly from client applications. This can make it difficult to figure out what is happening in the database layer.
    •	Troubleshooting: Triggers can be difficult to troubleshoot because they execute automatically in the database.
    •	Overhead: Triggers may increase the overhead of the MySQL server.
    •	Validations: Triggers can only provide extended validations, not all validations.

*/