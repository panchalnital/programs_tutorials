<?php

?>
<html>
<head>
    <title>JavaScript Validation</title>
     <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
</head>
<body>
   
    <form name="from" action="abc.php" method="post" onsubmit="return validation()">
    fanme:<input type="text" name="name" id="name"/></br>
    lastName: <input type="textadd" name="textadd" id="textadd"/></br>
        <input type="submit" name="submit"/>
    </form>

</body>
<script>
    function validation(){
		alert('test');
        var name=$('#name').val();
        var lname=$('#textadd').val();
        if(name==null || name==''){
            alert("name can't not black");
            return false;
        }
        if(lname==null || lname==''){
            alert("last name can't not black");
            return false;
        }

    }

</script>

</html>