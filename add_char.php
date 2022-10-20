<!-- create -->

<?php
    require "koneksi.php";
    $characters = [];
    if (isset($_POST['tambah'])){
        $kul = "SELECT * FROM characters";
        $result = mysqli_query($conn, $kul);
        $characters = [];
        while($row = mysqli_fetch_assoc($result)){
            $characters[] = $row;
        }

        $id = count($characters)+1;
        $nama = $_POST['nama'];
        $damage = $_POST['damage'];
        $health = $_POST['health'];
        $rank = $_POST['rank'];
        $promotion = $_POST['promotion'];
        $price = $_POST['price'];
        $description = $_POST['description'];

        $sql = "INSERT INTO characters VALUES ('$id','$nama','$damage','$health','$rank','$promotion','$price','$description')";

        $result = mysqli_query($conn, $sql);

        if ($result){
            echo "
            <script> 
                alert ('data berhasil ditambah');
                document.location.href = 'character.php';
            </script>";
        } else {
            echo "
            <script> 
                alert ('data gagal ditambah');
                document.location.href = 'add_char.php';
            </script>";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Characters | add</title>
    <link rel="stylesheet" href="index2.css">
</head>
<body>
    <div class="content">
        <h1>Injustice Characters</h1>
        <br>
        <p>Add ur powerfull Injustice Character</p><br><hr><br>
        <form action="add_char.php" method="post">
            <table>
                <tr>
                    <td>Character Name</td>
                    <td>:</td>
                    <td><input type="text" name="nama"></td>
                </tr>
                <tr>
                    <td>Damage</td>
                    <td>:</td>
                    <td><input type="number" name="damage"></td>
                </tr>
                <tr>
                    <td>Health</td>
                    <td>:</td>
                    <td><input type="number" name="health"></td>
                </tr>
                <tr>           
                    <td>Rank</td>
                    <td>:</td>
                    <td>
                        <input type="radio" name="rank" value="gold"> Gold
                        <input type="radio" name="rank" value="silver"> Silver
                        <input type="radio" name="rank" value="bronze"> Bronze
                    </td>
                </tr>
                <tr>
                    <td>Promotion</td>
                    <td>:</td>
                    <td>
                        <select name="promotion">
                            <option value="none">none</option>
                            <option value="I">I</option>
                            <option value="II">II</option>
                            <option value="III">III</option>
                            <option value="IV">IV</option>
                            <option value="V">V</option>
                            <option value="VI">VI</option>
                            <option value="VII">VII</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Price</td>
                    <td>:</td>
                    <td><input type="number" name="price"></td>
                </tr>
                <tr>
                    <td>Deskripsi</td>
                    <td>:</td>
                    <td><textarea name="description" id="" cols="20" rows="3"></textarea></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>
                        <button id="myBtn" type="submit" name="tambah">Kirim</button>
                        <button id="myBtn" type="reset" name="reset">Reset</button>
                    </td>    
                </tr>
            </table>
        </form>
    </div>
</body>
</html>