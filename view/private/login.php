<?php
session_start();
ob_start();
require '../../model/config.php';
$title = "ورود";
if (isset($_SESSION['mobileNumber']) || isset($_SESSION['login'])) {
    if (isset($_SESSION['login'])) {
        header("Location: /panahi/view/private/users/");
    } else {
        include_once '../header-login.php';
    }
    error_reporting(E_ERROR | E_PARSE);
} else {
    header("Location: /panahi/view/public/login.php");
}



?>
<div class="desktop-view">
    <?php

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if ($_POST['editMobileNumber']) {
            unset($_SESSION['mobileNumber']);
            unset($_SESSION["OTPSeNd"]);
            header("Location: /panahi/view/public/login.php");
        }
        if ($_POST['OTP']) {
            if ($_POST['OTP'] == $_SESSION["OTPSeNd"]) {

            $mobileNumber = $_SESSION['mobileNumber'];

            $userExist = $connect->query("SELECT `id` FROM `users` WHERE `mobileNumber` = $mobileNumber")->fetch(PDO::FETCH_NUM);
            if ($userExist[0] < 1) {
                $addUser = $connect->prepare("INSERT INTO `users`(mobileNumber) VALUES (:mobileNumber)");
                $addUser->bindParam(':mobileNumber', $mobileNumber);
                $addUser->execute();
            }
            $id = $connect->query("SELECT `id` FROM `users` WHERE `mobileNumber` = $mobileNumber")->fetch(PDO::FETCH_NUM);
            $_SESSION['login'] = "TRUE";
            $_SESSION['userID'] = $id[0];


            }



            header("Location: /panahi/view/private/users/");
            
        }
    }

    ?>
    <div class="login-wrapper">
        <section class="container sms-wrapper">
            <form class="form-sms mx-auto mt-4" method="post">
                <h1 class="text-center login-title">تایید رمز</h1>
                <div class="row mb-3">
                    <div class="col-6 d-flex justify-content-end"><button class="btn btn-red btn-resend">ارسال مجدد</button></div>
                    <div class="col-6"><input class="input input-time" type="text" value="120 ثانیه" disabled></div>
                </div>
                <input class="input input-code mb-3" type="number" placeholder="کد دریافتی 6 رقمی" name="OTP">
                <button class="btn btn-red btn-sms mb-3">ادامه</button>

            </form>
            <p>شماره را اشتباه وارد کردید؟
            <form class="red-link" method="post"><input type="submit" name="editMobileNumber" value="ویرایش"></form>
            </p>
        </section>
        <section class="girl-wrapper">
            <img class="" src="/panahi/assets/img/girl-login.svg" alt="">
        </section>
    </div>
</div>
<div class="mobile-view">
    <section class="position-relative">
        <img class="red-circle-login" src="/panahi/assets/img/red-circle.svg" alt="">
        <img class="girl-photo" src="/panahi/assets/img/girl-login.svg" alt="">
    </section>
    <section class="container">
        <form class="form-sms mx-auto" method="post">
            <h1 class="text-center login-title">تایید رمز</h1>
            <div class="row mb-3">
                <div class="col-6 d-flex justify-content-end"><button class="btn btn-red btn-resend">ارسال مجدد</button></div>
                <div class="col-6"><input class="input input-time" type="text" value="120 ثانیه" disabled></div>
            </div>
            <input class="input input-code mb-3" type="text" placeholder="کد دریافتی 6 رقمی" name="OTP">
            <button class="btn btn-red btn-sms mb-3">ادامه</button>
            <p>شماره را اشتباه وارد کردید؟
            <form class="red-link" name="editMobileNumber" method="post"><input type="submit" value="ویرایش"></form>
            </p>
        </form>
    </section>
</div>

<script src="/panahi/assets/js/main.js"></script>
<script src="/panahi/assets/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
<script src="/panahi/assets/js/splide.min.js"></script>
</body>

</html>