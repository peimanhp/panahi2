<?php
session_start();
ob_start();
$title = "صفحه اصلی";
include_once 'view/header.php';
?>

<section class="first-section">
    <div class="row row-gap-4 container">
        <div class="col-12 col-md-6 titles-wrapper">
            <div class="text-center titles">
                <h2 class="mt-5">آکادمی آموزش تبلیغات</h2>
                <h1>عارفه <span class="red-title">پناهــــی</span></h1>
                <h3 class="sub-title">بهترین و بروز ترین دوره‌های آموزش‌
                    جامع تبلیغات</h3>
                <div class="d-flex justify-content-center gap-3 pt-3">
                    <a href="/panahi/view/public/courses.php" class="btn first-section-btns btn-gray py-3">مشاهده دوره ها</a>
                    <a href="/panahi/view/public/about.php" class="btn first-section-btns btn-red py-3">دربـــــــــــــاره من</a>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 p-0">
            <div class="photo-wrapper">
                <img class="panahi-photo" src="/panahi/assets/img/panahi.jpg" alt="panahi pic">
            </div>
        </div>
    </div>
</section>
<section class="second-section container mb-5">
    <div class="row row-gap-4">
        <div class="col col-12 col-md-5 col-lg-3 col-xl-4 col-xxl-3 px-3">
            <h3 class="courses-title mt-5 mb-4 ">دوره های آموزشی</h3>
            <p class="courses-content">
                لورم ایپسوم متن ساختگی با تولید
                سادگی نامفهوم ازصنعت چاپ و با استفاده
                از طراحان گرافیک است.
            </p>
            <div class="d-grid gap-2 col-6 mx-auto mt-5">
                <a href="/panahi/view/public/courses.php" class="btn btn-gray">مشاهده همه</a>
            </div>
        </div>
        <div class="col col-12 col-md-7 col-lg-9 col-xl-8 col-xxl-9 px-5">
            <section class="splide" aria-label="Splide Basic HTML Example">
                <div class="splide__track">
                    <ul class="splide__list">
                        <li class="splide__slide">
                            <div class="d-flex justify-content-center slide-item">
                                <div class="course-card-content">
                                    <img class="slider-img" src="./assets/img/package-img.png" alt="package-img">
                                    <div class="d-flex align-items-center gap-1">
                                        <img src="./assets/img/profile-circle.svg" alt="author">
                                        <p class="mb-0">مدرس: عارفه پناهی</p>
                                    </div>
                                    <h3 class="course-name">دوره آموزشی شماره یک</h3>
                                    <h4 class="price">4.000.000 تومان</h4>
                                    <a href="/panahi/view/public/advertising-course.php" class="btn btn-red">مشاهده</a>
                                </div>
                            </div>
                        </li>
                        <li class="splide__slide">
                            <div class="d-flex justify-content-center slide-item">
                                <div class="course-card-content">
                                    <img class="slider-img" src="./assets/img/package-img.png" alt="package-img">
                                    <div class="d-flex align-items-center gap-1">
                                        <img src="./assets/img/profile-circle.svg" alt="author">
                                        <p class="mb-0">مدرس: عارفه پناهی</p>
                                    </div>
                                    <h3 class="course-name">دوره آموزشی شماره دو</h3>
                                    <h4 class="price">4.000.000 تومان</h4>
                                    <a href="/panahi/view/public/advertising-course.php" class="btn btn-red">مشاهده</a>
                                </div>
                            </div>
                        </li>
                        <li class="splide__slide">
                            <div class="d-flex justify-content-center slide-item">
                                <div class="course-card-content">
                                    <img class="slider-img" src="./assets/img/package-img.png" alt="package-img">
                                    <div class="d-flex align-items-center gap-1">
                                        <img src="./assets/img/profile-circle.svg" alt="author">
                                        <p class="mb-0">مدرس: عارفه پناهی</p>
                                    </div>
                                    <h3 class="course-name">دوره آموزشی شماره سه</h3>
                                    <h4 class="price">4.000.000 تومان</h4>
                                    <a href="/panahi/view/public/advertising-course.php" class="btn btn-red">مشاهده</a>
                                </div>
                            </div>
                        </li>
                        <li class="splide__slide">
                            <div class="d-flex justify-content-center slide-item">
                                <div class="course-card-content">
                                    <img class="slider-img" src="./assets/img/package-img.png" alt="package-img">
                                    <div class="d-flex align-items-center gap-1">
                                        <img src="./assets/img/profile-circle.svg" alt="author">
                                        <p class="mb-0">مدرس: عارفه پناهی</p>
                                    </div>
                                    <h3 class="course-name">دوره آموزشی شماره چهار</h3>
                                    <h4 class="price">4.000.000 تومان</h4>
                                    <a href="/panahi/view/public/advertising-course.php" class="btn btn-red">مشاهده</a>
                                </div>
                            </div>
                        </li>
                        <li class="splide__slide">
                            <div class="d-flex justify-content-center slide-item">
                                <div class="course-card-content">
                                    <img class="slider-img" src="./assets/img/package-img.png" alt="package-img">
                                    <div class="d-flex align-items-center gap-1">
                                        <img src="./assets/img/profile-circle.svg" alt="author">
                                        <p class="mb-0">مدرس: عارفه پناهی</p>
                                    </div>
                                    <h3 class="course-name">دوره آموزشی شماره پنج</h3>
                                    <h4 class="price">4.000.000 تومان</h4>
                                    <a href="/panahi/view/public/advertising-course.php" class="btn btn-red">مشاهده</a>
                                </div>
                            </div>
                        </li>
                        <li class="splide__slide">
                            <div class="d-flex justify-content-center slide-item">
                                <div class="course-card-content">
                                    <img class="slider-img" src="./assets/img/package-img.png" alt="package-img">
                                    <div class="d-flex align-items-center gap-1">
                                        <img src="./assets/img/profile-circle.svg" alt="author">
                                        <p class="mb-0">مدرس: عارفه پناهی</p>
                                    </div>
                                    <h3 class="course-name">دوره آموزشی شماره شش</h3>
                                    <h4 class="price">4.000.000 تومان</h4>
                                    <a href="/panahi/view/public/advertising-course.php" class="btn btn-red">مشاهده</a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </section>
        </div>
    </div>
</section>






<?php include_once 'view/footer.php' ?>