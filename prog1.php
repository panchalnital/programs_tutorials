<script>
    function findduplicate($arr){

        var aa1=[];
        var cnt=0;
        var cnt1=0;
        var arrayLength = myStringArray.length;
        for (var i = 0; i < arrayLength; i++) {
           // console.log(myStringArray[i]);
            //Do something
            if(myStringArray[i]==1){
               // var aa1=myStringArray[i];
                cnt++;
            }
            if(myStringArray[i]==2){
               // var aa1=myStringArray[i];
                cnt1++;
            }
        }
       // console.log(aa1);
        console.log(cnt1);
    }
    var myStringArray = [1,2,1,2,1];
    findduplicate(findduplicate);
</script>