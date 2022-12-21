
<div class="col-4">
        <!-- <div class="card mb-3">
            <h5 class="card-header">Featured</h5>
            <div class="card-body">
              <h5 class="card-title">Special title treatment</h5>
              <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div> -->

          <!-- <div class="card mb-3">
            <h5 class="card-header">Featured</h5>
            <div class="card-body">
              <h5 class="card-title">Special title treatment</h5>
              <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div> -->
        <?php
        if(isset($_GET['id'])){
          ?>
           <div class="card mb-3">
            <h5 class="card-header mb-2">Comments</h5>

          <?php
         $coms=getComments($db,$post_id);   
         if(count($coms)<1){
         
          
          echo '<div class="card-body text-center"><p class="card-text">No Comments..</p></div>';
          
          
         }
          foreach($coms as $comment)  {
            ?>
            <div class="card-body my-0 py-0">
            <h5 class="card-title m-0"><?=$comment['name']?></h5>
            <span ><small class="text-muted"><?= date('jS F Y', strtotime($comment['comment_at'])) ?></small></span>
            <p class="card-text m-0 p-0"><?=$comment['comment']?></p>
            <hr class="">
          </div>
          <?php
           
         }
         
        }
        ?>
          </div>
          
    </div>