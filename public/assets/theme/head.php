<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Demaa Al-Amal - <?php echo $theme; ?></title>
    <link rel="shortcut icon" href="assets/images/fav.png" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Merriweather&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="assets/Image/icon-site.png">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/fontawsom-all.min.css">
    <link rel="stylesheet" href="assets/plugins/grid-gallery/css/grid-gallery.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css" />
    <?php
    if($theme=="Sign In"){
        echo '    <link rel="stylesheet" type="text/css" href="assets/css/Style_log-in_up.css" />        ';
    }
    ?>
</head>

<body>
    <header class="continer-fluid ">
        <div class="header-top">
            <div class="container">
                <div class="row col-det">
                    <div class="col-lg-6 d-none d-lg-block">
                        <ul class="ulleft">
                            <li>
                                <i class="far fa-envelope"></i><a href="mailto:hamzabouri@gmail.com" style="color: white;">
                                    hamzabouri@gmail.com</a>
                                <span>|</span>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <ul class="ulright">
                            <li><a href="Sign-in_up.php" style="color:white;">
                                    <i class="fas fa-user"></i>
                                    Sign In</li></a>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div id="menu-jk" class="header-bottom">
            <div class="container">
                <div class="row nav-row">
                    <div class="col-md-3 logo">
                        <img src="assets/image/new logo.png" alt="">
                    </div>
                    <div class="col-md-9 nav-col">
                        <nav class="navbar navbar-expand-lg navbar-light">
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarNav">
                                <ul class="navbar-nav">
                                    <li class="nav-item active">
                                        <a class="nav-link" href="../PFE/">Home
                                        </a>
                                    </li>
                                    <li class="nav-item ">
                                        <?php 
                                        if ($theme=="The Centers") {
                                            # code...
                                        }?>
                                        <a class="nav-link" href="/#about">About Us</a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link" href="#gallery">Gallery</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#process">Process</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#blog">Blog</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="the_centers.php">The Centers</a>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </header>