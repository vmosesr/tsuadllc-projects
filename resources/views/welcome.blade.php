<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>TSUAD LLC | Projects</title>

        <link rel="icon" href="/favicon.ico" sizes="any">
        <link rel="icon" href="/favicon.svg" type="image/svg+xml">
        <link rel="apple-touch-icon" href="/apple-touch-icon.png">

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        {{-- <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" /> --}}

        <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">

        <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

    </head>
    <body class="">

        <header class="navigation-bar">

            <!-- Desktop Navigation -->
            <div class="desktop-nav">
                <!-- Top Navigation -->
                <div class="top-nav">
                    <div class="container">
                        <div class="row align-items-center">
                            <!-- Logo Section (Left) -->
                            <div class="col-md-3 logo-container">
                                <div class="logo-icon">
                                    <i class="fas fa-building"></i>
                                </div>
                                <div class="logo-text">YourBrand</div>
                            </div>
                            
                            <!-- Center Menu Links -->
                            <div class="col-md-6">
                                <div class="center-menu">
                                    <a href="#" class="nav-link">Home</a>
                                    <a href="#" class="nav-link">About</a>
                                    <a href="#" class="nav-link">Services</a>
                                    <a href="#" class="nav-link">Contact</a>
                                </div>
                            </div>
                            
                            <!-- Search, Login, Register (Right) -->
                            <div class="col-md-3">
                                <div class="search-login-container">
                                    <div class="search-container">
                                        <input type="text" class="form-control" placeholder="Search...">
                                        <i class="fas fa-search search-icon"></i>
                                    </div>
                                    <a href="#" class="btn btn-outline-primary btn-sm me-2">Login</a>
                                    <a href="#" class="btn btn-primary btn-sm">Register</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Secondary Navigation with Dropdowns -->
                <div class="sub-nav">
                    <div class="container">
                        <nav class="navbar navbar-expand">
                            <ul class="navbar-nav w-100 justify-content-between">
                                <!-- Category 1 Dropdown -->
                                <li class="nav-item dropdown dropdown-large">
                                    <a class="nav-link dropdown-toggle" href="#" id="category1" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        Category 1
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-large" aria-labelledby="category1">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <h6>Subcategory 1.1</h6>
                                                <a class="dropdown-item" href="#">Item 1.1.1</a>
                                                <a class="dropdown-item" href="#">Item 1.1.2</a>
                                                <a class="dropdown-item" href="#">Item 1.1.3</a>
                                            </div>
                                            <div class="col-md-4">
                                                <h6>Subcategory 1.2</h6>
                                                <a class="dropdown-item" href="#">Item 1.2.1</a>
                                                <a class="dropdown-item" href="#">Item 1.2.2</a>
                                                <a class="dropdown-item" href="#">Item 1.2.3</a>
                                            </div>
                                            <div class="col-md-4">
                                                <h6>Subcategory 1.3</h6>
                                                <a class="dropdown-item" href="#">Item 1.3.1</a>
                                                <a class="dropdown-item" href="#">Item 1.3.2</a>
                                                <a class="dropdown-item" href="#">Item 1.3.3</a>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <!-- Category 2 Dropdown -->
                                <li class="nav-item dropdown dropdown-large">
                                    <a class="nav-link dropdown-toggle" href="#" id="category2" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        Category 2
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-large" aria-labelledby="category2">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <h6>Subcategory 2.1</h6>
                                                <a class="dropdown-item" href="#">Item 2.1.1</a>
                                                <a class="dropdown-item" href="#">Item 2.1.2</a>
                                            </div>
                                            <div class="col-md-6">
                                                <h6>Subcategory 2.2</h6>
                                                <a class="dropdown-item" href="#">Item 2.2.1</a>
                                                <a class="dropdown-item" href="#">Item 2.2.2</a>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <!-- Category 3 Dropdown -->
                                <li class="nav-item dropdown dropdown-large">
                                    <a class="nav-link dropdown-toggle" href="#" id="category3" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        Category 3
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-large" aria-labelledby="category3">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <h6>Subcategory 3.1</h6>
                                                <a class="dropdown-item" href="#">Item 3.1.1</a>
                                                <a class="dropdown-item" href="#">Item 3.1.2</a>
                                                <a class="dropdown-item" href="#">Item 3.1.3</a>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <!-- Category 4 Dropdown -->
                                <li class="nav-item dropdown dropdown-large">
                                    <a class="nav-link dropdown-toggle" href="#" id="category4" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        Category 4
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-large" aria-labelledby="category4">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <h6>Subcategory 4.1</h6>
                                                <a class="dropdown-item" href="#">Item 4.1.1</a>
                                                <a class="dropdown-item" href="#">Item 4.1.2</a>
                                            </div>
                                            <div class="col-md-4">
                                                <h6>Subcategory 4.2</h6>
                                                <a class="dropdown-item" href="#">Item 4.2.1</a>
                                                <a class="dropdown-item" href="#">Item 4.2.2</a>
                                            </div>
                                            <div class="col-md-4">
                                                <h6>Subcategory 4.3</h6>
                                                <a class="dropdown-item" href="#">Item 4.3.1</a>
                                                <a class="dropdown-item" href="#">Item 4.3.2</a>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <!-- Category 5 -->
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Category 5</a>
                                </li>

                                <!-- Category 6 Dropdown -->
                                <li class="nav-item dropdown dropdown-large">
                                    <a class="nav-link dropdown-toggle" href="#" id="category6" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        Category 6
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-large" aria-labelledby="category6">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <h6>Subcategory 6.1</h6>
                                                <a class="dropdown-item" href="#">Item 6.1.1</a>
                                                <a class="dropdown-item" href="#">Item 6.1.2</a>
                                            </div>
                                            <div class="col-md-6">
                                                <h6>Subcategory 6.2</h6>
                                                <a class="dropdown-item" href="#">Item 6.2.1</a>
                                                <a class="dropdown-item" href="#">Item 6.2.2</a>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <!-- Category 7 Dropdown -->
                                <li class="nav-item dropdown dropdown-large">
                                    <a class="nav-link dropdown-toggle" href="#" id="category7" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        Category 7
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-large" aria-labelledby="category7">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <h6>Subcategory 7.1</h6>
                                                <a class="dropdown-item" href="#">Item 7.1.1</a>
                                                <a class="dropdown-item" href="#">Item 7.1.2</a>
                                                <a class="dropdown-item" href="#">Item 7.1.3</a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>

            <!-- Mobile Navigation -->
            <div class="mobile-nav-toggles">
                <div class="d-flex align-items-center">
                    <!-- Hamburger for sub-navigation -->
                    <button class="btn btn-sm btn-outline-secondary" id="hamburgerBtn">
                        <i class="fas fa-bars"></i>
                    </button>
                    
                    <!-- Logo Icon -->
                    <div class="mobile-logo">
                        <div class="logo-icon">
                            <i class="fas fa-building"></i>
                        </div>
                    </div>
                </div>
                
                <!-- Menu icon for top navigation -->
                <button class="btn btn-sm btn-outline-secondary" id="menuBtn">
                    <i class="fas fa-ellipsis-v"></i>
                </button>
            </div>

            <!-- Mobile Sub Navigation Menu (slides from left) -->
            <div class="mobile-menu-collapsible" id="mobileSubNav">
                <div class="accordion" id="subNavAccordion">
                    <!-- Category 1 -->
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading1">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse1" aria-expanded="false" aria-controls="collapse1">
                                Category 1
                            </button>
                        </h2>
                        <div id="collapse1" class="accordion-collapse collapse" aria-labelledby="heading1" data-bs-parent="#subNavAccordion">
                            <div class="accordion-body">
                                <h6>Subcategory 1.1</h6>
                                <ul class="list-unstyled">
                                    <li><a href="#" class="text-decoration-none">Item 1.1.1</a></li>
                                    <li><a href="#" class="text-decoration-none">Item 1.1.2</a></li>
                                    <li><a href="#" class="text-decoration-none">Item 1.1.3</a></li>
                                </ul>
                                
                                <h6>Subcategory 1.2</h6>
                                <ul class="list-unstyled">
                                    <li><a href="#" class="text-decoration-none">Item 1.2.1</a></li>
                                    <li><a href="#" class="text-decoration-none">Item 1.2.2</a></li>
                                    <li><a href="#" class="text-decoration-none">Item 1.2.3</a></li>
                                </ul>
                                
                                <h6>Subcategory 1.3</h6>
                                <ul class="list-unstyled">
                                    <li><a href="#" class="text-decoration-none">Item 1.3.1</a></li>
                                    <li><a href="#" class="text-decoration-none">Item 1.3.2</a></li>
                                    <li><a href="#" class="text-decoration-none">Item 1.3.3</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Category 2 -->
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading2">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
                                Category 2
                            </button>
                        </h2>
                        <div id="collapse2" class="accordion-collapse collapse" aria-labelledby="heading2" data-bs-parent="#subNavAccordion">
                            <div class="accordion-body">
                                <h6>Subcategory 2.1</h6>
                                <ul class="list-unstyled">
                                    <li><a href="#" class="text-decoration-none">Item 2.1.1</a></li>
                                    <li><a href="#" class="text-decoration-none">Item 2.1.2</a></li>
                                </ul>
                                
                                <h6>Subcategory 2.2</h6>
                                <ul class="list-unstyled">
                                    <li><a href="#" class="text-decoration-none">Item 2.2.1</a></li>
                                    <li><a href="#" class="text-decoration-none">Item 2.2.2</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Category 3 -->
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading3">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
                                Category 3
                            </button>
                        </h2>
                        <div id="collapse3" class="accordion-collapse collapse" aria-labelledby="heading3" data-bs-parent="#subNavAccordion">
                            <div class="accordion-body">
                                <h6>Subcategory 3.1</h6>
                                <ul class="list-unstyled">
                                    <li><a href="#" class="text-decoration-none">Item 3.1.1</a></li>
                                    <li><a href="#" class="text-decoration-none">Item 3.1.2</a></li>
                                    <li><a href="#" class="text-decoration-none">Item 3.1.3</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Category 4 -->
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading4">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
                                Category 4
                            </button>
                        </h2>
                        <div id="collapse4" class="accordion-collapse collapse" aria-labelledby="heading4" data-bs-parent="#subNavAccordion">
                            <div class="accordion-body">
                                <h6>Subcategory 4.1</h6>
                                <ul class="list-unstyled">
                                    <li><a href="#" class="text-decoration-none">Item 4.1.1</a></li>
                                    <li><a href="#" class="text-decoration-none">Item 4.1.2</a></li>
                                </ul>
                                
                                <h6>Subcategory 4.2</h6>
                                <ul class="list-unstyled">
                                    <li><a href="#" class="text-decoration-none">Item 4.2.1</a></li>
                                    <li><a href="#" class="text-decoration-none">Item 4.2.2</a></li>
                                </ul>
                                
                                <h6>Subcategory 4.3</h6>
                                <ul class="list-unstyled">
                                    <li><a href="#" class="text-decoration-none">Item 4.3.1</a></li>
                                    <li><a href="#" class="text-decoration-none">Item 4.3.2</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Category 5 -->
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading5">
                            <button class="accordion-button collapsed" type="button">
                                <a href="#" class="text-decoration-none text-dark w-100">Category 5</a>
                            </button>
                        </h2>
                    </div>
                    
                    <!-- Category 6 -->
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading6">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse6" aria-expanded="false" aria-controls="collapse6">
                                Category 6
                            </button>
                        </h2>
                        <div id="collapse6" class="accordion-collapse collapse" aria-labelledby="heading6" data-bs-parent="#subNavAccordion">
                            <div class="accordion-body">
                                <h6>Subcategory 6.1</h6>
                                <ul class="list-unstyled">
                                    <li><a href="#" class="text-decoration-none">Item 6.1.1</a></li>
                                    <li><a href="#" class="text-decoration-none">Item 6.1.2</a></li>
                                </ul>
                                
                                <h6>Subcategory 6.2</h6>
                                <ul class="list-unstyled">
                                    <li><a href="#" class="text-decoration-none">Item 6.2.1</a></li>
                                    <li><a href="#" class="text-decoration-none">Item 6.2.2</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Category 7 -->
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading7">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse7" aria-expanded="false" aria-controls="collapse7">
                                Category 7
                            </button>
                        </h2>
                        <div id="collapse7" class="accordion-collapse collapse" aria-labelledby="heading7" data-bs-parent="#subNavAccordion">
                            <div class="accordion-body">
                                <h6>Subcategory 7.1</h6>
                                <ul class="list-unstyled">
                                    <li><a href="#" class="text-decoration-none">Item 7.1.1</a></li>
                                    <li><a href="#" class="text-decoration-none">Item 7.1.2</a></li>
                                    <li><a href="#" class="text-decoration-none">Item 7.1.3</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Mobile Top Navigation Menu (slides from right) -->
            <div class="top-mobile-menu" id="mobileTopNav">
                <div class="mobile-menu-links mb-4">
                    <a href="#" class="d-block py-2 border-bottom">Home</a>
                    <a href="#" class="d-block py-2 border-bottom">About</a>
                    <a href="#" class="d-block py-2 border-bottom">Services</a>
                    <a href="#" class="d-block py-2">Contact</a>
                </div>
                
                <div class="search-login-container-mobile">
                    <div class="search-container-mobile mb-3">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search...">
                            <button class="btn btn-outline-secondary" type="button">
                                <i class="fas fa-search"></i>
                            </button>
                        </div>
                    </div>
                    
                    <div class="d-grid gap-2">
                        <a href="#" class="btn btn-outline-primary">Login</a>
                        <a href="#" class="btn btn-primary">Register</a>
                    </div>
                </div>
            </div>

            <!-- Hero Section Placeholder -->
            <div class="container mt-4">
                <div class="p-5 bg-light rounded-3">
                    <h1>Hero Section Placeholder</h1>
                    <p>This is where your hero section content would go.</p>
                </div>
            </div>


        </header>



        <!-- Bootstrap JS & Popper.js -->
        <script src="{{ asset('assets/js/script.js') }}"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
        

    </body>

</html>
