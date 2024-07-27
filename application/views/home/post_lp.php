<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="Central Mindanao University Journal of Science" />
        <meta name="author" content="CMU" />
        <title>CMU Journal of Science</title>
        <link rel="icon" type="image/x-icon" href="assets/img/cmujus.png" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="<?php echo base_url('css/home/styles.css'); ?>" rel="stylesheet" />
        <!-- Custom CSS to make the links black -->
        <style>
            .navbar-nav .nav-link {
                color: black !important;
            }
            .navbar-nav .nav-link:hover {
                color: #0056b3 !important; /* Optional: change color on hover */
            }
        </style>
    </head>
    <body>
        <!-- Navigation-->
        <!-- Your existing navigation bar -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light" id="mainNav">
            <div class="container px-4 px-lg-5">
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="<?php echo base_url(); ?>">Home</a></li>
                        <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="<?php echo base_url('home/about'); ?>">About</a></li>
                        <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="<?php echo base_url('home/contact'); ?>">Contact</a></li>
                    </ul>
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="<?php echo base_url('registration/login'); ?>">Login</a></li>
                        <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="<?php echo base_url('registration/signup'); ?>">Register</a></li>
                    </ul>
                </div>
            </div>
        </nav>

  <!-- Page Header-->
  <header class="masthead" style="background-image: url('<?php echo base_url('assets/img/download.jpg'); ?>')">                    <div class="container position-relative px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <div class="post-heading">
                        <?php foreach($articleData as $article) : ?>
    <h1><?php echo $article->title; ?></h1>
    <span class="meta">
        Posted by <small><a href="#!"><?php echo $article->author_name; ?></a> on <?php echo date('F d, Y', strtotime($article->created_at)); ?></small>
    </span>
</div>
</div>
</div>
</div>
</header>
<?php endforeach; ?>

<!-- Post Content-->




        
                    </div>
                </div>
            </div>
        </article>
        <!-- Footer-->
        <footer class="border-top">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <div class="small text-center text-muted fst-italic">Copyright &copy; CMU JS</div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="<?php echo base_url('js/scripts.js')?>"></script>>
    </body>
</html>
