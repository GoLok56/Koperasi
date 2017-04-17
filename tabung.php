<?php
    require_once 'core/init.php';

    if(Input::get('tabung')){
        if($tabungan->simpan(array(
            TableTabungan::$KOLOM_USERID => Session::get('userid'),
            TableTabungan::$KOLOM_JUMLAH => Input::get('jumlah'),
            TableTabungan::$KOLOM_WAKTU => date("j F Y, H:i:s")
        ))){
            $user->update(array(
                TableUser::$KOLOM_TABUNGAN => Input::get('jumlah')
            ));
            Session::set("sukses_nabung", 1);
            header("Location: index.php");
        }
    }

    require_once "templates/header.php";
?>

<form method="post">

    <h2>Menabung</h2>

    <div>
        <label for="jumlah">Jumlah</label>
        <input type="text" name="jumlah" id="jumlah">
    </div>

    <div>
        <input type="submit" name="tabung" value="Tabung">
    </div>

</form>
