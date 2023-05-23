<?php

$name = filter_input(INPUT_POST, 'name');
$number = filter_input(INPUT_POST, 'number');
$address = filter_input(INPUT_POST, 'address');
$payment = filter_input(INPUT_POST, 'payment');
$host = "localhost";
$dbusername = "root";
$dbpassword= "";
$dbname = "aerodrop";

$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);

if (mysqli_connect_error()){
    die('Connect Error ('. mysqli_connect_error() .') '
    .mysqli_connect_error());
}
else{
    $sql = "INSERT INTO data (name, number, address, payment)
    values ('$name', '$number', '$address', '$payment')";
    if($conn->query($sql)){
        echo "Your order is successful. Thanks";
    }
    else{
        echo "Error:". $sql ."<br>". $conn->error;  
    }
    $conn->close();

}

?>
