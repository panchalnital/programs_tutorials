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