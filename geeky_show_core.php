<script>
//Rest Parameter
function show(a,...args)
{
	document.write(a+"<br>"); //10
	document.write(args+"<br>"); 
	//20,30,40
	document.write(args[2]);//40
}
show(10,20,30,40);
</script>
<br><br>
----------------------------------

<script>
//Arguments
function demo(a)
{
	document.write(a+"<br>"); //10
	document.write(arguments[1]+"<br>"); 
	//20
	//Print All arguments
	for(var i=1;i<arguments.length;i++)
	{
		document.write(arguments[i]);
		//20,30,40,50
	}
}
demo(10,20,30,40,50);
</script>
----------------------------------

<br><br><br>
<script>
//function expression
var a=function exp(a,b)
{
	document.write(a+b);//12
};
a(1,11);
</script>

----------------------------------

<br><br><br>
<script>
//Anonymous Function
var b=function(a,b)
{
	return a+b;
};
document.write(b(12,3));//15
</script>
----------------------------------

<br><br>
<script>
//Anonymous Function
//Passing Anonymous Function as Arguments
function sum(myfun)
{
	return myfun();
}

sum(function(){
	return "Suman Kumar";
})
</script>
----------------------------------

<br><br><br>
<script>
//Return Anonymous Function
function add(a)
{
	return function(b){
		return a+b;
	}
}
var res=add(10);
document.write(res(20));//30
</script>
<br><br><br>
----------------------------------

<script>
//Arrow Function : Arrow Function ko define karne se pahle call nahi kar sakte hai
//Without pranthesis
var Ar=()=> 'Hello World';
document.write(Ar());
</script>
----------------------------------

<br><br>
<script>
//Array Function
var a=()=>{
	return "Hello";
}
document.write(a()); //Hello
</script>
----------------------------------

<br><br>
<script>
//Array Function
var sum=(a,b)=>{
	return a+b;
}
document.write(sum(12,2));
</script>

----------------------------------

<br><br><br>
<script>
//Immediately Invoked Function Expression (IIFE)
//Jaise hi function ko define karte hai usi time ye call ho jata hai, isko call nahi karna parta hai.
//Ye ek Anonymous Function hota hai
(function(){
	document.write('IIFE Function');
})();

(function(a,b){
	document.write(a+b); //15
})(12,3);
</script>
<br><br><br>
----------------------------------

<script>
//typeof : its find data type
var a="Hello";
document.write(typeof(a));//string
</script>
----------------------------------

<br><br><br>
<script>
//Object :- An object is a collection of properities, and properties is an association between a name and value
var record = {
	name :"Rahul",
	age  : 25,
	city : "Ara",
	eduction: ['10th',"12th","BA"],
	sum:function(a,b){
		return a+b;
	}
}
document.write(record.name);//Rahul
document.write(record.sum(2,1));//2
document.write(record.eduction[1]);//12th
</script>
----------------------------------

<br><br><br>
<script>
//Object
//All object print by forIn loop
var record = {
	name :"Rahul",
	age  : 25,
	city : "Ara",
	eduction: ['10th',"12th","BA"],
}
for(var key in record)
{
document.write(key +" => "+ record[key]);
}
</script>
----------------------------------

<br><br>
<script>
//Factory Function:-when a Function return object, then we call it is a factory function.
function test()
{
	return {
		name: 'Rahul',
		age : 29,
		sum : function(){
			return 10+2;
		}
	}
}
var tst=test();
document.write(tst.name);
</script>

<br><br>
////////////////////Array//////////////
<script>
//forEach loop
var ary=[10,88,745,90,49,25,5];
ary.forEach(function(value,index,a){
	document.write(index +"=> "+value+"<br>");
})	
</script>
----------------------------------


<script>
//for of loop
var ary=[10,88,745,90,49,25,5];
for(var value of ary)
{
	document.write(value+"<br>");
}	
</script>
----------------------------------


<br><br>
<script>
//how to take input from user in array
var total=prompt("Enter total number of elements");
var ary=[];
for(var i=0;i<=total;i++)
{
	ary[i]=prompt("Enter NUmber");
}

document.write(ary);	
</script>
<br><br>
----------------------------------


<script>
//join method of array
//array join ka use hamlog array ke under comma ko replace karne ke liye  use karte hai or ye string return karta hai
var ary=[10,88,745,90,49,25,5];
var res=ary.join("-");
document.write(res);
//10-88-745-90-49-25-5
</script>
----------------------------------


<script>
//Reverse method
var ary=[10,88,745,90,49,25,5];
var res=ary.reverse();
document.write(res);
</script>



----------------------------------

<script>
//Slice method
//slice method ek new array create karta hai, original array me change nahi karta hai, isme 2 parameter pas karte hai, start and end position, ye end position ko add nahi karta hai, or ye (-nve) position v leta hai
var ary=[10,88,745,90,49,25,5];
var res=ary.slice(2,5);
document.write(res);
//745,90,49

var ary=[10,88,745,90,49,25,5];
var res=ary.slice(-4,-1);
document.write(res);
//90,49,25
</script>




----------------------------------


<script>
//toString method :- ye array ko string me convert karta hai
var ary=[10,88,745,90,49,25,5];
var res=ary.toString();
document.write(res);
//10,88,745,90,49,25,5
document.write(typeof(res));
//string
</script>


----------------------------------

<script>
//Array.isArray method :- ye check karta hai ki ye array hai ya nahi
var ary=[10,88,745,90,49,25,5];
var res=Array.isArray(ary);
document.write(res);//true

var ary1="hello";
var res2=Array.isArray(ary1);
document.write(res2);//false
</script>



----------------------------------

<script>
//splice method :- ye array ke value ko remove,change and add karta hai, ye original array ko change karta hai
var ary=[10,88,745,90];

