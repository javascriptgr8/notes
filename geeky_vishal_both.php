Switch:-
<script>
var a=parseInt(prompt("Enter Number"));
switch(a%2)
{
	case 0 :
	document.write("Even");
	break;

	default :
	document.write("Odd");
}
</script>

-----------------------------------------

Variable type :-

Var  :- value lo override kar sakte hai. Or same variable re-declaration kar sakte hai var key ke sath. 
var x="Hello";
var x="World";
    x="Wow";


Let :- let me value ko override kar sakte hai but re-declaration nahi kar sakte hai
let x="hello";
let x="World"; wrong
    x="wow"; roght


Const :- const ko na to override kar sakte hai hai or na hi re-declaration kar sakte hai
const x="hello";
const x="World"; wrong
	  x="wow"; wrong
--------------------------------------------



=================Array===================
var array=[20,4,30,"suman"];
for(var a=0; a<array.length;a++)
{
     document.write(array[a] + "<br>");
}
OutPut:-
20
4
30
suman
-----------------------------
Sum of array value:-
var array=[20,4,30];
var sum=0;
for(var a=0; a<array.length;a++)
{
   document.write(array[a] + "<br>");
   sum=sum+array[a];
}
document.write("Sum "+sum);
----------------------------
Multidimensional Array Print:-
var array=[
  ["Suman",29,"MCA"],
  ["Neha",29,"MCA"],
  ["Micku",20,"10th"],
  ["Dolly",25,"B.Tech"]
];
for(var a=0;a<array.length;a++)
{
  for(var b=0;b<array[a].length;b++)
  {
  	document.write(array[a][b] +" ");
  }
  document.write("<br>");
}
OutPut:-
Suman 29 MCA
Neha 29 MCA
Micku 20 10th
Dolly 25 B.Tech
-----------------------------

How To Modify Array Element:-
var ary=["suman",20,"MCA"];
ary[1]=29;
document.write(ary);
OutPut:-
suman,29,MCA
--------------------------

Array Sort:-
var ary=["Suman","Neha","Rahul","Aditi"];
ary.sort();
document.write(ary);
OutPut:-
Aditi,Neha,Rahul,Suman

------------------------
//Array Reverse
var ary=["Suman","Neha","Rahul","Aditi"];
ary.reverse();
document.write(ary);
OutPut:-
Aditi,Rahul,Neha,Suman
----------------------

//Array concat
// arry ko add karta hai
var a=["suman","neha","rahul"];
var b=["aditi","ashu"];
var c=["ram"];
var d=a.concat(b,c);
document.write(d);
OutPut:-
suman,neha,rahul,aditi,ashu,ram


the concat method is used to merge two or more array.
its create new array.

only value add:
<script>
var a=[10,20,30];
var ary=a.concat(40,50);
document.write(ary);
</script> 
OutPut:10,20,30,40,50

Two array add:
<script>
var a=[10,20,30];
var b=["red","green"];
var ary=a.concat(b);
document.write(ary);
</script>
OutPut:10,20,30,red.green

--------------------------------

-------------------

//Join 
//array value ko ek element banta hai.Return as string
var a=["suman","neha","rahul"];
var b=a.join("-");
document.write(b);
OutPut:-
suman-neha-rahul
--------------------

//array slice
It's create a new array.
main array ke value se ek new array create karta hai.
var ary=["first","sec","thi","four","fiv"];
var a=ary.slice(2,4);
document.write(a);
OutPut:-
thi,four
-------------------
fill():-
fillke through static value fill karte hai.
syntex:
var array_name.fill(value,start,end);
<script>
var a=[10,20,30,40,50,60,70]; 
a.fill("Ram",1,3); 
document.write(a);
</script>
OutPut:10,Ram,Ram,40,50,60,70

Create Blank array and fill value by fill:
<script>
var a=new Array(3); 
a.fill("Ram",0,3); 
document.write(a);
</script>
OutPut:Ram,Ram,Ram

-------------------
toString():-120
return string with seperate comma.
<script>
var a=[10,20,30,40,50,60,70]; 
var ary=a.toString();
document.write(ary);
</script>
----------------------------

