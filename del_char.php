<!-- delete -->
<?php
    require "koneksi.php";

    $id = $_GET['id'];

    $result = mysqli_query($conn, "DELETE FROM characters WHERE id=$id");

    if ($result){
        echo "
        <script> 
            alert ('data berhasil dihapus');
            document.location.href = 'character.php';
        </script>";
    } else {
        echo "
        <script> 
            alert ('gagal dihapus');
            document.location.href = 'del_char.php';
        </script>";
    }
?>