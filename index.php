<?php require('db.php');
require('includes/functions.php');

// pagination
if (isset($_GET['page'])) {
  $page = $_GET['page'];
} else {
  $page = 1;
}
$post_per_page = 6;
$result = ($page - 1) * $post_per_page;


?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
  <title>Blog</title>
</head>

<body>
  <?php require('includes/navbar.php'); ?>
  <section>
    <div class="container m-auto mt-3 row">
        <?php
        //search bar
        if (isset($_GET['search'])) {
          $keyword = $_GET['search'];
          $postQuery = "select * from post where title like '%$keyword%' order by id desc limit $result,$post_per_page";
        } else {
          $postQuery = "select * from post order by id desc limit $result,$post_per_page";
        }
        $runPQ = mysqli_query($db, $postQuery);
        while ($post = mysqli_fetch_assoc($runPQ)) {
        ?>
          <!-- <div class="col-6">
          <div class="card mb-3" style="max-width: 800px;">
            <a href="post.php?id=<?= $post['id'] ?>" style="text-decoration: none;color:black;">
              <div class="row g-0 ">
                <div class="col-md-4 img-fluid mx-auto" style="background-image: url('images/<?= getPostThumb($db, $post['id']) ?>'); background-size: cover">
                  <img src="https://images.moneycontrol.com/static-mcnews/2020/04/stock-in-the-news-770x433.jpg" alt="...">
                </div>
                <div class="col-md-8">
                  <div class="card-body">
                    <h5 class="card-title "><?= $post['title'] ?></h5>
                    <div class="card-text text-truncate"><?= $post['content'] ?></div>
                    <p class="card-text"><small class="text-muted">Posted on <?= date('jS F Y', strtotime($post['created_at'])) ?></small></p>
                  </div>
                </div>
              </div>
            </a>
          </div>

          </div> -->
          <div class="row col-sm-12 col-md-6 col-lg-4 ">
          <div class="card m-3 g-0 text-center" style="width: 20rem; ">
          <a href="post.php?id=<?= $post['id'] ?>" style="text-decoration: none;color:black;">
            <img class="card-img-top w-75 mx-auto img-fluid" src="images/<?= getPostThumb($db, $post['id']) ?>" alt="Card image cap">
            <div class="card-body">
            <p class="card-text"><small class="text-muted">Posted on <?= date('jS F Y', strtotime($post['created_at'])) ?></small></p>
              <h5 class="card-title"><?= $post['title'] ?></h5>
              <div class="card-text text-truncate" ><?= $post['content'] ?></div>
            </div>
          </a>
          </div>
          </div>


        <?php
        }
        ?>

      

    </div>
  </section>

    <?php
    //for search
    if (isset($_GET['search'])) {
      $q = "select * from post where title like '%$keyword%' ";
    } else {
      $q = "select * from post";
    }
    $r = mysqli_query($db, $q);
    $total_post = mysqli_num_rows($r);
    $total_pages = ceil($total_post / $post_per_page);
    ?>

    <nav aria-label="Page navigation example">
      <ul class="pagination justify-content-center">
        <!-- Previous button code -->
        <?php
        if ($page > 1) {
          $switch = "";
        } else {
          $switch = "disabled";
        }
        // next button
        if ($page < $total_pages) {
          $nswitch = "";
        } else {
          $nswitch = "disabled";
        }


        ?>
        <li class="page-item <?= $switch ?>">
          <a class="page-link" href="?<?php if (isset($_GET['search'])) {
                                        echo "search=$keyword&";
                                      } ?>page=<?= $page - 1 ?>" tabindex="-1" aria-disabled="true">Previous</a>
        </li>
        <!-- Page function -->
        <?php
        for ($lpage = 1; $lpage <= $total_pages; $lpage++) {
        ?>
          <li class="page-item"><a class="page-link" href="?<?php if (isset($_GET['search'])) {
                                                              echo "search=$keyword&";
                                                            } ?>page=<?= $lpage ?>"><?= $lpage ?></a></li>
        <?php

        }
        ?>


        <li class="page-item <?= $nswitch ?>">
          <a class="page-link" href="?<?php if (isset($_GET['search'])) {
                                        echo "search=$keyword&";
                                      } ?>page=<?= $page + 1 ?>">Next</a>
        </li>
      </ul>
    </nav>


    <?php include_once('includes/footer.php'); ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>

</html>