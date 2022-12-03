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