//add element
ary.splice(1,0,78);
document.write(ary);
//10,78,88,745,90

//remove element
ary.splice(1,1);
document.write(ary);
//10,745,90

//change element
ary.splice(1,1,99);
document.write(ary);
//10,99,745,90
</script>


----------------------------------

<script>
//indexOf method :- ye value ka index show karta hai, or nahi find karne par -1 show karta hai, isme hamlog searching ka position set kar sakte hai
var ary=[10,88,745,90,88];

var res=ary.indexOf(745);
document.write(res);
//2

var res=ary.indexOf(88);
document.write(res);
//1

var res=ary.indexOf(88,2);
document.write(res);
//4
</script>


----------------------------------

<script>
//fill method :- ye array me static value set karat hai, ye original array ko change karta hai, ye last ko add nahi karta hai
var ary=["ram","raj","tej","jay","tom"];
ary.fill(88);
document.write(ary); //88,88,88,88,88

ary.fill(88,2,4);
document.write(ary); //ram,raj,88,88,tom
</script>

----------------------------------

<script>
//unshift method :- ye array me value ko strat position pe add karte hai
var ary=[10,88,745,90,88];
ary.unshift(100);
document.write(ary); //100,10,88,745,90,88
</script>


----------------------------------

<script>
//push method :- ye array me value ko end position pe add karte hai
var ary=[10,88,745,90,88];
ary.push(100);
document.write(ary); //10,88,745,90,88,100
</script>



----------------------------------
<script>
//shift method :- ye array ke start value ko remove karte hai
var ary=[10,88,745,90,88];
ary.shift();
document.write(ary); //88,745,90,88
</script>


----------------------------------
<script>
//pop method :- ye array ke last value ko remove karte hai
var ary=[10,88,745,90,88];
ary.pop();
document.write(ary); //10,88,745,90
</script>




///////////////////////String///////////////////////

<script>
//Template literal : isme multiple line string write kar sakte hai.
var name="suman kumar";
document.write(`Welocme mr. ${name}`);

var msg=`Welcome
	World
`;
document.write(msg);
</script>



----------------------------------
<script>
//Length : 
var str="Hello";
document.write(str.length);
</script>

----------------------------------
<script>
//charAt : it find character
var str="Hello";
document.write(str.charAt(1)); //e
</script>
----------------------------------


<script>
//charCodeAt : return unnicode
var str="Hello";
document.write(str.charCodeAt(2)); //108
</script>


<script>
//replace : it take two parameter repalce(old,new)
var str="Hello world";
document.write(str.replace('world','suman')); //Hello suman
</script>

----------------------------------


<script>
//split : string convert into array
var str="PHP is a Server side language";
var res=str.split(' ');
document.write(res); //PHP,is,a,Server,side,language
document.write(typeof(res));//object

document.write(typeof(str));//string
</script>

----------------------------------

<script>
//indexOf : return indx position, isme starting index de sakte hai ki yaha se find karna hai
var str="Hello World";
var res=str.indexOf('W');
document.write(res); //6


var res=str.indexOf('l',4,20);
document.write(res); //9
</script>

----------------------------------

<script>
//search : return indx position, isme start index define nahi kar sakte hai
var str="Hello World";
var res=str.search('W');
document.write(res); //6
</script>


----------------------------------
<script>
//slice : it contain -ve
var str="PHP is server side language";
var res=str.slice(4,12);
document.write(res +"<br>"); //is serve

var str="PHP is server side language";
document.write(str.slice(-12, -2)); //ide langua
</script>

-----------------------------------
<script>
//substring : slice and substring are almost same, but substring can not contain -ve
var str="PHP is server side language";
document.write(str.substring(4,20)); //is server side l
</script>
------------------------------------
<script>
//substr : 
var str="PHP is server side language";
document.write(str.substr(4,20)); //is server side langu
</script>
------------------------------------

////////////////////////Number Method ///////////////////////



<script>
//toString :- ye number ko string me convert karta hai
var num=10;
document.write(typeof(num));//number

var res=toString(num);
document.write(typeof(res)); //string
</script>
-----------------------------------

<script>
//toFixed Method :- isme point ke bad kina number show karna hai,ye number ko string me v convert karta hai
var num=1432.4567;
// document.write(num.toFixed());//1432
document.write(num.toFixed(2));//1432.46
</script>
-------------------------------------

<script>
//isInteger Method :- ye check karta hai ki number integer hai ya nahi, return true false
document.write(Number.isInteger(1432));//true
document.write(Number.isInteger(1432.4567));//false
document.write(Number.isInteger('Hello'));//false
</script>
------------------------------------

<script>
//min and max
document.write(Math.min(10,5,14,98));
document.write(Math.max(10,5,14,98));
</script>
-----------------------------------

<script>
//floor
document.write(Math.floor(2)); //2
document.write(Math.floor(2.25)); //2
document.write(Math.floor(2.65));//2
document.write(Math.floor(0.65));//0
document.write(Math.floor(-2.65));//-3
document.write(Math.floor(-2.45));//-3
document.write(Math.floor(-2)+"<br>");//-2

</script>
-----------------------------------
<script>
//round
document.write(Math.round(2)+"<br>"); //2
document.write(Math.round(2.25)+"<br>"); //2
document.write(Math.round(2.65)+"<br>");//3
document.write(Math.round(0.65)+"<br>");//1
document.write(Math.round(-2.65)+"<br>");//-3
document.write(Math.round(-2.45)+"<br>");//-2
document.write(Math.round(-2)+"<br>");//-2
</script>
-------------------------------------

How to generate random number :-
<script>
//random
document.write(Math.random()*100+1+"<br>");
var res=Math.floor(Math.random()*100+1);
document.write(res);
</script>
--------------------------------------
