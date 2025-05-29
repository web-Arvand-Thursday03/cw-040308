<?php
include "includes/db.php";
include "includes/layout/header.php";

// var_dump($_GET['search']);
if (isset($_GET['search'])) {
  $searchWord = $_GET['search'];
  $stmt = $connection->query("SELECT * FROM posts WHERE title LIKE '%$searchWord%'");
  $posts = $stmt->fetchAll();
  var_dump($posts);
}





?>

<main>
  <!-- Content Section -->
  <section class="mt-4">
    <div class="row">
      <!-- Posts Content -->
      <div class="col-lg-8">
        <div class="row">
          <div class="col">
            <div class="alert alert-secondary">پست های مرتبط با کلمه [ .... ]</div>

            <div class="alert alert-danger">مقاله مورد نظر پیدا نشد !!!!</div>
          </div>
        </div>

        <div class="row g-3">
          <div class="col-sm-6">
            <div class="card">
              <img src="./assets/images/4.jpg" class="card-img-top" alt="post-image" />
              <div class="card-body">
                <div class="d-flex justify-content-between">
                  <h5 class="card-title fw-bold">آموزش دروس تخصصی</h5>
                  <div>
                    <span class="badge text-bg-secondary">شبکه</span>
                  </div>
                </div>
                <p class="card-text text-secondary pt-3">
                  در دوره آموزش جامع Eloquent در لاراول از ابتدایی ترین مفاهیم تا مفاهیم پیشرفته تر و پیچیده مرتبط با Eloquent به شکل کاربردی و در قالب مثال ها و سناریوهای
                  مختلف آموزش داده می شود.
                </p>
                <div class="d-flex justify-content-between align-items-center">
                  <a href="single.html" class="btn btn-sm btn-dark">مشاهده</a>

                  <p class="fs-7 mb-0">نویسنده : منصوری</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="card">
              <img src="./assets/images/5.jpg" class="card-img-top" alt="post-image" />
              <div class="card-body">
                <div class="d-flex justify-content-between">
                  <h5 class="card-title fw-bold">آموزش جاوا اسکریپت</h5>
                  <div>
                    <span class="badge text-bg-secondary">برنامه نویسی</span>
                  </div>
                </div>
                <p class="card-text text-secondary pt-3">
                  در دوره آموزش جامع Eloquent در لاراول از ابتدایی ترین مفاهیم تا مفاهیم پیشرفته تر و پیچیده مرتبط با Eloquent به شکل کاربردی و در قالب مثال ها و سناریوهای
                  مختلف آموزش داده می شود.
                </p>
                <div class="d-flex justify-content-between align-items-center">
                  <a href="single.html" class="btn btn-sm btn-dark">مشاهده</a>

                  <p class="fs-7 mb-0">نویسنده : منصوری</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="card">
              <img src="./assets/images/6.jpg" class="card-img-top" alt="post-image" />
              <div class="card-body">
                <div class="d-flex justify-content-between">
                  <h5 class="card-title fw-bold">آینده ربات ها</h5>
                  <div>
                    <span class="badge text-bg-secondary">متفزقه</span>
                  </div>
                </div>
                <p class="card-text text-secondary pt-3">
                  در دوره آموزش جامع Eloquent در لاراول از ابتدایی ترین مفاهیم تا مفاهیم پیشرفته تر و پیچیده مرتبط با Eloquent به شکل کاربردی و در قالب مثال ها و سناریوهای
                  مختلف آموزش داده می شود.
                </p>
                <div class="d-flex justify-content-between align-items-center">
                  <a href="single.html" class="btn btn-sm btn-dark">مشاهده</a>

                  <p class="fs-7 mb-0">نویسنده : منصوری</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Sidebar Section -->
      <?php include "includes/layout/sidebar.php"; ?>

    </div>
  </section>
</main>

<!-- Footer Section -->
<?php include "includes/layout/footer.php"; ?>