<?php
session_start();
if (isset($_SESSION['unique_id'])) {
  header("location: users.php");
}
?>

<?php include_once "header.php"; ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login | Sudut Pajak</title>
  <!-- Favicon icon -->
  <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
  <!-- Tailwind CSS -->
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100 flex justify-center items-center min-h-screen">
  <div class="max-w-md w-full p-8 bg-white rounded-lg shadow-lg">
    <header class="text-center text-xl font-bold mb-4">Login</header>
    <form action="#" method="POST" enctype="multipart/form-data" autocomplete="off" class="space-y-4">
      <div class="text-red-500 error-text"></div>
      <div class="flex flex-col">
        <label for="email" class="mb-1">Email Address</label>
        <input type="text" name="email" id="email" placeholder="Enter your email" required class="border border-gray-300 rounded-md py-2 px-3 focus:outline-none focus:border-blue-500">
      </div>
      <div class="flex flex-col">
        <label for="password" class="mb-1">Password</label>
        <div class="relative">
          <input type="password" name="password" id="password" placeholder="Enter your password" required class="border border-gray-300 rounded-md py-2 px-3 focus:outline-none focus:border-blue-500">
          <i class="fas fa-eye absolute top-1/2 right-3 -translate-y-1/2 cursor-pointer"></i>
        </div>
      </div>
      <div class="flex justify-center">
        <input type="submit" name="submit" value="Continue to Chat" class="bg-blue-500 text-white py-2 px-4 rounded-md cursor-pointer transition duration-300 hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500">
      </div>
    </form>
    <div class="text-center mt-4">Not yet signed up? <a href="registrasi.php" class="text-blue-500">Signup
        now</a></div>
    <div class="text-center mt-2"><a href="../index.php" class="text-blue-500">Halaman Utama</a></div>
  </div>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js"></script>
  <script src="javascript/pass-show-hide.js"></script>
  <script src="javascript/login.js"></script>
</body>

</html>