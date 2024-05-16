<?php 
if($_SERVER['REQUEST_METHOD']=="POST") {
    ?>
    <table>
        <tr>
            <td>Nama</td>
            <td>: <?= $_POST['nama'] ?></td>
        </tr>
        <tr>
            <td>Tempat Lahir</td>
            <td>: <?= $_POST['tmpLahir']?></td>
        </tr>
        <tr>
            <td>Tanggal Lahir</td>
            <td>: <?= $_POST['tglLahir']?></td>
        </tr>
    </table>
<?php 
} else {
    header('Location: form.php');
}
?>
