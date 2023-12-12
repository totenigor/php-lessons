<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>przedstawianie danych w tabeli</title>
</head>
<body>
    
<?php

$connect = mysqli_connect('localhost', 'root', '', 'pracownicy');
$result = mysqli_query($connect, "SELECT * FROM pracownicy ORDER BY id");

?>

<table border = "1px solid black">
    <?php while($rows = mysqli_fetch_array($result)){ ?>
        <tr>
            <td><?php echo $rows['id']; ?></td>
            <td><?php echo $rows['imie']; ?></td>
            <td><?php echo $rows['nazwisko']; ?></td>
        </tr>   
    <?php } ?>
</table>

</body>
</html>