Array.isArray():-
iska use ye check karne ke liye ki array hai ki nahi, ya array empty hai
return true and false.
<script>
var a=[10,20,30,40,50,60,70]; 
var ary=Array.isArray(a);
document.write(ary);
</script>
OutPut:- true.

--------------------------------

//indexOf
//array ka indexing show karta hai 
//nahi milne par -1 show karta hai
var ary=["first","sec","thi"];
var a=ary.indexOf("thi");
document.write(a);
output:-2

-------------------

//includes
//element find karta hai or true or false return karta hai 
var ary=["first","sec","thi"];
var a=ary.includes("sec");
document.write(a);
OutPut:- true

-----------------

//some
var ary=[2,7,12,40];
var b=ary.some(check);
//check function name hai
document.write(b);
function check(age)
{
   return age>=18;
}
OutPut:- true

----------------------

//find
//sirf one value check karta hai
//ji first me milta hai
var ary=[2,7,22,40];
var b=ary.find(check);
document.write(b);
function check(age)
{
    return age>=18;
}
OutPut:-22

----------------------

//findindex
//sirf one value check karta hai
//ji first me milta hai
//or uska index value show karega
var ary=[2,7,22,40];
var b=ary.findIndex(check);
document.write(b);
function check(age)
{
   return age>=18;
}
OutPut:-2

--------------------

//filter
//condition check karta hai or
// total value show karta hai
var ary=[2,7,22,40];
var b=ary.filter(check);
document.write(b);
function check(age)
{
  return age>=18;
}
OutPut:- 22,40

------------------

//toString
//convert array to string
var ary=["sum","neh","rah"];
var a=ary.toString();
document.write(a);
OutPut:-
Sum,neh,rah
----------------------

//forEach
//array ke value ko show karta hai
var ary=["sum","neh","rah"];
ary.forEach(function(value){
 document.write(value + "<br>");
});
OutPut:-sum neh rah


<script>
var ary=[10,20,30,40,"Ram"];
ary.forEach(function(value,key){
document.write(value+" "+key+"<br>");
});
</script>

---------------------
//Const value ko array me kaise change kare
const a=["Ram","Suman","neha"];
a[1]="Micki";
document.write(a);
-------------------

for off loop :- 111
Array or object ke liye use karte hai.
<script>
var ary=[10,20,30,40,"Ram"];
for(var value of ary)
{
	document.write(value+"<br>");
}
</script>

--------------------------
How to empty array define with length:-
var ary=new Array(3);

------------------------

Input from User in Array
jab array empty ho tab hi input kar sakte hai.
<script>
var a=prompt("Enter Length Of Array");
var ary=[];//blank array.
for(var i=0;i<a;i++)
{
ary[i]=prompt("Enter Value");
}
for(var j=0;j<a;j++)
{
document.write(ary[j]+"<br>");
}	
</script>

---------------------------
Multidimensional Array :-
<script>
var ary=[
	["Ram","Dell",1000],
	["Raj","HP",1500],
	["Tej","Sam",2000]
];
for(var i=0;i<ary.length;i++)
{
for(var j=0;j<ary[i].length;j++)
{
document.write(ary[i][j]);
}
document.write("<br>");  
}
</script>
-------------------------


splice():-
ye array me value add or remove dono karta hai.
ye original array me change karta hai.
Value add:-
<script>
var a=[10,20,30,40,50,60,70]; 
a.splice(2,0,"ram"); 
document.write(a);
</script>
OutPut:10,20,ram,30,40,50,60,70

Value Replace:-
<script>
var a=[10,20,30,40,50,60,70]; 
a.splice(2,1,"ram"); 
document.write(a);
</script>
OutPut:10,20,ram,40,50,60,70

Remove Value:-
<script>
var a=[10,20,30,40,50,60,70]; 
a.splice(2,1); 
document.write(a);
</script>
OutPut:10,20,40,50,60,70


----------------------------------------



=============================Object========================
Object:- video 68
An Object is a collection of properties, and a property is an 
association between a name(key) and a value. A property's
value can be a function, in which case the propert is
known as a method.

How to Create A Literal Object:- video 69
Syntex:- 
var object_name={};
----------------------------------------
Kisi Blank Object me value kaise assign kare:-
var fees={};

