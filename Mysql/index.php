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
 */
