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
        <nav class="navbar navbar-expand-lg navbar-light bg-light" id="mainNav">
            <div class="container px-4 px-lg-5">
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="<?php echo base_url(); ?>">Home</a></li>
                        <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle px-lg-3 py-3 py-lg-4" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Volumes
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <?php foreach ($vols as $vol): ?>
                                <li><a class="dropdown-item" href="<?php echo site_url('home/viewVolume/'.$vol['volumeid']); ?>"><?php echo $vol['vol_name']; ?></a></li>
                            <?php endforeach; ?>
                        </ul>
                    </li>
                        <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="<?php echo base_url('home/archive'); ?>">Archives</a></li>
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
        <header class="masthead" style="background-image: url('<?php echo base_url('assets/img/college.jpg'); ?>');">
            <div class="container position-relative px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <div class="site-heading text-center">
                            <h1>CENTRAL MINDANAO UNIVERSITY</h1>
                            <span class="subheading">Journal of Science</span>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <!-- Main Content-->
        <style>
.post-preview {
    position: relative;
    overflow: hidden;
    margin-bottom: 20px;
    padding: 20px;
    transition: background-color 0.3s ease, transform 0.3s ease;
    border: 1px solid #ddd;
    border-radius: 5px;
}

.post-link {
    display: block;
    color: inherit;
    text-decoration: none;
    transition: transform 0.3s ease;
}

.post-link:hover {
    transform: scale(1.02);
}

.post-content {
    color: black; /* Ensure text color is black */
}

.post-content h2,
.post-content h3,
.post-content p,
.post-content a {
    color: black; /* Ensure all text elements are black */
}

.post-preview:hover {
    transform: scale(1.02);
}

.btn {
    display: inline-block;
    margin-top: 10px;
    color: black; /* Ensure button text color is black */
}
</style>
<div class="container px-4 px-lg-5">
    <h2><?php echo $volume['vol_name']; ?></h2>
    <div class="row gx-4 gx-lg-5 justify-content-center">
        <div class="col-md-10 col-lg-8 col-xl-7">
            <?php if (!empty($articles)): ?>
                <?php foreach ($articles as $article): ?>
                    <div class="post-preview">
                        <a href="<?php echo site_url('home/post/'.$article['slug']); ?>">
                            <h4 class="post-title"><?php echo $article['title']; ?></h4>
                            <p><strong>DOI:</strong> <?php echo $article['doi']; ?></p>
                            <p><strong>Keywords:</strong> <?php echo $article['keywords']; ?></p>
                            <p class="post-subtitle"><?php echo isset($article['abstract']) && strlen($article['abstract']) > 100 ? substr($article['abstract'], 0, 100) . '...' : $article['abstract']; ?></p>
                        </a>
                        <p class="post-meta">
                        Author/s:
                            <span class="meta">
                                <small>
                                <?php echo $article['author']; ?>
                                </small>
                            </span>
                        </p>
                        <div class="d-flex justify-content-end mb-4">
                            <a class="btn btn-primary text-uppercase" href="<?php echo site_url('home/post/'.$article['slug']); ?>"><small> Read More... </small></a>
                        </div>
                    </div>
                    <hr class="my-4" />
                <?php endforeach; ?>
            <?php else: ?>
                <p>No articles found for this volume.</p>
            <?php endif; ?>
        </div>
    </div>
</div>


        <!-- Footer-->
        <footer class="border-top">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <div class="small text-center text-muted fst-italic">Copyright &copy; CMU JS 2024</div>
                    </div>
                </div>
            </div>
        </footer>

        <!-- Bootstrap core JS-->
        <script src="<?php echo base_url('js/bootstrap.bundle.min.js'); ?>"></script>
        <!-- Core theme JS-->
        <script src="<?php echo base_url('js/scripts.js'); ?>"></script>
    </body>
</html>