1st method:-
fees['ram']=100;

2nd method:-
fees.ram=100;

----------------------------------
How to print Object:-
document.write(fees.ram);
or
document.write(fees["ram"]);

---------------------------------

Object:-
First Ex:-
var a={
fname:"suman",
lname:"kumar",
age:29	
};
document.write(a.fname);
-----------------------

var fees={
	rahul:100,
	sumit:200,
	student:[500,600,700],
	sum:function(){
		return 10+20;
	}
};
document.write(fees.sumit);
document.write(fees.sum());
document.write(fees.student);

-----------------------
//array in object
var a={
fname:"suman",
lname:"kumar",
age:29,
family:["father","mother","sister"]	
};
document.write(a.family);
-----------------------

//function in object
var a={
fname:"suman",
lname:"kumar",
age:29,
salary:function(){
  return 27000;
}
};
document.write(a.salary);
---------------------------

//function 2 in object
var a={
fname:"suman",
lname:"kumar",
age:29,
fullname:function(){
  return this.fname+" "+this.lname;
}
};
document.write(a.fullname);

-------------------------

//Object Second Method
var a=new Object();
a.fname="Suman";
a.lname="Kumar";
a.age=29;
document.write(a.fname);

------------------------
//Array of object
//array ke under object kaise banate hai
var student=[
{name:"suman",age:29},
{name:"Neha",age:25},
{name:"Rahul",age:20},
];
for(var a=0;a<student.length;a++)
{
 document.write(student[a].name+"<br>");
}

-------------------------
How To All Object Value Print:-
<script>
var fees={
	rahul:100,
	sumit:200,
	student:[500,600,700],
};
for(var key in fees)
{
document.write(key+"=>"+fees[key]+"<br>");
}
</script>
-------------------------
Array Of Object(Array ke Under Object):-
<script>
var ary=[
{name:"suman",city:"Noida"},
{name:"Kishu",city:"Patna"}
];

//By For Loop
for(var i=0;i<ary.length;i++)
{
	document.write(ary[i].name);
}

//By forEach Loop:
ary.forEach(function(data){
	document.write(data.name);
}); 
</script>

------------------------------
How To All Object Value Print:-
<script>
var fees={
	rahul:100,
	sumit:200,
	student:[500,600,700],
	sub:function(){
		return "Php";
	}
};
for(var key in fees)
{
document.write(key+"=>"+fees[key]+"<br>");
}

//agar function show nahi karna ho
for(var key in fees)
{
if(typeof fees[key]!=='function')
{
document.write(key+"=>"+fees[key]+"<br>");
}
}
</script>
-----------------------------------
Array Of Object(Array ke Under Object):-
<script>
var ary=[
{name:"suman",city:"Noida"},
{name:"Kishu",city:"Patna"}
];

//By For Loop
for(var i=0;i<ary.length;i++)
{
	document.write(ary[i].name);
}

//By forEach Loop:
ary.forEach(function(data){
	document.write(data.name);
}); 
</script>
-----------------------------------


--------------------------
//Const value ko object me kaise change kare
//by default const ka value fix hota hai
const a={
  name:"Suman",
  age:29
};
a.name="rahul";
document.write(a.name);
------------------------

//for/in
//for/in loop ka use object ko print karne ke liye karte hai
var student={
name:"Ram",
class:"MCA",
age:29
}
for(var a in student)
{
  document.write(student[a]);
}

-----------------------------


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

--------------------------

========================Number==================
toString:-153
toString method return a number as a string. 
<script>
var a=10;
var b=a.toString();
document.write(b);//10
document.write(typeof(b));//string
</script>

------------------------
toFixed():-155
toFixed convert a number into a string,
keeping a specified number of decimal
<script>
var a=10.65823;
document.write(a.toFixed());//11
document.write(a.toFixed(2));//10.66
document.write(a.toFixed(3));//10.658
</script>

-------------------------

toPrecision(): 156
 <script>
var a=10.65823;
document.write(a.toPrecision());//10.65823
document.write(a.toPrecision(2));//11
document.write(a.toPrecision(3));//10.7
</script>

--------------------------

