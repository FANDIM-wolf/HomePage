<html>
<head>
    <title>AQUA BANK</title>
    <link href="css/style.css" rel="stylesheet" type="text/css">
</head>
<body>
<center>
<br>

<div class="main">
    <img src="images/aquabank_logo.png" width="550" height="300">
    <div id="panel">
    <a href="index.php">Main</a>
    <a href="get_card.php">Get card</a>
    <a href="index.php">Show my data</a>
    </div>
    <br>
    <h3>Write down your data </h3>
    <form method="post" action="">
    <input style="width:360px;
    height:35px;" type="text"  value="none" name="name_in" placeholder="name"   >
    <br>
   <input style="width:360px;
    height:35px;" type="text"  value="none" name="surname_in" placeholder="surname"   >
    <br>
    <input style="width:360px;
    height:35px;" type="text"  value="none" name="email_in" placeholder="email"   >
    <br>
    <input style="width:360px;
    height:35px;" type="text"  value="none" name="address_in" placeholder="address"   >
    <br>
    <input type="submit">
    <br>
    </form>
</div>

</center>

<?php 

//connect to db
$db = mysqli_connect("localhost","root","","db_my");
if(!$db){
    echo "Error to connect to MySQL";

}
else{
    $str = 'SELECT `name` , `surname` FROM users ';
    $query =mysqli_query($db,$str); // it returns object with information from data base , list exactly

   
}

$name_user = $_POST['name_in'];
$surname=$_POST['surname_in'];
$email = $_POST['email_in'];
$address = $_POST['address_in'];

    $sql = "INSERT INTO `users` ( `name`,`surname`,`email`,`address`) 
    VALUES('$name_user','$surname','$email','$address')";
    mysqli_query($db,$sql);
    
    $db->close();
?>



<body>

</html> 