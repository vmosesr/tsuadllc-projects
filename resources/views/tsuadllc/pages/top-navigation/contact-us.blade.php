@include ('tsuadllc.pages.includes.header-navigation')

    <main class="">

        <!-- Contact Section -->
        <section class="py-5" style="background: linear-gradient(135deg, rgba(255, 170, 90, 0.15) 0%, rgba(255, 255, 255, 1) 100%);">
            <div class="container py-4">
                <div class="row align-items-center">
                    <div class="col-lg-6 mb-5 mb-lg-0" data-aos="fade-right">
                        <h6 class="text-primary-custom fw-bold mb-2">GET IN TOUCH</h6>
                        <h2 class="display-5 fw-bold mb-4">Join Our Initiative</h2>
                        <p class="lead mb-4">Interested in contributing to our work or implementing our framework? We'd love to hear from you.</p>
                        
                        <div class="contact-info-item">
                            <i class="fas fa-envelope"></i>
                            <div>
                                <h5 class="mb-1">Email Us</h5>
                                <p class="mb-0">contact@aiethicsframework.org</p>
                            </div>
                        </div>
                        
                        <div class="contact-info-item">
                            <i class="fas fa-phone-alt"></i>
                            <div>
                                <h5 class="mb-1">Call Us</h5>
                                <p class="mb-0">+1 (555) 123-4567</p>
                            </div>
                        </div>
                        
                        <div class="contact-info-item">
                            <i class="fas fa-map-marker-alt"></i>
                            <div>
                                <h5 class="mb-1">Visit Us</h5>
                                <p class="mb-0">1234 Innovation Drive, Tech Park<br>Cambridge, MA 02139</p>
                            </div>
                        </div>
                        
                        <div class="mt-4">
                            <a href="#" class="me-3 text-dark fs-5"><i class="fab fa-twitter"></i></a>
                            <a href="#" class="me-3 text-dark fs-5"><i class="fab fa-linkedin-in"></i></a>
                            <a href="#" class="me-3 text-dark fs-5"><i class="fab fa-github"></i></a>
                            <a href="#" class="me-3 text-dark fs-5"><i class="fab fa-youtube"></i></a>
                        </div>
                    </div>
                    
                    <div class="col-lg-6" data-aos="fade-left">
                        <div class="bg-white p-4 rounded-3 shadow">
                            <form>
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <label for="name" class="form-label">Full Name</label>
                                        <input type="text" class="form-control" id="name" placeholder="Your name">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="email" class="form-label">Email Address</label>
                                        <input type="email" class="form-control" id="email" placeholder="Your email">
                                    </div>
                                    <div class="col-12">
                                        <label for="organization" class="form-label">Organization</label>
                                        <input type="text" class="form-control" id="organization" placeholder="Your organization">
                                    </div>
                                    <div class="col-12">
                                        <label for="interest" class="form-label">Area of Interest</label>
                                        <select class="form-select" id="interest">
                                            <option selected disabled>Choose an option</option>
                                            <option>Implementing the Framework</option>
                                            <option>Research Collaboration</option>
                                            <option>Training and Capacity Building</option>
                                            <option>Funding Opportunities</option>
                                            <option>Other</option>
                                        </select>
                                    </div>
                                    <div class="col-12">
                                        <label for="message" class="form-label">Message</label>
                                        <textarea class="form-control" id="message" rows="4" placeholder="Tell us more about your interest"></textarea>
                                    </div>
                                    <div class="col-12">
                                        <button type="submit" class="btn btn-lg bg-primary-custom text-white w-100">Send Message</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- Call to Action -->
        <section class="py-5 bg-dark-custom text-white text-center">
            <div class="container py-4">
                <div class="row justify-content-center">
                    <div class="col-lg-8" data-aos="fade-up">
                        <h2 class="display-5 fw-bold mb-4">Ready to Make AI More Ethical?</h2>
                        <p class="lead mb-4">Join our growing community of organizations committed to responsible AI innovation.</p>
                        <div class="d-flex flex-wrap justify-content-center">
                            <button class="btn btn-lg px-4 py-3 me-3 mb-3 bg-primary-custom text-white">Download Framework</button>
                            <button class="btn btn-lg px-4 py-3 mb-3 btn-outline-light">Schedule a Consultation</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
    </main>
    
@include ('tsuadllc.pages.includes.footer')