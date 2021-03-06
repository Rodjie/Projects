<!-- Using OOP approach, create a calculator application. It should be capable of doing basic operations like addition, 
subtraction, multiplication, and division. It should also be able to calculate exponents and expressions, 
where the user can group calculations using parenthesis. It should follow the PEMDAS rule. 
It should also be able to get the square root of a number. 
As an example it should be able to calculate: (112 + 182)(√100)/(55 – 7 * 4) + 15. -->


<html>
      <head>
            <title>Calculator Exam</title>
	  </head>
	  
	  
<script type="text/JavaScript">

// My JAVASCRIPT CODES

// Declare Global
var displayText = ""
var num1
var num2
var operatorType

// Text Display
function addDisplay(n){
document.calc.display.value = ""
displayText += n
document.calc.display.value = displayText
}

// Add
function addNumbers() {
if (displayText == "") {
  displayText = result
 }
num1 = parseFloat(displayText)
operatorType = "add"
displayText = ""
}

// Subtract
function subtractNumbers() {
if (displayText == "") {
  displayText = result
 }
num1 = parseFloat(displayText)
operatorType = "subtract"
displayText = ""
}

// Multiply
function multiplyNumbers() {
if (displayText == "") {
  displayText = result
 }
num1 = parseFloat(displayText)
operatorType = "multiply"
displayText = ""
}

// Divide
function divideNumbers() {
if (displayText == "") {
  displayText = result
 }
num1 = parseFloat(displayText)
operatorType = "divide"
displayText = ""
}

// Square root
function sqrt() {
if (displayText == "") {
  num1 = result
  }
else {
  num1 = parseFloat(displayText)
  }
if (num1 != "") {
  result = Math.sqrt(num1)
  // i used math.sqrt based in w3schools.com
  document.calc.display.value = result
  displayText = ""
  }
else {
  alert("Invalid")
  }
}

// Exponent
function square() {
if (displayText == "") {
  num1 = result
  }
else {
  num1 = parseFloat(displayText)
  }
if (num1 != "") {
  result = num1 * num1
  document.calc.display.value = result
  displayText = ""
  }
else {
  alert("Invalid")
  }
}

// Calculations
function calculate() {
if (displayText != "") {
  num2 = parseFloat(displayText)
// Calculate: Addition
  if (operatorType == "add") {
    result = num1 + num2
    document.calc.display.value = result
    }
// Calculate: Subtraction
  if (operatorType == "subtract") {
    result = num1 - num2
    document.calc.display.value = result
    }
// Calculate: Multiplication
  if (operatorType == "multiply") {
    result = num1 * num2
    document.calc.display.value = result
    }
// Calculate: Division
  if (operatorType == "divide") {
    result = num1 / num2
    document.calc.display.value = result
    }
  displayText = ""
  }
  else {
  document.calc.display.value = "Syntax Error!"
  }
}

// Clear the display
function clearDisplay() {
displayText = ""
document.calc.display.value = ""
}

</script>


<!-- My Simple CSS CODES  -->
<style>

.table {
   margin: auto;
   border: 1px solid black;
   text-align: center;
   width: 20%;
   height: 45%;
   background-color: green;
}

.btn {

   width: 40px;
   height: 40px;

}

  .btn:hover {
	background-color: #F9FFE6;
  }

.txt {

   width: 250px;
   height: 30px;

}

</style>

