<?php require "../Controller/controller.php";?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
</head>
<body>
<table>
    <thead>
            <tr>
                <th>Vehicle Name</th>
                <th>Maximum Number Of Passengers</th>
                <th>CPC Required?</th>
                <th>PCV Required?</th>
                <th>Price</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach ($results as $vehicle): ?>
            <tr>
                <td><?=$vehicle->vehicleName?></td>
                <td><?=$vehicle->numberOfPassengers?></td>
                <td><?=$vehicle->CPCRequired?></td>
                <td><?=$vehicle->PCVRequired?></td>
                <td><?=$vehicle->price?></td>
            </tr>
        <?php endforeach ?>     
        </tbody>    





</table>

    
</body>
</html>