isInteger()-157
if number is integer then return true. otherwise false.
<script>
document.write(Number.isInteger());//false
document.write(Number.isInteger(10));//true
document.write(Number.isInteger(-10));//true
document.write(Number.isInteger(10.45));//false
</script>

-------------------------

parseInt():-160
<script>
document.write(parseInt("10"));//10
document.write(parseInt("12.10"));//12
document.write(parseInt("10 20 30"));//10
document.write(parseInt(" 10 ")); //10
document.write(parseInt("10 Years"));//10
</script>

--------------------------

parseFloat():- 161
<script>
document.write(parseFloat("10"));//10
document.write(parseFloat("12.15"));//12.15
document.write(parseFloat("10 20 30"));//10
document.write(parseFloat(" 10 ")); //10
document.write(parseFloat("10 Years"));//10
</script>

----------------------------


Math:- 162
perform mathematical operation.
<script>
document.write(Math.PI);//3.14
document.write(Math.sqrt(64));//8
document.write(Math.abs(-64));//64
document.write(Math.abs(null)); //0
document.write(Math.pow(2,3));//8
document.write(Math.trunc(12.564));//12
</script>

----------------------------

Min And Max:- 163
<script>
document.write(Math.min(10,5,20,30));//5
document.write(Math.max(10,5,20,30));//30
</script>

-----------------------------

floor():- 164
round figure
document.write(Math.floor(12.3));//12

----------------------------

round():- 165
<script>
document.write(Math.round(12.3));//12
document.write(Math.round(12.8));//13
</script>

------------------------

How To Generate a random number:-166
<script>
var x=Math.floor((Math.random()*100)+1);
document.write(x);
</script>

------------------------


===============================Inbult Function=======================


Arguments Object:-
<script type="text/javascript">
function disp()
{
	// document.write(name1);
	// document.write(name2);
	document.write(arguments[0]);
	document.write(arguments[1]);
}
disp("Neha","Suman");
</script>

--------------------------------


Argument Length:-
<script type="text/javascript">
	function disp(name1,name2) //this is parameter
	{
		document.write(arguments.length);
	}
	disp("Neha","Suman","Aditi");//this is arguments
</script>

-------------------------------

All Arguments Print:-42 Video
<script type="text/javascript">
function disp(name1,name2) 
{
	for(var i=0;i<arguments.length;i++)
	{
		document.write(arguments[i]+ " ");
	}
}
disp("Neha","Suman","Aditi");
</script>
OutPut:-  Neha Suman Aditi

-----------------------------

Default Parameter:- video 44
agar argument pass nahi hota tab default parameter run karta hai.
parameter me array v pass kar sakte hai
or null v pass kar sakte hai
<script type="text/javascript">
function disp(a,b,c=30) 
{
	document.write(a);//10	
	document.write(b);//20	
	document.write(c);//30	
}
disp(10,20);
</script>

or

<script type="text/javascript">
function disp(a,b,c=30) 
{
	document.write(a);//10	
	document.write(b);//20	
	document.write(c);//40	
}
disp(10,20,40);
</script>

---------------------------

Rest Parameter:-
rest parameter must be last parameter to a function
ye array me value ko store karta hai
iska use ek parameter ke under multiple argument store karne ke liye karte hai

<script type="text/javascript">
	function disp(...args) 
	{
		document.write(args);	
	}
	disp(10,20,30,40,50);
</script>
Output:-  10,20,30,40,50

Or

<script type="text/javascript">
	function disp(a,...args) 
	{
		// document.write(a);
		document.write(args);	
	}
	disp(10,20,30,40,50);
</script>
Output:-  20,30,40,50

Or

<script type="text/javascript">
	function disp(a,...args) 
	{
		// document.write(a);
		document.write(args[2]);	
	}
	disp(10,20,30,40,50);
</script>
Output:-  40


<script type="text/javascript">
	function sum(a,...arg)
	{
		var add=0;
		for(var i=0;i<arg.length;i++)
		{
			add+=arg[i];
		}
		console.log(add);
	}
	var ary=[10,15,12];
	sum("Hello",...ary);
</script>

-------------------------

Variable Scope:-
Agar kisi function ke under variable create karta hu to wo local variable hota hai.
agar mai var key ka use na karu to wo global variable hota hai

