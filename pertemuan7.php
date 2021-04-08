<?php
// Variable scope / lingkup variabel
// $x = 10;

// function tampilx() {
//     global $x;
//     echo $x;
// }

// tampilx();

// SUPERGLOBALS
// variable global milik php
// merupakan Array Associative
// echo $_SERVER["SERVER_NAME"]

// $_GET
// $_GET["nama"] = "Ikhsan Ardiansyah";
// $_GET["nrp"] = "203040019";
// var_dump($_GET);

// cek apakah tombol submit sudah tekan atau belum
if( isset($_POST["submit"]) ) {
    // cek username & password
    if( $_POST["username"] == "admin" && $_POST["password"] == "123" ) {
    // jika benar , redirect ke halaman admin
    header("Location: admin.php");
    exit;
    } else {
    // jika salah, tampilkan pesan kesalahan
    $error = true;
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
<h1>Login Admin</h1>
<?php if ( isset($error) ) : ?>
<p style="color: red; font-style: italic">username / password salah!</p>
<?php endif; ?>
<ul>
<from action="" method="post">
    <li>
        <label for="username">username :</label>
        <input type="text" name="username" id="username">
    </li>
    <li>
        <label for="password">password :</label>
        <input type="password" name="password" id="password">
    </li>
    <li>
        <button type="submit" name="submit">Login</button>
    </li>

</from>
</ul>

</body>
</html>
