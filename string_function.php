
=======================String========================
String Method:-length, toLowerCase, toUpperCase,includes, startsWith, endsWith, search, match, indexOf, lastIndexOf, replace, trim, charAt, charCodeAt, fromCharCode, concat, split, repeat, slice, substr, substring, toString, valueOf

substr():-
its similar to slice.
but it start only character not space.agar start me space hai to waha se nahi start hoga uske bad se hoga.
it contain -vae and +ve index.
<script>
var str="Hello World";
document.write(str.substr(5,9));
</script>
OutPut:- World
-----------------------------
Includes:-
//includes
//find and return true and false
var str="I am a good Boy";
var a=str.includes("good");
document.write(a);

-----------------------------

//startWith
//first word ki search karta hai
var str="I am a good Boy";
var a=str.startsWith("I");
document.write(a);

----------------------------
//endWith
//End word ki search karta hai
var str="I am a good Boy";
var a=str.startsWith("Boy");
document.write(a);

--------------------------

//search
//return index value
return position. not found return -1.
isme start position nahi dete hai.

var str="I am a good Boy";
var a=str.search("Boy");
document.write(a);
OutPut: 11

--------------------------

//match
//return  value and make array
var str="I am a Boy good Boy";
var a=str.match(/Boy/g);
document.write(a);
Output:- Boy,Boy

---------------------------

//indexOf
//return first value  index
var str="I am a good good Boy";
var a=str.indexOf("good");
document.write(a);
Output:- 7

--------------------------

//Replace
only first change.
var str="Ram is a good Boy";
var a=str.replace("Ram","Suman");
document.write(a);

------------------------

//trim
//remove space
var str=" Ram is a good Boy";
var a=str.trim();
document.write(a)

-------------------------

//charAt
//return character
var str="PHP is a Language";
var a=str.charAt(1);
document.write(a);
OutPut: H

-----------------------

//charCodeAt
//return character asci value
var str="PHP is a Language";
var a=str.charCodeAt(4); //4=i
document.write(a);
OutPut:- 105

----------------------

//fromCharCode
//return character from asci value
//String ka S capital letter
//110 is asci value
var a=String.fromCharCode(110);
document.write(a);
OutPut : n

----------------------

//concat
//add string
var a="Php Is a Language ";
var b="JavaScript also";
var c=a.concat(b);
document.write(c);

-----------------------

//split
//tring break into array.
var a="suman is a good boy";
var b=a.split(" ");//here spce
document.write(b);
OutPut:- 
suman,is,a,good,boy

----------------------

//slice
//string ke part ko cu0t karta hai
var a="javascript";
var b=a.slice(3,7);
document.write(b);
Output: ascr

-----------------------

Email Validation :-

email_val.indexOf('@') <=0

(email_val.charAt(email_val.length - 4)!='.')

----------------------

How To string Count In JS:-
var str="hello";
var i=0;
while(str[i]!=undefined)
{
	i++;
}
console.log(i);

-----------------------

How To String Reverse in JS:-
var str="hello";
var i=0;
for(i=str.length-1;i>=0;i--)
{
	document.write(str[i]);
}
