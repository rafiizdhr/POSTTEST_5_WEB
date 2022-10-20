<?php
    require "koneksi.php";

    $result = mysqli_query($conn,"SELECT * FROM characters");

    $characters = [];

    while($row = mysqli_fetch_assoc($result)){
        $characters[] = $row;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Characters List</title>
    <link rel="stylesheet" href="index2.css">
    <style>
        <?php include('index2.css'); ?>
    </style>
</head>
<body>
    <div class="content">
        <h1>Injustice Characters</h1>
        <h3 style="text-align:center;">LIST CHARACTERS</h3>
        <br><hr><br>
    <table border="1" width=60% align="center">
        <tr>
            <th>ID</th>
            <th>Character Name</th>
            <th>Damage</th>
            <th>Health</th>
            <th>Rank</th>
            <th>Promotion</th>
            <th>Price</th>
            <th>Description</th>
            <th>ACTION</th>
        </tr>
        <?php $i = 1; foreach($characters as $char): ?>
        <tr>
            <td><?php echo $char['id']; ?></td>
            <td><?php echo $char['nama']; ?></td>
            <td><?php echo $char['Damage'];?></td>
            <td><?php echo $char['Health']; ?></td>
            <td><?php echo $char['Rank']; ?></td>
            <td><?php echo $char['Promotion']; ?></td>
            <td><?php echo $char['Price']; ?></td>
            <td><?php echo $char['Description']; ?></td>
            <td align="center">
                <a href="update_char.php?id=<?php echo $char['id'];?>"><button>UPDATE</button></a>
                <a href="del_char.php?id=<?php echo $char['id'];?>"><button>DELETE</button></a>
            </td>
        </tr>
        <?php $i++; endforeach; ?>
    </table>
    <a href="add_char.php" class="tambahdata"><button align="center">TAMBAH DATA</button></a>
    </div>
</body>
</html>
