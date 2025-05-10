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
        <!-- Google Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Quicksand:wght@300..700&display=swap" rel="stylesheet">
        
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
                                    <a href="{{ route('who-we-are') }}" class="nav-link">WHO WE ARE</a>
                                    <a href="{{ route('companies') }}" class="nav-link">COMPANIES</a>
                                    <a href="{{ route('contact-us') }}" class="nav-link">CONTACT</a>
                                </div>
                            </div>
                            
                            <!-- Search, Login, Register (Right) -->
                            <div class="col-md-3">
                                <div class="search-login-container">
                                    <div class="search-container">
                                        <input type="text" class="form-control" placeholder="Search...">
                                        <i class="fas fa-search search-icon"></i>
                                    </div>
                                    <a href="{{ route('login') }}" class="btn btn-outline-primary btn-sm me-2">Login</a>
                                    <a href="{{ route('register') }}" class="btn btn-primary btn-sm">Register</a>
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
                                        Ethical Pillars
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-large" aria-labelledby="category1">
                                        <div class="row dropdowns-menu-content">
                                            <div class="col-md-4">
                                                <h6>Fairness & Equity</h6>
                                                <a class="dropdown-item" href="#">Bias Mitigation</a>
                                                <a class="dropdown-item" href="#">Inclusive Design</a>
                                                <a class="dropdown-item" href="#">Accessibility Standards</a>
                                                <a class="dropdown-item" href="#">Global Perspectives</a>
                                                <a class="dropdown-item" href="#">Cultural Considerations</a>
                                            </div>
                                            <div class="col-md-4">
                                                <h6>Transparency</h6>
                                                <a class="dropdown-item" href="#">Explainable AI</a>
                                                <a class="dropdown-item" href="#">Disclosure Practices</a>
                                                <a class="dropdown-item" href="#">Algorithmic Transparency</a>
                                                <a class="dropdown-item" href="#">Communication Guidelines</a>
                                                <a class="dropdown-item" href="#">Documentation Standards</a>
                                            </div>
                                            <div class="col-md-4">
                                                <h6>Privacy & Data Governance</h6>
                                                <a class="dropdown-item" href="#">Data Collection Ethics</a>
                                                <a class="dropdown-item" href="#">Consent Management</a>
                                                <a class="dropdown-item" href="#">Data Minimization</a>
                                                <a class="dropdown-item" href="#">Information Security</a>
                                                <a class="dropdown-item" href="#">Data Rights</a>
                                                <a class="dropdown-item" href="#">Anonymization Techniques</a>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <!-- Category 2 Dropdown -->
                                <li class="nav-item dropdown dropdown-large">
                                    <a class="nav-link dropdown-toggle" href="#" id="category2" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        Implementation
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-large" aria-labelledby="category2">
                                        <div class="row dropdowns-menu-content">
                                            <div class="col-md-6">
                                                <h6>Assessment Tools</h6>
                                                <a class="dropdown-item" href="#">Self-Assessment Questionnaire</a>
                                                <a class="dropdown-item" href="#">Ethical Risk Calculator</a>
                                                <a class="dropdown-item" href="#">Maturity Model Toolkit</a>
                                                <a class="dropdown-item" href="#">Benchmarking Resources</a>
                                                <a class="dropdown-item" href="#">Compliance Checklist</a>
                                            </div>
                                            <div class="col-md-6">
                                                <h6>Development Guidelines</h6>
                                                <a class="dropdown-item" href="#">Design Phase Considerations</a>
                                                <a class="dropdown-item" href="#">Development Process Integration</a>
                                                <a class="dropdown-item" href="#">Testing & Validation</a>
                                                <a class="dropdown-item" href="#">Documentation Templates</a>
                                                <a class="dropdown-item" href="#">Peer Review Process</a>
                                            </div>
                                            <div class="col-md-6">
                                                <h6>Deployment Playbooks</h6>
                                                <a class="dropdown-item" href="#">Pre-deployment Checklist</a>
                                                <a class="dropdown-item" href="#">Monitoring Framework</a>
                                                <a class="dropdown-item" href="#">Feedback Collection Systems</a>
                                                <a class="dropdown-item" href="#">Continuous Improvement</a>
                                                <a class="dropdown-item" href="#">Emergency Protocols</a>
                                            </div>
                                            <div class="col-md-6">
                                                <h6>Training Materials</h6>
                                                <a class="dropdown-item" href="#">Executive Briefings</a>
                                                <a class="dropdown-item" href="#">Developer Education</a>
                                                <a class="dropdown-item" href="#">Ethics Ambassador Training</a>
                                                <a class="dropdown-item" href="#">Scenario-Based Learning</a>
                                                <a class="dropdown-item" href="#">Certification Program</a>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <!-- Category 3 Dropdown -->
                                <li class="nav-item dropdown dropdown-large">
                                    <a class="nav-link dropdown-toggle" href="#" id="category3" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        Sector-Specific
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-large" aria-labelledby="category3">
                                        <div class="row dropdowns-menu-content">
                                            <div class="col-md-12">
                                                <h6>Healthcare</h6>
                                                <a class="dropdown-item" href="#">Patient Data Ethics</a>
                                                <a class="dropdown-item" href="#">Clinical Decision Support</a>
                                                <a class="dropdown-item" href="#">Research Applications</a>
                                                <a class="dropdown-item" href="#">Accessibility Considerations</a>
                                            </div>
                                            <div class="col-md-12">
                                                <h6>Finance</h6>
                                                <a class="dropdown-item" href="#">Algorithmic Trading Ethics</a>
                                                <a class="dropdown-item" href="#">Credit Scoring</a>
                                                <a class="dropdown-item" href="#">Fraud Detection</a>
                                                <a class="dropdown-item" href="#">Financial Inclusion</a>
                                            </div>
                                            <div class="col-md-12">
                                                <h6>Public Sector</h6>
                                                <a class="dropdown-item" href="#">Administrative AI</a>
                                                <a class="dropdown-item" href="#">Public Safety Applications</a>
                                                <a class="dropdown-item" href="#">Civic Engagement Tools</a>
                                                <a class="dropdown-item" href="#">Resource Allocation Systems</a>
                                            </div>
                                            <div class="col-md-12">
                                                <h6>Education</h6>
                                                <a class="dropdown-item" href="#">Student Privacy</a>
                                                <a class="dropdown-item" href="#">Educational Assessment</a>
                                                <a class="dropdown-item" href="#">Adaptive Learning Systems</a>
                                                <a class="dropdown-item" href="#">Classroom Applications</a>
                                            </div>
                                            <div class="col-md-12">
                                                <h6>Transportation</h6>
                                                <a class="dropdown-item" href="#">Autonomous Vehicles</a>
                                                <a class="dropdown-item" href="#">Public Transit Optimization</a>
                                                <a class="dropdown-item" href="#">Safety Systems</a>
                                                <a class="dropdown-item" href="#">Accessibility Planning</a>
                                            </div>
                                            <div class="col-md-12">
                                                <h6>Retail & Consumer</h6>
                                                <a class="dropdown-item" href="#">Recommendation Systems</a>
                                                <a class="dropdown-item" href="#">Customer Service AI</a>
                                                <a class="dropdown-item" href="#">Pricing Algorithms</a>
                                                <a class="dropdown-item" href="#">Consumer Privacy</a>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <!-- Category 4 Dropdown -->
                                <li class="nav-item dropdown dropdown-large">
                                    <a class="nav-link dropdown-toggle" href="#" id="category4" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        Research | Publications
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-large" aria-labelledby="category4">
                                        <div class="row dropdowns-menu-content">
                                            <div class="col-md-4">
                                                <h6>Academic Papers</h6>
                                                <a class="dropdown-item" href="#">Technical Reports</a>
                                                <a class="dropdown-item" href="#">Conference Proceedings</a>
                                                <a class="dropdown-item" href="#">Literature Reviews</a>
                                                <a class="dropdown-item" href="#">Case Studies</a>
                                            </div>
                                            <div class="col-md-4">
                                                <h6>Tools & Calculators</h6>
                                                <a class="dropdown-item" href="#">Ethical Risk Assessment</a>
                                                <a class="dropdown-item" href="#">Bias Detection Tools</a>
                                                <a class="dropdown-item" href="#">Privacy Impact Calculator</a>
                                                <a class="dropdown-item" href="#">Documentation Generator</a>
                                                <a class="dropdown-item" href="#">Compliance Tracker</a>
                                                <a class="dropdown-item" href="#">Model Comparison Tool</a>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <!-- Category 5 -->
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Human Autonomy</a>
                                </li>

                                <!-- Category 6 Dropdown -->
                                <li class="nav-item dropdown dropdown-large">
                                    <a class="nav-link dropdown-toggle" href="#" id="category6" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        Learning Center
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-large" aria-labelledby="category6">
                                        <div class="row dropdowns-menu-content">
                                            <div class="col-md-6">
                                                <h6>Courses</h6>
                                                <a class="dropdown-item" href="#">Introduction to AI Ethics</a>
                                                <a class="dropdown-item" href="#">Ethics for Technical Teams</a>
                                                <a class="dropdown-item" href="#">Executive Leadership Track</a>
                                                <a class="dropdown-item" href="#">Advanced Framework Implementation</a>
                                            </div>
                                            <div class="col-md-6">
                                                <h6>Certification Programs</h6>
                                                <a class="dropdown-item" href="#">Individual Certification</a>
                                                <a class="dropdown-item" href="#">Individual Certification</a>
                                                <a class="dropdown-item" href="#">Continuing Education</a>
                                                <a class="dropdown-item" href="#">Certificate Verification</a>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <!-- Category 7 Dropdown -->
                                <li class="nav-item dropdown dropdown-large">
                                    <a class="nav-link dropdown-toggle" href="#" id="category7" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        Community
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-large" aria-labelledby="category7">
                                        <div class="row dropdowns-menu-content">
                                            <div class="col-md-12">
                                                <h6>Forum</h6>
                                                <a class="dropdown-item" href="#">General Discussion</a>
                                                <a class="dropdown-item" href="#">Implementation Challenges</a>
                                                <a class="dropdown-item" href="#">Best Practices</a>
                                                <a class="dropdown-item" href="#">Technical Support</a>
                                            </div>
                                            <div class="col-md-12">
                                                <h6>Working Groups</h6>
                                                <a class="dropdown-item" href="#">Current Projects</a>
                                                <a class="dropdown-item" href="#">Join a Working Group</a>
                                                <a class="dropdown-item" href="#">Outputs & Deliverables</a>
                                                <a class="dropdown-item" href="#">Meeting Archives</a>
                                            </div>
                                            <div class="col-md-12">
                                                <h6>Events Calendar</h6>
                                                <a class="dropdown-item" href="#">Conferences</a>
                                                <a class="dropdown-item" href="#">Meetups</a>
                                                <a class="dropdown-item" href="#">Hackathons</a>
                                                <a class="dropdown-item" href="#">Policy Roundtables</a>
                                            </div>
                                            <div class="col-md-12">
                                                <h6>Practitioner Network</h6>
                                                <a class="dropdown-item" href="#">Directory</a>
                                                <a class="dropdown-item" href="#">Member Profiles</a>
                                                <a class="dropdown-item" href="#">Mentorship Program</a>
                                                <a class="dropdown-item" href="#">Success Stories</a>
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
                                Ethical Pillars
                            </button>
                        </h2>
                        <div id="collapse1" class="accordion-collapse collapse" aria-labelledby="heading1" data-bs-parent="#subNavAccordion">
                            <div class="accordion-body">
                                <h6>Fairness & Equity</h6>
                                <ul class="list-unstyled">
                                    <li><a href="#" class="text-decoration-none">Bias Mitigation</a></li>
                                    <li><a href="#" class="text-decoration-none">Inclusive Design</a></li>
                                    <li><a href="#" class="text-decoration-none">Accessibility Standards</a></li>
                                    <li><a href="#" class="text-decoration-none">Global Perspectives</a></li>
                                    <li><a href="#" class="text-decoration-none">Cultural Considerations</a></li>
                                </ul>
                                
                                <h6>Transparency</h6>
                                <ul class="list-unstyled">
                                    <li><a href="#" class="text-decoration-none">Explainable AI</a></li>
                                    <li><a href="#" class="text-decoration-none">Disclosure Practices</a></li>
                                    <li><a href="#" class="text-decoration-none">Algorithmic Transparency</a></li>
                                    <li><a href="#" class="text-decoration-none">Communication Guidelines</a></li>
                                    <li><a href="#" class="text-decoration-none">Documentation Standards</a></li>
                                </ul>
                                
                                <h6>Privacy & Data Governance</h6>
                                <ul class="list-unstyled">
                                    <li><a href="#" class="text-decoration-none">Data Collection Ethics</a></li>
                                    <li><a href="#" class="text-decoration-none">Consent Management</a></li>
                                    <li><a href="#" class="text-decoration-none">Data Minimization</a></li>
                                    <li><a href="#" class="text-decoration-none">Information Security</a></li>
                                    <li><a href="#" class="text-decoration-none">Data Rights</a></li>
                                    <li><a href="#" class="text-decoration-none">Anonymization Techniques</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Category 2 -->
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading2">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
                                Implementation
                            </button>
                        </h2>
                        <div id="collapse2" class="accordion-collapse collapse" aria-labelledby="heading2" data-bs-parent="#subNavAccordion">
                            <div class="accordion-body">
                                <h6>Assessment Tools</h6>
                                <ul class="list-unstyled">
                                    <li><a href="#" class="text-decoration-none">Self-Assessment Questionnaire</a></li>
                                    <li><a href="#" class="text-decoration-none">Ethical Risk Calculator</a></li>
                                    <li><a href="#" class="text-decoration-none">Maturity Model Toolkit</a></li>
                                    <li><a href="#" class="text-decoration-none">Benchmarking Resources</a></li>
                                    <li><a href="#" class="text-decoration-none">Compliance Checklist</a></li>
                                </ul>
                                
                                <h6>Development Guidelines</h6>
                                <ul class="list-unstyled">
                                    <li><a href="#" class="text-decoration-none">Design Phase Considerations</a></li>
                                    <li><a href="#" class="text-decoration-none">Development Process Integration</a></li>
                                    <li><a href="#" class="text-decoration-none">Testing & Validation</a></li>
                                    <li><a href="#" class="text-decoration-none">Documentation Templates</a></li>
                                    <li><a href="#" class="text-decoration-none">Peer Review Process</a></li>
                                </ul>

                                <h6>Deployment Playbooks</h6>
                                <ul class="list-unstyled">
                                    <li><a href="#" class="text-decoration-none">Pre-deployment Checklist</a></li>
                                    <li><a href="#" class="text-decoration-none">Monitoring Framework</a></li>
                                    <li><a href="#" class="text-decoration-none">Feedback Collection Systems</a></li>
                                    <li><a href="#" class="text-decoration-none">Continuous Improvement</a></li>
                                    <li><a href="#" class="text-decoration-none">Emergency Protocols</a></li>
                                </ul>

                                <h6>Training Materials</h6>
                                <ul class="list-unstyled">
                                    <li><a href="#" class="text-decoration-none">Executive Briefings</a></li>
                                    <li><a href="#" class="text-decoration-none">Developer Education</a></li>
                                    <li><a href="#" class="text-decoration-none">Ethics Ambassador Training</a></li>
                                    <li><a href="#" class="text-decoration-none">Scenario-Based Learning</a></li>
                                    <li><a href="#" class="text-decoration-none">Certification Program</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Category 3 -->
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading3">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
                                Sector-Specific
                            </button>
                        </h2>
                        <div id="collapse3" class="accordion-collapse collapse" aria-labelledby="heading3" data-bs-parent="#subNavAccordion">
                            <div class="accordion-body">
                                <h6>Healthcare</h6>
                                <ul class="list-unstyled">
                                    <li><a href="#" class="text-decoration-none">Patient Data Ethics</a></li>
                                    <li><a href="#" class="text-decoration-none">Clinical Decision Support</a></li>
                                    <li><a href="#" class="text-decoration-none">Research Applications</a></li>
                                    <li><a href="#" class="text-decoration-none">Accessibility Considerations</a></li>
                                </ul>

                                <h6>Finance</h6>
                                <ul class="list-unstyled">
                                    <li><a href="#" class="text-decoration-none">Algorithmic Trading Ethics</a></li>
                                    <li><a href="#" class="text-decoration-none">Credit Scoring</a></li>
                                    <li><a href="#" class="text-decoration-none">Fraud Detection</a></li>
                                    <li><a href="#" class="text-decoration-none">Financial Inclusion</a></li>
                                </ul>

                                <h6>Public Sector</h6>
                                <ul class="list-unstyled">
                                    <li><a href="#" class="text-decoration-none">Administrative AI</a></li>
                                    <li><a href="#" class="text-decoration-none">Public Safety Applications</a></li>
                                    <li><a href="#" class="text-decoration-none">Civic Engagement Tools</a></li>
                                    <li><a href="#" class="text-decoration-none">>Resource Allocation Systems</a></li>
                                </ul>

                                <h6>Education</h6>
                                <ul class="list-unstyled">
                                    <li><a href="#" class="text-decoration-none">Student Privacy</a></li>
                                    <li><a href="#" class="text-decoration-none">Educational Assessment</a></li>
                                    <li><a href="#" class="text-decoration-none">Research Applications</a></li>
                                    <li><a href="#" class="text-decoration-none">Classroom Applications</a></li>
                                </ul>

                                <h6>Transportation</h6>
                                <ul class="list-unstyled">
                                    <li><a href="#" class="text-decoration-none">Autonomous Vehicles</a></li>
                                    <li><a href="#" class="text-decoration-none">Public Transit Optimization</a></li>
                                    <li><a href="#" class="text-decoration-none">Safety Systems</a></li>
                                    <li><a href="#" class="text-decoration-none">Accessibility Planning</a></li>
                                </ul>

                                <h6>Retail & Consumer</h6>
                                <ul class="list-unstyled">
                                    <li><a href="#" class="text-decoration-none">Recommendation Systems</a></li>
                                    <li><a href="#" class="text-decoration-none">Customer Service AI</a></li>
                                    <li><a href="#" class="text-decoration-none">Pricing Algorithms</a></li>
                                    <li><a href="#" class="text-decoration-none">Consumer Privacy</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Category 4 -->
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading4">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
                                Research | Publications
                            </button>
                        </h2>
                        <div id="collapse4" class="accordion-collapse collapse" aria-labelledby="heading4" data-bs-parent="#subNavAccordion">
                            <div class="accordion-body">
                                <h6>Academic Papers</h6>
                                <ul class="list-unstyled">
                                    <li><a href="#" class="text-decoration-none">Technical Reports</a></li>
                                    <li><a href="#" class="text-decoration-none">Conference Proceedings</a></li>
                                    <li><a href="#" class="text-decoration-none">Literature Reviews</a></li>
                                    <li><a href="#" class="text-decoration-none">Case Studies</a></li>
                                </ul>
                                
                                <h6>Tools & Calculators</h6>
                                <ul class="list-unstyled">
                                    <li><a href="#" class="text-decoration-none">Ethical Risk Assessment</a></li>
                                    <li><a href="#" class="text-decoration-none">Bias Detection Tools</a></li>
                                    <li><a href="#" class="text-decoration-none">Privacy Impact Calculator</a></li>
                                    <li><a href="#" class="text-decoration-none">Documentation Generator</a></li>
                                    <li><a href="#" class="text-decoration-none">Compliance Tracker</a></li>
                                    <li><a href="#" class="text-decoration-none">Model Comparison Tool</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Category 5 -->
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading5">
                            <button class="accordion-button collapsed" type="button">
                                <a href="#" class="text-decoration-none text-dark w-100">Human Autonomy</a>
                            </button>
                        </h2>
                    </div>
                    
                    <!-- Category 6 -->
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading6">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse6" aria-expanded="false" aria-controls="collapse6">
                                Learning Center
                            </button>
                        </h2>
                        <div id="collapse6" class="accordion-collapse collapse" aria-labelledby="heading6" data-bs-parent="#subNavAccordion">
                            <div class="accordion-body">
                                <h6>Courses</h6>
                                <ul class="list-unstyled">
                                    <li><a href="#" class="text-decoration-none">Introduction to AI Ethics</a></li>
                                    <li><a href="#" class="text-decoration-none">Ethics for Technical Teams</a></li>
                                    <li><a href="#" class="text-decoration-none">Executive Leadership Track</a></li>
                                    <li><a href="#" class="text-decoration-none">Advanced Framework Implementation</a></li>
                                </ul>
                                
                                <h6>Certification Programs</h6>
                                <ul class="list-unstyled">
                                    <li><a href="#" class="text-decoration-none">Individual Certification</a></li>
                                    <li><a href="#" class="text-decoration-none">Individual Certification</a></li>
                                    <li><a href="#" class="text-decoration-none">Continuing Education</a></li>
                                    <li><a href="#" class="text-decoration-none">Certificate Verification</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Category 7 -->
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading7">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse7" aria-expanded="false" aria-controls="collapse7">
                                Community
                            </button>
                        </h2>
                        <div id="collapse7" class="accordion-collapse collapse" aria-labelledby="heading7" data-bs-parent="#subNavAccordion">
                            <div class="accordion-body">
                                <h6>Forum</h6>
                                <ul class="list-unstyled">
                                    <li><a href="#" class="text-decoration-none">General Discussion</a></li>
                                    <li><a href="#" class="text-decoration-none">Implementation Challenges</a></li>
                                    <li><a href="#" class="text-decoration-none">Best Practices</a></li>
                                    <li><a href="#" class="text-decoration-none">Technical Support</a></li>
                                </ul>

                                <h6>Working Groups</h6>
                                <ul class="list-unstyled">
                                    <li><a href="#" class="text-decoration-none">Current Projects</a></li>
                                    <li><a href="#" class="text-decoration-none">Join a Working Group</a></li>
                                    <li><a href="#" class="text-decoration-none">Outputs & Deliverables</a></li>
                                    <li><a href="#" class="text-decoration-none">Meeting Archives</a></li>
                                </ul>

                                <h6>Events Calendar</h6>
                                <ul class="list-unstyled">
                                    <li><a href="#" class="text-decoration-none">Conferences</a></li>
                                    <li><a href="#" class="text-decoration-none">Meetups</a></li>
                                    <li><a href="#" class="text-decoration-none">Hackathons</a></li>
                                    <li><a href="#" class="text-decoration-none">Policy Roundtables</a></li>
                                </ul>

                                <h6>Practitioner Network</h6>
                                <ul class="list-unstyled">
                                    <li><a href="#" class="text-decoration-none">Directory</a></li>
                                    <li><a href="#" class="text-decoration-none">Member Profiles</a></li>
                                    <li><a href="#" class="text-decoration-none">Mentorship Program</a></li>
                                    <li><a href="#" class="text-decoration-none">Success Stories</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Mobile Top Navigation Menu (slides from right) -->
            <div class="top-mobile-menu" id="mobileTopNav">
                <div class="mobile-menu-links mb-4">
                    {{-- <a href="{{ route('#') }}" class="nav-link d-block py-2">TSUAD LLC</a> --}}
                    <a href="{{ route('who-we-are') }}" class="nav-link d-block py-2">WHO WE ARE</a>
                    <a href="{{ route('companies') }}" class="nav-link d-block py-2">COMPANIES</a>
                    <a href="{{ route('contact-us') }}" class="nav-link d-block py-2">CONTACT</a>
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
                        <a href="{{ route('login') }}" class="btn btn-outline-primary">Login</a>
                        <a href="{{ route('register') }}" class="btn btn-primary">Register</a>
                    </div>
                </div>
            </div>

        </header>