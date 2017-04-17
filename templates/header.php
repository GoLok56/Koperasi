<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Koperasi</title>
        <link rel="stylesheet" href="assets/css/style.css">
    </head>

    <body>
        <nav>
            <?php if(Session::exist('username')){ ?>
            <a href="index.php">Home</a>    
            <a href="logout.php">Logout</a>
            <?php }?>
        </nav>
