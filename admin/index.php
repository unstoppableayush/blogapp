<?php
require('../db.php');
require('../includes/functions.php');
$admin = getAdminInfo($db, $_SESSION['email']);
if (!isset($_SESSION['isUserLoggedIn'])) {
  header('Location:login.php');
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>CsWallah Admin</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin - v2.4.1
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="index.php" class="logo d-flex align-items-center">
        <img src="assets/img/logo.png" alt="">
        <span class="d-none d-lg-block">NiceAdmin</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <div class="search-bar">
      <form class="search-form d-flex align-items-center" method="POST" action="#">
        <input type="text" name="query" placeholder="Search" title="Enter search keyword">
        <button type="submit" title="Search"><i class="bi bi-search"></i></button>
      </form>
    </div><!-- End Search Bar -->

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <li class="nav-item d-block d-lg-none">
          <a class="nav-link nav-icon search-bar-toggle " href="#">
            <i class="bi bi-search"></i>
          </a>
        </li><!-- End Search Icon-->



        <!-- <li class="nav-item dropdown">

          <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
            <i class="bi bi-chat-left-text"></i>
            <span class="badge bg-success badge-number">3</span>
          </a>End Messages Icon

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow messages">
            <li class="dropdown-header">
              You have 3 new messages
              <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="message-item">
              <a href="#">
                <img src="assets/img/messages-1.jpg" alt="" class="rounded-circle">
                <div>
                  <h4>Maria Hudson</h4>
                  <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                  <p>4 hrs. ago</p>
                </div>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="message-item">
              <a href="#">
                <img src="assets/img/messages-2.jpg" alt="" class="rounded-circle">
                <div>
                  <h4>Anna Nelson</h4>
                  <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                  <p>6 hrs. ago</p>
                </div>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="message-item">
              <a href="#">
                <img src="assets/img/messages-3.jpg" alt="" class="rounded-circle">
                <div>
                  <h4>David Muldon</h4>
                  <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                  <p>8 hrs. ago</p>
                </div>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="dropdown-footer">
              <a href="#">Show all messages</a>
            </li>

          </ul> End Messages Dropdown Items 

        </li> 
        End Messages Nav-->

        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <img src="assets/img/ayush.png" alt="Profile" class="rounded-circle">
            <span class="d-none d-md-block dropdown-toggle ps-2"><?= $admin['full_name'] ?></span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6>Ayush </h6>
              <span>Full Stack Developer</span>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="index.php?profile">
                <i class="bi bi-person"></i>
                <span>My Profile</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="index.php?profile">
                <i class="bi bi-gear"></i>
                <span>Account Settings</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <!-- <li>
              <a class="dropdown-item d-flex align-items-center" href="#">
                <i class="bi bi-question-circle"></i>
                <span>Need Help?</span>
              </a>
            </li> -->
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="../includes/logout.php">
                <i class="bi bi-box-arrow-right"></i>
                <span>Sign Out</span>
              </a>
            </li>

          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link " href="index.php">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed " href="index.php?addpost">
          <i class="bi bi-clipboard-check"></i><span>Add Post</span></i>
        </a>


      <li class="nav-item">
        <a class="nav-link collapsed" href="index.php?managepost">
          <i class="bi bi-clipboard-check"></i><span>Manage Post</span></i>
        </a>
      </li><!-- End Manage Post Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="index.php?managecomments">
          <i class="bi bi-chat-square-text"></i><span>Manage Comments</span></i>
        </a>
      </li><!-- End Manage Comments Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="index.php?managecategory">
          <i class="bi bi-cart-check"></i><span>Manage Category</span></i>
        </a>
      </li><!-- End Manage Category Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="index.php?managemenu">
          <i class="bi bi-collection"></i><span>Manage Menu</span></i>
        </a>

      </li><!-- End Manage Menu Nav -->

      <li class="nav-heading">Pages</li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="index.php?profile">
          <i class="bi bi-person"></i>
          <span>Profile</span>
        </a>
      </li><!-- End Profile Page Nav -->

      <!-- <li class="nav-item">
        <a class="nav-link collapsed" href="pages-faq.html">
          <i class="bi bi-question-circle"></i>
          <span>F.A.Q</span>
        </a>
      </li>End F.A.Q Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="index.php?contactus">
          <i class="bi bi-envelope"></i>
          <span>Contact</span>
        </a>
      </li><!-- End Contact Page Nav -->

      <!-- <li class="nav-item">
        <a class="nav-link collapsed" href="pages-register.html">
          <i class="bi bi-card-list"></i>
          <span>Register</span>
        </a>
      </li>End Register Page Nav -->

      <!-- <li class="nav-item">
        <a class="nav-link collapsed" href="login.php">
          <i class="bi bi-box-arrow-in-right"></i>
          <span>Login</span>
        </a>
      </li>End Login Page Nav -->

      <!-- <li class="nav-item">
        <a class="nav-link collapsed" href="pages-error-404.html">
          <i class="bi bi-dash-circle"></i>
          <span>Error 404</span>
        </a>
      </li>End Error 404 Page Nav -->

      <!-- <li class="nav-item">
        <a class="nav-link collapsed" href="pages-blank.html">
          <i class="bi bi-file-earmark"></i>
          <span>Blank</span>
        </a>
      </li>End Blank Page Nav -->

    </ul>

  </aside><!-- End Sidebar-->

  <?php
  if (false) {
  }
   elseif (isset($_GET['contactus'])) {
  } 
  elseif (isset($_GET['profile'])) {
  ?>
    <main id="main" class="main">

      <div class="pagetitle">
        <h1>Profile</h1>
        <nav>
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item">Users</li>
            <li class="breadcrumb-item active">Profile</li>
          </ol>
        </nav>
      </div><!-- End Page Title -->

      <section class="section profile">
        <div class="row">
          <div class="col-xl-4">

            <div class="card">
              <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">

                <img src="assets/img/ayush.png" alt="Profile" class="rounded-circle">
                <h2>Ayush Kumar</h2>
                <h3>Full Stack Developer</h3>
                <div class="social-links mt-2">
                  <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                  <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                  <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                  <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>

          </div>

          <div class="col-xl-8">

            <div class="card">
              <div class="card-body pt-3">
                <!-- Bordered Tabs -->
                <ul class="nav nav-tabs nav-tabs-bordered">

                  <li class="nav-item">
                    <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview">Overview</button>
                  </li>

                  <li class="nav-item">
                    <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit">Edit Profile</button>
                  </li>

                  <li class="nav-item">
                    <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-settings">Settings</button>
                  </li>

                  <li class="nav-item">
                    <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-change-password">Change Password</button>
                  </li>

                </ul>
                <div class="tab-content pt-2">

                  <div class="tab-pane fade show active profile-overview" id="profile-overview">
                    <h5 class="card-title">About</h5>
                    <p class="small fst-italic">I'm ayush a learner,hustler,Explorer.</p>

                    <h5 class="card-title">Profile Details</h5>

                    <div class="row">
                      <div class="col-lg-3 col-md-4 label ">Full Name</div>
                      <div class="col-lg-9 col-md-8">Ayush Kumar</div>
                    </div>

                    <div class="row">
                      <div class="col-lg-3 col-md-4 label">Company</div>
                      <div class="col-lg-9 col-md-8">My Own Company</div>
                    </div>

                    <div class="row">
                      <div class="col-lg-3 col-md-4 label">Job</div>
                      <div class="col-lg-9 col-md-8">Full Stack Developer</div>
                    </div>

                    <div class="row">
                      <div class="col-lg-3 col-md-4 label">Country</div>
                      <div class="col-lg-9 col-md-8">India</div>
                    </div>

                    <div class="row">
                      <div class="col-lg-3 col-md-4 label">Address</div>
                      <div class="col-lg-9 col-md-8">Aurangabad,Bihar</div>
                    </div>

                    <div class="row">
                      <div class="col-lg-3 col-md-4 label">Phone</div>
                      <div class="col-lg-9 col-md-8">+91</div>
                    </div>

                    <div class="row">
                      <div class="col-lg-3 col-md-4 label">Email</div>
                      <div class="col-lg-9 col-md-8">ayush0@gmail.com</div>
                    </div>

                  </div>

                  <div class="tab-pane fade profile-edit pt-3" id="profile-edit">

                    <!-- Profile Edit Form -->
                    <form>
                      <div class="row mb-3">
                        <label for="profileImage" class="col-md-4 col-lg-3 col-form-label">Profile Image</label>
                        <div class="col-md-8 col-lg-9">
                          <img src="assets/img/ayush.png" alt="Profile">
                          <div class="pt-2">
                            <a href="#" class="btn btn-primary btn-sm" title="Upload new profile image"><i class="bi bi-upload"></i></a>
                            <a href="#" class="btn btn-danger btn-sm" title="Remove my profile image"><i class="bi bi-trash"></i></a>
                          </div>
                        </div>
                      </div>

                      <div class="row mb-3">
                        <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Full Name</label>
                        <div class="col-md-8 col-lg-9">
                          <input name="fullName" type="text" class="form-control" id="fullName" >
                        </div>
                      </div>

                      <div class="row mb-3">
                        <label for="about" class="col-md-4 col-lg-3 col-form-label">About</label>
                        <div class="col-md-8 col-lg-9">
                          <textarea name="about" class="form-control" id="about" style="height: 100px"></textarea>
                        </div>
                      </div>

                      <div class="row mb-3">
                        <label for="company" class="col-md-4 col-lg-3 col-form-label">Company</label>
                        <div class="col-md-8 col-lg-9">
                          <input name="company" type="text" class="form-control" id="company" >
                        </div>
                      </div>

                      <div class="row mb-3">
                        <label for="Job" class="col-md-4 col-lg-3 col-form-label">Job</label>
                        <div class="col-md-8 col-lg-9">
                          <input name="job" type="text" class="form-control" id="Job" >
                        </div>
                      </div>

                      <div class="row mb-3">
                        <label for="Country" class="col-md-4 col-lg-3 col-form-label">Country</label>
                        <div class="col-md-8 col-lg-9">
                          <input name="country" type="text" class="form-control" id="Country" >
                        </div>
                      </div>

                      <div class="row mb-3">
                        <label for="Address" class="col-md-4 col-lg-3 col-form-label">Address</label>
                        <div class="col-md-8 col-lg-9">
                          <input name="address" type="text" class="form-control" id="Address" >
                        </div>
                      </div>

                      <div class="row mb-3">
                        <label for="Phone" class="col-md-4 col-lg-3 col-form-label">Phone</label>
                        <div class="col-md-8 col-lg-9">
                          <input name="phone" type="text" class="form-control" id="Phone" >
                        </div>
                      </div>

                      <div class="row mb-3">
                        <label for="Email" class="col-md-4 col-lg-3 col-form-label">Email</label>
                        <div class="col-md-8 col-lg-9">
                          <input name="email" type="email" class="form-control" id="Email" >
                        </div>
                      </div>

                      <div class="row mb-3">
                        <label for="Twitter" class="col-md-4 col-lg-3 col-form-label">Twitter Profile</label>
                        <div class="col-md-8 col-lg-9">
                          <input name="twitter" type="text" class="form-control" id="Twitter" >
                        </div>
                      </div>

                      <div class="row mb-3">
                        <label for="Facebook" class="col-md-4 col-lg-3 col-form-label">Facebook Profile</label>
                        <div class="col-md-8 col-lg-9">
                          <input name="facebook" type="text" class="form-control" id="Facebook" >
                        </div>
                      </div>

                      <div class="row mb-3">
                        <label for="Instagram" class="col-md-4 col-lg-3 col-form-label">Instagram Profile</label>
                        <div class="col-md-8 col-lg-9">
                          <input name="instagram" type="text" class="form-control" id="Instagram" >
                        </div>
                      </div>

                      <div class="row mb-3">
                        <label for="Linkedin" class="col-md-4 col-lg-3 col-form-label">Linkedin Profile</label>
                        <div class="col-md-8 col-lg-9">
                          <input name="linkedin" type="text" class="form-control" id="Linkedin" >
                        </div>
                      </div>

                      <div class="text-center">
                        <button type="submit" class="btn btn-primary">Save Changes</button>
                      </div>
                    </form><!-- End Profile Edit Form -->

                  </div>

                  <div class="tab-pane fade pt-3" id="profile-settings">

                    <!-- Settings Form -->
                    <form>

                      <div class="row mb-3">
                        <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Email Notifications</label>
                        <div class="col-md-8 col-lg-9">
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="changesMade" checked>
                            <label class="form-check-label" for="changesMade">
                              Changes made to your account
                            </label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="newProducts" checked>
                            <label class="form-check-label" for="newProducts">
                              Information on new products and services
                            </label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="proOffers">
                            <label class="form-check-label" for="proOffers">
                              Marketing and promo offers
                            </label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="securityNotify" checked disabled>
                            <label class="form-check-label" for="securityNotify">
                              Security alerts
                            </label>
                          </div>
                        </div>
                      </div>

                      <div class="text-center">
                        <button type="submit" class="btn btn-primary">Save Changes</button>
                      </div>
                    </form><!-- End settings Form -->

                  </div>

                  <div class="tab-pane fade pt-3" id="profile-change-password">
                    <!-- Change Password Form -->
                    <form>

                      <div class="row mb-3">
                        <label for="currentPassword" class="col-md-4 col-lg-3 col-form-label">Current Password</label>
                        <div class="col-md-8 col-lg-9">
                          <input name="password" type="password" class="form-control" id="currentPassword">
                        </div>
                      </div>

                      <div class="row mb-3">
                        <label for="newPassword" class="col-md-4 col-lg-3 col-form-label">New Password</label>
                        <div class="col-md-8 col-lg-9">
                          <input name="newpassword" type="password" class="form-control" id="newPassword">
                        </div>
                      </div>

                      <div class="row mb-3">
                        <label for="renewPassword" class="col-md-4 col-lg-3 col-form-label">Re-enter New Password</label>
                        <div class="col-md-8 col-lg-9">
                          <input name="renewpassword" type="password" class="form-control" id="renewPassword">
                        </div>
                      </div>

                      <div class="text-center">
                        <button type="submit" class="btn btn-primary">Change Password</button>
                      </div>
                    </form><!-- End Change Password Form -->

                  </div>

                </div><!-- End Bordered Tabs -->

              </div>
            </div>

          </div>
        </div>
      </section>

    </main><!-- End #main -->
  <?php
  } elseif (isset($_GET['addpost'])) {
  ?>
    <main id="main" class="main">

      <div class="pagetitle">
        <h1>Add Post</h1>
        <nav>
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item active">Add Post</li>
          </ol>
        </nav>
      </div><!-- End Page Title -->


      <section class="section dashboard">
        <div class="row col-lg-12">

          <!-- Left side columns -->
          <div class="col-lg-12">

            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Add Your Post</h5>

                <!-- No Labels Form -->
                <form class="row g-3" action="../includes/addpost.php" method="post" enctype="multipart/form-data">
                  <div class="col-md-12">
                    <input type="text" name="post_title" class="form-control" placeholder="Post Title" required>
                  </div>
                  <div class="col-md-6">
                    <select name="post_category" class="form-select" required>
                      <option selected value="0">Choose category ....</option>
                      <?php
                      $categories = getAllCategoryName($db);
                      foreach ($categories as $ct) {
                      ?>
                        <option value="<?= $ct['id'] ?>"><?= $ct['name'] ?></option>
                      <?php
                      }
                      ?>

                    </select>
                  </div>
                  <div class="col-md-6">
                    <input type="file" name="post_image[]" class="form-control" placeholder="select images" accept="image/*" multiple>
                  </div>

                  <div class="card-body">
                    <h5 class="card-title">Write Post</h5>

                    <!-- TinyMCE Editor -->
                    <textarea class="tinymce-editor form-control" name="post_content" required>
                        <p>Start writing your post....</p>
                        
                      </textarea><!-- End TinyMCE Editor -->

                  </div>


                  <div class="text-center">
                    <button type="submit" name="addpost" class="btn btn-primary">Add Post</button>
                    <button type="reset" class="btn btn-secondary">Reset</button>
                  </div>
                </form><!-- End No Labels Form -->

              </div>
            </div>


          </div>
          <div class="card">



          </div>
      </section>

    </main><!-- End #main -->

  <?php
  } 
  elseif (isset($_GET['managepost'])) {
  ?>
    <main id="main" class="main">

      <div class="pagetitle">
        <h1>Manage Post</h1>
        <nav>
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item active">Manage Post</li>
          </ol>
        </nav>
      </div><!-- End Page Title -->


      <section class="section">
        <div class="row">
          <div class="col-lg-12">

            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Posts </h5>

                <!-- Default Table -->
                <table class="table">
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Post Title</th>
                      <th scope="col">Post Category</th>
                      <th scope="col">Post Date</th>
                      <th scope="col">Action</th>
                    </tr>
                  </thead>

                  <tbody>
                    <?php
                    $posts = getAllposts($db);
                    $count = 1;
                    foreach ($posts as $post) {
                    ?>
                      <tr>
                        <th scope="row"><?= $count ?></th>
                        <td><?= $post['title'] ?></td>
                        <td><?= getPostCategoryName($db, $post['category_id']) ?></td>
                        <td><?= date('jS F Y', strtotime($post['created_at'])) ?></td>
                        <td>
                          <div class="btn-group">
                            <a class="btn btn-danger " href="../includes/removepost.php?id=<?= $post['id'] ?>"><i class="bi bi-x-octagon"></i></a>
                            &nbsp;
                            <form method="POST" action="index.php?updatepost">
                              <input type="hidden" name="id" value="<?= $post['id'] ?>" />

                              <button class="btn btn-success" type="submit" name="update"><i class="bi bi-card-text"></i></button>
                            </form>
                          </div>
                        </td>

                      </tr>
                    <?php
                      $count++;
                    }
                    ?>
                  </tbody>
                </table>
                <!-- End Default Table Example -->
              </div>
            </div>

          </div>


        </div>
      </section>

    </main><!-- End #main -->
    <?php

  } 
  elseif (isset($_GET["updatepost"])) {
    $id = $_POST['id'];
    if (isset($_POST['update'])) {
      $query = "select * from post where id=$id";
      $run = mysqli_query($db, $query);
      $row = mysqli_fetch_assoc($run);
      $rowtitle = $row['title'];
      $rowcatname = getCategoryName($db, $row['category_id']);
      $rowcat = $row['category_id'];
      $rowcontent = $row['content'];

    ?>

      <main id="main" class="main">

        <div class="pagetitle">
          <h1>Update Post</h1>
          <nav>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.html">Home</a></li>
              <li class="breadcrumb-item active">Manage Post</li>
            </ol>
          </nav>
        </div><!-- End Page Title -->


        <section class="section dashboard">
          <div class="row col-lg-12">

            <!-- Left side columns -->
            <div class="col-lg-12">

              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Update Your Post</h5>

                  <!-- No Labels Form -->
                  <form class="row g-3" action="../includes/updatepost.php" method="post" enctype="multipart/form-data">
                    <div class="col-md-12">
                      <input type="text" name="post_title" class="form-control" value="<?= $rowtitle ?>" placeholder="Post Title" required>
                    </div>
                    <input type="hidden" name="id" value="<?= $id ?>" />
                    <div class="col-md-6">
                      <select name="post_category" class="form-select" required>
                        <option selected value="<?= $rowcat ?>"><?= $rowcatname ?></option>
                        <?php
                        $categories = getAllCategoryName($db);
                        foreach ($categories as $ct) {
                        ?>
                          <option value="<?= $ct['id'] ?>"><?= $ct['name'] ?></option>
                        <?php
                        }
                        ?>

                      </select>
                    </div>
                    <div class="col-md-6">
                      <input type="file" name="post_image[]" class="form-control" placeholder="select images" accept="image/*" multiple>
                    </div>

                    <div class="card-body">
                      <h5 class="card-title">Write Post</h5>

                      <!-- TinyMCE Editor -->
                      <textarea class="tinymce-editor form-control" name="post_content" required>
                      <?= $rowcontent ?>
                        
                      </textarea><!-- End TinyMCE Editor -->

                    </div>


                    <div class="text-center">
                      <button type="submit" name="updatepost" class="btn btn-primary">Update Post</button>
                      <button type="reset" class="btn btn-secondary">Reset</button>
                    </div>
                  </form><!-- End No Labels Form -->

                </div>
              </div>


            </div>
            <div class="card">



            </div>
        </section>

      </main><!-- End #main -->
    <?php

    }
  } 
  elseif ((isset($_GET['managecategory']))) {
    ?>
    <main id="main" class="main">

      <div class="pagetitle">
        <h1>Manage Category</h1>
        <nav>
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item active">Manage Category</li>
          </ol>
        </nav>
      </div><!-- End Page Title -->

      <!-- Modal to add category -->
      <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Add New Category</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <form method="post" action="../includes/addct.php">
                <div class="mb-3">
                  <label for="recipient-name" class="col-form-label">Category Name</label>
                  <input type="text" name="ctname" class="form-control" id="recipient-name">
                </div>
                <div class="modal-footer">

                  <button type="submit" name="addct" class="btn btn-primary">Add </button>
                </div>
              </form>
            </div>

          </div>
        </div>
      </div>
      <!-- Modal ended -->


      <section class="section">
        <div class="row">
          <div class="col-lg-12">

            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Manage Category - <a class="btn text-primary " data-bs-toggle="modal" data-bs-target="#exampleModal">Add New Category</a></h5>

                <!-- Default Table -->
                <table class="table">
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Category Name</th>
                      <th scope="col">Action</th>
                    </tr>
                  </thead>

                  <tbody>
                    <?php
                    $categories = getAllCategoryName($db);
                    $count = 1;
                    foreach ($categories as $cat) {
                    ?>
                      <tr>
                        <th scope="row"><?= $count ?></th>
                        <td><?= $cat['name'] ?></td>

                        <td>
                          <div class="btn-group">
                            <a class="btn btn-danger " href="../includes/removect.php?id=<?= $cat['id'] ?>"><i class="bi bi-x-octagon"></i></i></a>
                          </div>
                        </td>

                      </tr>
                    <?php
                      $count++;
                    }
                    ?>


                  </tbody>
                </table>
                <!-- End Default Table Example -->
              </div>
            </div>







          </div>


        </div>
      </section>

    </main><!-- End #main -->
  <?php

  } 
  elseif ((isset($_GET['managecomments']))) {
  ?>
    <main id="main" class="main">

      <div class="pagetitle">
        <h1>Manage Comments</h1>
        <nav>
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
            <li class="breadcrumb-item active">Manage Comments</li>
          </ol>
        </nav>
      </div><!-- End Page Title -->


      <section class="section">
        <div class="row">
          <div class="col-lg-12">

            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Comments</h5>

                <!-- Default Table -->
                <table class="table">
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">User Name</th>
                      <th scope="col">Comment</th>
                      <th scope="col">Post Title</th>
                      <th scope="col">Commented at</th>
                      <th scope="col">Action</th>
                    </tr>
                  </thead>

                  <tbody>
                    <?php
                    $comments = getAllComments($db);
                    $count = 1;
                    foreach ($comments as $comment) {
                    ?>
                      <tr>
                        <th scope="row"><?= $count ?></th>
                        <td><?= $comment['name'] ?></td>
                        <td><?= $comment['comment'] ?></td>
                        <td><?= getPostTitleName($db, $comment['post_id']) ?></td>
                        <td><?= date('jS F Y', strtotime($comment['comment_at'])) ?></td>

                        <td>
                          <div class="btn-group">
                            <a class="btn btn-danger " href="../includes/removecom.php?id=<?= $comment['id'] ?>"><i class="bi bi-x-octagon"></i></i></a>
                          </div>
                        </td>

                      </tr>
                    <?php
                      $count++;
                    }
                    ?>



                  </tbody>
                </table>
                <!-- End Default Table Example -->
              </div>
            </div>







          </div>


        </div>
      </section>

    </main><!-- End #main -->
  <?php

  } 
  elseif ((isset($_GET['managemenu']))) {
  ?>
    <main id="main" class="main">

      <div class="pagetitle">
        <h1>Manage Menu</h1>
        <nav>
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item active">Manage Menu</li>
          </ol>
        </nav>
      </div><!-- End Page Title -->


      <!-- Modal to add menu -->
      <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Add New Category</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <form method="post" action="../includes/addmenu.php">
                <div class="mb-3">
                  <label for="recipient-name" class="col-form-label">Menu Name</label>
                  <input type="text" name="mname" class="form-control" id="recipient-name">
                </div>
                <div class="mb-3">
                  <label for="recipient-name" class="col-form-label">Menu Link</label>
                  <input type="text" name="maction" value="#" class="form-control" id="recipient-name">
                </div>
                <div class="modal-footer">

                  <button type="submit" name="addmenu" class="btn btn-primary">Add Menu</button>
                </div>
              </form>
            </div>

          </div>
        </div>
      </div>
      <!-- Modal ended -->

      <!-- Modal to add Submenu -->
      <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Add New SubMenu</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <form method="post" action="../includes/addmenu.php">
                <div class="mb-3">
                  <label for="recipient-name" class="col-form-label">SubMenu Name</label>
                  <input type="text" name="smname" class="form-control" id="recipient-name">
                </div>
                <div class="mb-3">
                  <label for="recipient-name" class="col-form-label">Select Parent Name</label>
                  <select name="pid" class="form-control" id="recipient-name">
                    <!-- Fetching All parent menu id-->
                    <?php
                    $mlist = getAllMenu($db);
                    foreach ($mlist as $m) {
                    ?>
                      <option value="<?= $m['id'] ?>"><?= $m['name'] ?></option>
                    <?php
                    }
                    ?>

                  </select>
                </div>
                <div class="mb-3">
                  <label for="recipient-name" class="col-form-label">SubMenu Link</label>
                  <input type="text" value="#" name="smlink" class="form-control" id="recipient-name">
                </div>
                <div class="modal-footer">

                  <button type="submit" name="addsubmenu" class="btn btn-primary">Add SubMenu</button>
                </div>
              </form>
            </div>

          </div>
        </div>
      </div>
      <!-- Modal ended -->

      <!-- MENU -->
      <section class="section">
        <div class="row">
          <div class="col-lg-12">

            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Manage Menu - <a class="btn text-primary " data-bs-toggle="modal" data-bs-target="#exampleModal">Add New Menu</a></h5>

                <!-- Default Table -->
                <table class="table">
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Menu Name</th>
                      <th scope="col">Menu Link</th>
                      <th scope="col">Action</th>
                    </tr>
                  </thead>

                  <tbody>
                    <?php
                    $menus = getAllMenu($db);
                    $count = 1;
                    foreach ($menus as $menu) {
                    ?>
                      <tr>
                        <th scope="row"><?= $count ?></th>
                        <td><?= $menu['name'] ?></td>
                        <td><?= $menu['action'] ?></td>

                        <td>
                          <div class="btn-group">
                            <a class="btn btn-danger " href="../includes/removemenu.php?id=<?= $menu['id'] ?>"><i class="bi bi-x-octagon"></i></i></a>
                          </div>
                        </td>

                      </tr>
                    <?php
                      $count++;
                    }
                    ?>



                  </tbody>
                </table>
                <!-- End Default Table Example -->
              </div>
            </div>







          </div>


        </div>
      </section>

      <!-- SubMenu -->
      <section class="section">
        <div class="row">
          <div class="col-lg-12">

            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Manage SubMenu - <a class="btn text-primary " data-bs-toggle="modal" data-bs-target="#exampleModal1">Add New SubMenu</a></h5>

                <!-- Default Table -->
                <table class="table">
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">SubMenu Name</th>
                      <th scope="col">Parent Menu Name</th>
                      <th scope="col">Submenu Link</th>
                      <th scope="col">Action</th>
                    </tr>
                  </thead>

                  <tbody>
                    <?php
                    $submenus = getAllSubMenu($db);
                    $count = 1;
                    foreach ($submenus as $submenu) {
                    ?>
                      <tr>
                        <th scope="row"><?= $count ?></th>
                        <td><?= $submenu['name'] ?></td>
                        <td><?= getParentMenuName($db, $submenu['parent_menu_id']) ?></td>
                        <td><?= $submenu['action'] ?></td>

                        <td>
                          <div class="btn-group">
                            <a class="btn btn-danger " href="../includes/removesubmenu.php?id=<?= $submenu['id'] ?>"><i class="bi bi-x-octagon"></i></i></a>
                          </div>
                        </td>

                      </tr>
                    <?php
                      $count++;
                    }
                    ?>


                  </tbody>
                </table>
                <!-- End Default Table Example -->
              </div>
            </div>







          </div>


        </div>
      </section>

    </main><!-- End #main -->

    </main><!-- End #main -->
  <?php

  } 
  else {
  ?>

    <main id="main" class="main">

      <div class="pagetitle">
        <h1>Dashboard</h1>
        <nav>
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item active">Dashboard</li>
          </ol>
        </nav>
      </div><!-- End Page Title -->


      <section class="section dashboard">
        <div class="row">

          <!-- Left side columns -->
          <div class="col-lg-8">
            <div class="row">

              <!-- Sales Card -->
              <div class="col-xxl-4 col-md-6">
                <div class="card info-card sales-card">

                  <div class="filter">
                    <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                      <li class="dropdown-header text-start">
                        <h6>Filter</h6>
                      </li>

                      <li><a class="dropdown-item" href="#">Today</a></li>
                      <li><a class="dropdown-item" href="#">This Month</a></li>
                      <li><a class="dropdown-item" href="#">This Year</a></li>
                    </ul>
                  </div>

                  <div class="card-body">
                    <h5 class="card-title">Posts <span>| Today</span></h5>

                    <div class="d-flex align-items-center">
                      <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                        <i class="bi bi-cart"></i>
                      </div>
                      <div class="ps-3">
                        <h6>145</h6>
                        <span class="text-success small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">increase</span>

                      </div>
                    </div>
                  </div>

                </div>
              </div><!-- End Sales Card -->

              <!-- Revenue Card -->
              <div class="col-xxl-4 col-md-6">
                <div class="card info-card revenue-card">

                  <div class="filter">
                    <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                      <li class="dropdown-header text-start">
                        <h6>Filter</h6>
                      </li>

                      <li><a class="dropdown-item" href="#">Today</a></li>
                      <li><a class="dropdown-item" href="#">This Month</a></li>
                      <li><a class="dropdown-item" href="#">This Year</a></li>
                    </ul>
                  </div>

                  <div class="card-body">
                    <h5 class="card-title">Category <span>| This Month</span></h5>

                    <div class="d-flex align-items-center">
                      <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                        <i class="bi bi-currency-dollar"></i>
                      </div>
                      <div class="ps-3">
                        <h6>$3,264</h6>
                        <span class="text-success small pt-1 fw-bold">8%</span> <span class="text-muted small pt-2 ps-1">increase</span>

                      </div>
                    </div>
                  </div>

                </div>
              </div><!-- End Revenue Card -->

              <!-- Customers Card -->
              <div class="col-xxl-4 col-xl-12">

                <div class="card info-card customers-card">

                  <div class="filter">
                    <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                      <li class="dropdown-header text-start">
                        <h6>Menu</h6>
                      </li>

                      <li><a class="dropdown-item" href="#">Today</a></li>
                      <li><a class="dropdown-item" href="#">This Month</a></li>
                      <li><a class="dropdown-item" href="#">This Year</a></li>
                    </ul>
                  </div>

                  <div class="card-body">
                    <h5 class="card-title">Comments <span>| This Year</span></h5>

                    <div class="d-flex align-items-center">
                      <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                        <i class="bi bi-people"></i>
                      </div>
                      <div class="ps-3">
                        <h6>1244</h6>
                        <span class="text-danger small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">decrease</span>

                      </div>
                    </div>

                  </div>
                </div>

              </div><!-- End Customers Card -->

              <!-- Customers Card -->
              <div class="col-xxl-4 col-xl-12">

                <div class="card info-card customers-card">

                  <div class="filter">
                    <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                      <li class="dropdown-header text-start">
                        <h6>Filter</h6>
                      </li>

                      <li><a class="dropdown-item" href="#">Today</a></li>
                      <li><a class="dropdown-item" href="#">This Month</a></li>
                      <li><a class="dropdown-item" href="#">This Year</a></li>
                    </ul>
                  </div>

                  <div class="card-body">
                    <h5 class="card-title">Customers <span>| This Year</span></h5>

                    <div class="d-flex align-items-center">
                      <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                        <i class="bi bi-people"></i>
                      </div>
                      <div class="ps-3">
                        <h6>1244</h6>
                        <span class="text-danger small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">decrease</span>

                      </div>
                    </div>

                  </div>
                </div>

              </div><!-- End Customers Card -->







            </div>
          </div><!-- End Left side columns -->

          <!-- Right side columns -->
          <div class="col-lg-4">

            <!-- Recent Activity -->

            <!-- News & Updates Traffic -->
            <div class="card">
              <div class="filter">
                <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                  <li class="dropdown-header text-start">
                    <h6>Filter</h6>
                  </li>

                  <li><a class="dropdown-item" href="#">Today</a></li>
                  <li><a class="dropdown-item" href="#">This Month</a></li>
                  <li><a class="dropdown-item" href="#">This Year</a></li>
                </ul>
              </div>

              <div class="card-body pb-0">
                <h5 class="card-title">News &amp; Updates <span>| Today</span></h5>

                <div class="news">
                  <div class="post-item clearfix">
                    <img src="assets/img/news-1.jpg" alt="">
                    <h4><a href="#">Nihil blanditiis at in nihil autem</a></h4>
                    <p>Sit recusandae non aspernatur laboriosam. Quia enim eligendi sed ut harum...</p>
                  </div>

                  <div class="post-item clearfix">
                    <img src="assets/img/news-2.jpg" alt="">
                    <h4><a href="#">Quidem autem et impedit</a></h4>
                    <p>Illo nemo neque maiores vitae officiis cum eum turos elan dries werona nande...</p>
                  </div>

                  <div class="post-item clearfix">
                    <img src="assets/img/news-3.jpg" alt="">
                    <h4><a href="#">Id quia et et ut maxime similique occaecati ut</a></h4>
                    <p>Fugiat voluptas vero eaque accusantium eos. Consequuntur sed ipsam et totam...</p>
                  </div>

                  <div class="post-item clearfix">
                    <img src="assets/img/news-4.jpg" alt="">
                    <h4><a href="#">Laborum corporis quo dara net para</a></h4>
                    <p>Qui enim quia optio. Eligendi aut asperiores enim repellendusvel rerum cuder...</p>
                  </div>

                  <div class="post-item clearfix">
                    <img src="assets/img/news-5.jpg" alt="">
                    <h4><a href="#">Et dolores corrupti quae illo quod dolor</a></h4>
                    <p>Odit ut eveniet modi reiciendis. Atque cupiditate libero beatae dignissimos eius...</p>
                  </div>

                </div><!-- End sidebar recent posts-->

              </div>
            </div><!-- End News & Updates -->

          </div><!-- End Right side columns -->

        </div>
      </section>

    </main><!-- End #main -->



  <?php
  }
  ?>






  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>NiceAdmin</span></strong>. All Rights Reserved
    </div>
    <div class="credits">
      <!-- All the links in the footer should remain intact. -->
      <!-- You can delete the links only if you purchased the pro version. -->
      <!-- Licensing information: https://bootstrapmade.com/license/ -->
      <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
      Powered by <a href="https://cswallah.in/">CsWallah</a>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.min.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.min.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>