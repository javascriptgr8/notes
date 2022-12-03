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
