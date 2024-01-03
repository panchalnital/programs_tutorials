<?php
/*
 PHP provides many other file functions that can be used to manipulate files, such as:

file_get_contents(): Reads the entire contents of a file into a string
file_put_contents(): Writes a string to a file
file_exists(): Checks if a file exists
unlink(): Deletes a file
rename(): Renames a file
copy(): Copies a file
 */
//You can use the file_get_contents() function to read the contents of a file into a string. Here's an example:

$fileContent = file_get_contents('example.txt');
echo $fileContent;

//Writing to a File in PHP:
//To write content to a file, you can use the file_put_contents() function.

$data = "Hello, this is some content to write to the file.";
file_put_contents('output.txt', $data);

//------------------------------------------------------
/*Understanding the fopen() Function
The fopen() function is used to open a file for reading or writing. This function takes two arguments: the name of the file and the mode in which you want to open the file.

There are several modes available for opening a file, including:

r: Read-only mode. The file pointer is placed at the beginning of the file and you can only read from it.
w: Write mode. The file pointer is placed at the beginning of the file and any data that was previously in the file is truncated. You can only write to the file.
a: Append mode. The file pointer is placed at the end of the file and you can only write to it. If the file does not exist, it will be created.
x: Exclusive creation mode. This mode is similar to write mode, but it only opens the file if it does not already exist. If the file already exists, the function will return false.*/

$file = fopen("example.txt", "r");
if ($file) {
    $contents = fread($file, filesize("example.txt"));
    fclose($file);
    echo $contents;
}

$file = fopen("example.txt", "w");
if ($file) {
    fwrite($file, "This is some data.");
    fclose($file);
}

$file = fopen("example.txt", "a");
if ($file) {
    fwrite($file, "This is some additional data.");
    fclose($file);
}


