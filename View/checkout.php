<?php include_once "header.php"?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="styles.css" class="stylesheet">
    <title>Berwyn Buses</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
    div {
    width: 35px;
    height: 5px;
    background-color: black;
    margin: 6px 0;
    }
    * {
    box-sizing: border-box;
    }
    .column1 {
    float: left;
    width: 70%;
    padding: 10px;
    height: 800px; 
    }
    .column2 {
    float: right;
    width: 30%;
    padding: 10px;
    height: 800px; 
    }
    div.scroll {
    background-color:#bbb;
    width: 270px;
    height: 400px;
    overflow: scroll;
    }
    </style>
</head>
<body>
<div></div>
<div></div>
<div></div>

<h2>CHECKOUT</h2>

    <div class="column1" style="background-color:#aaa;">
        <form>
            Email:&emsp;&emsp;&emsp;&nbsp;<input type="text" name="email"><br><br>
            First Name:&emsp;<input type="text" name="firstname"><br><br>
            Last Name:&emsp;<input type="text" name="lastname"><br><br>
        </form>
        <p>6 seat MPV:£55 x 4hr = £220</p>
        <p>10 seat VIP:£55 x 2hr =<u> £110</u></p>
        <p style="margin-left:110px">Total: £330</p>
        <button type="button" style="margin-left:100px">CHECKOUT</button> 
    </div>
    <div class="column2" style="background-color:#bbb;">
        <div class="scroll">
            <img src="photos/flintstones.jpg" alt="6 seat MVP"style="width:200px;height:200px;">
            <p>6 seat MVP</p>
            <img src="photos/mcqueen.jpg" alt="10 seat VIP"style="width:200px;height:200px;">
            <p>10 seat VIP</p>
        </div>
    </div>





</body>
</html>