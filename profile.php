<?php require_once "templates/header.php"; ?>

<h1>Halaman Profile</h1>
<p>Selamat datang <?php echo Session::get('username'); ?>!</p>
<p>Total tabungan anda : <?php echo Session::get('tabungan'); ?></p>
<a href="tabung.php">Ingin menabung?</a>
<a href="history.php">Lihat history</a>
<p>
    <?php
        if(Session::exist("sukses_nabung")){
            echo "Tabungan berhasil disimpan!";
            Session::unset("sukses_nabung");
        }
    ?>
</p>
