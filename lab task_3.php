<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Simple Calculator</title>

<style>

body{
    margin:0;
    height:100vh;
    display:flex;
    justify-content:center;
    align-items:center;
    background:#f4f4f4;
    font-family:Arial, sans-serif;
}

.calculator{
    background:white;
    padding:20px;
    border-radius:10px;
    box-shadow:0 0 10px rgba(0,0,0,0.2);
}

#display{
    width:100%;
    height:50px;
    font-size:22px;
    text-align:right;
    padding:5px;
    margin-bottom:10px;
}

.buttons{
    display:grid;
    grid-template-columns:repeat(4,70px);
    gap:10px;
}

button{
    height:50px;
    font-size:18px;
    border:none;
    border-radius:5px;
    background:#3498db;
    color:white;
    cursor:pointer;
}

button:hover{
    background:#2980b9;
}

.clear{
    background:#e74c3c;
}

.clear:hover{
    background:#c0392b;
}

</style>
</head>

<body>

<div class="calculator">

<input type="text" id="display" readonly>

<div class="buttons">

<button class="clear" onclick="clearDisplay()">C</button>
<button onclick="appendValue('/')">/</button>
<button onclick="appendValue('*')">*</button>
<button onclick="appendValue('-')">-</button>

<button onclick="appendValue('7')">7</button>
<button onclick="appendValue('8')">8</button>
<button onclick="appendValue('9')">9</button>
<button onclick="appendValue('+')">+</button>

<button onclick="appendValue('4')">4</button>
<button onclick="appendValue('5')">5</button>
<button onclick="appendValue('6')">6</button>
<button onclick="calculate()">=</button>

<button onclick="appendValue('1')">1</button>
<button onclick="appendValue('2')">2</button>
<button onclick="appendValue('3')">3</button>
<button onclick="appendValue('0')">0</button>

</div>
</div>

<script>

function appendValue(value){
    document.getElementById("display").value += value;
}

function clearDisplay(){
    document.getElementById("display").value = "";
}

function calculate(){
    let display = document.getElementById("display");

    try{
        display.value = eval(display.value);
    }
    catch{
        display.value = "Invalid";
    }
}

</script>

</body>
</html>