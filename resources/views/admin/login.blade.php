<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Sudut Pajak</title>
    <link rel="icon" type="image/png" href="{{ asset('image/favicon.png') }}">
    <!-- style css -->
    <link href="{{ asset('css/style2.css') }}" rel="stylesheet">
</head>


<body>
    <div class="container">
        <div class="login">
            <form action="" method="POST">
                <h1>Login</h1>
                <hr>
                <p>Selamat Datang </p>
                <label for="">Username</label>
                <input type="text" name="username" placeholder="Masukan Username Anda">
                <label for="">Password</label>
                <input type="password" name="password" placeholder="Masukan Kata Sandi Anda">
                <?php if (isset($error)) { ?>
                    <p style="background-color: white; color:red"><?= $error ?></p>
                <?php } ?>
                <button type="submit">Login</button>
                <p>Belum Punya Akun?</p>
                <p><a href="registrasi.php<?= isset($_GET['id']) ? '?id=' . $_GET['id'] : '' ?>">Daftar Sekarang</a></p>
            </form>
        </div>
        <div class="right">
            <img src="{{ asset('image/2.png') }}"alt="image">
        </div>
    </div>
</body>

</html>