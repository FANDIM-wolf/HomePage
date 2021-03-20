<html>
<head>
    <title>AQUA BANK</title>
    <link href="css/style.css" rel="stylesheet" type="text/css">
</head>

<center>
<br>

<div class="main">
    <img src="images/aquabank_logo.png" width="550" height="300">
    <div id="panel">
    <a href="index.php">Main</a>
    <a href="index.php">Get card</a>
    <a href="index.php">Show my data</a>
    </div>
    <br>
    <h3>Your contribution</h3>
    <input style="width:360px;
    height:35px;" type="number" id="input_contribution"  >
    <br>
    <h3>Year percent %</h3>
    <input style="width:360px;
    height:35px;"  type="number" id="input_year"   >
    <br>
    <br>
    <button style="width:180px;
    border:aqua;  
    height:45px;
    background-color: aqua;
    color:white;
    border-radius:25px;
    font-family: 'Times New Roman';
    font-size: 26px;
    " id="but"  onclick="Calculate_result();"  >Calculate</button>

    <br>
    <p class="parag"></p>
</div>
</center>

<script  text="javascript">
   function Calculate_result()
   {
       var contrib = document.getElementById('input_contribution').value;
       var percent = document.getElementById('input_year');
    


       document.querySelector('.parag').innerHTML=contrib; 
   }
</script>
</html> 