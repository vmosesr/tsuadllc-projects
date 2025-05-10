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
                    <a href="#" class="nav-link d-block py-2">TSUAD LLC</a>
                    <a href="#" class="nav-link d-block py-2">WHO WE ARE</a>
                    <a href="#" class="nav-link d-block py-2">COMPANIES</a>
                    <a href="#" class="nav-link d-block py-2">CONTACT</a>
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
                    <svg viewBox="0 7 200 300" xmlns="http://www.w3.org/2000/svg">
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
                            <div class="row p-4">
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
                            <div class="row p-4">
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
                            <div class="row p-4">
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


            <section class="ai-actions">

                <h2 class="section-title">TSUAD AI in action</h2>
    
                <div class="cards-container">
                    <!-- Card 1 -->
                    <div class="card">
                        <img src="{{ asset('assets/images/lorenzo-herrera-p0j-mE6mGo4-unsplash.jpg') }}" alt="Norway forests" class="card-image">
                        <img src="{{ asset('assets/images/lorenzo-herrera-p0j-mE6mGo4-unsplash.jpg') }}" alt="NIBIO logo" class="card-logo">
                        <div class="card-content">
                            <h3 class="card-title">Saving Norway's forests</h3>
                            <p class="card-description">Using AI and machine learning to monitor and protect Norway's forest ecosystems through advanced data analysis.</p>
                            <a href="#" class="card-link">Learn more →</a>
                        </div>
                    </div>
                    
                    <!-- Card 2 -->
                    <div class="card">
                        <img src="{{ asset('assets/images/nathan-dumlao-lvWw_G8tKsk-unsplash.jpg') }}" alt="Video streaming technology" class="card-image">
                        <img src="{{ asset('assets/images/nathan-dumlao-lvWw_G8tKsk-unsplash.jpg') }}" alt="iSIZE logo" class="card-logo">
                        <div class="card-content">
                            <h3 class="card-title">Improve video streaming</h3>
                            <p class="card-description">Enhancing video streaming quality while reducing bandwidth through AI-powered content optimization.</p>
                            <a href="#" class="card-link">Learn more →</a>
                        </div>
                    </div>
                    
                    <!-- Card 3 -->
                    <div class="card">
                        <img src="{{ asset('assets/images/thisisengineering-sbVu5zitZt0-unsplash.jpg') }}" alt="Customer service technology" class="card-image">
                        <img src="{{ asset('assets/images/thisisengineering-sbVu5zitZt0-unsplash.jpg') }}" alt="Brain4Data logo" class="card-logo">
                        <div class="card-content">
                            <h3 class="card-title">Boost customer service</h3>
                            <p class="card-description">Leveraging AI to transform customer interactions and create personalized service experiences.</p>
                            <a href="#" class="card-link">Learn more →</a>
                        </div>
                    </div>
                    
                    <!-- Card 4 -->
                    <div class="card">
                        <img src="{{ asset('assets/images/fabio-oyXis2kALVg-unsplash.jpg') }}" alt="Laboratory research" class="card-image">
                        <img src="{{ asset('assets/images/fabio-oyXis2kALVg-unsplash.jpg') }}" alt="biofy logo" class="card-logo">
                        <div class="card-content">
                            <h3 class="card-title">Combat antibiotic resistance</h3>
                            <p class="card-description">Using AI models to accelerate research and develop solutions to fight antibiotic-resistant bacteria.</p>
                            <a href="#" class="card-link">Learn more →</a>
                        </div>
                    </div>
                </div>

            </section>

            <section class="get-started">

                <div class="">

                    <div class="get-started-section">
                        <h1 class="mb-4 fw-bold animate__animated animate__fadeIn">Get started with DataSmart AI</h1>
                        
                        <!-- Navigation Pills -->
                        <ul class="nav nav-pills mb-4 animate__animated animate__fadeIn animate__delay-1s">
                            <li class="nav-item">
                                <a class="nav-link active" href="#">Free AI trial</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">AI hands-on lab</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">AI solutions hub</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Contact sales</a>
                            </li>
                        </ul>
                        
                        <div class="section-divider animate__animated animate__fadeIn animate__delay-1s"></div>
                        
                        <div class="row mt-4">
                            <!-- Left Column -->
                            <div class="col-lg-6 animate__animated animate__fadeInLeft animate__delay-2s">
                                <h2>Try DataSmart AI and get a 30-day trial</h2>
                                
                                <p class="mt-4">DataSmart offers a free pricing tier for most AI services as well as a free trial account with $250 in credits to try additional cloud services. Get the details and sign up for your free account.</p>
                                
                                <button class="btn btn-primary action-btn mt-3 animate__animated animate__pulse animate__delay-5s animate__repeat-2">Try DataSmart AI for free</button>
                            </div>
                            
                            <!-- Right Column -->
                            <div class="col-lg-6 mt-4 mt-lg-0">
                                <h3 class="mb-3 animate__animated animate__fadeInRight animate__delay-2s">Which DataSmart AI and ML services offer a free pricing tier?</h3>
                                
                                <!-- Service 1 -->
                                <div class="bullet-point service-detail animate__animated animate__fadeInUp delay-1">
                                    <div class="bullet-icon bg-danger"></div>
                                    <div class="bullet-text">DS Speech</div>
                                </div>
                                
                                <!-- Service 2 -->
                                <div class="bullet-point service-detail animate__animated animate__fadeInUp delay-2">
                                    <div class="bullet-icon bg-primary"></div>
                                    <div class="bullet-text">DS Language</div>
                                </div>
                                
                                <!-- Service 3 -->
                                <div class="bullet-point service-detail animate__animated animate__fadeInUp delay-3">
                                    <div class="bullet-icon bg-success"></div>
                                    <div class="bullet-text">DS Vision</div>
                                </div>
                                
                                <!-- Service 4 -->
                                <div class="bullet-point service-detail animate__animated animate__fadeInUp delay-4">
                                    <div class="bullet-icon bg-warning"></div>
                                    <div class="bullet-text">DS Document Understanding</div>
                                </div>
                                
                                <!-- Service 5 -->
                                <div class="bullet-point service-detail animate__animated animate__fadeInUp delay-5">
                                    <div class="bullet-icon bg-info"></div>
                                    <div class="bullet-text fw-bold">Machine Learning in DataSmart Database</div>
                                </div>
                                
                                <!-- Service 6 -->
                                <div class="bullet-point service-detail animate__animated animate__fadeInUp delay-5">
                                    <div class="bullet-icon bg-secondary"></div>
                                    <div class="bullet-text">DS Data Labeling</div>
                                </div>
                                
                                <p class="mt-4 service-detail animate__animated animate__fadeInUp delay-5">
                                    You also only have to pay compute and storage charges for DS Data Science.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

            </section>


            <!-- Footer -->
            <footer class="footer">
                <div class="container">
                    <div class="row">
                        <!-- Resources section -->
                        <div class="col-md footer-col">
                            <h5 class="footer-title">Resources for</h5>
                            <ul class="footer-links">
                                <li><a href="#">Careers</a></li>
                                <li><a href="#">Developers</a></li>
                                <li><a href="#">Investors</a></li>
                                <li><a href="#">Partners</a></li>
                                <li><a href="#">Startups</a></li>
                                <li><a href="#">Students and Educators</a></li>
                            </ul>
                        </div>

                        <!-- Why Oracle section -->
                        <div class="col-md footer-col">
                            <h5 class="footer-title">Why Oracle</h5>
                            <ul class="footer-links">
                                <li><a href="#">Analyst Reports</a></li>
                                <li><a href="#">Cloud Economics</a></li>
                                <li><a href="#">with Microsoft Azure</a></li>
                                <li><a href="#">vs. AWS</a></li>
                                <li><a href="#">vs. Google Cloud</a></li>
                                <li><a href="#">vs. MongoDB</a></li>
                            </ul>
                        </div>

                        <!-- Learn section -->
                        <div class="col-md footer-col">
                            <h5 class="footer-title">Learn</h5>
                            <ul class="footer-links">
                                <li><a href="#">What is AI?</a></li>
                                <li><a href="#">What is Cloud Computing?</a></li>
                                <li><a href="#">What is Cloud Storage?</a></li>
                                <li><a href="#">What is HPC?</a></li>
                                <li><a href="#">What is IaaS?</a></li>
                                <li><a href="#">What is PaaS?</a></li>
                            </ul>
                        </div>

                        <!-- What's new section -->
                        <div class="col-md footer-col">
                            <h5 class="footer-title">What's new</h5>
                            <ul class="footer-links">
                                <li><a href="#">Oracle Supports Ukraine</a></li>
                                <li><a href="#">Oracle Cloud Free Tier</a></li>
                                <li><a href="#">Cloud Architecture Center</a></li>
                                <li><a href="#">Cloud Lift</a></li>
                                <li><a href="#">Oracle Support Rewards</a></li>
                                <li><a href="#">Oracle Red Bull Racing</a></li>
                            </ul>
                        </div>

                        <!-- Contact us section -->
                        <div class="col-md footer-col">
                            <h5 class="footer-title">Contact us</h5>
                            <ul class="footer-links">
                                <li><a href="#">US Sales: +1.800.633.0738</a></li>
                                <li><a href="#">How can we help?</a></li>
                                <li><a href="#">Subscribe to emails</a></li>
                                <li><a href="#">Events</a></li>
                                <li><a href="#">News</a></li>
                                <li><a href="#">OCI Blog</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Bottom footer -->
                <div class="bottom-footer mt-4">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-md-6">
                                <span>© 2025 Company Name</span>
                                <span class="mx-2">|</span>
                                <a href="#" class="text-white">Privacy</a>
                                <span class="mx-2">|</span>
                                <a href="#" class="text-white">Do Not Sell My Info</a>
                                <span class="mx-2">|</span>
                                <a href="#" class="text-white">Cookie Preferences</a>
                                <span class="mx-2">|</span>
                                <a href="#" class="text-white">Ad Choices</a>
                                <span class="mx-2">|</span>
                                <a href="#" class="text-white">Careers</a>
                            </div>
                            <div class="col-md-6 text-md-end mt-3 mt-md-0">
                                <div class="social-icons">
                                    <a href="#"><i class="bi bi-facebook"></i></a>
                                    <a href="#"><i class="bi bi-twitter-x"></i></a>
                                    <a href="#"><i class="bi bi-linkedin"></i></a>
                                    <a href="#"><i class="bi bi-youtube"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>


        </main>



        <!-- Bootstrap JS & Popper.js -->
        <script src="{{ asset('assets/js/script.js') }}"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>

    </body>

</html>
