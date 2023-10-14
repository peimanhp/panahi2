<?php
session_start();
ob_start();
$title = "داشبورد";
require '../../../model/config.php';
if ((isset($_SESSION['mobileNumber'])) && (isset($_SESSION['login']))) {
  include_once '../../header-dashboard.php';
} else {
  header("Location: /panahi/view/public/login.php");
}
?>
<div class="row row-gap-4 dash-box-wrapper">
  <h1>خانه</h1>
  <div class="col-12 col-md-6 text-center ">
    <div class="dash-box">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Numquam, aliquam ad neque inventore dicta, ducimus ipsum, enim maxime earum tempora amet asperiores cumque quaerat in veniam voluptatum? Ullam, cumque. Quos rerum laudantium ab explicabo culpa dolore dolor, itaque officia officiis expedita dolorum repellendus velit magnam alias quasi? Quidem officia nemo at, quibusdam minima autem aliquid veritatis a repudiandae repellendus quas tempora cupiditate hic expedita nostrum quam cumque omnis ducimus dolorum pariatur. Debitis facilis nam placeat fuga recusandae odit voluptates explicabo nihil, reiciendis quis natus, saepe autem quibusdam earum culpa, delectus optio. Fuga commodi doloribus excepturi, ad totam iste odit maiores?</div>
  </div>
  <div class="col-12 col-md-6 text-center ">
    <div class="dash-box">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Numquam, aliquam ad neque inventore dicta, ducimus ipsum, enim maxime earum tempora amet asperiores cumque quaerat in veniam voluptatum? Ullam, cumque. Quos rerum laudantium ab explicabo culpa dolore dolor, itaque officia officiis expedita dolorum repellendus velit magnam alias quasi? Quidem officia nemo at, quibusdam minima autem aliquid veritatis a repudiandae repellendus quas tempora cupiditate hic expedita nostrum quam cumque omnis ducimus dolorum pariatur. Debitis facilis nam placeat fuga recusandae odit voluptates explicabo nihil, reiciendis quis natus, saepe autem quibusdam earum culpa, delectus optio. Fuga commodi doloribus excepturi, ad totam iste odit maiores?</div>
  </div>
  <div class="col-12 col-md-6 text-center ">
    <div class="dash-box">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Numquam, aliquam ad neque inventore dicta, ducimus ipsum, enim maxime earum tempora amet asperiores cumque quaerat in veniam voluptatum? Ullam, cumque. Quos rerum laudantium ab explicabo culpa dolore dolor, itaque officia officiis expedita dolorum repellendus velit magnam alias quasi? Quidem officia nemo at, quibusdam minima autem aliquid veritatis a repudiandae repellendus quas tempora cupiditate hic expedita nostrum quam cumque omnis ducimus dolorum pariatur. Debitis facilis nam placeat fuga recusandae odit voluptates explicabo nihil, reiciendis quis natus, saepe autem quibusdam earum culpa, delectus optio. Fuga commodi doloribus excepturi, ad totam iste odit maiores?</div>
  </div>
  <div class="col-12 col-md-6 text-center ">
    <div class="dash-box">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Numquam, aliquam ad neque inventore dicta, ducimus ipsum, enim maxime earum tempora amet asperiores cumque quaerat in veniam voluptatum? Ullam, cumque. Quos rerum laudantium ab explicabo culpa dolore dolor, itaque officia officiis expedita dolorum repellendus velit magnam alias quasi? Quidem officia nemo at, quibusdam minima autem aliquid veritatis a repudiandae repellendus quas tempora cupiditate hic expedita nostrum quam cumque omnis ducimus dolorum pariatur. Debitis facilis nam placeat fuga recusandae odit voluptates explicabo nihil, reiciendis quis natus, saepe autem quibusdam earum culpa, delectus optio. Fuga commodi doloribus excepturi, ad totam iste odit maiores?</div>
  </div>
  <div class="col-12 col-md-6 text-center ">
    <div class="dash-box">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Numquam, aliquam ad neque inventore dicta, ducimus ipsum, enim maxime earum tempora amet asperiores cumque quaerat in veniam voluptatum? Ullam, cumque. Quos rerum laudantium ab explicabo culpa dolore dolor, itaque officia officiis expedita dolorum repellendus velit magnam alias quasi? Quidem officia nemo at, quibusdam minima autem aliquid veritatis a repudiandae repellendus quas tempora cupiditate hic expedita nostrum quam cumque omnis ducimus dolorum pariatur. Debitis facilis nam placeat fuga recusandae odit voluptates explicabo nihil, reiciendis quis natus, saepe autem quibusdam earum culpa, delectus optio. Fuga commodi doloribus excepturi, ad totam iste odit maiores?</div>
  </div>
  <div class="col-12 col-md-6 text-center ">
    <div class="dash-box">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Numquam, aliquam ad neque inventore dicta, ducimus ipsum, enim maxime earum tempora amet asperiores cumque quaerat in veniam voluptatum? Ullam, cumque. Quos rerum laudantium ab explicabo culpa dolore dolor, itaque officia officiis expedita dolorum repellendus velit magnam alias quasi? Quidem officia nemo at, quibusdam minima autem aliquid veritatis a repudiandae repellendus quas tempora cupiditate hic expedita nostrum quam cumque omnis ducimus dolorum pariatur. Debitis facilis nam placeat fuga recusandae odit voluptates explicabo nihil, reiciendis quis natus, saepe autem quibusdam earum culpa, delectus optio. Fuga commodi doloribus excepturi, ad totam iste odit maiores?</div>
  </div>
  <div class="col-12 col-md-6 text-center ">
    <div class="dash-box">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Numquam, aliquam ad neque inventore dicta, ducimus ipsum, enim maxime earum tempora amet asperiores cumque quaerat in veniam voluptatum? Ullam, cumque. Quos rerum laudantium ab explicabo culpa dolore dolor, itaque officia officiis expedita dolorum repellendus velit magnam alias quasi? Quidem officia nemo at, quibusdam minima autem aliquid veritatis a repudiandae repellendus quas tempora cupiditate hic expedita nostrum quam cumque omnis ducimus dolorum pariatur. Debitis facilis nam placeat fuga recusandae odit voluptates explicabo nihil, reiciendis quis natus, saepe autem quibusdam earum culpa, delectus optio. Fuga commodi doloribus excepturi, ad totam iste odit maiores?</div>
  </div>
  <div class="col-12 col-md-6 text-center ">
    <div class="dash-box">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Numquam, aliquam ad neque inventore dicta, ducimus ipsum, enim maxime earum tempora amet asperiores cumque quaerat in veniam voluptatum? Ullam, cumque. Quos rerum laudantium ab explicabo culpa dolore dolor, itaque officia officiis expedita dolorum repellendus velit magnam alias quasi? Quidem officia nemo at, quibusdam minima autem aliquid veritatis a repudiandae repellendus quas tempora cupiditate hic expedita nostrum quam cumque omnis ducimus dolorum pariatur. Debitis facilis nam placeat fuga recusandae odit voluptates explicabo nihil, reiciendis quis natus, saepe autem quibusdam earum culpa, delectus optio. Fuga commodi doloribus excepturi, ad totam iste odit maiores?</div>
  </div>
</div>
<script type="module" src="/panahi/assets/js/main.js"></script>
<script src="/panahi/assets/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
<script src="/panahi/assets/js/splide.min.js"></script>
</body>
<script>

</script>

</html>