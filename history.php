<?php
    require_once "core/init.php";

    require_once "templates/header.php";
?>

<h1>History Tabungan</h1>
<table border="1">

    <tr>
        <td>No</td>
        <td>Jumlah</td>
        <td>Tanggal</td>
    </tr>

    <?php
        $data = $tabungan->get(Session::get('userid'));
        $nomer = 0;
        while($row = $data->fetch_assoc()){?>
            <tr>
                <td><?php echo ++$nomer; ?></td>
                <td><?php echo $row['jumlah']; ?></td>
                <td><?php
                    $date = new DateTime($row['waktu']);
                    echo date_format($date, "j F Y"); ?>
                </td>
            </tr>
        <?php } ?>

</table>
