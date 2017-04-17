<?php
    require_once "Core/init.php";

    if(Input::get("daftar")){
        if($user->daftar(array(
            TableUser::$KOLOM_USERNAME => Input::get("username"),
            TableUser::$KOLOM_PASS => password_hash(Input::get("password"), PASSWORD_DEFAULT),
            TableUser::$KOLOM_STATUS => 1,
            TableUser::$KOLOM_TABUNGAN => 0
        ))) {
            Session::set('sukses_daftar', 1);
            header("Location: index.php");
        }
    }

    require_once "Templates/header.php";
?>

<form method="post" action="">

    <h2>Daftar</h2>

    <div>
        <label for="username">Username</label>
        <input type="text" name="username" id="username">
    </div>

    <div>
        <label for="password">Password</label>
        <input type="password" name="password" id="password">
    </div>

    <div>
        <input type="submit" value="Daftar" name="daftar" />
    </div>

</form>
