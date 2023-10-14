<?
session_start();
ob_start();
?>
<!DOCTYPE html>
<html lang="fa" dir="rtl">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title><?php echo "عارفه پناهی | $title"; ?></title>

  <?php if ($title == "سبد خرید") {
    echo "<link rel='stylesheet' href='/panahi/assets/css/cart.css' />
";
  } else {
    echo "  <link rel='stylesheet' href='/panahi/assets/css/style.css' />
";
  } ?>
  <link href="/panahi/assets/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous" />
  <link href="/panahi/assets/css/splide.min.css" rel="stylesheet">
</head>

<body>
  <header>
    <nav dir="rtl" class="navbar navbar-expand-lg bg-body-tertiary">
      <div class="container">
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="/panahi/index.php"><img class="logo" src="/panahi/assets/img/logo.svg" alt="logo" /></a>

        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
          <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasNavbarLabel">لوگو</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
          </div>
          <div class="offcanvas-body">
            <ul class="navbar-nav justify-content-start flex-grow-1 pe-3">
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="/panahi/index.php">صفحه اصلی</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/panahi/view/public/courses.php">دوره ها</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">بلاگ</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/panahi/view/public/about.php">درباره من</a>
              </li>
            </ul>
            <form class="d-flex position-relative align-items-center" role="search">
              <input class="form-control me-2 search-bar" type="search" placeholder="جست و جو ..." aria-label="Search" />
              <button class="btn btn-outline-none search-btn" type="submit">
                <img src="/panahi/assets/img/search-normal.svg" alt="" />
              </button>
            </form>
          </div>
        </div>
        <div>
          <a class="btn" href="/panahi/view/public/cart.php">
            <img src="/panahi/assets/img/bag-2.svg" alt="" />
          </a>
          <?php if (isset($_SESSION['login'])) {
            echo "<a href='/panahi/view/public/login.php' class='btn btn-red'>حساب کاربری</a>";
          } else {
            echo "<a href='/panahi/view/public/login.php' class='btn btn-red'>ورود / ثبت نام</a>";
          }; ?>
        </div>
      </div>
    </nav>
  </header>