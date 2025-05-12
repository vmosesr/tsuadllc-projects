@include ('tsuadllc.pages.includes.header-navigation')


    <main class="">

        <div class="join-initiative svg-bg"></div>

        <div class="join-initiative container py-5">
            <div class="join-initiative form-section mx-auto" style="max-width: 800px;">
                <h2 class="text-center mb-4">Join Our Responsible AI Initiative</h2>
                <form id="joinForm">
                
                <!-- Step 1: Personal Information -->
                <div class="join-initiative step active" id="step1">
                    <div class="mb-3">
                    <label for="fullName" class="form-label">Full Name</label>
                    <input type="text" class="form-control" id="fullName" required>
                    </div>
                    <div class="mb-3">
                    <label for="email" class="form-label">Email Address</label>
                    <input type="email" class="form-control" id="email" required>
                    </div>
                    <div class="mb-3">
                    <label for="country" class="form-label">Country</label>
                    <input type="text" class="form-control" id="country" required>
                    </div>
                </div>

                <!-- Step 2: Interest Area -->
                <div class="join-initiative step" id="step2">
                    <div class="mb-3">
                    <label for="interest" class="form-label">Area of Interest</label>
                    <select class="join-initiative form-select" id="interest" required>
                        <option selected disabled>Choose...</option>
                        <option>Ethical AI Design</option>
                        <option>Transparency & Explainability</option>
                        <option>Privacy and Data Protection</option>
                        <option>Bias Mitigation</option>
                        <option>AI Policy and Legal</option>
                        <option>Human-Centered AI</option>
                    </select>
                    </div>
                    <div class="mb-3">
                    <label class="join-initiative join-initiative form-label">Are you joining as an individual or organization?</label>
                    <div>
                        <input class="join-initiative form-check-input me-2" type="radio" name="type" id="individual" value="Individual" checked>
                        <label class="join-initiative form-check-label me-3" for="individual">Individual</label>
                        <input class="join-initiative form-check-input me-2" type="radio" name="type" id="organization" value="Organization">
                        <label class="join-initiative form-check-label" for="organization">Organization</label>
                    </div>
                    </div>
                </div>

                <!-- Step 3: Company / Project Info -->
                <div class="join-initiative step" id="step3">
                    <div id="orgFields" style="display:none;">
                    <div class="mb-3">
                        <label for="company" class="form-label">Company / Organization Name</label>
                        <input type="text" class="form-control" id="company">
                    </div>
                    <div class="mb-3">
                        <label for="position" class="form-label">Your Role</label>
                        <input type="text" class="form-control" id="position">
                    </div>
                    </div>
                    <div id="individualFields">
                    <div class="mb-3">
                        <label for="project" class="form-label">Project Description</label>
                        <textarea class="join-initiative form-control" id="project" rows="4" placeholder="Describe your idea or initiative that promotes responsible AI..."></textarea>
                    </div>
                    </div>
                </div>

                <!-- Step 4: Confirmation -->
                <div class="join-initiative step" id="step4">
                    <div class="text-center">
                    <i class="fas fa-thumbs-up fa-3x text-success mb-3"></i>
                    <h4>You're almost there!</h4>
                    <p>Click Submit to complete your registration and join the global effort toward ethical and responsible AI innovation.</p>
                    </div>
                </div>

                <!-- Navigation -->
                <div class="join-initiative step-nav d-flex justify-content-between mt-4">
                    <button type="button" class="join-initiative btn btn-secondary" id="prevBtn" onclick="nextPrev(-1)">Back</button>
                    <button type="button" class="join-initiative btn btn-primary" id="nextBtn" onclick="nextPrev(1)">Next</button>
                </div>

                </form>
            </div>
            </div>

    </main>


@include ('tsuadllc.pages.includes.footer')