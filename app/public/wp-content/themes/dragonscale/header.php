<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <?php
    wp_head();
    ?>

</head>

<body class="d-flex flex-column h-100">
    <header>
        <!-- Nav with logo only -->
        <nav class="navbar navbar-dark navbar-bg">
            <div class="container">
                <a class="navbar-brand" href="#">
                    <img src="new-primary-logo.svg" alt="UAB Logo" width="100" height="30">
                </a>
            </div>
        </nav>

        <!-- Title Bar -->
        <div class="container py-3">
            <div class="row align-items-center">
                <div class="col-11 col-md-10">
                    <h1 class="mb-0"><a href="#" class="text-decoration-none text-dark">Dragon Scale Design System</a>
                    </h1>
                    <p class="mb-0 text-muted">JOOMLA 4 VERSION</p>
                </div>
                <div class="col-1 col-md-2 text-end">
                    <button class="btn btn-link" type="button" aria-label="Search">
                        <i id="search" class="fas fa-search fa-lg icon-grey"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Links under title bar with mobile navigation -->
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent"
                    aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarContent">
                    <ul class="navbar-nav justify-content-left">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="joomlaEssentials" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Joomla Essentials
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="joomlaEssentials">
                                <li><a class="dropdown-item" href="#">Basics</a></li>
                                <li><a class="dropdown-item" href="#">FAQs</a></li>
                                <li><a class="dropdown-item" href="#">Widgetkit</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="designBasics" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Design Basics
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="designBasics">
                                <li><a class="dropdown-item" href="#">Badges</a></li>
                                <li><a class="dropdown-item" href="#">Buttons</a></li>
                                <li><a class="dropdown-item" href="#">Callout Box</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="templateElements" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Template Elements
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="templateElements">
                                <li><a class="dropdown-item" href="#">Footer</a></li>
                                <li><a class="dropdown-item" href="#">Horizontal Navigation</a></li>
                                <li><a class="dropdown-item" href="#">Secondary Navigation</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="positions" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Positions
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="positions">
                                <li><a class="dropdown-item" href="#">About Template Positions</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="components" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Components
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="components">
                                <li><a class="dropdown-item" href="#">About Components</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="examplePages" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Example Pages
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="examplePages">
                                <li><a class="dropdown-item" href="#">Sample Page 1</a></li>
                                <li><a class="dropdown-item" href="#">Sample Page 2</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <!-- Banner with Image -->
    <div class="container-fluid px-0 mt-4">
        <div class="row g-0">
            <div class="col-12">
                <img src="https://unsplash.it/1200/400" alt="Banner Image" class="img-fluid w-100">
            </div>
        </div>
    </div>