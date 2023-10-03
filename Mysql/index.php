<?php

/**
 * Automatically creater the indexes for primary key and unique columns
 * index columns that you frequently use to retrieve the data
 * index columns that are used for joins to imrpove join performance
 * avoid columns tthat cotain too many null values.
 * small tables do not require indexes
 * 
 * creater index index_name on tables_name(column1,column2);
 * drop index index_name on tables_name
 * create view view_name as 
 * 
 * drop tigger if exists tr_in_location 
 * create tigger tr_in_location
 * before insert on 'location'
 * for each row
 * set new.datetime=noe()
 */

 /**
  * The following constraints are commonly used in SQL:

*NOT NULL - Ensures that a column cannot have a NULL value
*UNIQUE - Ensures that all values in a column are different
*PRIMARY KEY - A combination of a NOT NULL and UNIQUE. Uniquely identifies each row in a table
*FOREIGN KEY - Prevents actions that would destroy links between tables
*CHECK - Ensures that the values in a column satisfies a specific condition
*DEFAULT - Sets a default value for a column if no value is specified
*CREATE INDEX - Used to create and retrieve data from the database very quickly
  */