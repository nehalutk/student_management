<?php

echo "Test ";
$id=$_POST['id'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
    <label for="firstname">Firstname</label>
    <input type="text" name="firstname" placeholder="enter your firstname"><br>
    <label for="lastname">Lastname</label>
    <input type="text" name="lastname" placeholder="enter your lastname">
    <label for="email">Email</label>
    <input type="email" name="email" placeholder="enter your email id">
    <label for="phone no">Phone No.</label>
    <input type="text" name="phoneno" placeholder="enter your phone number">
    <label for="address">Address</label>
    <textarea name="address" cols="5" rows="5"></textarea>
</body>
</html>
