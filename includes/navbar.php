<nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
    <a class="navbar-brand" href="#">Blog App</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarScroll">
      <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 200px;">

        <!-- Adding Menu & Sub Menu Dynamically -->
        <?php
        $navqwery = "select * from menu";
        $runNav = mysqli_query($db, $navqwery);
        while ($menu = mysqli_fetch_assoc($runNav)) {
          $no = count(getSubMenu($db, $menu['id']));
          if (!$no) {
        ?>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="<?= $menu['action'] ?>"><?=$menu['name'] ?></a>
            </li>
          <?php
          } else {
            //submenu

          ?>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href=" <?= $menu['action'] ?>" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <?= $menu['name'] ?>
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                <?php
                $submenu=getSubMenu($db,$menu['id']);
                foreach($submenu as $sm){
                  ?>
                    <li><a class="dropdown-item" href="<?= $sm['action'] ?>"><?= $sm['name'] ?></a></li>
                    <hr class="dropdown-divider">
                  <?php

                }
                ?>
              </ul>
            </li>
        <?php
          }
        }
        ?>
      </ul>
      <form class="d-flex mt-3">
        <input class="form-control me-2 " name="search" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>