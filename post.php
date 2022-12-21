<?php require('db.php');
require('includes/functions.php');


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
  <div>
    <div class="container m-auto mt-3 row">
      <div class="col-8">
        <div class="card mb-3">
          <?php
          $post_id = $_GET['id'];
          $postQuery = "select * from post where id=$post_id";
          $runPQ = mysqli_query($db, $postQuery);
          $post = mysqli_fetch_assoc($runPQ);

          ?>

          <div class="card-body">
            <h5 class="card-title"><?= $post['title'] ?></h5>
            <span class="badge bg-primary "><?= date('jS F Y', strtotime($post['created_at'])) ?></span>
            <span class="badge bg-danger"><?= getCategoryName($db, $post['category_id']) ?></span>
            <div class="border-bottom mt-3"></div>
            <?php
            $post_images = getImageByPost($db, $post['id']);
            foreach ($post_images as $image) {
            ?>
              <img src="images/<?= $image['image'] ?>" class="img-fluid mb-2 mt-2" alt="Responsive image">
            <?php
            }
            ?>

            <p class="card-text">
              <?= $post['content'] ?>
            </p>
            <a href="#" class="btn btn-primary">Share this post</a>
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
              Comment on this
            </button>

          </div>
        </div>



        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Add Your Comment</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <form action="includes/add_comment.php" method="post">
                  <div class="mb-3">
                    <label for="exampleInputName" class="form-label">Name</label>
                    <input type="text" name="name" class="form-control" id="exampleInputNAme" >
                  </div>
                  <div class="mb-3">
                    <label for="exampleInputComment" class="form-label">Comment:</label>
                    <input type="text" name="comment" class="form-control" id="exampleInputComment">
                  </div>
                  <input type="hidden" name="post_id" value="<?=$post_id?>">
                  <div class="text-center">
                  <button type="submit" name="addcomment" class="btn btn-primary">Add Commment</button>
                  </div>

                </form>
              </div>
            </div>
          </div>
        </div>

        <div>
          <h4>Related Posts</h4>
          <?php
          $pquery = "select * from post where category_id={$post['category_id']} order by id desc";
          $prun = mysqli_query($db, $pquery);
          while ($rpost = mysqli_fetch_assoc($prun)) {
            if ($rpost['id'] == $post_id) {
              continue;
            }
          ?>
            <a href="post.php?id=<?= $rpost['id'] ?>" style="text-decoration:none;color:black;">
              <div class="card mb-3" style="max-width: 700px;">
                <div class="row g-0">
                  <div class="col-md-5" style="background-image: url('images/<?=getPostThumb($db,$rpost['id'])?>');background-size: cover">
                    <!-- <img src="https://images.moneycontrol.com/static-mcnews/2020/04/stock-in-the-news-770x433.jpg" alt="..."> -->
                  </div>
                  <div class="col-md-7">
                    <div class="card-body">
                      <h5 class="card-title"><?= $rpost['title'] ?></h5>
                      <div class="card-text text-truncate"><?= $rpost['content'] ?></div>
                      <p class="card-text"><small class="text-muted"><?= date('jS F Y', strtotime($rpost['created_at'])) ?></small></p>
                    </div>
                  </div>
                </div>
              </div>
            </a>
          <?php

          }

          ?>



        </div>


      </div>
      <?php include_once('includes/sidebar.php') ?>

    </div>
  </div>



  <?php include_once('includes/footer.php') ?>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>

</html>