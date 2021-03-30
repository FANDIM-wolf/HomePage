<html>
<head>
    <title>AQUA BANK</title>
    <link href="css/style.css" rel="stylesheet" type="text/css">
</head>

<center>
<br>

<div class="main">
    <img src="images/aquabank_logo.png" width="590" height="300">
    <div id="panel">
    <a href="index.php">Main</a>
    <a href="get_card.php">Get card</a>
    <a href="data.php">Show my data</a>
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
    <div id="block" style="display:none;">
    <h3 style="font-family: 'Times New Roman';
    font-size: 26px;">Result in one year:</h3>
    <p style="font-family: 'Times New Roman';
    font-size: 26px;"  class="parag"></p>
    </div>
</div>
</center>



<script  text="javascript">
   function Calculate_result()
   {
       var contrib = document.getElementById('input_contribution').value;
       var percent = document.getElementById('input_year').value;
       var block = document.getElementById('block');
       block.style.display = "block";
       var result = (contrib*percent)/100;
       

       document.querySelector('.parag').innerHTML=result; 
   }
</script>
</html> 