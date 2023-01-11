<html>
    <head>
        <title>Comments</title>
</head>
<body>
    <h2> Daftar Komentar</h2>
    <table border="1px" width="50%">
        <tr align="center">
            <td>Nama</td>
            <td>Email</td>
            <td>Komentar</td>
</tr>



<?php
include 'connect.php';
$query = mysqli_query($conn, "select * from comment");
while ($data = mysqli_fetch_array($query))
{
?>
    <tr>
        <td><?php echo $data ['nama']; ?></td>
        <td><?php echo $data ['email']; ?></td>
        <td><?php echo $data ['komentar']; ?></td>
</tr>
<?php
}
?>
</table>
<br>

Kembali Ke <a href="index.php">Halaman Utama</a>
</body>
</html>

