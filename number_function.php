
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
