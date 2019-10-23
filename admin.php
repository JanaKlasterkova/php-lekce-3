<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Úkol 2</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</head>
<body>
<br>
<div class="container">


<?php
if( !isset($_SESSION['Login']) )
    die( "Přístup zamítnut" );
else {
    echo "Výtejte, ", $_SESSION['Login'],"<br>" ;
}foreach($_SESSION['Data'] as $klic => $hodnota){
    echo $klic;
    echo ": ";
    echo $hodnota;
    echo "<br>"; }
?>
<br><br>
<a href="logout.php">Odhlásit</a> </p>


</div>
</body>
</html>