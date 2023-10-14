<!DOCTYPE html>
<html lang="fa" dir="rtl">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php echo "عارفه پناهی | $title"; ?></title>
    <!-- <link rel="stylesheet" href="/panahi/assets/css/style.css" /> -->
    <link rel="stylesheet" href="/panahi/assets/css/dashboard.css" />
    <link href="/panahi/assets/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous" />
    <link href="/panahi/assets/css/splide.min.css" rel="stylesheet">
</head>

<body class="body-dashboard">
    <header>
        <nav dir="rtl" class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container nav-styler">
                <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <a class="navbar-brand" href="/panahi/index.php">
                    <img class="logo ms-2" src="/panahi/assets/img/logo.svg" alt="logo" />
                    <img src="/panahi/assets/img/arefeh-panahi.svg" alt="panahi-logotype">
                </a>
                <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                    <div class="offcanvas-header">
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="d-flex align-items-center m-3 gap-3">
                        <img class="rounded" src="/panahi/assets/img/user-photo.png" alt="">
                        <div class="pt-2">
                            <h3 class="name">عباس زارعی</h2>
                                <p class="role m-0 p-0">کاربر</p>
                        </div>
                    </div>
                    <div class="offcanvas-body">
                        <ul class="navbar-nav justify-content-start flex-grow-1">
                            <li class="nav-item">
                                <a id="home_btn" class="nav-link py-3 px-3 active" aria-current="page" href="/panahi/view/private/dashboard-home.php">
                                    <div class="d-flex align-items-center">
                                        <img src="/panahi/assets/img/vuesax-outline-home.svg" alt="home" />
                                        <p class="m-0 pe-2">خانه</p>
                                    </div>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a id="profile_btn" class="nav-link py-3 px-3" aria-current="page" href="/panahi/view/private/dashboard-profile.php">
                                    <div class="d-flex align-items-center">
                                        <img src="/panahi/assets/img/user-edit.svg" alt="profile" />
                                        <p class="m-0 pe-2">پـروفایـل</p>
                                    </div>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a id="orders_btn" class="nav-link py-3 px-3" aria-current="page" href="/panahi/view/private/dashboard-orders.php">
                                    <div class="d-flex align-items-center">
                                        <img src="/panahi/assets/img/vuesax-outline-bag-2.svg" alt="bag" />
                                        <p class="m-0 pe-2">سفارش ها</p>
                                    </div>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a id="wallet_btn" class="nav-link py-3 px-3" aria-current="page" href="/panahi/view/private/dashboard-support.php">
                                    <div class="d-flex align-items-center">
                                        <img src="/panahi/assets/img/ticket-icon.svg" alt="ticket" />
                                        <p class="m-0 pe-2">پشتیبانی</p>
                                    </div>
                                </a>
                            </li>
                            <?php
                            if($_SERVER['REQUEST_METHOD'] == "POST"){
                                if($_POST['logout']){
                                    unset($_SESSION['login']);
                                    unset($_SESSION['mobileNumber']);
                                    unset($_SESSION["OTPSeNd"]);
                                    header("Refresh:0");
                                }
                            }
                            ?>
                            <li class="nav-item">
                                <form id="logout_btn" class="nav-link py-3 px-3" aria-current="page" method="post">
                                    <div class="d-flex align-items-center">
                                        <img src="/panahi/assets/img/logout.svg" alt="logout" />
                                        <input type="submit" name="logout" value="خروج">
                                    </div>
                                </form>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    </header>