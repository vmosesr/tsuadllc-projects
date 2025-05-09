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
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Archivo+Narrow:wght@400;700&display=swap" rel="stylesheet">

        <!-- Bootstrap Icons -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.5/font/bootstrap-icons.min.css">

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
                                <div class="logo-text">ETHICS FRAMEWORK</div>
                            </div>
                            
                            <!-- Center Menu Links -->
                            <div class="col-md-6">
                                <div class="center-menu">
                                    <a href="#" class="nav-link">TSUAD LLC</a>
                                    <a href="#" class="nav-link">WHO WE ARE</a>
                                    <a href="#" class="nav-link">COMPANIES</a>
                                    <a href="#" class="nav-link">CONTACT</a>
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

        </header>


        <main class="">

            <!-- Hero Section -->
            <section class="hero-section">
                <div class="container hero-content">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Cloud</a></li>
                            <li class="breadcrumb-item"><a href="#">Artificial Intelligence</a></li>
                        </ol>
                    </nav>
                    
                    <h1 class="hero-title">AI Solutions Hub</h1>
                    <p class="hero-text">Enter a new era of productivity with generative AI solutions for your business. Leverage AI, embedded as you need it, across the full stack.</p>
                    <button class="cta-button">Speak to an AI expert</button>
                </div>
                
                <div class="hero-blob">
                    <svg viewBox="0 0 200 100" xmlns="http://www.w3.org/2000/svg">
                        <path fill="#FFAA5A" d="M42.7,-72.1C54.9,-64.3,64.3,-51.3,69.4,-37.4C74.5,-23.5,75.3,-8.8,73.2,5.7C71.2,20.1,66.3,34.3,57.4,46C48.5,57.7,35.6,66.9,21.2,72.1C6.9,77.3,-8.9,78.6,-24.5,75.3C-40.2,72,-55.7,64,-65.3,51.6C-74.9,39.3,-78.6,22.4,-77.4,6.4C-76.3,-9.6,-70.3,-24.8,-61.2,-37.5C-52.2,-50.2,-40,-60.5,-26.8,-67.7C-13.6,-74.9,0.5,-79.1,14.5,-77.5C28.5,-75.9,42.5,-68.5,51.8,-58.4C61.1,-48.3,65.8,-35.6,72.1,-22.3C78.4,-9,86.3,4.7,84.4,17.1C82.5,29.4,71,40.3,58.1,47.2C45.3,54.1,31.2,57,17,64.5C2.9,72,-11.3,84.2,-25.1,84.7C-38.9,85.2,-52.4,74,-62.6,60.6C-72.9,47.2,-80,31.6,-81.9,15.2C-83.9,-1.1,-80.8,-18.2,-73.1,-32.3C-65.5,-46.3,-53.2,-57.3,-39.6,-64.9C-26,-72.5,-11,-76.7,2.5,-80.6C16,-84.5,30.5,-88,42.7,-72.1Z" transform="translate(100 50)" />
                    </svg>
                </div>
            </section>
            
            <!-- Tab Navigation -->
            <section class="tab-section">
                <div class="tab-section-links">
                    <ul class="nav nav-tabs" id="solutionTabs" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="all-solutions-tab" data-bs-toggle="tab" data-bs-target="#all-solutions" type="button" role="tab" aria-controls="all-solutions" aria-selected="true">All solutions</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="typical-scenarios-tab" data-bs-toggle="tab" data-bs-target="#typical-scenarios" type="button" role="tab" aria-controls="typical-scenarios" aria-selected="false">Typical scenarios</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="oci-blueprints-tab" data-bs-toggle="tab" data-bs-target="#oci-blueprints" type="button" role="tab" aria-controls="oci-blueprints" aria-selected="false">OCI AI Blueprints</button>
                        </li>
                    </ul>
                    
                    <div class="tab-content" id="solutionTabsContent">
                        <!-- All Solutions Tab -->
                        <div class="tab-pane fade show active" id="all-solutions" role="tabpanel" aria-labelledby="all-solutions-tab">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="solution-card">
                                        <div class="solution-icon">
                                            <i class="bi bi-robot"></i>
                                        </div>
                                        <h3>Generative AI</h3>
                                        <p>Transform your business with text, image, and code generation models.</p>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="solution-card">
                                        <div class="solution-icon">
                                            <i class="bi bi-chat-dots"></i>
                                        </div>
                                        <h3>Conversational AI</h3>
                                        <p>Build intelligent chatbots and virtual assistants for customer support.</p>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="solution-card">
                                        <div class="solution-icon">
                                            <i class="bi bi-bar-chart"></i>
                                        </div>
                                        <h3>Predictive Analytics</h3>
                                        <p>Forecast trends and make data-driven decisions with AI-powered analytics.</p>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="solution-card">
                                        <div class="solution-icon">
                                            <i class="bi bi-image"></i>
                                        </div>
                                        <h3>Computer Vision</h3>
                                        <p>Analyze and interpret visual data from images and video streams.</p>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="solution-card">
                                        <div class="solution-icon">
                                            <i class="bi bi-mic"></i>
                                        </div>
                                        <h3>Speech Recognition</h3>
                                        <p>Convert spoken language into text with advanced AI models.</p>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="solution-card">
                                        <div class="solution-icon">
                                            <i class="bi bi-shield-check"></i>
                                        </div>
                                        <h3>AI Security</h3>
                                        <p>Enhance security with AI-powered threat detection and prevention.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Typical Scenarios Tab -->
                        <div class="tab-pane fade" id="typical-scenarios" role="tabpanel" aria-labelledby="typical-scenarios-tab">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="scenario-item">
                                        <div class="scenario-number">01</div>
                                        <div>
                                            <h3>Customer Service Automation</h3>
                                            <p>Implement AI chatbots to handle routine customer inquiries, freeing up human agents to tackle more complex issues.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="scenario-item">
                                        <div class="scenario-number">02</div>
                                        <div>
                                            <h3>Content Creation at Scale</h3>
                                            <p>Generate marketing copy, blog posts, and social media content using generative AI models trained on your brand voice.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="scenario-item">
                                        <div class="scenario-number">03</div>
                                        <div>
                                            <h3>Supply Chain Optimization</h3>
                                            <p>Predict inventory needs, optimize logistics, and reduce costs with AI-powered forecasting algorithms.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="scenario-item">
                                        <div class="scenario-number">04</div>
                                        <div>
                                            <h3>Personalized Recommendations</h3>
                                            <p>Increase customer engagement with AI-driven product and content recommendations based on behavior analysis.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- OCI AI Blueprints Tab -->
                        <div class="tab-pane fade" id="oci-blueprints" role="tabpanel" aria-labelledby="oci-blueprints-tab">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="blueprint-card">
                                        <h3>Document Processing Pipeline</h3>
                                        <p>Extract, classify, and process information from unstructured documents with this complete AI solution.</p>
                                        <a href="#" class="btn btn-outline-secondary mt-2">View Blueprint</a>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="blueprint-card">
                                        <h3>Intelligent Customer Support</h3>
                                        <p>Deploy a fully integrated customer support system with chatbots, sentiment analysis, and case routing.</p>
                                        <a href="#" class="btn btn-outline-secondary mt-2">View Blueprint</a>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="blueprint-card">
                                        <h3>Real-time Anomaly Detection</h3>
                                        <p>Identify unusual patterns in data streams for fraud prevention, equipment monitoring, and more.</p>
                                        <a href="#" class="btn btn-outline-secondary mt-2">View Blueprint</a>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="blueprint-card">
                                        <h3>Multimodal Content Analysis</h3>
                                        <p>Process text, images, and video content simultaneously for comprehensive media understanding.</p>
                                        <a href="#" class="btn btn-outline-secondary mt-2">View Blueprint</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>


        </main>



        <!-- Bootstrap JS & Popper.js -->
        <script src="{{ asset('assets/js/script.js') }}"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>

    </body>

</html>