Global Variable:-
<script type="text/javascript">
var b=20;//global variable
function desp(a)
{
	return(a+b);
}
document.write(desp(10));
</script>
<!-- Output:-  30  -->

-------------------------

agar mai var key ka use na karu to wo global variable hota hai
<script type="text/javascript">
function desp(a)
{
	b=40;//global variable
	return(a+b);
}
document.write(desp(10));
document.write(b);//ye run hoga
</script>

--------------------------

Local Scope:-
<script type="text/javascript">

function desp(a)
{
	var b=40;
	return(a+b);
}
document.write(desp(10));
document.write(b);//ye run nahi hoga
</script>
<!-- Output:-  50  -->

----------------------------

Block Scope:-
Agar let key ke sath variable define karunga tab wo local rahe ga
<script type="text/javascript">
if(true)
{
	var i=10;//other programing language me ye local variable hota hai. But JS me Global hota hai
	document.write(i);
}
document.write(i);
</script>
----------------------------

function Expression:- video 52
simple function ko ham log function se pahle or bad me v call kar sakta hai.
<script type="text/javascript">
show();
function show()
{
	document.write("Hello World");
}
show();
</script>

function ko kisi variable me store karte hai usko function Expression bolte hai.
function expression ko pahle call nahi kar sakte hai.

<script type="text/javascript">
//desp();//ye run nahi hoga
var desp=function show()
{
	document.write("Function Expression");
}; //simple function me ; nahi lagate hai
desp(); // right
</script>

----------------------------

Anonymous Function:- video 53
which have no specified name.
can be store in a variable.
can be returned in a function.
can be pass a function

Syntex:-
<script type="text/javascript">
function()
{
	//body part
}
</script>


store in a variable
<script type="text/javascript">
var a=function(){
	document.write("Anonymous Function store in variable");
}
</script>


Passing Anonymous function as Argument.(54)
<script type="text/javascript">
function desp(myfun)
{
	return myfun();
}
document.write(desp(function(){
	return "Passing Anonymous function as Argument";
}));
</script>

Returning Anonymous function:-(55)
aisa karne par pura Anonymous function as a string print kar dega.
<script type="text/javascript">
function desp()
{
	return function(){
		return "Returning Anonymous function";
	}
}
document.write(desp());
</script>

ye right output dega.
<script type="text/javascript">
function desp()
{
	return function(){
		return "Returning Anonymous function";
	}
}
var a=desp();
document.write(a());
</script>

-------------------------------


Arrow Function:-(56)
Arrow function
Arrow function with parameter
<script type="text/javascript">
var a=()=>{
	document.write("Simple Arrow Function");
}
a();
</script>

or with parameter
<script type="text/javascript">
var myfun=(a,b)=>{
	return a+b;
}
document.write(myfun(10,12));
</script>


or without pranthess
<script type="text/javascript">
var myfun=a=>{  //agar body me single line ka code ho to.prenthess() ka use nahi v kar sakte hai
	return a;
}
document.write(myfun(10));
</script>


or //without return keyword ke return hoga. {} ka use nahi karna hoga.
<script type="text/javascript">
var myfun=a=> a;
document.write(myfun(10));
</script>

-----------------------------


Immediately Invoked Function Expression(IIFE)(57):-
Isme jaise hi function define karte hai usitime ye run v ho jata hai. 
isko call nahi karna parta hai
IIFE function v ek anonymous function ki tarah hota hai
Syntex:-
<script type="text/javascript">
(function(){ document.write("IIFE Function"); })();
</script>

IIFE With parameter
<script type="text/javascript">
(function(a,b){ document.write(a+" "+b); })(10,12);
</script>

---------------------------

typeof :-
iska use data type pata karne ke liye karte hai
<script type="text/javascript">
var a=10;
document.write(typeof(a));
</script>

--------------------------

Difference Between undefined and null.:- 
undefined means koi value set nahi hai.
null means value set hai par empty hai avi.

-----------------------------

Factory Function:- 75
When a function return an object, we call it a factory function.
It can produce object instance without new keyword or classes.
Ex:-
function mobile()
{
	return {
		model:'Galaxy',
		price:function(){return 3000;}		
	};
}
var samsung=mobile();

----------------------------
















