<div class="table"> </br>
<form NAME=calc>
<INPUT TYPE=text SIZE=22  class="txt" NAME=display>
</br>
</br>
<INPUT TYPE=button NAME="seven" VALUE="7" class="btn" onClick=addDisplay(7)>
<INPUT TYPE=button NAME="eight" VALUE="8" class="btn" onClick=addDisplay(8)>
<INPUT TYPE=button NAME="nine" VALUE="9" class="btn" onClick=addDisplay(9)>
<INPUT TYPE=button NAME="multiplication" VALUE="*" class="btn" onClick=multiplyNumbers()>
<INPUT TYPE=button NAME="plus" VALUE="+" class="btn" onClick=addNumbers()>
</br>
<INPUT TYPE=button NAME="four" VALUE="4" class="btn" onClick=addDisplay(4)>
<INPUT TYPE=button NAME="five" VALUE="5" class="btn" onClick=addDisplay(5)>
<INPUT TYPE=button NAME="six" VALUE="6" class="btn" onClick=addDisplay(6)>
<INPUT TYPE=button NAME="minus" VALUE="-" class="btn" onClick=subtractNumbers()>
<INPUT TYPE=button NAME="sqareroot" VALUE="SqrT" class="btn" onClick=sqrt()> <!-- square root -->
</br>
<INPUT TYPE=button NAME="one" VALUE="1" class="btn" onClick=addDisplay(1)>
<INPUT TYPE=button NAME="two" VALUE="2" class="btn" onClick=addDisplay(2)>
<INPUT TYPE=button NAME="three" VALUE="3" class="btn" onClick=addDisplay(3)>
<INPUT TYPE=button NAME="division" VALUE="/" class="btn" onClick=divideNumbers()>
<INPUT TYPE=button NAME="squarex" VALUE="x^" class="btn" onClick=square()> <!-- exponent -->
</br>
<INPUT TYPE=button NAME="zero" VALUE="0" class="btn" onClick=addDisplay(0)>
<INPUT TYPE=button NAME="opar" VALUE="(" class="btn" onClick=addDisplay('(')>
<INPUT TYPE=button NAME="cpar" VALUE=")" class="btn" onClick=addDisplay(')')>
<INPUT TYPE=button NAME="dot" VALUE="." class="btn" onClick=addDisplay(".")>
<INPUT TYPE=button NAME=enter VALUE="=" class="btn" onClick=calculate()>
</br>
<INPUT TYPE=button NAME=clear VALUE="C" style="height:40px; width: 217px" onClick=clearDisplay()>
</form>
</div>

</BODY>
</HTML>

<!-- Updating PEMDAS rule -->

<html>
      <head>
            <title>Calculator Exam</title>
	  </head>
	  
	  
<script type="text/JavaScript">
// My JAVASCRIPT CODES
// Declare Global
var displayText = ""
var num1
var num2
var operatorType
// Text Display
function addDisplay(n){
document.calc.display0value = ""
displayText += n
document.calc.display0.value = displayText
}
// Add
function addNumbers() {
if (displayText == "") {
  displayText = result
 }
num1 = parseFloat(displayText)
operatorType = "add"
displayText = ""
}
// Subtract
function subtractNumbers() {
if (displayText == "") {
  displayText = result
 }
num1 = parseFloat(displayText)
operatorType = "subtract"
displayText = ""
}
// Multiply
function multiplyNumbers() {
if (displayText == "") {
  displayText = result
 }
num1 = parseFloat(displayText)
operatorType = "multiply"
displayText = ""
}
// Divide
function divideNumbers() {
if (displayText == "") {
  displayText = result
 }
num1 = parseFloat(displayText)
operatorType = "divide"
displayText = ""
}
// Square root
function sqrt() {
if (displayText == "") {
  num1 = result
  }
else {
  num1 = parseFloat(displayText)
  }
if (num1 != "") {
  result = Math.sqrt(num1)
  // i used math.sqrt based in w3schools.com
  document.calc.display.value = result
  displayText = ""
  }
else {
  alert("Invalid")
  }
}
// Exponent
function square() {
if (displayText == "") {
  num1 = result
  }
else {
  num1 = parseFloat(displayText)
  }
if (num1 != "") {
  result = num1 * num1
  document.calc.display.value = result
  displayText = ""
  }
else {
  alert("Invalid")
  }
}
// Calculations
function calculate() {
if (displayText != "") {
  num2 = parseFloat(displayText)
// Calculate: Addition
  if (operatorType == "add") {
    result = num1 + num2
    document.calc.display.value = result
    }
// Calculate: Subtraction
  if (operatorType == "subtract") {
    result = num1 - num2
    document.calc.display.value = result
    }
// Calculate: Multiplication
  if (operatorType == "multiply") {
    result = num1 * num2
    document.calc.display.value = result
    }
// Calculate: Division
  if (operatorType == "divide") {
    result = num1 / num2
    document.calc.display.value = result
    }
  displayText = ""
  }
  else {
  document.calc.display.value = "Syntax Error!"
  }
}
// Clear the display
function clearDisplay() {
displayText = ""
document.calc.display.value = ""
}
</script>


