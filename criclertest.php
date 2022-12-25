<script>

function getTime(s) {
let alpabet = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';//
let timeCount = 0;
let currenPosition = 0; //1

for(let i=0; i < s.length; i++) {

    let a = alpabet.indexOf(s[i])

    let position = Math.abs(currenPosition - a)
    let secondPosition = Math.abs(26-position)   

    if(position<secondPosition) {
        timeCount+=position
        currenPosition = a;
    } else {
        timeCount+=secondPosition;
        currenPosition = a;
    }
    console.log('pos', position);   
    console.log('sec', secondPosition);   
}

return timeCount;    
}

console.log(getTime('BZA'))
</script>

