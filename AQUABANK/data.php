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
    
    <form method="post" action="">
    <input style="width:360px;
    height:35px;" type="text"  value="none" name="name_in" placeholder="name"   >
    <br>
   <input style="width:360px;
    height:35px;" type="text"  value="none" name="surname_in" placeholder="surname"   >

    <br>
    <input type="submit"  >
    </form>
    <p class="parag"></p>
</div>
</center>
<?php
    //connect to db
    $db = mysqli_connect("localhost","root","","db_my");
    $name;
    $surname;
    $name=$_POST['name_in'];
    $surname= $_POST['surname_in'];

    $str = mysqli_query($db,"SELECT * FROM users  WHERE  name='$name' AND surname='$surname' ");
     // it returns object with information from data base , list exactly

    if($str){
        echo "yes";
    }
    else{
        echo "no";
    }
    while($rows=mysqli_fetch_assoc($str)){
        echo $rows["name"];
    }

?>
<script  text="javascript">
   
</script>
</html> 