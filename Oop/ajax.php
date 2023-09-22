<script>

$("button").click(function(){
  $.ajax({
    url: "script.php",
    type: "POST",
    data: {id : menuId},
    dataType: "html"
    success: function(result){
        $("#div1").html(result);
    }
    });
});
</script>