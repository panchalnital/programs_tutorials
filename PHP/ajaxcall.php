<?php
/*
The jQuery ajax() method performs an AJAX request. AJAX stands for Asynchronous JavaScript and XML. It's a group of technologies that allows users to send and receive data without reloading the web page

the jQuery ajax() function has two parameters: 
    url: A string that contains the URL to reach with the Ajax call
    settings: An object literal that contains the configuration for the Ajax request

    The jQuery ajax() function is useful when users want to post or get data from a PHP script without refreshing the page. For example, users can return a string to the Ajax call to update a part of the web page. 
Here are some steps for submitting AJAX forms with jQuery: 
    Build the backend with PHP
    Build the frontend with HTML and CSS
    Handle form submit logic in JavaScript and jQuery
    Display form validation errors
    Display server connection errors
*/
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajax Example</title>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
</head>
<body>
    <button id="getDataBtn">Get Data</button>
    <div id="result"></div>
<script>
    $(document).ready(function(){

        $('#getDataBtn').click(function(){
            var data=$(this).serialize();
            $.ajax({
                url:'tets.php',
                type:'post',
                data:data,
                dataType:'json',
                success:function(response){
                    console.log('success');
                },
                error:function(xhr,status,error){
                    console.log(xhr,status);
                }
            });
        });

    });

</script>


</script>
</body>
</html>

?>

