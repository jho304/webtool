<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>CMU Journal of Science</title>
    <link rel="icon" type="image/x-icon" href="<?php echo base_url('assets/img/cmujus.png')?>" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="<?php echo base_url('css/home/styles.css'); ?>" rel="stylesheet" />
    <style>
        /* Custom CSS for black navigation links */
        .navbar-nav .nav-link {
            color: black !important;
        }
    </style>
</head>
<body>
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light" id="mainNav">
        <div class="container px-4 px-lg-5">
            <a class="navbar-brand" href="<?php echo base_url('home/home_lp'); ?>"></a>
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
    <header class="masthead" style="background-image: url('<?php echo base_url('assets/img/contact.jpg'); ?>');">
        <div class="container position-relative px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">
                    <div class="page-heading text-center">
                        <h1>Contact Us</h1>
                        <span class="subheading">Have questions? We have answers.</span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content-->
    <div class="container px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
                <p>
Want to reach out? Complete the form below to send me a message, and I'll respond as soon as I can!</p>
                <div class="my-5">
                    <form id="contactForm" data-sb-form-api-token="API_TOKEN">
                        <div class="form-group">
                            <input class="form-control" id="name" type="text" placeholder="Your Name" data-sb-validations="required" />
                            <div class="invalid-feedback" data-sb-feedback="name:required">Please enter your name.</div>
                        </div>
                        <div class="form-group">
                            <input class="form-control" id="email" type="email" placeholder="Your Email" data-sb-validations="required,email" />
                            <div class="invalid-feedback" data-sb-feedback="email:required">Please enter your email.</div>
                            <div class="invalid-feedback" data-sb-feedback="email:email">Please enter a valid email address.</div>
                        </div>
                        <div class="form-group">
                            <input class="form-control" id="phone" type="tel" placeholder="Your Phone Number" data-sb-validations="required" />
                            <div class="invalid-feedback" data-sb-feedback="phone:required">Please enter your phone number.</div>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" id="message" placeholder="Your Message" rows="4" data-sb-validations="required"></textarea>
                            <div class="invalid-feedback" data-sb-feedback="message:required">Please enter your message.</div>
                        </div>
                        <!-- Submit Button-->
                        <button class="btn btn-primary text-uppercase fw-bold" id="submitButton" type="submit">Send Message</button>
                    </form>
                </div>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