<!-- My Simple CSS CODES  -->
<style>
.table {
   margin: auto;
   border: 1px solid black;
   text-align: center;
   width: 20%;
   height: 50%;
   background-color: green;
}
.btn {
   width: 40px;
   height: 40px;
}
  .btn:hover {
	background-color: #F9FFE6;
  }
.txt {
   width: 250px;
   height: 30px;
   padding-bottom: 25px;
   text-align: right;
}

</style>

<div class="table"> </br>
<form NAME=calc>
<INPUT TYPE=text SIZE=22  class="txt" NAME=display0>
<INPUT TYPE=text SIZE=22  class="txt" NAME=display>
</br>
</br>
<INPUT TYPE=button NAME="seven" VALUE="7" class="btn" onClick=addDisplay(7)>
<INPUT TYPE=button NAME="eight" VALUE="8" class="btn" onClick=addDisplay(8)>
<INPUT TYPE=button NAME="nine" VALUE="9" class="btn" onClick=addDisplay(9)>
<INPUT TYPE=button NAME="multiplication" VALUE="*" class="btn" onClick=addDisplay("*")>
<INPUT TYPE=button NAME="plus" VALUE="+" class="btn" onClick=addDisplay("+") onClick=addNumbers()>
</br>
<INPUT TYPE=button NAME="four" VALUE="4" class="btn" onClick=addDisplay(4)>
<INPUT TYPE=button NAME="five" VALUE="5" class="btn" onClick=addDisplay(5)>
<INPUT TYPE=button NAME="six" VALUE="6" class="btn" onClick=addDisplay(6)>
<INPUT TYPE=button NAME="minus" VALUE="-" class="btn" onClick=addDisplay("-")>
<INPUT TYPE=button NAME="sqareroot" VALUE="SqrT" class="btn" onClick=sqrt()> <!-- square root -->
</br>
<INPUT TYPE=button NAME="one" VALUE="1" class="btn" onClick=addDisplay(1)>
<INPUT TYPE=button NAME="two" VALUE="2" class="btn" onClick=addDisplay(2)>
<INPUT TYPE=button NAME="three" VALUE="3" class="btn" onClick=addDisplay(3)>
<INPUT TYPE=button NAME="division" VALUE="/" class="btn" onClick=addDisplay("/")>
<INPUT TYPE=button NAME="squarex" VALUE="x^" class="btn" onClick=square()> <!-- exponent -->
</br>
<INPUT TYPE=button NAME="zero" VALUE="0" class="btn" onClick=addDisplay(0)>
<INPUT TYPE=button NAME="opar" VALUE="(" class="btn" onClick=addDisplay('(')>
<INPUT TYPE=button NAME="cpar" VALUE=")" class="btn" onClick=addDisplay(')')>
<INPUT TYPE=button NAME="dot" VALUE="." class="btn" onClick=addDisplay(".")>
<INPUT TYPE=button NAME=enter VALUE="=" class="btn" onClick=calculate()>
</br>
<INPUT TYPE=button NAME=clear VALUE="C" style="height:40px; width: 217px" onClick=clearDisplay()>
</form>
</div>

</BODY>
</HTML>
