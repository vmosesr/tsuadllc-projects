@include ('tsuadllc.pages.includes.header-navigation')


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

        </main>

@include ('tsuadllc.pages.includes.footer')