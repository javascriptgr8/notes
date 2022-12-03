

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



