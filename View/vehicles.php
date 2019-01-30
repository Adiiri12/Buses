<?php include_once "header.php"?>
<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
    <h2> Vehicles </h2>

    <form>
        Number of Passengers:<input type="number"><br>
        From:<input type="date"><br>
        To:<input type="date"><br>
        <p>License Required:</p><select>
        <option value="select">select</option>
        <option value="CVC">CVC</option>
        <option value="PCV">PCV</option>
        </select>
        <br>
        Price Range:<input><br>
        <input type="submit"><br>
    </form>
</body>
</html>