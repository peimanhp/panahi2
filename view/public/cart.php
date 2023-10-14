<?php
$title = "سبد خرید";
include_once '../header.php' ?>

<main>
    <section class="container">
        <h2 class="weight-thick mt-5">سبد خرید شما</h2>
        <div class="row row-gap-1">
            <div class="col-12 col-md-8">
                <div class="wrapper">
                    <table class="table align-middle">
                        <thead>
                            <tr>
                                <th scope="col">محصول</th>
                                <th scope="col">تعداد</th>
                                <th scope="col">قیمت</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center gap-2">
                                        <img class="product-img" src="/panahi/assets/img/product-img-cart.png" alt="product-image">
                                        <p class="m-0">دوره تبلیغات و فروش</p>
                                    </div>
                                </td>
                                <td>1</td>
                                <td>2.000.000 تومان</td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="d-flex gap-2">

                    </div>
                    <form class="d-flex position-relative align-items-center coupon-form mt-2">
                        <input class="input input-code mb-3" type="text" placeholder="کد تخفیف">
                        <button class="btn btn-red btn-coupon px-4">بررسی</button>
                    </form>
                </div>
            </div>
            <div class="col-12 col-md-4">
                <div class="wrapper d-flex flex-column justify-content-around sum-bascket px-4">
                    <h4 class="weight-thick">جمع کل سبد خرید</h4>
                    <div class="d-flex justify-content-between">
                        <p class="m-0">جمع کل</p>
                        <h6 class="m-0">2.000.000 تومان</h6>
                    </div>
                    <div class="d-flex justify-content-between">
                        <p class="m-0">تخفیف</p>
                        <h6 class="m-0">300.000 تومان</h6>
                    </div>
                    <div class="d-flex justify-content-between">
                        <p class="m-0">تخفیف</p>
                        <h6 class="m-0">1.700.000 تومان</h6>
                    </div>
                    <button id="pay-btn" class="btn btn-red">پرداخت</button>
                </div>
            </div>
        </div>
    </section>
</main>

<?php include_once '../footer.php' ?>