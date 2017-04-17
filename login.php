<?php

    $sukses_login = false;
    if(Input::get("login")){
        $sukses_login = $user->masuk(Input::get('username'), Input::get('password'));
        if($sukses_login){
            header("Refresh:0");
        }
    }

?>

<form method="post" action="">

    <h2>Login</h2>

    <div>
        <label for="username">Username</label>
        <input type="text" name="username" id="username">
    </div>

    <div>
        <label for="password">Password</label>
        <input type="password" name="password" id="password">
    </div>

    <div>
        <a href="register.php">Belum punya akun? Daftar disini!</a>
    </div>

    <div>
        <input type="submit" value="Login" name="login" />
    </div>

    <div>
        <?php
            if(Input::get('login') && !$sukses_login) echo "Username atau password salah";
            if(Session::exist('sukses_daftar')) {
                echo "Daftar berhasil!";
                Session::unset('sukses_daftar');
            }
        ?>
    </div>

</form>
