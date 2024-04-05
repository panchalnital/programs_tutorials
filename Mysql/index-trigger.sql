/*
https://www.youtube.com/watch?v=oe_k_smHIZo

The CREATE INDEX command is used to create indexes in tables (allows duplicate values).

Indexes are used to retrieve data from the database very fast. The users cannot see the indexes, they are just used to speed up searches/queries.

The following SQL creates an index named "idx_lastname" on the "LastName" column in the "Persons" table:

Unique Index:
    CREATE UNIQUE INDEX index_name
    on table_name (column_name);

Single-Column Index
    CREATE INDEX index_name
    ON table_name (column_name);

Composite Index
    CREATE INDEX index_name
    on table_name (column1, column2);

Implicit Index


DROP INDEX index_name;
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

SHOW INDEX FROM CUSTOMERS;

/* clusterd index :Clustered indexes define the way records are physically sorted in a database table. A clustered index is very similar to the table of contents of a book. In the table of contents, you can see how the book has been physically sorted

            : Cluster index is a type of index which sort the data rows in the table on their key values, in 
            database, 
            :there is only one clustered index per table
*/


CREATE CLUSTERED INDEX <index_name>
ON <table_name>(<column_name> ASC/DESC)

CREATE CLUSTERED INDEX IX_tblBook_Price
ON Books(price ASC)

/* nocluster index : A non-clustered index is an index that doesn’t physically sort the database records. Rather, a non-clustered index is stored at a separate location from the actual database table. It is the non-clustered index which is actually similar to an index of a book. A book index is stored at a separate location, while the actual content of the book is separately located.
            
        :stores the data at one location and indicaes at another location the index cotains pointers to the location of the data.
        : A single table can have many non-clustered indexes as index in the non-clustered index is stored in different places            

        type of scan:
        1) Table scan(when index is not there): does linear search where seraches for each and every record
        2) indexes unique scan :unique index or index on primary key
        3) index Range scan : where condtion has equlity or range prdicate

        defualt index: Btree(binary tree index) user wide range menas unqiue data avaiable 
*/

CREATE NONCLUSTERED INDEX IX_tblBook_Name
ON Books(name ASC)


/*about full-text search in SQL Server:
SELECT * FROM CONTAINSTABLE(articles, title, 'machine learning')

SELECT ProductID, ProductName, Description
FROM Products
WHERE CONTAINS((ProductName, Description), 'phone');

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

When should indexes be avoided?
    Although indexes are intended to enhance a database's performance, there are times when they should be avoided.

    The following guidelines indicate when the use of an index should be reconsidered.

    Indexes should not be used on small tables.

    They should not be used on tables that have frequent, large batch updates or insert operations.

    Indexes should not be used on columns that contain a high number of NULL values.

    Columns that are frequently manipulated should not be indexed.

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
/*
    - index are generally reated on columns that are frequently used in where caluse
    - index for primary key and unique constaints are automatically created and dropped 
        durinng table create and deletion.
    - index improve perfomance in select but hamper insert update delete so not good indea
        to create index on every column
    - index conatains redundeant data already existing in table henace consumers space
    - each table can be have only one clustered index usally created on a primary key
    - no limit on non clusterd index

*/




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


====================================================================================

This test case use trigger 

Automated data maintenance :For example, a trigger can update the inventory table when an order is placed to reflect the decrease in stock

Enforce business rules : For example, a trigger can ensure that a product's price is never set to less than its cost plus 10%.

Automate tasks : For example, a trigger can automatically log data, update a data aggregation table, or populate a user notification table.

Maintain an audit file : This makes it easy to track changes and add this information to user reports.

Calculate values within columns: For example, triggers can maintain a TotalSales column on a customer record which would need to be updated every time a sale is made.

Data validation :You can write a trigger to ensure data is a certain type and correct values can be set when needed.

Data synchronization :You can use a trigger to keep related tables updated. For example, in an ecommerce table, every time a sales record gets created, a trigger can update the vendor's balance



1) 

create or replace function update_inventory()
return trigger as 
$$
begin
    update Inventory
    set stock=stock-new.quantity
    where product_id=new.product_id
    return new;
end;



create trigger order_place_trigger
After insert on orders
for each row
excute function update_inventory();

4)
create or replace function log_employee_chanages();
return trigger as 
$$
begin
        if tg_op='insert' then
            insert into employee_audit_log(id,'message')
            values(new.id,'employee inserted');
        elseif tg_op='update' then
            insert into employee_audit_log(id,'message')
            values(new.id,'employee update');
        elseif tg_op='delete' then
            iinsert into employee_audit_log(id,'message')
            values(new.id,'employee delete');
        end if;
    return new;
end;
$$



create trigger employee_change_tigger
after insert or update or delete on employee
for each row
execute function log_employee_chanages();


*/