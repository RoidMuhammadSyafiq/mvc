<!DOCTYPE html>
<html lang="en">
<head>
    <title>Program kerja</title>
</head>
<body>
    <?php
    if (isset($_SESSION['error'])){
        echo $_SESSION['error'];
        unset($_SESSION['error']);
    }
    if (isset($_SESSION['suc'])){
        echo $_SESSION['succ'];
        unset($_SESSION['succ']);
    }
    ?>
    <h2>Masukan Kegiatan</h2>
    <form action="input.php" method="POST">
        <p>Nama Kegiatan :</p><input type="text" name="kegiatan" id="">
        <br>
        <p>Tanggal Kegiatan</p><input type="text" name="tanggal" id="">
        <br>
        <p>Waktu Kegiatan</p><input type="text" name="jam" id="">
        <br>
        <input type="submit" value="kirim" name="kirim">
    </form>
<h2>Jadwal Kegiatan</h2>
    <table border="1" cellpadding='5' cellspacing='0'>
        <tr>
            <th>Nama Kegiatan</th>
            <th>Tanggal Kegiatab</th>
            <th>Waktu Kegiatan</th>
        </tr>
        <?php foreach($jadwal as $p) { ?>
            <tr>
                <td><?= $p['kegiatan']?></td>
                <td><?= $p['tanggal']?></td>
                <td><?= $p['jam']?></td>
            </tr>

        <?php } ?>
    </table>
</body>
</html>