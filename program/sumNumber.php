<?php
//To find sum of digits of a number just add all the digits
$num=abs(12345);
$sum=0;
while($num>1){
    $rem=$num%10;
    $sum=$sum+$rem;
    $num=$num/10;
}

echo "sum =".$sum;//output :15

/*
Palindrome Number and reverse are same
A palindrome number is a number which remains same when its digits are reversed.

For example, number 24142 is a palindrome number. On reversing it we?ll get the same number.
*/

//A number can be written in reverse order. 
echo strrev(12345);
//or
$num=abs(12345);
$revnum=0;
while($num>1){
    $rem=$num%10;
    $revnum=($revnum*10)+$rem;
    $num=$num*10;
}

echo "reverst number".$revnum;

//Armstrong Number
/*
An Armstrong number is the one whose value is equal to the sum of the cubes of its digits.

0, 1, 153, 371, 407, 471, etc are Armstrong numbers.

For example,

407 = (4*4*4) + (0*0*0) + (7*7*7)  
        = 64 + 0 + 343  
407 = 407
*/

$num=abs(153);
$arm=0;
while($num>1){
    $rem=$num%10;
    $arm=$arm+$rem*$rem*$rem;
    $num=$num/10;
}
echo "armstrong number ".$arm;//153

//Fibonacci Series
/* Fibonacci series is the one in which you will get your next term by adding previous two numbers.

For example,

0 1 1 2 3 5 8 13 21 34  
*/
$n1=0;
$n2=1;
$cnt=0;
echo $n1. " " .$n2;
while($cnt<10){
    $n3=$n1+$n2;
    echo $n3. " ";
    $n1=$n2;
    $n2=$n3;
    $cnt++;
}

// convert mobile format 
$number='98658956323';
$formatted_number = substr($number, 0, 3) . '-' . substr($number, 3, 3) . '-' . substr($number, 6);

echo preg_replace('/(\d{3})(\d{3})(\d{4})/','$1-$2-$3',$number);

$mail="shiv@gmail.com";
$patten='/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/';
if(preg_match($patten,$mail)){
    echo "true";
}else{
    echo "false";
}


/**
 * Write a function which will mask the credit card numbers with '#' with following conditions:
 *  a) Do not mask the first digit and the last four digits
 *  b) Do not mask non-digit chars
 *  c) Do not mask if the input is less than 6 char length
 *  d) Return '' when input is empty
 */

function maskCreditCardnumber($number){
	$out='';
    $strlenchar=strlen($number);
	if($strlenchar>=6 && !empty($number)){
	$lastchar=$strlenchar-4;
	for($i=0;$i<$strlenchar;$i++){
	  if($i==0){
		$out.=is_numeric($number[$i]);
		}
		if($i>=1 && $i<$lastchar){
			if(is_numeric($number[$i])){
			  $out.='#';
			}else{
			  $out.=$number[$i];
			}
		}
		if($i>=$lastchar){
		  $out.=$number[$i];
		}			
	}
	
	}
	return $out;
}

$number='1234123412341234';
echo $result=maskCreditCardnumber($number);

//or
function maskCreditCard($creditCardNumber) {
    if (empty($creditCardNumber)) {
        return '';
    }
    if (strlen($creditCardNumber) < 6) {
        return $creditCardNumber;
    }
    $firstDigit = substr($creditCardNumber, 0, 1);
    $lastFourDigits = substr($creditCardNumber, -4);
    $middleDigits = substr($creditCardNumber, 1, -4);
    $middleDigits = preg_replace('/\D/', '', $middleDigits);
    $maskedDigits = str_repeat('#', strlen($middleDigits));
    return $firstDigit . $maskedDigits . $lastFourDigits;
}

// Examples
echo maskCreditCard("1234 1234 1234 1234");  // Output: 1### #### #### 1234
echo "\n".maskCreditCard("1234 ABCD 1234");        // Output: 1### ABCD 1234
echo "\n".maskCreditCard("12AB3");                 // Output: 12AB3
echo "\n".maskCreditCard("xxxx xxxx");             // Output: xxxx xxxx
echo "\n".maskCreditCard("1234123412341234");      // Output: 1###########1234
echo "\n".maskCreditCard("");  