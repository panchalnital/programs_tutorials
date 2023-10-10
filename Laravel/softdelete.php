<?php
 /*   In Laravel, soft deletes are a feature that allows you to "delete" a record from your database without actually removing it. Instead, a "deleted_at" timestamp is set on the record, marking it as deleted but still retaining its data for possible future retrieval or reporting. Here's an example of how to use soft deletes in Laravel:
    
   1=>     Database Migration: First, make sure your database table has a "deleted_at" column. You can create or modify a migration file like this:
    Copy
   
    php artisan make:migration add_deleted_at_to_table_name
    In the generated migration file, you can add the "deleted_at" column like this:
    
    Copy
    public function up()
    {
        Schema::table('table_name', function (Blueprint $table) {
            $table->softDeletes();
        });
    }
   
   2=> Eloquent Model: Next, in your Eloquent model, use the SoftDeletes trait by adding it to your model class. For example:
    Copy
    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Database\Eloquent\SoftDeletes;
    
    class YourModel extends Model
    {
        use SoftDeletes;
    
        // Other model properties and methods
    }
    
    3=>Performing Soft Deletes: To perform a soft delete, you can simply call the delete method on a model instance:
    Copy
    $record = YourModel::find($id);
    $record->delete();
    This will set the "deleted_at" timestamp and mark the record as deleted.
    
    4=> Querying Soft Deleted Records: To retrieve soft-deleted records, you can use the withTrashed method:
    Copy
    $records = YourModel::withTrashed()->get();
    This will return all records, including soft-deleted ones.
    
    5=>Restoring Soft Deleted Records: You can also restore soft-deleted records using the restore method:
    Copy
    $record = YourModel::withTrashed()->find($id);
    $record->restore();
    This will remove the "deleted_at" timestamp and restore the record.
    
    6=>Permanently Deleting Records: If you want to permanently remove soft-deleted records, you can use the forceDelete method:
    Copy
    $record = YourModel::withTrashed()->find($id);
    $record->forceDelete();
    This will permanently delete the record from the database.
    
    That's a basic example of how to use Laravel's soft deletes feature. It's useful for scenarios where you want to retain data history while marking records as deleted in your application.

    */