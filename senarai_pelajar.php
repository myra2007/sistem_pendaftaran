<html>
<body>
<?php
include('config.php');

if(isset($_POST['submit'])) { // Removed the extra semicolon here
    $id = ($_POST['id']);
    $nama_pelajar = ($_POST['nama_pelajar']);
    $no_kp = ($_POST['no_kp']);

    // Use mysqli for database interaction
    $query1 = mysqli_query($connection, "INSERT INTO data_pelajar (id, nama_pelajar, no_kp) VALUES ('$id', '$nama_pelajar', '$no_kp')");

    if($query1) {
        header("Location: senarai_pelajar.php"); // Added closing quotation mark
        exit(); // Always call exit() after header redirection
    } else {
        echo "Error: " . mysqli_error($connection); // Show error if the query fails
    }
}
?>
<center>
<fieldset style="width:500px;">
<h4>TAMBAH REKOD PELAJAR</h4>

<form method="post" action="senarai_pelajar.php">
<br>ID PELAJAR: <input type="text" name="id"></br>
<br>NAMA PELAJAR: <input type="text" name="nama_pelajar"></br>
<br>NO KP: <input type="text" name="no_kp"></br>
<br><input type="submit" name="submit"><br>
</form>

</fieldset>
</center>
</body>
</html>
