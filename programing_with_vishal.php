Output method:-
alert
console.log
document.write
document.getElementById(#myId).innerHtml

innerHTML:-
<div id="box"></div>
<script>
	document.getElementById("box").innerHTML="Hello";
</script>
=================================

Variable:-
Variable contain Information.
var :- Initialize again
let :- Once Time Initialize
const :- Not change variable value
var name="Suman";

================================
Comment:-
//single line comment
/*multiple line
  comment*/

================================

Data Type:-
Notes: array and object and null  ka data type object show hoga


string : var name="suman";
number : var num=10;
boolean : var num=true;
array : var color=["red","green"];
object : var friend={"city":"patna","name":"neha"}
null : var x=null
undefine var x;


==============================
typeof :- se data type dekh sakte hai
<script>
	var num="suman";
	document.write(typeof num);
</script>
Output:- string
===============================
template literals:-
<script>
	var name="suman";
	document.write(`Hello ${name}`);  //tab ke upper wala keybord
</script>
================================

Operater:-
Arthmetic : (+-*/++--**)
var x=10;
document.write(x++); //yaha par 10 show hoga, agar agli bar x ko print karunga to wo 11 show hoga bcouse ye post increment hai
document.write(++x); //yaha par 11 show hoga,  bcouse ye pre increment hai
<script>
	var x=4;
	var y=x**2; //ye 4 ko 4*4 karega
	document.write(y);
</script>

Assignment : (=,+=,-=,/=,*=,**=)
right side value ko arthmetic operation karke left side me assign karna
<script>
	var x=4;
	x+=10; //x=x+10
	document.write(x);
</script>

string : (+)
two string ko concate ke liye use hota hai
<script>
	var fname="suman";
	var lname="singh";
	document.write(fname+lname);
</script

type: (typeof,instanceof)

Comparison :(==,===,<,>,<=,>=,!=,!==)

logical : (&&,||, !)

bitwise : () //not understand

=============================================

Conditional Statment :-
if
if-else
if-else if-else
switch


<script>
	var x=15;
	switch(x)
	{
		case 10:
		document.write("Equal");
		break;

		case 15:
		document.write("greater");
		break;

		default :
		document.write("Wrong Choice");
	}
</script>

Even and odd:-
<script>
	var x=21;
	switch(x%2)
	{
		case 0:
		document.write("Even");
		break;

		case 1:
		document.write("Odd");
		break;

		// default :
		// document.write("Wrong Choice");
	}
</script>
==========================================
loop:-
for 
while
do while
for in //object print
foreach //array print

<script>
	for(var i=0;i<=5;i++)
	{
		document.write("hello World"+"<br>");
	}
</script>

while:
<script>
	var i=1;
	while(i<=5)
	{
		document.write("hello World"+"<br>");
		i++;
	}
</script>

do while:
<script>
	var i=1;
	do{
		document.write("Hello World"+"<br>");
		i++;
	}while(i<=5);
</script>

continue statment:
mai chah rah hu ki 5 par start print ho
<script>
	for(var i=1;i<=10;i++)
	{
		if(i==5)
		{
			document.write(i+'*'+"<br>");
			continue;
		}
		document.write(i+"<br>")
	}
</script>
=================================
Even and Odd:-
10 tak ka sara even number find kare
<script>
	for(var i=2;i<=10;i++)
	{
		if(i%2==0)
		{
			document.write(i+"<br>");
		}
	}	
</script>

kitna parcent discount kai usko kase find kare:
<script>
	var listprice=300;
	var saleprice=100;
	var discount=((listprice-saleprice)/listprice)*100;
	document.write(discount);	
	document.write(Math.round(discount));//round figure ke liye	
</script>
=======================================
Function:-
ek simple function ko function se pahle vi call kar sakte hai.
<script>
	function add(a,b)
	{
		document.write(a+b);
	}	
	add(10,20);
</script>

<script>
	var b=20;  //javascript me function ke bahar ka variable ek global variable hota hai.
	function add(a)
	{
		document.write(a+b);
	}	
	add(10);
</script>

Default Parameter :
<script>
	function add(a,b=30)
	{
		document.write(a+b);
	}	
	add(10,20);
</script>

Rest parameter:
<script>
	function add(a,...rest)
	{
		// document.write(rest);//20,30,40,50
		// document.write(a); //10
		document.write(rest[1]);//30
	}	
	add(10,20,30,40,50);
</script>

Arguments:
<script>
	function add()
	{
		document.write(arguments[1]);//20
		document.write(arguments[2]);//30
	}	
	add(10,20,30,40,50);
</script>

All arguments print:
<script>
	function add()
	{
		for(var i=0;i<arguments.length;i++)
		{
			document.write(arguments[i]);
		}
	}	
	add(10,20,30,40,50);
</script>

Anonymous function :
<script>
	(function()
	{
		document.write("hello");
	})();
</script>

<script>
	var a=function()
	{
		document.write("hello");
	}
	a();
</script>

=============================

Pop up:-
alert
confirm
prompt

alert("hello");

Confirm:
<script>
	var result=confirm("Are You Sure ?");
	if(result==true)
	{
		document.write("Success");
	}
	else
	{
		document.write("Cancel");
	}
</script>

prompt:
<script>
	var num=parseInt(prompt("Enter A Number"));
	document.write(num);
</script>

==================================

String Function : 
length:
<script>
	var str="Hello";
	document.write(str.length);
</script>

search :
return index position or nahi milne par -1
<script>
	var str="Hello World ! good mornung";
	document.write(str.search("good"));
</script>

indexOf:
Ye jo pahle mil gya uska position show karta hai, false pe -1
<script>
	var str="Hello World ! good mornung World";
	document.write(str.indexOf("World")); //first World position
</script>

lastIndexOf :
Ye sabse last wala ka position show karta hai
<script>
	var str="Hello World ! good mornung World";
	document.write(str.lastIndexOf("World"));
</script>

slice:
string ko cut karta hai,ye (-) karne par last se start karta hai
<script>
	var str="Hello World ! good mornung World";
	document.write(str.slice(12,16));
</script>

substring :
string ko cut karta hai,ye (-) karne par kam nahi karta hai
<script>
	var str="Hello World ! good mornung World";
	document.write(str.substring(12,16));
</script>

substr:
isme first number position rahta hai or second us position se kitna position next ka
<script>
	var str="Hello World ! good mornung World";
	document.write(str.substr(12,4));
</script>


replace:
<script>
	var str="Hello World ! good mornung World";
	document.write(str.replace("World","Neha"));
</script>

toLowerCase:
<script>
	var str="Hello World ! good mornung World";
	document.write(str.toLowerCase());
</script>

toUpperCase:
<script>
	var str="Hello World ! good mornung World";
	document.write(str.toUpperCase());
</script>

trim:
start or end position ke space ko remove karta hai
<script>
	var str=" Hello World ! good mornung World ";
	document.write(str.length); //34
</script>

<script>
	var str=" Hello World ! good mornung World ";
	document.write(str.trim().length);  //32
</script>

concat:
ye 2 string ko aapas me concate karta hai
<script>
	var str="Hello";
	var str1="World";
	document.write(str.concat(str1));
</script>


=====================================
Array :
<script>
	var arr=["Patna","Delhi","Indore","Pune"];
	var html="<select>";
	for(var i=0;i<arr.length;i++)
	{
		html+="<option>"+arr[i]+"</option>";
	}
	html+="</select>";
	document.write(html);
</script>

multidimensional Array print:
<script>
	var arr=[
		["Neha","Patna"],
		["Micki","UP"]
	];

	// document.write(arr[0][0]);//Neha
	for(var i=0;i<arr.length;i++)
	{
		for(var j=0;j<arr[i].length;j++)
		{
			document.write(arr[i][j]);
		}
		document.write("<br>");
	}
</script>

Array function:
length:
<script>
	var arr=["ram","raj","tej"];
	document.write(arr.length); //3
</script>

How to do array length 0
<script>
	var arr=["ram","raj","tej"];
	// arr=[];
	arr.length=0;
	document.write(arr.length);
</script>

concat:
<script>
	var arr=["ram","raj","tej"];
	var arr1=["Aditi","rahul","Aashu"];
	document.write(arr.concat(arr1));
//output:ram,raj,tej,Aditi,rahul,Aashu
</script>

pop:
remove last element
<script>
	var arr=["ram","raj","tej"];
	arr.pop();
	document.write(arr);
</script>

push:
add element in last position
<script>
	var arr=["ram","raj","tej"];
	arr.push("mohan");
	document.write(arr);
</script>

shift:
first element ko remove karta hai
<script>
	var arr=["ram","raj","tej"];
	arr.shift();
	document.write(arr);
</script>

unshift:
add new element in first position
<script>
	var arr=["ram","raj","tej"];
	arr.unshift("mohan");
	document.write(arr);
</script>

splice:
remove a specific position element
<script>
	var arr=["ram","raj","tej","anu"];
	arr.splice(2,1);//here 2 start position and 1 how name element remove after position
	document.write(arr);
</script>

add element in any specific position
<script>
	var arr=["ram","raj","tej","anu"];
	arr.splice(2,0,"asd");
	document.write(arr);//ram,raj,asd,tej,anu
</script>

indexOf:
<script>
	var arr=["ram","raj","tej","anu"];
	document.write(arr.indexOf("tej"));//2
</script>

Array.isArray:
return true or false
<script>
	var arr=["ram","raj","tej","anu"];
	document.write(Array.isArray(arr));//true
</script>

split:-
string convert into array
<script>
var str="I am a Good Boy";
var result=str.split(" ");
console.log(result);
</script>

join:-
array convert into string
<script>
var arr=["ram","raj","tej","jay"];
var result=arr.join();
console.log(result);
</script>

=============================
foreach loop:-
<script>
var arr=["ram","raj","tej","jay"];
arr.forEach(function(value){
	document.write(value+"<br>");
});
</script>
============================
Object : -
<script>
var obj={
	name:"Suman",
	city:"Patna",
	age : 30,
	friend:["Ravi","amit","raj"],
	eduction:{
		pg:"MCA",
		ug:"BCA"
	}
};
document.write(obj);//[object Object]
document.write(obj.name); //suman
document.write(obj.friend); //Ravi,amit,raj
document.write(obj.friend[1]); //amit
document.write(obj.eduction);//[object Object]
document.write(obj.eduction.pg);//MCA
----------------

<script>
var obj={
	fname:"Suman",
	lname:"Singh",
	age : 30,
	fullname:function(){
		return this.fname+" "+this.lname;
	}
};
document.write(obj.fullname()); //Suman Singh
</script>

how to delete any object value:
<script>
var obj={
	fname:"Suman",
	lname:"Singh",
	age : 30,
};
delete obj.fname;
</script>

How to check variable is avalible or not
<script>
var obj={
	fname:"Suman",
	lname:"Singh",
	age : 30
};
document.write("lname" in obj);//true
</script>

for in loop:
use for object print
<script>
var obj={
	fname:"Suman",
	lname:"Singh",
	age : 30
};
for(var key in obj)
{
	document.write(obj[key]+"<br>");
}
</script>

---------------------
<!-- Geeter and Setter:-
<script>
var obj={
	fname:"Suman",
	lname:"Singh",
	get fullname(){
		return this.fname+" "+this.lname;
	},
	set setfullname(pre){
		this.fname=pre.fn;
		this.lname=pre.ln;
	}
};
// document.write(obj.fullname); //suman singh
obj.setfullname={fn:"Neha",ln:"Kumari"};
document.write(obj.fullname);
</script> -->


----------

Constructer:-
function ke name ka first word Capital
<script>
function User(fn,ln)
{
	this.fname=fn;
	this.lname=ln;
}
var obj=new User("Neha","Kumari");
var obj2=new User("Kishu","Kumar");
console.log(obj);
console.log(obj2);
</script>


=============
Math object:-
round:
<script>
var x=10.5;
document.write(Math.round(x)); //11
</script>

ceil:
if point ke bad kuchh v value ho to wo next number print dega
<script>
var x=10.1;
document.write(Math.ceil(x)); //11
</script>

floor:
<script>
var x=10.9;
document.write(Math.floor(x)); //10
</script>

trunc:
point ke bad ka value remove kar deta hai. floor v same kam karta hai
<script>
var x=10.99;
document.write(Math.trunc(x)); //10
</script>

pow:
power square:
<script>
document.write(Math.pow(3,2)); //9
</script>

sqrt:
<script>
document.write(Math.sqrt(49)); //7
</script>

abs:
<script>
var x=10.99;
var y=-10.88
document.write(Math.abs(x)); //10.99
document.write(Math.abs(y)); //10.88  -ve remove karke hamesa +ve dega
</script>

min:
<script>
document.write(Math.min(10,4,22)); //4
</script>

max:
<script>
document.write(Math.max(10,4,22)); //22
</script>

random:
random hamesa 0-1 ke bich ka number hota hai
<script>
document.write(Math.random()); //0.uniqueNumber
</script>

<script>
var x=Math.random()*1000000; //value ke bich me point add karne ke liye
var y=Math.ceil(x); //pont ke bad ka value remove kar diya
document.write(y); //uniqueNumber
</script>
==============================

Hosting or function expression:

Agar mai kisi simple function ko function define se pahle call karta hu to v wo call hoga.
<script>
demo();//right
function demo()
{
	document.write("hello World");
}
demo();//right
</script>

agar mai kisi function ko variable me store karwata hu tab wo pahle call nahi hoga.
<script>
a();//wrong
var a=function demo()
{
	document.write("hello World");
}
a(); //right
</script>


<script>
// becouse ye pahle var x;
document.write(x);//undefined
var x=10;
</script>


<script>
// becouse x variable create nahi kiya hu
document.write(x);//error
</script>
===================================

Date object :-
<script>
var d=new Date();
document.write(d.getFullYear());//2021
document.write(d.getMonth());//6
document.write(d.getDate());//23
document.write(d.getHours());//11
document.write(d.getMinutes());//2
document.write(d.getSeconds());//55
</script>

==================================

Events : -
onclick:
<div onclick="myfun()">Click Me</div>
<script>
function myfun()
{
	alert("Hello World");
}
</script>

ondblclick (double click):-
<div ondblclick="myfun()">Click Me</div>
<script>
function myfun()
{
	alert("Hello World");
}
</script>

oncontextmenu(for right click):-
<div oncontextmenu="myfun()">Click Me</div>
<script>
function myfun()
{
	alert("Hello World");
}
</script>

onkeypress : (key press karne par trigger hota hai):-
ye body or function me kam karta hai
<body onkeypress="myfun()">
<script>
function myfun()
{
	alert("Hello World");
}
</script>


onkeyup:-
key ko chhorne par trigger hota hai
<body onkeyup="myfun()">
<script>
function myfun()
{
	alert("Hello World");
}
</script>

onmouseover:-
<div onmouseover="myfun()">Click</div>
<script>
function myfun()
{
	alert("Hello World");
}
</script>

onmouseout:-
<div onmouseout="myfun()">Click</div>
<script>
function myfun()
{
	alert("Hello World");
}
</script>

onmousedown:- click karne par
<div onmousedown="myfun()">Click</div>
<script>
function myfun()
{
	alert("Hello World");
}
</script>

onresize:-
ye window event hai.
<body onresize="myfun()">
<script>
function myfun()
{
	alert("Hello World");
}
</script>


onscroll:-
<body onscroll="myfun()" style="height:1500px;">
<script>
function myfun()
{
	alert("Hello World");
}
</script>

=========================
DOM Start :
document object model
document.all
document.head
document.title
document.body
document.images
document.anchors
document.links
document.form
document.URL
document.domain
document.baseURI



document.getlementById:-
<div id="first">This is title</div>
<script>
	var res=document.getElementById("first");
	console.log(res);//<div id="first">This is title</div>
</script>

or
<div id="first">This is title</div>
<script>
	var res=document.getElementById("first").innerHTML;
	console.log(res); //This is title
</script>


After click button :-
<div id="first">This is title</div>
<button onclick="myfun()">Click</button>
<script>
function myfun()
{
	var res=document.getElementById("first").innerHTML;
	console.log(res);
}
</script>


How to add two Number:-
Num1 :<input type="text" name="num1" id="num1"><br>
Num2 :<input type="text" name="num2" id="num2"><br>
<input type="submit" onclick="myfun()"><br>
<div id="show"></div>
<script>
function myfun()
{
	var first=parseInt(document.getElementById("num1").value);
	var second=parseInt(document.getElementById("num2").value);
	var res=first+second;
	document.getElementById("show").innerHTML=res;
}
</script>
==========================

document.getElementsByClassName:-
ye collection deta hai.
<div class="main">Hello World</div>
<div class="main">Hello Neha</div>
<script>
var res=document.getElementsByClassName("main");
console.log(res[0].innerHTML);//Hello World
console.log(res[1].innerHTML);//Hello Neha
</script>

all class element print:-
<div class="main">Hello World</div>
<div class="main">Hello Neha</div>
<script>
var res=document.getElementsByClassName("main");
for(var i=0;i<res.length;i++)
{
	console.log(res[i].innerHTML);
}
</script>

How to Text change by class:
<div class="main">Hello World</div>
<div class="main">Hello Neha</div>
<script>
var res=document.getElementsByClassName("main");
res[0].innerHTML="Hello Suman";
</script>

=================================

document.getElementsByTagName:-
ye v collection deta hai
<div>Hello World</div>
<div>Hello Neha</div>
<script>
var res=document.getElementsByTagName("div");
console.log(res[1].innerHTML);//Hello Neha
</script>

second id ka  div tag ka data prin ho: 
<div id="first">
	<div>Hello World</div>
	<div>Hello Neha</div>
</div>
<div id="second">
	<div>Hello World 1</div>
	<div>Hello Neha 1</div>
</div>
<script>
var doc=document.getElementById("second");
var res=doc.getElementsByTagName("div");
console.log(res[1].innerHTML);//Hello Neha 1
</script>

==============================

querySelector:-
Savi p tag ko print:
<div id="box">
	<p>Hello I Am Paragraph Inside The Box ID</p>
</div>
<p>Another Paragraph</p>
<script>
var res=document.querySelectorAll("p");
// console.log(res);
for(var i=0;i<res.length;i++)
{
	console.log(res[i].innerHTML);
}
</script>

Only box id ke under p tag ko print kare:
<div id="box">
	<p>Hello I Am Paragraph Inside The Box ID</p>
</div>
<p>Another Paragraph</p>
<script>
var res=document.querySelector("#box p");
console.log(res);
</script>

=============================
getAttribute
<div id="myid" class="list">Hello World</div>
<script>
var res=document.getElementById("myid").getAttribute("class");
console.log(res); //list
</script>

hasAttribute
<div id="myid" class="list">Hello World</div>
<script>
var res=document.getElementById("myid").hasAttribute("class");
console.log(res); //true
</script>
=============================
Traversing Method:-
firstElementChild
lastElementChild
children

<ul id="myid">
	<li>White</li>
	<li>Black</li>
	<li>Red</li>
	<li>Blue</li>
</ul>
<script>
var res=document.getElementById("myid");
console.log(res.firstElementChild);//white
console.log(res.lastElementChild);//blue
console.log(res.children[2]);//red
</script>

parentElement
nextElementSibling
previousElementSibling
<ul id="myid">
	<li>White</li>
	<li>Black</li>
	<li id="list">Red</li>
	<li>Blue</li>
</ul>
<script>
var res=document.getElementById("list");
console.log(res.parentElement);//myid ka full record show
console.log(res.nextElementSibling);//Blue
console.log(res.previousElementSibling);//Black
</script>
=================================

appendChild:-
How to add extra <li> :
<ul id="myid">
	<li>White</li>
	<li>Black</li>
	<li>Red</li>
	<li>Blue</li>
</ul>
<script>
var res=document.getElementById("myid");
var ctag=document.createElement("li");//creat <li></li>
var ctext=document.createTextNode("Yellow"); // yellow
ctag.appendChild(ctext); //<li>Yellow</li>
res.appendChild(ctag);//list me add kiya
</script>

or
<ul id="myid">
	<li>White</li>
	<li>Black</li>
	<li>Red</li>
	<li>Blue</li>
</ul>
<script>
var res=document.getElementById("myid");
var ctag=document.createElement("li");//creat <li></li>
ctag.textContent="Yellow";
res.appendChild(ctag);
</script>


========
className:-
How to add class:
<div id="myid">hello world</div>
<script>
var res=document.getElementById("myid");
res.className="main";
</script>

How to add ID:
<div id="myid">hello world</div>
<script>
var res=document.getElementById("myid");
res.id="listid";
</script>

==================
Clone Node:-
<ul id="myid">
	<li>White</li>
	<li>Black</li>
	<li>Red</li>
	<li>Blue</li>
</ul>
<script>
var res=document.getElementById("myid");
var clone=res.cloneNode(true);
// clone.id="myid2";// agar clone ka id change karna ho
document.body.appendChild(clone);
</script>
=======================
Event Listener:-
Event ko script se kaise call kare
addEventListener
removeEventListener //nahi
<button id="btn">Click</button>
<script>
var res=document.getElementById("btn");
res.addEventListener("click",test);//onclick nahi
function test()
{
	alert("Hello World");
}
</script>

==========================
Manage Attribute:-
setAttribute
getAttribute
removeAttribute
hasAttribute

<div id="myid">Hello World</div>
<script>
var res=document.getElementById("myid");
res.setAttribute("class","list");//add attribute
</script>


<div id="myid" class="list">Hello World</div>
<script>
var res=document.getElementById("myid");
var a=res.getAttribute("class");//list
console.log(a);
</script>

<div id="myid" class="list">Hello World</div>
<script>
var res=document.getElementById("myid");
res.removeAttribute("class");//list remove
</script>

<div id="myid" class="list">Hello World</div>
<script>
var res=document.getElementById("myid");
var a=res.hasAttribute("class");//true
console.log(a);
</script>

====================================
set Interval:-

<script>
	setInterval(test,1000);
	function test()
	{
		document.write("Hello"+"<br>");
	}
</script>


<div id="myid"></div>
<script>
	setInterval(test,1000);
	var x=0;
	function test()
	{
		document.getElementById("myid").innerHTML=x;
		x++;
	}
</script>


How to stop Intervel:
<div id="myid"></div>
<script>
	var cnt=setInterval(test,500);
	var x=0;
	function test()
	{
		if(x==20)
		{
			clearInterval(cnt);
		}
		document.getElementById("myid").innerHTML=x;
		x++;
	}
</script>
========================

setTimeOut:-

jo time diya hu uske bad run hoga
<div id="myid"></div>
<script>
	setTimeout(test,2000);
	function test()
	{
		console.log("Hello World");
	}
</script>

===========================
start 46











