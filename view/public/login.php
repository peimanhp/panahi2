<?php
session_start();
ob_start();
$title = "ورود";
include_once '../header-login.php';
if(isset($_SESSION['login'])){
    header("Location: /panahi/view/private/users/");
}
if(isset($_SESSION['login'])){
    header("Location: /panahi/view/private/login.php");
}
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $mobileNumber = $_POST['mobileNumber'];
    if ((($mobileNumber != null) || ($mobileNumber != '')) && (strlen($mobileNumber) == 11) && (substr($mobileNumber, 0, 1) == 0) && (substr($mobileNumber, 1, 1) == 9) && ((substr($mobileNumber, 2, 1) != 4) || (substr($mobileNumber, 2, 1) != 5) || (substr($mobileNumber, 2, 1) != 6) || (substr($mobileNumber, 2, 1) != 7) || (substr($mobileNumber, 2, 1) != 8))) {

        $_SESSION['mobileNumber'] =  $mobileNumber;
        ini_set("soap.wsdl_cache_enabled", "0");
        try {
            $client = new SoapClient("http://sms.farazsms.com/class/sms/wsdlservice/server.php?wsdl");
            $user = "09361464409";
            $pass = "A0142426a@";
            $fromNum = "۵۰۰۰۱۲۵۴۷۵";
            $toNum = $mobileNumber;
            $randOTP = rand(100000, 999999);
            $_SESSION["OTPSeNd"] = $randOTP;
            $op = "send";
            $pattern_code = "0twc9x9nbtwrsnf";
            $input_data = array(
                "verification-code" => $randOTP
            );
            echo $client->sendPatternSms($fromNum, $toNum, $user, $pass, $pattern_code, $input_data);
            $_SESSION["OTPSeNd"] = $randOTP;
            echo $client->SendSMS($fromNum, $toNum, $messageContent, $user, $pass, $op);
            echo $status;
        } catch (SoapFault $ex) {
            echo $ex->faultstring;
        }

        header("Location: /panahi/view/private/login.php");

    }
}
?>
<div class="spinner-wrapper">
    <div class="spinner">
        <div class="spinner-border text-danger" role="status">
            <span class="visually-hidden">Loading...</span>
        </div>
    </div>
</div>

<div class="desktop-view">
    <div class="login-wrapper">

        <section class="container sms-wrapper">

            <form class="form-sms mx-auto mt-4" method="post" onsubmit="return validate()">
                <h1 class="text-center login-title">ورود</h1>
                <p class="text-login">جهت ورود یا ثبت نام در سایت، شماره موبایل خود را با دقت وارد کنید تا یک پیام حاوی کد فعال سازی برایتان ارسال شود. (فقط کاربران جمهوری اسلامی ایران)</p>
                <div class="text-danger mb-2 text-center validation-message" role="alert">
                    - لطفا شماره موبایل را بصورت صحیح وارد نمائید!
                </div>
<<<<<<< HEAD
                <input dir="ltr" class="input input-code mb-3" type="number" placeholder="شماره موبایل" name="mobileNumber" autofocus>

                <input type="submit" class="btn btn-red btn-sms mb-3" value="ارسال رمز یکبار مصرف">
=======
                <input class="input input-code mb-3" type="text" placeholder="شماره موبایل">
                <button class="btn btn-red btn-sms mb-3">ارسال رمز یکبار مصرف</button>
>>>>>>> 0203f76d4b847b6a66d85103b9694a7500861923
            </form>
        </section>
        <section class="girl-wrapper">
            <img class="" src="/panahi/assets/img/boy-login.svg" alt="">
        </section>
    </div>
</div>
<div class="mobile-view">
    <section class="position-relative">
        <img class="red-circle-login" src="/panahi/assets/img/red-circle.svg" alt="">
        <img class="girl-photo" src="/panahi/assets/img/boy-login.svg" alt="">
    </section>
    <section class="container">
        <form class="form-sms mx-auto" method="post" onsubmit="return validate()">
            <h1 class="text-center login-title">ورود</h1>
            <p class="text-login">جهت ورود یا ثبت نام در سایت، شماره موبایل خود را با دقت وارد کنید تا یک پیام حاوی کد فعال سازی برایتان ارسال شود. (فقط کاربران جمهوری اسلامی ایران)</p>
            <div class="text-danger mb-2 text-center validation-message" role="alert">
                - لطفا شماره موبایل را بصورت صحیح وارد نمائید!
            </div>
            <input class="input input-code mb-3" type="number" placeholder="شماره موبایل" name="mobileNumber" autofocus>
            <input type="submit" class="btn btn-red btn-sms mb-3" value="ارسال رمز یکبار مصرف">
        </form>
    </section>
</div>




<script src="/panahi/assets/js/login.js"></script>
<script src="/panahi/assets/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
<script src="/panahi/assets/js/splide.min.js"></script>
</body>

</html>