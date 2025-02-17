<?php
// this template for displaying header

?>


<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>" class="no-js">

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <div id="header-area" class="for-border">
        <div class="container">
            <div class="row d-flex align-items-center">
                <div class="col-md-3">
                    <a href=""><img src="<?php echo get_theme_mod('onepage_logo') ?>" alt=""></a>
                </div>
                <div class="col-md-9 mx-auto">
                    <nav class="navbar navbar-expand-lg">
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link active" href="#">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">About</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Features</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Team</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Clients</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Portfolio</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Pricing</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Contact</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>